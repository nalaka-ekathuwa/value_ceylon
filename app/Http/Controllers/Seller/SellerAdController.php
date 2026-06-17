<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\AdPayment;
use App\Models\AdSlotPricing;
use App\Models\Category;
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
        $categories = Category::where('parent_id', 0)->orderBy('name')->get();

        return view('seller.ads.create', compact('pricings', 'placements', 'products', 'categories'));
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
            'category_id' => 'required_if:placement,category|nullable|integer|exists:categories,id',
            'subcategory_id' => 'nullable|integer|exists:categories,id',
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
            $request->end_date,
            null,
            $request->category_id ?: null,
            $request->subcategory_id ?: null
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
            'category_id'   => $request->placement === 'category' ? $request->category_id : null,
            'subcategory_id'=> $request->placement === 'category' ? $request->subcategory_id : null,
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
            'payment_method' => 'required|string|in:bank_transfer,card',
            'payment_slip'   => 'required_if:payment_method,bank_transfer|nullable|string',
        ]);

        if ($request->payment_method === 'card') {
            $order_id = 'AD-' . $ad->id . '-' . rand(100000, 999999);
            $user = Auth::user();
            $first_name = $user->name;
            $last_name = '';
            $phone = $user->phone ?: '123456789';
            $email = $user->email;
            $address = $user->address ?: 'Value Ceylon Seller';
            $city = $user->city ?: 'Colombo';
            $position_label = $ad->position_label;

            return \App\Utility\PayhereUtility::create_ads_form(
                $ad->id,
                $order_id,
                $ad->price,
                $first_name,
                $last_name,
                $phone,
                $email,
                $address,
                $city,
                $position_label
            );
        }

        // Create payment record for Bank Transfer
        $payment = AdPayment::updateOrCreate(
            ['ad_id' => $ad->id],
            [
                'amount'         => $ad->price,
                'payment_method' => 'bank_transfer',
                'transaction_id' => 'AD-' . $ad->id,
                'payment_slip'   => $request->payment_slip,
                'status'         => 'pending',
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
        $startDate = $request->start_date;
        $endDate   = $request->end_date;
        $categoryId = $request->category_id;
        $subcategoryId = $request->subcategory_id;

        $defaults = AdSlotPricing::positionsFor($placement);

        // Auto-seed database configurations if any defined position is missing
        foreach ($defaults as $position => $slots) {
            AdSlotPricing::firstOrCreate(
                ['placement' => $placement, 'position' => $position],
                [
                    'total_slots' => $slots,
                    'price_per_day' => 500.00 // Default fallback price of 500 LKR
                ]
            );
        }

        // Define the exact order requested
        $order = [
            'home' => [
                'premium_hero_slider',
                'mid_page_carousel',
                'sidebar_spotlight',
                'featured_ad_blocks',
                'bottom_showcase_slider',
            ],
            'category' => [
                'category_top',
                'category_sidebar',
            ],
        ];

        $pricings = AdSlotPricing::where('placement', $placement)->get();

        $pricings->each(function ($pricing) use ($startDate, $endDate, $categoryId, $subcategoryId) {
            $pricing->remaining_slots = $pricing->getRemainingSlotsCount(
                $startDate ?: null,
                $endDate ?: null,
                $categoryId ?: null,
                $subcategoryId ?: null
            );
        });

        if (isset($order[$placement])) {
            $pricings = $pricings->sortBy(function ($pricing) use ($order, $placement) {
                $pos = array_search($pricing->position, $order[$placement]);
                return $pos !== false ? $pos : 999;
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

    // ─────────────────────────────────────────────────────────
    //  AJAX: Get subcategories for a category
    // ─────────────────────────────────────────────────────────
    public function getSubcategories(Request $request)
    {
        $categoryId = $request->category_id;
        $subcategories = Category::where('parent_id', $categoryId)->get();

        $data = $subcategories->map(function ($sub) {
            return [
                'id' => $sub->id,
                'name' => $sub->getTranslation('name'),
            ];
        });

        return response()->json($data);
    }
}
