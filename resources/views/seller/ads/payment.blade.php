@extends('seller.layouts.app')

@section('panel_content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{ translate('Complete Payment') }}</h1>
        </div>
        <div class="col text-right">
            <a href="{{ route('seller.ads.index') }}" class="btn btn-soft-secondary btn-sm">
                <i class="las la-arrow-left"></i> {{ translate('Back') }}
            </a>
        </div>
    </div>
</div>

<div class="row justify-content-center">
    <div class="col-lg-7">

        {{-- Order Summary Card --}}
        <div class="card mb-4" style="border-left: 4px solid #5c3bd1;">
            <div class="card-header" style="background: linear-gradient(135deg,#5c3bd1,#7c5cbf); color:#fff;">
                <h6 class="mb-0"><i class="las la-file-invoice-dollar mr-1"></i> {{ translate('Order Summary') }}</h6>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-sm mb-0">
                    <tr>
                        <th width="45%">{{ translate('Placement') }}</th>
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
                        <th>{{ translate('Period') }}</th>
                        <td>{{ $ad->start_date->format('d M Y') }} → {{ $ad->end_date->format('d M Y') }}</td>
                    </tr>
                    <tr>
                        <th>{{ translate('Duration') }}</th>
                        <td>{{ $ad->duration_days }} {{ translate('days') }}</td>
                    </tr>
                    <tr class="table-primary">
                        <th>{{ translate('Total Amount') }}</th>
                        <td><strong class="fs-20">{{ single_price($ad->price) }}</strong></td>
                    </tr>
                </table>
            </div>
        </div>

        {{-- Payment Form --}}
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0"><i class="las la-credit-card mr-1"></i> {{ translate('Select Payment Method') }}</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('seller.ads.payment.process', $ad->id) }}" method="POST">
                    @csrf

                    <div class="row mb-4">
                        @php
                            $methods = [
                                ['key' => 'bank_transfer', 'label' => 'Bank Transfer', 'icon' => 'las la-university'],
                                ['key' => 'wallet',        'label' => 'Wallet Balance', 'icon' => 'las la-wallet'],
                                ['key' => 'card',          'label' => 'Credit / Debit Card', 'icon' => 'las la-credit-card'],
                                ['key' => 'cash',          'label' => 'Cash on Delivery', 'icon' => 'las la-money-bill'],
                            ];
                        @endphp
                        @foreach($methods as $method)
                        <div class="col-6 mb-3">
                            <label class="payment-method-card d-block p-3 border rounded cursor-pointer text-center" style="cursor:pointer; transition:.2s;" for="pm_{{ $method['key'] }}">
                                <input type="radio" name="payment_method" id="pm_{{ $method['key'] }}" value="{{ $method['key'] }}" class="d-none payment-radio" required>
                                <i class="{{ $method['icon'] }}" style="font-size:28px;"></i>
                                <div class="small mt-1 font-weight-medium">{{ translate($method['label']) }}</div>
                            </label>
                        </div>
                        @endforeach
                    </div>

                    <div class="alert alert-warning small">
                        <i class="las la-info-circle mr-1"></i>
                        {{ translate('Your ad will be submitted for admin review after payment. It will be activated upon approval.') }}
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary btn-lg px-5">
                            <i class="las la-check mr-1"></i> {{ translate('Confirm & Pay') }} {{ single_price($ad->price) }}
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection

@section('script')
<script>
$(function () {
    // Highlight selected payment method
    $('.payment-radio').on('change', function () {
        $('.payment-method-card').css({ background: '', borderColor: '', color: '' });
        if ($(this).is(':checked')) {
            $(this).closest('.payment-method-card').css({
                background: '#f0ecff',
                borderColor: '#5c3bd1',
                color: '#5c3bd1'
            });
        }
    });
});
</script>
@endsection
