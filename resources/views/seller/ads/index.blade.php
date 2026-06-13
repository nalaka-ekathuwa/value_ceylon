@extends('seller.layouts.app')

@section('panel_content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{ translate('My Advertisements') }}</h1>
        </div>
        <div class="col text-right">
            <a href="{{ route('seller.ads.create') }}" class="btn btn-primary btn-sm">
                <i class="las la-plus"></i> {{ translate('Create Ad') }}
            </a>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{ translate('All Ads') }}</h5>
    </div>
    <div class="card-body p-3">
        @if($ads->count() > 0)
        <table class="table aiz-table mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ translate('Placement') }}</th>
                    <th>{{ translate('Position') }}</th>
                    <th>{{ translate('Type') }}</th>
                    <th>{{ translate('Period') }}</th>
                    <th>{{ translate('Days') }}</th>
                    <th>{{ translate('Price') }}</th>
                    <th>{{ translate('Status') }}</th>
                    <th class="text-right">{{ translate('Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ads as $key => $ad)
                <tr>
                    <td>{{ $ads->firstItem() + $key }}</td>
                    <td><span class="badge badge-inline badge-soft-info">{{ ucfirst($ad->placement) }}</span></td>
                    <td>{{ $ad->position_label }}</td>
                    <td>{{ strtoupper($ad->ad_type) }}</td>
                    <td>
                        <small>{{ $ad->start_date->format('d M Y') }}<br>→ {{ $ad->end_date->format('d M Y') }}</small>
                    </td>
                    <td>{{ $ad->duration_days }}</td>
                    <td>{{ single_price($ad->price) }}</td>
                    <td>{!! $ad->status_badge !!}</td>
                    <td class="text-right">
                        <a href="{{ route('seller.ads.show', $ad->id) }}" class="btn btn-sm btn-soft-info btn-icon btn-circle" title="{{ translate('View') }}">
                            <i class="las la-eye"></i>
                        </a>
                        @if(in_array($ad->status, ['draft', 'pending_payment']))
                        <a href="{{ route('seller.ads.payment', $ad->id) }}" class="btn btn-sm btn-soft-warning btn-icon btn-circle" title="{{ translate('Pay') }}">
                            <i class="las la-credit-card"></i>
                        </a>
                        @endif
                        @if(!in_array($ad->status, ['active']))
                        <a href="{{ route('seller.ads.destroy', $ad->id) }}" class="btn btn-sm btn-soft-danger btn-icon btn-circle confirm-delete" data-href="{{ route('seller.ads.destroy', $ad->id) }}" title="{{ translate('Delete') }}">
                            <i class="las la-trash"></i>
                        </a>
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
            <p class="mt-2 text-muted">{{ translate('No ads yet.') }} <a href="{{ route('seller.ads.create') }}">{{ translate('Create your first ad') }}</a></p>
        </div>
        @endif
    </div>
</div>

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection
