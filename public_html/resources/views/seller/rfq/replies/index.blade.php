@extends('seller.layouts.app')

@section('panel_content')

    <div class="card">
        <form id="sort_orders" action="" method="GET">
            <div class="card-header row gutters-5">
                <div class="col text-center text-md-left">
                    <h5 class="mb-md-0 h6">{{ translate('Request for Quotation') }}</h5>
                </div>
            </div>
        </form>

        @if (count($rfqs) > 0)
            <div class="card-body p-3">
                <table class="table aiz-table mb-0">
                    <thead>
                        <tr>
                            <th>{{ translate('Reference') }}</th>
                            <th>{{ translate('Customer information') }}</th>
                            <th data-breakpoints="lg">{{ translate('Product Type') }}</th>
                            <th data-breakpoints="lg">{{ translate('Quantity') }}</th>
                            <th data-breakpoints="lg">{{ translate('product Description') }}</th>
                            <th data-breakpoints="lg">{{ translate('Submission Date') }}</th>
                            <th data-breakpoints="lg">{{ translate('Deadline Date') }}</th>
                            <th data-breakpoints="lg">{{ translate('Status') }}</th>
                            <th class="text-right">{{ translate('Options') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rfqs as $key => $rfq)
                            
                            @if ($rfq != null)
                                <tr>
                                    <td>{{ $rfq->id + env('RFQ_REF_START') }}</td>
                                    <td>
                                        <div class="name">{{ $rfq->first_name }} {{ $rfq->last_name }}</div>
                                        <div class="email">{{ $rfq->email }}</div>
                                    </td>
                                    <td>{{ $rfq->category->name }}</td>
                                    <td>{{ $rfq->quantity . ' ' . $rfq->package_type->name }}</td>
                                    <td>{{ $rfq->product_customization }}</td>
                                    <td>{{ $rfq->rfq_submission_date }}</td>
                                    <td>{{ $rfq->rfq_deadline_date }}</td>
                                    <td>{{ $rfq->quoteStatus->name }}</td>
                                    
                                    <td class="text-right">
                                        
                                        <a href="{{ route('seller.rfqs.replies.show', $rfq->id) }}"
                                            class="btn btn-soft-info btn-icon btn-circle btn-sm"
                                            title="{{ translate('Rfq View') }}">
                                            <i class="las la-eye"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
                <div class="aiz-pagination">
                    {{ $rfqs->links() }}
                </div>
            </div>
        @endif
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        function sort_orders(el) {
            $('#sort_orders').submit();
        }
    </script>
@endsection
