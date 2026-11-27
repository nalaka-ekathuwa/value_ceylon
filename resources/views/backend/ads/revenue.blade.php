@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{ translate('Ad Revenue') }}</h1>
        </div>
        <div class="col text-right">
            <a href="{{ route('admin.seller_ads.index') }}" class="btn btn-soft-secondary btn-sm">
                <i class="las la-arrow-left"></i> {{ translate('Back to Ads') }}
            </a>
        </div>
    </div>
</div>

{{-- KPI Cards --}}
<div class="row mb-4">
    <div class="col-md-4">
        <div class="card" style="border-left:4px solid #36b37e;">
            <div class="card-body">
                <p class="text-muted small mb-1">{{ translate('Total Revenue') }}</p>
                <h3 class="mb-0 text-success">{{ single_price($totalRevenue) }}</h3>
            </div>
        </div>
    </div>
    @foreach($adsByStatus as $status => $count)
    <div class="col-md-2">
        <div class="card">
            <div class="card-body text-center">
                <h4 class="mb-0">{{ $count }}</h4>
                <p class="text-muted small mb-0">{{ ucwords(str_replace('_', ' ', $status)) }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{-- Monthly Revenue Table --}}
<div class="card">
    <div class="card-header">
        <h6 class="mb-0">{{ translate('Monthly Revenue (Last 12 Months)') }}</h6>
    </div>
    <div class="card-body p-3">
        @if($monthly->count() > 0)
        <div class="row">
            <div class="col-md-6">
                <table class="table table-bordered table-sm">
                    <thead>
                        <tr>
                            <th>{{ translate('Month') }}</th>
                            <th>{{ translate('Revenue') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($monthly as $m)
                        <tr>
                            <td>{{ \Carbon\Carbon::createFromFormat('Y-m', $m->month)->format('F Y') }}</td>
                            <td><strong>{{ single_price($m->total) }}</strong></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <canvas id="revenueChart" height="280"></canvas>
            </div>
        </div>
        @else
        <div class="text-center py-5">
            <i class="las la-chart-bar" style="font-size:48px; opacity:0.3;"></i>
            <p class="mt-2 text-muted">{{ translate('No revenue data yet.') }}</p>
        </div>
        @endif
    </div>
</div>

@endsection

@section('script')
@if($monthly->count() > 0)
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js"></script>
<script>
var ctx = document.getElementById('revenueChart').getContext('2d');
new Chart(ctx, {
    type: 'bar',
    data: {
        labels: {!! $monthly->pluck('month')->map(fn($m) => \Carbon\Carbon::createFromFormat('Y-m', $m)->format('M Y'))->toJson() !!},
        datasets: [{
            label: '{{ translate("Revenue") }}',
            data: {!! $monthly->pluck('total')->toJson() !!},
            backgroundColor: 'rgba(92,59,209,0.7)',
            borderColor: '#5c3bd1',
            borderWidth: 1,
            borderRadius: 4,
        }]
    },
    options: {
        responsive: true,
        plugins: { legend: { display: false } },
        scales: { y: { beginAtZero: true } }
    }
});
</script>
@endif
@endsection
