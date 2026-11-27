<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdPayment;
use App\Models\AdSlotPricing;
use App\Models\Category;
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

        // Auto-seed database configurations if any defined position is missing
        foreach ($placements as $placement) {
            $defaults = AdSlotPricing::positionsFor($placement);
            foreach ($defaults as $position => $slots) {
                AdSlotPricing::firstOrCreate(
                    ['placement' => $placement, 'position' => $position],
                    [
                        'total_slots' => $slots,
                        'price_per_day' => 500.00
                    ]
                );
            }
        }

        $pricings = AdSlotPricing::orderBy('placement')->orderBy('position')->get();

        $categoryTopPricing = AdSlotPricing::where('placement', 'category')->where('position', 'category_top')->first();
        $categorySidebarPricing = AdSlotPricing::where('placement', 'category')->where('position', 'category_sidebar')->first();

        return view('backend.ads.pricing', compact(
            'placements',
            'pricings',
            'categoryTopPricing',
            'categorySidebarPricing'
        ));
    }

    public function categoryAvailability()
    {
        $categoryTopPricing = AdSlotPricing::where('placement', 'category')->where('position', 'category_top')->first();
        $categorySidebarPricing = AdSlotPricing::where('placement', 'category')->where('position', 'category_sidebar')->first();

        // Paginated Parent Categories listing (30 items per page)
        $parentCategories = Category::where('parent_id', 0)->orderBy('name')->paginate(30);

        return view('backend.ads.category_availability', compact(
            'parentCategories',
            'categoryTopPricing',
            'categorySidebarPricing'
        ));
    }

    public function subcategoryAvailability()
    {
        $categoryTopPricing = AdSlotPricing::where('placement', 'category')->where('position', 'category_top')->first();
        $categorySidebarPricing = AdSlotPricing::where('placement', 'category')->where('position', 'category_sidebar')->first();

        // Paginated Subcategories listing (30 items per page)
        $subCategories = Category::where('parent_id', '!=', 0)->orderBy('name')->paginate(30);

        return view('backend.ads.subcategory_availability', compact(
            'subCategories',
            'categoryTopPricing',
            'categorySidebarPricing'
        ));
    }

    public function pricingStore(Request $request)
    {
        $request->validate([
            'placement' => 'required|in:home,category',
            'position' => 'required|string',
            'total_slots' => 'required|integer|min:1',
            'price_per_day' => 'required|numeric|min:0',
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

    public function updateSlots(Request $request, $id)
    {
        $request->validate([
            'total_slots' => 'required|integer|min:1',
        ]);

        $pricing = AdSlotPricing::findOrFail($id);

        if (!$pricing->isEditable()) {
            flash(translate('This position\'s slot quantity cannot be modified.'))->error();
            return back();
        }

        $pricing->update([
            'total_slots' => $request->total_slots,
        ]);

        flash(translate('Slot quantity updated successfully.'))->success();
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

        if ($ad->payment) {
            $ad->payment->update(['status' => 'paid']);
        }

        flash(translate('Ad approved and activated.'))->success();
        return back();
    }

    public function reject(Request $request, $id)
    {
        $request->validate(['reason' => 'nullable|string|max:500']);

        $ad = SellerAd::findOrFail($id);
        $ad->update([
            'status' => 'rejected',
            'reject_reason' => $request->reason,
        ]);

        flash(translate('Ad rejected.'))->success();
        return back();
    }

    public function adDetails(Request $request)
    {
        $ad = SellerAd::with('seller', 'payment', 'product')->findOrFail($request->id);
        return view('backend.ads.details_modal', compact('ad'));
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:draft,pending_payment,active,expired,rejected',
            'reject_reason' => 'nullable|string|max:500',
            'media' => 'required|string',
        ]);

        $ad = SellerAd::findOrFail($id);
        $ad->update([
            'status'        => $request->status,
            'reject_reason' => $request->status === 'rejected' ? $request->reject_reason : null,
            'media'         => $request->media,
        ]);

        if ($request->status === 'active' && $ad->payment) {
            $ad->payment->update(['status' => 'paid']);
        }

        flash(translate('Ad status updated successfully.'))->success();
        return back();
    }

    // ─────────────────────────────────────────────────────────
    //  Revenue Summary
    // ─────────────────────────────────────────────────────────
    public function revenue()
    {
        $totalRevenue = AdPayment::where('status', 'paid')->sum('amount');
        $monthly = AdPayment::where('status', 'paid')
            ->selectRaw("DATE_FORMAT(created_at, '%Y-%m') as month, SUM(amount) as total")
            ->groupBy('month')
            ->orderByDesc('month')
            ->limit(12)
            ->get();

        $adsByStatus = SellerAd::selectRaw('status, COUNT(*) as count')->groupBy('status')->pluck('count', 'status');

        return view('backend.ads.revenue', compact('totalRevenue', 'monthly', 'adsByStatus'));
    }
}
