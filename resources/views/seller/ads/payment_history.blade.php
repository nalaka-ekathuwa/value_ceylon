@extends('seller.layouts.app')

@section('panel_content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{ translate('Ad Payment History') }}</h1>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body p-3">
        @if($payments->count() > 0)
        <table class="table aiz-table mb-0">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ translate('Ad') }}</th>
                    <th>{{ translate('Amount') }}</th>
                    <th>{{ translate('Method') }}</th>
                    <th>{{ translate('Transaction ID') }}</th>
                    <th>{{ translate('Status') }}</th>
                    <th>{{ translate('Date') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($payments as $key => $payment)
                <tr>
                    <td>{{ $payments->firstItem() + $key }}</td>
                    <td>
                        <a href="{{ route('seller.ads.show', $payment->ad->id) }}">
                            {{ ucfirst($payment->ad->placement) }} / {{ $payment->ad->position_label }}
                        </a>
                    </td>
                    <td>{{ single_price($payment->amount) }}</td>
                    <td>{{ $payment->payment_method ?? '—' }}</td>
                    <td><code>{{ $payment->transaction_id ?? '—' }}</code></td>
                    <td>{!! $payment->status_badge !!}</td>
                    <td>{{ $payment->created_at->format('d M Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="aiz-pagination mt-3">
            {{ $payments->links() }}
        </div>
        @else
        <div class="text-center py-5">
            <i class="las la-history" style="font-size:48px; opacity:0.3;"></i>
            <p class="mt-2 text-muted">{{ translate('No payment history yet.') }}</p>
        </div>
        @endif
    </div>
</div>

@endsection
