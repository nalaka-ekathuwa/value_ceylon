@extends('seller.layouts.app')

@section('panel_content')

    <div class="row">
        <div class="col-md-8">
            <div class="card">

                <div class="card-head">
                   <h4 class="ml-4 mt-3"> {{ $rfq->product_name }} - ({{$rfq->category->name}})</h4>
                </div>
            
                <div class="card-body">
                    <!-- Error Meassages -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        
                    <div >
                        <table class="table table-strip">
                            <tbody>
                                <tr>
                                    <td colspan="2">
                                        <h6>Buyer Information</h6>
                                    </td>
                                </tr>
                                <tr>
                                    <td>First Name</td>
                                    <td>{{ $rfq->first_name }}</td>
                                </tr>
        
                                <tr>
                                    <td>Last Name</td>
                                    <td>{{ $rfq->last_name }}</td>
                                </tr>
        
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $rfq->email }}</td>
                                </tr>
        
                                <tr>
                                    <td>Designation</td>
                                    <td>{{ $rfq->designation }}</td>
                                </tr>
        
                                <tr>
                                    <td>Country</td>
                                    <td>{{ $rfq->country }}</td>
                                </tr>
        
                                <tr>
                                    <td>City</td>
                                    <td>{{ $rfq->city }}</td>
                                </tr>
        
                                <tr>
                                    <td>Contact Number</td>
                                    <td>{{ $rfq->contact_number }}</td>
                                </tr>
        
                                <tr>
                                    <td colspan="2">
                                        <h6>Business Information</h6>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td>Company Name</td>
                                    <td>{{ $rfq->company_name }}</td>
                                </tr>
        
                                <tr>
                                    <td>Company Email </td>
                                    <td>{{ $rfq->company_email }}</td>
                                </tr>
        
                                <tr>
                                    <td>Company Address</td>
                                    <td>{{ $rfq->company_address }}</td>
                                </tr>
        
                                <tr>
                                    <td>Contact Number</td>
                                    <td>{{ $rfq->contact_number }}</td>
                                </tr>
        
        
        
                                <tr>
                                    <td colspan="2">
                                        <h6>Sourcing Requirements</h6>
                                    </td>
                                </tr>
        
                                <tr>
                                    <td>Product Name</td>
                                    <td>{{ $rfq->product_name }}</td>
                                </tr>
        
                                <tr>
                                    <td>Product Category </td>
                                    <td>{{ $rfq->category->name }}</td>
                                </tr>
        
                                <tr>
                                    <td>Product Detailed Specifications / Customizations</td>
                                    <td>{{ $rfq->product_customization }}</td>
                                </tr>
        
                                <tr>
                                    <td>Quantity</td>
                                    <td>{{ $rfq->quantity }}  {{ $rfq->package_type->name }}</td>
                                </tr>
        
                                <tr>
                                    <td>Images</td>
                                    <td>
                                        @foreach ($rfq->images as $image )
                                        <img src="{{ static_asset("/rfq_images/$rfq->id/$image->image") }}" alt=""
                                        class="img-fluid" style="width:300px">
                                        @endforeach
                                    </td>
                                </tr>
        
        
                                <tr>
                                    <td>Lead time</td>
                                    <td>{{ $rfq->delivery_lead_time }}</td>
                                </tr>
        
                                <tr>
                                    <td>Delivery Destination</td>
                                    <td> {{ $rfq->delivery_destination }}</td>
                                </tr>
        
                                <tr>
                                    <td>Delivery Address</td>
                                    <td> {{ $rfq->delivery_address }}</td>
                                </tr>
        
                                <tr>
                                    <td>Delivery Country</td>
                                    <td> {{ $rfq->delivery_country }}</td>
                                </tr>
        
                                <tr>
                                    <td>Delivery City</td>
                                    <td> {{ $rfq->delivery_city }}</td>
                                </tr>
        
                                <tr>
                                    <td>Delivery Zipcode</td>
                                    <td> {{ $rfq->delivery_zipcode }}</td>
                                </tr>
        
                                <tr>
                                    <td>Payment Terms</td>
                                    <td> {{ $rfq->payment_terms }}</td>
                                </tr>
        
                                <tr>
                                    <td>Annual sourcing amount of company</td>
                                    <td> {{ $rfq->annual_sourcing_amount }}</td>
                                </tr>
        
                                <tr>
                                    <td>RFQ Submission Date</td>
                                    <td> {{ $rfq->rfq_submission_date }}</td>
                                </tr>
        
                                <tr>
                                    <td>RFQ Deadline Date</td>
                                    <td> {{ $rfq->rfq_deadline_date }}</td>
                                </tr>
        
                                <tr>
                                    <td>Status</td>
                                    <td> 
                                        {{ $rfq->quoteStatus->name }}
                                    </td>
                                </tr>
        
        
        
                            </tbody>
                        </table>
                    </div>
        
                  
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h4>Reply for RFQ</h4>
                    <form action="{{ route('seller.rfqs.save' , ['rfq' => $rfq->id]) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
        
                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea name="message" class="form-control" id="" cols="30" rows="10">{{ old('message') }}</textarea>
                        </div>
        
                        <button type="submit" class="btn btn-primary">Reply for RFQ</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        function sort_orders(el) {
            $('#sort_orders').submit();
        }
    </script>
@endsection
 