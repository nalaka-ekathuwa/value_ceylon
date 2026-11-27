@extends('frontend.layouts.user_panel')

@section('panel_content')
    <div class="aiz-titlebar mb-4">
      <div class="row align-items-center">
          <div class="col-md-6">
              <h5 class="fs-20 fw-700 text-dark">{{ translate('My RFQs')}}</h5>
              <p class="fs-14 fw-400 text-secondary mb-0">{{ translate('Select an RFQ to view or edit details')}}</p>
          </div>
      </div>
    </div>

    <!-- RFQ List Card -->
    <div class="card rounded-0 shadow-none border">
        <div class="card-header pt-4 border-bottom-0">
            <h5 class="mb-0 fs-18 fw-700 text-dark">{{ translate('Request for Quotations')}}</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table aiz-table mb-0">
                    <thead class="text-gray fs-12">
                        <tr>
                            <th>{{ translate('ID') }}</th>
                            <th data-breakpoints="md">{{ translate('User') }}</th>
                            <th>{{ translate('Product Name') }}</th>
                            <th data-breakpoints="sm">{{ translate('Qty') }}</th>
                            <th data-breakpoints="sm">{{ translate('Status') }}</th>
                            <th class="text-right">{{ translate('Actions') }}</th>
                        </tr>
                    </thead>

                    <tbody class="fs-14">
                        @foreach ($rfqs as $rfq)
                        <tr>
                            <td class="fw-600">#{{ $rfq->id }}</td>
                            <td>{{ optional($rfq->user)->name ?? translate('N/A') }}</td>
                            <td class="fw-600 text-dark">{{ $rfq->product_name }}</td>
                            <td>{{ $rfq->quantity }} {{ optional($rfq->package_type)->name }}</td>
                            <td>
                                <span class="badge badge-inline badge-soft-primary px-3 py-2 fs-12 rounded-pill">
                                    {{ optional($rfq->quoteStatus)->name ?? translate('Pending') }}
                                </span>
                            </td>
                            <td class="text-right">
                                <a class="btn btn-soft-info btn-icon btn-circle btn-sm" href="{{ route('customer.rfq.show', ['rfq' => $rfq->id]) }}" title="{{ translate('View') }}">
                                    <i class="las la-eye"></i>
                                </a>
                                <a class="btn btn-soft-primary btn-icon btn-circle btn-sm" href="{{ route('customer.rfq.edit', ['rfq' => $rfq->id]) }}" title="{{ translate('Edit') }}">
                                    <i class="las la-edit"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="aiz-pagination mt-4">
        @if (method_exists($rfqs, 'links'))
            {{ $rfqs->links() }}
        @endif
    </div>
@endsection
