@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{ translate('Ad Slot Pricing') }}</h1>
        </div>
        <div class="col text-right">
            <a href="{{ route('admin.seller_ads.index') }}" class="btn btn-soft-secondary btn-sm">
                <i class="las la-arrow-left"></i> {{ translate('Back to Ads') }}
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-5">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">{{ translate('Add / Update Slot Pricing') }}</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.ad_pricing.store') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label>{{ translate('Placement') }} <span class="text-danger">*</span></label>
                        <select name="placement" id="pricing-placement" class="form-control" required onchange="loadDefaultPositions(this.value)">
                            <option value="">-- Select Placement --</option>
                            <option value="home">Home Page</option>
                            <option value="category">Category Page</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>{{ translate('Position') }} <span class="text-danger">*</span></label>
                        <select name="position" id="pricing-position" class="form-control" required>
                            <option value="">-- Select Position --</option>
                        </select>
                    </div>

                    <div class="form-group mb-3">
                        <label>{{ translate('Total Slots') }} <span class="text-danger">*</span></label>
                        <input type="number" name="total_slots" id="pricing-slots" class="form-control" min="1" required>
                    </div>

                    <div class="form-group mb-3">
                        <label>{{ translate('Price Per Day') }} <span class="text-danger">*</span></label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">{{ currency_symbol() }}</span>
                            </div>
                            <input type="number" name="price_per_day" class="form-control" step="0.01" min="0" required>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="las la-save mr-1"></i> {{ translate('Save Pricing') }}
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-7">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">{{ translate('Current Pricing Configuration') }}</h6>
            </div>
            <div class="card-body p-3">
                @if($pricings->count() > 0)
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>{{ translate('Placement') }}</th>
                            <th>{{ translate('Position') }}</th>
                            <th>{{ translate('Total Slots') }}</th>
                            <th>{{ translate('Occupied (Today)') }}</th>
                            <th>{{ translate('Remaining (Today)') }}</th>
                            <th>{{ translate('Price/Day') }}</th>
                            <th class="text-right">{{ translate('Actions') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pricings as $p)
                        <tr>
                            <td><span class="badge badge-inline badge-soft-info">{{ ucfirst($p->placement) }}</span></td>
                            <td>{{ $p->label }}</td>
                            <td>
                                <span class="badge badge-inline badge-soft-secondary px-2">{{ $p->total_slots }}</span>
                            </td>
                            <td>
                                @if($p->placement === 'category')
                                    <span class="text-muted">—</span>
                                @else
                                    <span class="badge badge-inline badge-soft-warning px-2">{{ $p->getOccupiedSlotsCount() }}</span>
                                @endif
                            </td>
                            <td>
                                @if($p->placement === 'category')
                                    <span class="text-muted">—</span>
                                @else
                                    @php
                                        $rem = $p->getRemainingSlotsCount();
                                    @endphp
                                    @if($rem > 0)
                                        <span class="badge badge-inline badge-soft-success px-2">{{ $rem }} {{ translate('Left') }}</span>
                                    @else
                                        <span class="badge badge-inline badge-soft-danger px-2">{{ translate('Full') }}</span>
                                    @endif
                                @endif
                            </td>
                            <td>{{ single_price($p->price_per_day) }}</td>
                            <td class="text-right">
                                @if($p->isEditable())
                                    <button class="btn btn-sm btn-soft-primary btn-icon btn-circle mr-1" onclick="showEditSlotsModal({{ $p->id }}, '{{ $p->label }}', {{ $p->total_slots }}, '{{ route('admin.ad_pricing.update_slots', $p->id) }}')" title="{{ translate('Edit Slots') }}">
                                        <i class="las la-edit"></i>
                                    </button>
                                @endif
                                <a href="{{ route('admin.ad_pricing.destroy', $p->id) }}" class="btn btn-sm btn-soft-danger btn-icon btn-circle confirm-delete" data-href="{{ route('admin.ad_pricing.destroy', $p->id) }}" title="{{ translate('Delete') }}">
                                    <i class="las la-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <div class="text-center py-4">
                    <p class="text-muted">{{ translate('No slot pricing configured yet.') }}</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>


@endsection

@section('modal')
    @include('modals.delete_modal')

    {{-- Edit Slots Modal --}}
    <div class="modal fade" id="edit-slots-modal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ translate('Edit Slot Quantity') }}</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form id="edit-slots-form" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label>{{ translate('Position') }}</label>
                            <input type="text" id="edit-slots-position-name" class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <label>{{ translate('Total Slots') }} <span class="text-danger">*</span></label>
                            <input type="number" name="total_slots" id="edit-slots-input" class="form-control" min="1" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ translate('Cancel') }}</button>
                        <button type="submit" class="btn btn-primary">{{ translate('Update Slots') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
<script>
var positionsMap = {
    home: [
        { key: 'premium_hero_slider',    label: 'Premium Hero Slider',    slots: 4 },
        { key: 'sidebar_spotlight',      label: 'Sidebar Spotlight',      slots: 1 },
        { key: 'featured_ad_blocks',     label: 'Featured Ad Blocks',     slots: 3 },
        { key: 'mid_page_carousel',      label: 'Mid-Page Carousel',      slots: 4 },
        { key: 'bottom_showcase_slider', label: 'Bottom Showcase Slider', slots: 4 },
    ],
    category: [
        { key: 'category_top',     label: 'Category Top Banner', slots: 4 },
        { key: 'category_sidebar', label: 'Category Sidebar',    slots: 1 },
    ]
};

function loadDefaultPositions(placement) {
    var $sel = $('#pricing-position');
    $sel.find('option:not(:first)').remove();
    if (!placement || !positionsMap[placement]) return;
    positionsMap[placement].forEach(function (p) {
        $sel.append('<option value="' + p.key + '" data-slots="' + p.slots + '">' + p.label + '</option>');
    });
}

$('#pricing-position').on('change', function () {
    var slots = $(this).find(':selected').data('slots');
    if (slots) $('#pricing-slots').val(slots);
});

function showEditSlotsModal(id, label, slots, url) {
    $('#edit-slots-form').attr('action', url);
    $('#edit-slots-position-name').val(label);
    $('#edit-slots-input').val(slots);
    $('#edit-slots-modal').modal('show');
}
</script>
@endsection
