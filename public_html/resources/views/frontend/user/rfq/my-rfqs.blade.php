@extends('frontend.layouts.user_panel')

@section('panel_content')
    <div class="aiz-titlebar mb-4">
      <div class="row align-items-center">
          <div class="col-md-6">
              <h5 class="fs-20 fw-700 text-dark">{{ translate('My RFQs')}}</h5>
              <p class="fs-14 fw-400 text-secondary">{{ translate('Select a rfq to view all')}}</p>
          </div>
      </div>
    </div>

    <!-- RFQ -->
    <!-- Basic Info-->
    <div class="card rounded-0 shadow-none border">
        <div class="card-header pt-4 border-bottom-0">
            <h5 class="mb-0 fs-18 fw-700 text-dark">{{ translate('Post Your Request for Quotation')}}</h5>
        </div>
        <div class="card-body">
            
            <div >
                <table class="table table-stripe">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>User</th>
                            <th>Product Name</th>
                            <th>Qty</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ( $rfqs as  $rfq)
                        <tr>
                            <td>{{ $rfq->id }}</td>
                            <td>{{ $rfq->user->name }}</td>
                            <td>{{ $rfq->product_name }}</td>
                            <td>{{ $rfq->quantity }} {{ $rfq->package_type->name }}</td>
                            <td>{{ $rfq->quoteStatus->name }}</td>
                            <td>
                                <a class="btn btn-xs btn-success" href="{{ route('customer.rfq.show', ['rfq' => $rfq->id]) }}">View</a>
                                <a class="btn btn-xs btn-primary" href="{{ route('customer.rfq.edit', ['rfq' => $rfq->id]) }}">Edit</a>
                            </td>
                        </td>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <div class="aiz-pagination">
      
    </div>
@endsection
