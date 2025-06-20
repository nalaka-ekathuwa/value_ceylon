@extends('frontend.layouts.user_panel')

@section('panel_content')
    <div class="aiz-titlebar mb-4">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h5 class="fs-20 fw-700 text-dark">{{ translate('My RFQ') }}</h5>
            </div>
        </div>
    </div>

    <!-- RFQ -->
    <div class="row">
        <div class="col-lg-6">
            <!-- Basic Info-->
            <div class="card rounded-0 shadow-none border">
                <div class="card-header pt-4 border-bottom-0">
                    <h5 class="mb-0 fs-18 fw-700 text-dark">{{ translate('View Request for Quotation') }}</h5>
                </div>
                <div class="card-body">
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
                                <td>{{ $rfq->quantity }} {{ $rfq->package_type->name }}</td>
                            </tr>

                            <tr>
                                <td>Images</td>
                                <td>
                                    
                                    @foreach ($rfq->images as $image)
                                        <img src="{{ static_asset("/rfq_images/$rfq->id/$image->image")  }}" alt="" class="img-fluid">
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
                                    {{$rfq->quoteStatus->name}}
                                </td>
                            </tr>



                        </tbody>
                    </table>

                </div>
            </div>

        </div>


        <div class="col-lg-6">
            @if($replies->isNotEmpty())
            <h4>Replies</h4>
            @foreach ($replies as $reply )
            <div class="card">
                <div class="card-body">
                    <h5>{{ $reply->title }}</h5>
                    
                    <p>{!!  nl2br($reply->message)  !!}</p>

                    <hr>
                    <div><strong>Shop: </strong>{{ $reply->shop->name }}</div>
                    <div><strong>Phone: </strong>{{ $reply->shop->phone }}</div>
                    <div><strong>Email: </strong>{{ $reply->user->email }}</div>

                    <p class="text-right text-small text-muted">  Updated : {{ $reply->updated_at }} </p>

                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
@endsection
