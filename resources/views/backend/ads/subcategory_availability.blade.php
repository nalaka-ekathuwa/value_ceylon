@extends('backend.layouts.app')

@section('content')
<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{ translate('Subcategory Slot Availability') }}</h1>
        </div>
        <div class="col text-right">
            <a href="{{ route('admin.ad_pricing.index') }}" class="btn btn-soft-secondary btn-sm">
                <i class="las la-cog"></i> {{ translate('Ad Slot Pricing') }}
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom-0">
                <h5 class="mb-0 h6">{{ translate('Subcategory Slot Availability (Today)') }}</h5>
            </div>
            <div class="card-body p-3">
                @if($subCategories->count() > 0)
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>{{ translate('Subcategory Name') }}</th>
                            <th class="text-center">{{ translate('Category Top Banner (Slots)') }}</th>
                            <th class="text-center">{{ translate('Category Sidebar (Slots)') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subCategories as $cat)
                            @php
                                $today = date('Y-m-d');
                                $cat_id = $cat->parent_id;
                                $sub_id = $cat->id;
                                $display_name = optional($cat->parentCategory)->getTranslation('name') . ' > ' . $cat->getTranslation('name');

                                $topTotal = $categoryTopPricing ? $categoryTopPricing->total_slots : 4;
                                $topOccupied = \App\Models\SellerAd::occupiedSlots('category', 'category_top', $today, $today, null, $cat_id, $sub_id);
                                $topRemaining = max(0, $topTotal - $topOccupied);

                                $sidebarTotal = $categorySidebarPricing ? $categorySidebarPricing->total_slots : 1;
                                $sidebarOccupied = \App\Models\SellerAd::occupiedSlots('category', 'category_sidebar', $today, $today, null, $cat_id, $sub_id);
                                $sidebarRemaining = max(0, $sidebarTotal - $sidebarOccupied);
                            @endphp
                            <tr>
                                <td>
                                    <strong>{{ $display_name }}</strong>
                                    <span class="badge badge-inline badge-soft-secondary ml-2">{{ translate('Subcategory') }}</span>
                                </td>
                                <td class="text-center">
                                    <span class="text-muted mr-3">{{ translate('Total:') }} <strong>{{ $topTotal }}</strong></span>
                                    <span class="text-warning mr-3">{{ translate('Occupied:') }} <strong>{{ $topOccupied }}</strong></span>
                                    @if($topRemaining > 0)
                                        <span class="badge badge-inline badge-soft-success px-2 py-1">{{ $topRemaining }} {{ translate('Remaining') }}</span>
                                    @else
                                        <span class="badge badge-inline badge-soft-danger px-2 py-1">{{ translate('Full') }}</span>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <span class="text-muted mr-3">{{ translate('Total:') }} <strong>{{ $sidebarTotal }}</strong></span>
                                    <span class="text-warning mr-3">{{ translate('Occupied:') }} <strong>{{ $sidebarOccupied }}</strong></span>
                                    @if($sidebarRemaining > 0)
                                        <span class="badge badge-inline badge-soft-success px-2 py-1">{{ $sidebarRemaining }} {{ translate('Remaining') }}</span>
                                    @else
                                        <span class="badge badge-inline badge-soft-danger px-2 py-1">{{ translate('Full') }}</span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination mt-3">
                    {{ $subCategories->links() }}
                </div>
                @else
                <div class="text-center py-4">
                    <p class="text-muted">{{ translate('No subcategories found.') }}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
