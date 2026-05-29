<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdPayment;
use App\Models\AdSlotPricing;
use App\Models\SellerAd;
use Illuminate\Http\Request;

class AdminAdController extends Controller
{
    // ─────────────────────────────────────────────────────────
    //  Slot Pricing Management
    // ─────────────────────────────────────────────────────────
    public function pricingIndex()
    {
        $placements = AdSlotPricing::placements();
        $pricings   = AdSlotPricing::orderBy('placement')->orderBy('position')->get();

        return view('backend.ads.pricing', compact('placements', 'pricings'));
    }

    public function pricingStore(Request $request)
    {
        $request->validate([
            'placement'    => 'required|in:home,category',
            'position'     => 'required|string',
            'total_slots'  => 'required|integer|min:1',
            'price_per_day'=> 'required|numeric|min:0',
        ]);

        AdSlotPricing::updateOrCreate(
            ['placement' => $request->placement, 'position' => $request->position],
            ['total_slots' => $request->total_slots, 'price_per_day' => $request->price_per_day]
        );

        flash(translate('Pricing updated.'))->success();
        return back();
    }

    public function pricingDestroy($id)
    {
        AdSlotPricing::findOrFail($id)->delete();
        flash(translate('Pricing entry deleted.'))->success();
        return back();
    }

    // ─────────────────────────────────────────────────────────
    //  All Ads
    // ─────────────────────────────────────────────────────────
    public function adsIndex(Request $request)
    {
        $query = SellerAd::with('seller', 'payment')->orderByDesc('created_at');

        if ($request->status) {
            $query->where('status', $request->status);
        }

        $ads = $query->paginate(20);

        return view('backend.ads.index', compact('ads'));
    }

    // ─────────────────────────────────────────────────────────
    //  Approve / Reject
    // ─────────────────────────────────────────────────────────
    public function approve($id)
    {
        $ad = SellerAd::findOrFail($id);

        if ($ad->status !== 'pending_payment') {
            flash(translate('Only pending ads can be approved.'))->warning();
            return back();
        }

        $ad->update(['status' => 'active']);

        flash(translate('Ad approved and activated.'))->success();
        return back();
    }

    public function reject(Request $request, $id)
    {
        $request->validate(['reason' => 'nullable|string|max:500']);

        $ad = SellerAd::findOrFail($id);
        $ad->update([
            'status'        => 'rejected',
            'reject_reason' => $request->reason,
        ]);

        flash(translate('Ad rejected.'))->success();
        return back();
    }

    // ─────────────────────────────────────────────────────────
    //  Revenue Summary
    // ─────────────────────────────────────────────────────────
    public function revenue()
    {
        $totalRevenue = AdPayment::where('status', 'paid')->sum('amount');
        $monthly      = AdPayment::where('status', 'paid')
            ->selectRaw("DATE_FORMAT(created_at, '%Y-%m') as month, SUM(amount) as total")
            ->groupBy('month')
            ->orderByDesc('month')
            ->limit(12)
            ->get();

        $adsByStatus = SellerAd::selectRaw('status, COUNT(*) as count')->groupBy('status')->pluck('count', 'status');

        return view('backend.ads.revenue', compact('totalRevenue', 'monthly', 'adsByStatus'));
    }
}
