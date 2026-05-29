@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{ translate('Seller Ads') }}</h1>
        </div>
        <div class="col text-right">
            <a href="{{ route('admin.ads_revenue.index') }}" class="btn btn-soft-info btn-sm mr-2">
                <i class="las la-chart-bar"></i> {{ translate('Revenue') }}
            </a>
            <a href="{{ route('admin.ad_pricing.index') }}" class="btn btn-soft-secondary btn-sm">
                <i class="las la-cog"></i> {{ translate('Slot Pricing') }}
            </a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <form method="GET" class="d-flex">
            <select name="status" class="form-control form-control-sm mr-2" style="width:200px;" onchange="this.form.submit()">
                <option value="">{{ translate('All Statuses') }}</option>
                @foreach(['draft','pending_payment','active','expired','rejected'] as $st)
                <option value="{{ $st }}" @if(request('status') == $st) selected @endif>{{ ucwords(str_replace('_',' ',$st)) }}</option>
                @endforeach
            </select>
        </form>
    </div>
    <div class="card-body p-3">
        @if($ads->count() > 0)
        <table class="table aiz-table mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ translate('Seller') }}</th>
                    <th>{{ translate('Placement') }}</th>
                    <th>{{ translate('Position') }}</th>
                    <th>{{ translate('Period') }}</th>
                    <th>{{ translate('Price') }}</th>
                    <th>{{ translate('Payment') }}</th>
                    <th>{{ translate('Status') }}</th>
                    <th class="text-right">{{ translate('Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ads as $key => $ad)
                <tr>
                    <td>{{ $ads->firstItem() + $key }}</td>
                    <td>
                        <strong>{{ optional($ad->seller)->name }}</strong><br>
                        <small class="text-muted">{{ optional($ad->seller)->email }}</small>
                    </td>
                    <td><span class="badge badge-soft-info">{{ ucfirst($ad->placement) }}</span></td>
                    <td>{{ $ad->position_label }}</td>
                    <td>
                        <small>{{ $ad->start_date->format('d M Y') }}<br>→ {{ $ad->end_date->format('d M Y') }}</small>
                    </td>
                    <td>{{ single_price($ad->price) }}</td>
                    <td>
                        @if($ad->payment)
                            {!! $ad->payment->status_badge !!}
                        @else
                            <span class="badge badge-secondary">None</span>
                        @endif
                    </td>
                    <td>{!! $ad->status_badge !!}</td>
                    <td class="text-right">
                        @if($ad->status === 'pending_payment')
                        <a href="{{ route('admin.seller_ads.approve', $ad->id) }}" class="btn btn-sm btn-soft-success btn-icon btn-circle" title="{{ translate('Approve') }}" onclick="return confirm('Approve this ad?')">
                            <i class="las la-check"></i>
                        </a>
                        <button type="button" class="btn btn-sm btn-soft-danger btn-icon btn-circle"
                            title="{{ translate('Reject') }}"
                            onclick="showRejectModal({{ $ad->id }})">
                            <i class="las la-times"></i>
                        </button>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="aiz-pagination mt-3">
            {{ $ads->links() }}
        </div>
        @else
        <div class="text-center py-5">
            <i class="las la-bullhorn" style="font-size:48px; opacity:0.3;"></i>
            <p class="mt-2 text-muted">{{ translate('No ads found.') }}</p>
        </div>
        @endif
    </div>
</div>

{{-- Reject Modal --}}
<div class="modal fade" id="rejectModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ translate('Reject Ad') }}</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <form id="reject-form" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label>{{ translate('Rejection Reason (optional)') }}</label>
                        <textarea name="reason" class="form-control" rows="3" placeholder="{{ translate('Enter reason...') }}"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ translate('Cancel') }}</button>
                    <button type="submit" class="btn btn-danger">{{ translate('Reject') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('script')
<script>
function showRejectModal(adId) {
    $('#reject-form').attr('action', '/admin/seller-ads/' + adId + '/reject');
    $('#rejectModal').modal('show');
}
</script>
@endsection
