@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="align-items-center">
        <h1 class="h3">{{translate('All RFQ')}}</h1>
    </div>
</div>


<div class="card">
    <form class="" id="sort_customers" action="" method="GET">
        <div class="card-header row gutters-5">
            <div class="col">
                <h5 class="mb-0 h6">{{translate('RFQ')}}</h5>
            </div>
            
            
        </div>
    
        <div class="card-body">
            <table class="table aiz-table mb-0">
                <thead>
                    <tr>
                        <th >{{translate('Reference')}}</th>
                        <th >{{translate('Customer information')}}</th>
                        <th data-breakpoints="lg">{{translate('Product Type')}}</th>
                        <th data-breakpoints="lg">{{translate('Quantity')}}</th>
                        <th data-breakpoints="lg">{{translate('product Description')}}</th>
                        <th data-breakpoints="lg">{{translate('Submission Date')}}</th>
                        <th data-breakpoints="lg">{{translate('Deadline Date')}}</th>
                        <th data-breakpoints="lg">{{translate('Status')}}</th>
                        <th class="text-right">{{translate('Options')}}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($rfqs as $key => $rfq)
                        @if ($rfq != null)
                            <tr>
                                <td>{{ $rfq->id + env('RFQ_REF_START') }}</td>
                                <td>
                                    <div class="name">{{$rfq->first_name}} {{$rfq->last_name}}</div>
                                    <div class="email">{{$rfq->email}}</div>
                                </td>
                                <td>{{$rfq->category->name}}</td>
                                <td>{{$rfq->quantity .' '. $rfq->package_type->name}}</td>
                                <td>{{$rfq->product_customization}}</td>
                                <td>{{$rfq->rfq_submission_date}}</td>
                                <td>{{$rfq->rfq_deadline_date}}</td>
                                <td>
                                    {{ $rfq->quoteStatus->name }}
                                </td>

                              
                                <td class="text-right">
                                    <a href="{{route('admin.rfq.show', $rfq->id)}}" class="btn btn-soft-success btn-icon btn-circle btn-sm" title="{{ translate('Log in as this Customer') }}">
                                        <i class="las la-eye"></i>
                                    </a>

                                    <a href="{{route('admin.rfq.edit', $rfq->id)}}" class="btn btn-soft-primary btn-icon btn-circle btn-sm" title="{{ translate('Log in as this Customer') }}">
                                        <i class="las la-edit"></i>
                                    </a>

                                    <a class="btn btn-soft-danger btn-icon btn-circle " href="{{route('admin.rfq.delete', $rfq->id)}}" title="{{ translate('Delete') }}">
                                        <i class="las la-trash"></i>
                                    </a>
                                    
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
            <div class="aiz-pagination">
                {{ $rfqs->appends(request()->input())->links() }}
            </div>
        </div>
    </form>
</div>


<div class="modal fade" id="confirm-ban">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h6">{{translate('Confirmation')}}</h5>
                <button type="button" class="close" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>{{translate('Do you really want to ban this Customer?')}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">{{translate('Cancel')}}</button>
                <a type="button" id="confirmation" class="btn btn-primary">{{translate('Proceed!')}}</a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirm-unban">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title h6">{{translate('Confirmation')}}</h5>
                <button type="button" class="close" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <p>{{translate('Do you really want to unban this Customer?')}}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">{{translate('Cancel')}}</button>
                <a type="button" id="confirmationunban" class="btn btn-primary">{{translate('Proceed!')}}</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
    <!-- Delete modal -->
    @include('modals.delete_modal')
    <!-- Bulk Delete modal -->
    @include('modals.bulk_delete_modal')
@endsection

@section('script')
    <script type="text/javascript">
        
        $(document).on("change", ".check-all", function() {
            if(this.checked) {
                // Iterate each checkbox
                $('.check-one:checkbox').each(function() {
                    this.checked = true;                        
                });
            } else {
                $('.check-one:checkbox').each(function() {
                    this.checked = false;                       
                });
            }
          
        });
        
        function sort_customers(el){
            $('#sort_customers').submit();
        }
        function confirm_ban(url)
        {
            $('#confirm-ban').modal('show', {backdrop: 'static'});
            document.getElementById('confirmation').setAttribute('href' , url);
        }

        function confirm_unban(url)
        {
            $('#confirm-unban').modal('show', {backdrop: 'static'});
            document.getElementById('confirmationunban').setAttribute('href' , url);
        }
        
        function bulk_delete() {
            var data = new FormData($('#sort_customers')[0]);
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{route('bulk-customer-delete')}}",
                type: 'POST',
                data: data,
                cache: false,
                contentType: false,
                processData: false,
                success: function (response) {
                    if(response == 1) {
                        location.reload();
                    }
                }
            });
        }
    </script>
@endsection
