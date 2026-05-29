@extends('seller.layouts.app')

@section('panel_content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{ translate('Ad Details') }} #{{ $ad->id }}</h1>
        </div>
        <div class="col text-right">
            <a href="{{ route('seller.ads.index') }}" class="btn btn-soft-secondary btn-sm">
                <i class="las la-arrow-left"></i> {{ translate('Back') }}
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-8">
        <div class="card mb-3">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="mb-0">{{ translate('Ad Information') }}</h6>
                {!! $ad->status_badge !!}
            </div>
            <div class="card-body">
                <table class="table table-bordered table-sm">
                    <tr>
                        <th width="35%">{{ translate('Placement') }}</th>
                        <td>{{ ucfirst($ad->placement) }} Page</td>
                    </tr>
                    <tr>
                        <th>{{ translate('Position') }}</th>
                        <td>{{ $ad->position_label }}</td>
                    </tr>
                    <tr>
                        <th>{{ translate('Ad Type') }}</th>
                        <td>{{ strtoupper($ad->ad_type) }}</td>
                    </tr>
                    <tr>
                        <th>{{ translate('Start Date') }}</th>
                        <td>{{ $ad->start_date->format('d M Y') }}</td>
                    </tr>
                    <tr>
                        <th>{{ translate('End Date') }}</th>
                        <td>{{ $ad->end_date->format('d M Y') }}</td>
                    </tr>
                    <tr>
                        <th>{{ translate('Duration') }}</th>
                        <td>{{ $ad->duration_days }} {{ translate('days') }}</td>
                    </tr>
                    <tr>
                        <th>{{ translate('Total Price') }}</th>
                        <td><strong class="text-primary">{{ single_price($ad->price) }}</strong></td>
                    </tr>
                    @if($ad->product)
                    <tr>
                        <th>{{ translate('Linked Product') }}</th>
                        <td>{{ $ad->product->name }}</td>
                    </tr>
                    @endif
                    @if($ad->reject_reason)
                    <tr>
                        <th>{{ translate('Reject Reason') }}</th>
                        <td class="text-danger">{{ $ad->reject_reason }}</td>
                    </tr>
                    @endif
                </table>

                @if($ad->media)
                <div class="mt-3">
                    <p class="font-weight-bold">{{ translate('Ad Media Preview') }}</p>
                    <img src="{{ uploaded_asset($ad->media) }}" alt="Ad Media" class="img-fluid rounded" style="max-height:250px;">
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        {{-- Payment Info --}}
        <div class="card mb-3">
            <div class="card-header">
                <h6 class="mb-0">{{ translate('Payment Details') }}</h6>
            </div>
            <div class="card-body">
                @if($ad->payment)
                    <p><strong>{{ translate('Amount:') }}</strong> {{ single_price($ad->payment->amount) }}</p>
                    <p><strong>{{ translate('Method:') }}</strong> {{ $ad->payment->payment_method ?? '—' }}</p>
                    <p><strong>{{ translate('Transaction:') }}</strong> <code>{{ $ad->payment->transaction_id ?? '—' }}</code></p>
                    <p><strong>{{ translate('Status:') }}</strong> {!! $ad->payment->status_badge !!}</p>
                @else
                    <p class="text-muted">{{ translate('No payment record yet.') }}</p>
                    @if(in_array($ad->status, ['draft', 'pending_payment']))
                    <a href="{{ route('seller.ads.payment', $ad->id) }}" class="btn btn-warning btn-block">
                        <i class="las la-credit-card mr-1"></i> {{ translate('Pay Now') }}
                    </a>
                    @endif
                @endif
            </div>
        </div>

        {{-- Status Timeline --}}
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">{{ translate('Status Flow') }}</h6>
            </div>
            <div class="card-body p-2">
                @php
                    $statuses = ['draft', 'pending_payment', 'active', 'expired'];
                    $currentIdx = array_search($ad->status, $statuses);
                    if($ad->status === 'rejected') $currentIdx = -1;
                @endphp
                @if($ad->status === 'rejected')
                <div class="alert alert-danger py-2 mb-0"><i class="las la-times-circle mr-1"></i> {{ translate('Ad Rejected') }}</div>
                @else
                <ul class="list-unstyled mb-0">
                    @foreach($statuses as $idx => $st)
                    <li class="d-flex align-items-center py-2 {{ $idx < count($statuses) - 1 ? 'border-bottom' : '' }}">
                        <span class="mr-2">
                            @if($idx < $currentIdx)
                                <i class="las la-check-circle text-success" style="font-size:18px;"></i>
                            @elseif($idx == $currentIdx)
                                <i class="las la-dot-circle text-primary" style="font-size:18px;"></i>
                            @else
                                <i class="las la-circle text-muted" style="font-size:18px;"></i>
                            @endif
                        </span>
                        <span class="{{ $idx == $currentIdx ? 'font-weight-bold' : 'text-muted' }}">
                            {{ ucwords(str_replace('_', ' ', $st)) }}
                        </span>
                    </li>
                    @endforeach
                </ul>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
