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
            <h5 class="mb-0 fs-18 fw-700 text-dark">{{ translate('Update Your Request for Quotation')}}</h5>
        </div>
        <div class="card-body">
            
            <form action="{{ route('customer.rfq.update', ['rfq' => $rfq->id ]) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')

                <h5>Buyer Information</h5>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">First Name</label>
                            <input type="text" name="first_name" class="form-control"
                                value="{{ old('first_name', $rfq->first_name) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Last name </label>
                            <input type="text" name="last_name" class="form-control"
                                value="{{ old('last_name', $rfq->last_name) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Email address </label>
                            <input type="email" name="email" class="form-control"
                                value="{{ old('email', $rfq->email) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="">Designation </label>
                            <input type="text" name="designation" class="form-control"
                                value="{{ old('designation', $rfq->designation) }}" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Country </label>
                            <input type="text" name="country" class="form-control"
                                value="{{ old('country', $rfq->country) }}" required>
                        </div>

                        <div class="form-group">
                            <label for="">City </label>
                            <input type="text" name="city" class="form-control" value="{{ old('city', $rfq->city) }}"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="">Contact Number </label>
                            <input type="text" name="contact_number" class="form-control"
                                value="{{ old('contact_number', $rfq->contact_number) }}" required>
                        </div>
                    </div>

                </div>

                <h5 class="mt-3">Business Information</h5>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Company Name</label>
                            <input type="text" name="company_name" class="form-control"
                                value="{{ old('company_name', $rfq->company_name) }}" required>
                        </div>


                        <div class="form-group">
                            <label for="">Company Email address </label>
                            <input type="email" name="company_email" class="form-control"
                                value="{{ old('company_email', $rfq->company_email) }}" required>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Company Address </label>
                            <input type="text" name="company_address" class="form-control"
                                value="{{ old('company_address', $rfq->company_address) }}" required>
                        </div>

                    </div>
                </div>


                <h5 class="mt-3">Sourcing Requirements</h5>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Product Name</label>
                            <input type="text" name="product_name" class="form-control"
                                value="{{ old('product_name', $rfq->product_name) }}" required>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <label for="">Product Category </label>
                        <select name="product_category" class="form-control" id="" required>
                            @forelse ($categories as $category)
                                <option @selected($category->id == old($rfq->product_category)) value="{{ $category->id }}">{{ $category->name }}
                                </option>
                            @empty
                                <option value=""></option>
                            @endforelse

                        </select>
                    </div>

                    <div class="col-md-12">
                        <label for="">Product Detailed Specifications / Customizations </label>
                        <p><small>Please mention about your product requirements and product features to make sure Fast
                                and
                                efficient responses from suppliers. You can include Raw material, price expectations,
                                Size/Dimensions ,Brand Names, Standards ,Required Company/Product Certification(s) and
                                packaging requirements.(TRANSPARENT)</small></p>
                        <textarea name="product_customization" id="" cols="30" rows="10" class="form-control">{{ old('product_customization', $rfq->product_customization) }}</textarea>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">Quantity</label>
                        <input type="text" name="quantity" class="form-control"
                            value="{{ old('quantity', $rfq->quantity) }}" required>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">Package type</label>
                        <select name="package_type_id" class="form-control" id="" required>
                            @forelse ($package_types as $package_type)
                                <option @selected($package_type->id == old($rfq->$package_type)) value="{{ $package_type->id }}">
                                    {{ $package_type->name }}</option>
                            @empty
                                <option value=""></option>
                            @endforelse

                        </select>
                    </div>


                    <div class="col-md-6 mt-3">
                        <label for="">Product Images</label>
                        <input type="file" class="form-control" multiple name="product_images[]">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">Lead time </label>
                        <input type="text" name="delivery_lead_time"
                            value="{{ old('delivery_lead_time', $rfq->delivery_lead_time) }}" class="form-control">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">Delivery Destination </label>
                        <input type="text" name="delivery_destination"
                            value="{{ old('delivery_destination', $rfq->delivery_destination) }}" class="form-control">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">Delivery Address </label>
                        <input type="text" name="delivery_address" class="form-control"
                            value="{{ old('delivery_address', $rfq->delivery_address) }}">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">Delivery Country</label>
                        <input type="text" name="delivery_country" class="form-control"
                            value="{{ old('delivery_country', $rfq->delivery_country) }}">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">Delivery City</label>
                        <input type="text" name="delivery_city" class="form-control"
                            value="{{ old('delivery_city', $rfq->delivery_city) }}">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">Delivery Zipcode</label>
                        <input type="text" name="delivery_zipcode" class="form-control"
                            value="{{ old('delivery_zipcode', $rfq->delivery_zipcode) }}">
                    </div>

                    <div class="col-md-12 mt-3">
                        <label for="">Payment Terms</label>
                        <textarea name="payment_terms" id="" cols="30" rows="3" class="form-control">{{ old('payment_terms', $rfq->payment_terms) }}</textarea>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">Annual Sourcing Amount of company</label>
                        <input type="text" name="annual_sourcing_amount" class="form-control"
                            value="{{ old('annual_sourcing_amount', $rfq->annual_sourcing_amount) }}">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">RFQ Submission Date </label>
                        <input type="date" name="rfq_submission_date" class="form-control"
                            value="{{ old('rfq_submission_date', $rfq->rfq_submission_date) }}">
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="">RFQ Deadline Date</label>
                        <input type="date" name="rfq_deadline_date" class="form-control"
                            value="{{ old('rfq_deadline_date', $rfq->rfq_deadline_date) }}">
                    </div>
                    
                   
                </div>

                <div class="form-group mt-3 text-right">
                    <button type="submit" class="btn btn-primary" > Update Request </button>
                </div>
                
            </form>
        </div>
    </div>

    <!-- Pagination -->
    <div class="aiz-pagination">
      
    </div>
@endsection
