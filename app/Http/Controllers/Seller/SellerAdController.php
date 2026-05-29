<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\AdPayment;
use App\Models\AdSlotPricing;
use App\Models\Product;
use App\Models\SellerAd;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerAdController extends Controller
{
    // ─────────────────────────────────────────────────────────
    //  LIST ADS
    // ─────────────────────────────────────────────────────────
    public function index(Request $request)
    {
        $ads = SellerAd::where('seller_id', Auth::id())
            ->orderByDesc('created_at')
            ->paginate(15);

        return view('seller.ads.index', compact('ads'));
    }

    // ─────────────────────────────────────────────────────────
    //  CREATE FORM
    // ─────────────────────────────────────────────────────────
    public function create()
    {
        $pricings   = AdSlotPricing::all()->keyBy(function ($p) {
            return $p->placement . '.' . $p->position;
        });
        $placements = AdSlotPricing::placements();
        $products   = Product::where('user_id', Auth::id())
            ->where('published', 1)
            ->orderBy('name')
            ->get(['id', 'name']);

        return view('seller.ads.create', compact('pricings', 'placements', 'products'));
    }

    // ─────────────────────────────────────────────────────────
    //  STORE
    // ─────────────────────────────────────────────────────────
    public function store(Request $request)
    {
        $request->validate([
            'placement'  => 'required|in:home,category',
            'position'   => 'required|string',
            'ad_type'    => 'required|in:static,gif',
            'media'      => 'required|string',
            'start_date' => 'required|date|after_or_equal:today',
            'end_date'   => 'required|date|after:start_date',
            'product_id' => 'nullable|integer',
        ]);

        // Get pricing
        $pricing = AdSlotPricing::where('placement', $request->placement)
            ->where('position', $request->position)
            ->firstOrFail();

        // Slot availability check
        $occupied = SellerAd::occupiedSlots(
            $request->placement,
            $request->position,
            $request->start_date,
            $request->end_date
        );

        if ($occupied >= $pricing->total_slots) {
            return back()->withErrors(['position' => 'No slots available for the selected dates.'])->withInput();
        }

        $start = Carbon::parse($request->start_date);
        $end   = Carbon::parse($request->end_date);
        $days  = $start->diffInDays($end) + 1;
        $price = $days * $pricing->price_per_day;

        $ad = SellerAd::create([
            'seller_id'     => Auth::id(),
            'placement'     => $request->placement,
            'position'      => $request->position,
            'ad_type'       => $request->ad_type,
            'media'         => $request->media,
            'product_id'    => $request->product_id ?: null,
            'start_date'    => $request->start_date,
            'end_date'      => $request->end_date,
            'duration_days' => $days,
            'price'         => $price,
            'status'        => 'draft',
        ]);

        flash(translate('Ad created successfully. Proceed to payment.'))->success();
        return redirect()->route('seller.ads.payment', $ad->id);
    }

    // ─────────────────────────────────────────────────────────
    //  PAYMENT PAGE
    // ─────────────────────────────────────────────────────────
    public function payment($id)
    {
        $ad = SellerAd::where('seller_id', Auth::id())->findOrFail($id);

        if (!in_array($ad->status, ['draft', 'pending_payment'])) {
            flash(translate('This ad is not awaiting payment.'))->warning();
            return redirect()->route('seller.ads.index');
        }

        return view('seller.ads.payment', compact('ad'));
    }

    // ─────────────────────────────────────────────────────────
    //  PROCESS PAYMENT (Simulated / Manual)
    // ─────────────────────────────────────────────────────────
    public function processPayment(Request $request, $id)
    {
        $ad = SellerAd::where('seller_id', Auth::id())->findOrFail($id);

        $request->validate([
            'payment_method' => 'required|string',
        ]);

        // Create payment record
        $payment = AdPayment::updateOrCreate(
            ['ad_id' => $ad->id],
            [
                'amount'         => $ad->price,
                'payment_method' => $request->payment_method,
                'transaction_id' => 'TXN-' . strtoupper(uniqid()),
                'status'         => 'paid',
            ]
        );

        // Move ad to pending_payment (admin must approve)
        $ad->update(['status' => 'pending_payment']);

        flash(translate('Payment recorded. Your ad is under review.'))->success();
        return redirect()->route('seller.ads.index');
    }

    // ─────────────────────────────────────────────────────────
    //  SHOW SINGLE AD
    // ─────────────────────────────────────────────────────────
    public function show($id)
    {
        $ad = SellerAd::where('seller_id', Auth::id())->with('payment', 'product')->findOrFail($id);
        return view('seller.ads.show', compact('ad'));
    }

    // ─────────────────────────────────────────────────────────
    //  DELETE
    // ─────────────────────────────────────────────────────────
    public function destroy($id)
    {
        $ad = SellerAd::where('seller_id', Auth::id())->findOrFail($id);

        if (in_array($ad->status, ['active'])) {
            flash(translate('Active ads cannot be deleted.'))->error();
            return back();
        }

        $ad->payment()->delete();
        $ad->delete();

        flash(translate('Ad deleted successfully.'))->success();
        return redirect()->route('seller.ads.index');
    }

    // ─────────────────────────────────────────────────────────
    //  AJAX: Get positions for a placement
    // ─────────────────────────────────────────────────────────
    public function getPositions(Request $request)
    {
        $placement = $request->placement;
        $pricings  = AdSlotPricing::where('placement', $placement)->get();

        if ($pricings->isEmpty()) {
            // Return defaults from model if no DB entries yet
            $defaults = AdSlotPricing::positionsFor($placement);
            $pricings = collect($defaults)->map(function ($slots, $position) use ($placement) {
                return (object)[
                    'placement'     => $placement,
                    'position'      => $position,
                    'total_slots'   => $slots,
                    'price_per_day' => 0,
                    'label'         => ucwords(str_replace('_', ' ', $position)),
                ];
            })->values();
        }

        return response()->json($pricings);
    }

    // ─────────────────────────────────────────────────────────
    //  AJAX: Calculate price
    // ─────────────────────────────────────────────────────────
    public function calculatePrice(Request $request)
    {
        $pricing = AdSlotPricing::where('placement', $request->placement)
            ->where('position', $request->position)
            ->first();

        if (!$pricing) {
            return response()->json(['price' => 0, 'days' => 0, 'per_day' => 0]);
        }

        $start = Carbon::parse($request->start_date);
        $end   = Carbon::parse($request->end_date);
        $days  = $start->diffInDays($end) + 1;
        $price = $days * $pricing->price_per_day;

        return response()->json([
            'per_day' => $pricing->price_per_day,
            'days'    => $days,
            'price'   => $price,
        ]);
    }

    // ─────────────────────────────────────────────────────────
    //  Payment History
    // ─────────────────────────────────────────────────────────
    public function paymentHistory()
    {
        $payments = AdPayment::whereHas('ad', function ($q) {
            $q->where('seller_id', Auth::id());
        })->with('ad')->orderByDesc('created_at')->paginate(15);

        return view('seller.ads.payment_history', compact('payments'));
    }
}
