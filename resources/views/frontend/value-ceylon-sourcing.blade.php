@extends('frontend.layouts.app')

@section('content')
    <section class="request-for-quotation my-5">
        <div class="container">
            <div class="row">

                <div class="col-md-12 mb-3">
                    <img class="img-fluid" src="{{ static_asset('assets/img/banner/sourcing-banner.jpg') }}">
                </div>

                {{-- <div class="col-md-12">
                    <h1 class="mb-5">Value Ceylon Sourcing… <small>Connect with Sri Lankan Verified B2B
                            Suppliers...</small></h1>



                    <h3>Why join Value Ceylon Sourcing</h3>
                    <ul>
                        <li>
                            <h4>Verified by Value Ceylon Quality Assurance Team</h4>
                        </li>
                        <li>
                            <h4>Compliance with GMP Guidelines </h4>
                        </li>
                        <li>
                            <h4>Customized Product Sourcing</h4>
                        </li>
                        <li>
                            <h4>Cost-Saving Solutions</h4>
                        </li>
                        <li>
                            <h4>Efficient and Reliable Service </h4>
                        </li>

                    </ul>
                </div>

                <div class="col-md-12 my-5">
                    <h3>Value Ceylon Business Matching specialist will contact you and provide suitable supplier
                        recommendations soon.</h3>
                </div> --}}
            </div>

            <section class="container my-5">
  <!-- Page Header -->
  <div class="text-center mb-4">
    <h2 class="font-weight-bold">Value Ceylon Health Sourcing</h2>
    <p class="lead">Connect with Sri Lankan Verified Pharmaceutical Suppliers</p>
  </div>

  <!-- Intro Card -->
  <div class="card shadow-sm mb-4">
    <div class="card-body">
      <h5 class="card-title">Looking for a trusted source of pharmaceutical and healthcare products in Sri Lanka?</h5>
      <p class="card-text">
        <strong>ValueCeylonHealth.com</strong> is your dedicated multi-vendor pharmacy platform, designed to connect clinics, hospitals, pharmacies, and healthcare professionals with licensed, NMRA-compliant suppliers across the island.
      </p>
    </div>
  </div>

  <!-- Feature Grid -->
  <div class="row">
    <div class="col-md-6 mb-4">
      <div class="card border-left-primary shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">🛡️ Verified by Quality Assurance Team</h5>
          <p class="card-text">All sellers are screened and approved based on NMRA registration, product authenticity, and ethical practices.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <div class="card border-left-success shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">⚕️ NMRA & GMP Compliance</h5>
          <p class="card-text">We ensure all sourced products meet Sri Lankan health regulations and GMP standards.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <div class="card border-left-info shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">🔍 Customized Product Sourcing</h5>
          <p class="card-text">Can’t find a specific item? Submit a request — we’ll match you with the right supplier.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <div class="card border-left-warning shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">💰 Cost-Saving B2B Solutions</h5>
          <p class="card-text">Get wholesale pricing, manufacturer deals, and discounts for high-volume orders.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <div class="card border-left-danger shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">🚀 Reliable Fulfillment</h5>
          <p class="card-text">We coordinate with vendors to ensure on-time delivery, verified packaging, and proper storage.</p>
        </div>
      </div>
    </div>

    <div class="col-md-6 mb-4">
      <div class="card border-left-dark shadow-sm h-100">
        <div class="card-body">
          <h5 class="card-title">🤝 Business Matching Support</h5>
          <p class="card-text">Our specialists will recommend the best suppliers based on your hospital, clinic, or NGO needs.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Call to Action -->
  <div class="card bg-light shadow-sm mt-4">
    <div class="card-body text-center">
      <h5 class="mb-3">🚀 Get Started Today</h5>
      <p class="mb-1">Submit your sourcing request through <strong>ValueCeylonHealth.com</strong> and streamline your procurement process with confidence.</p>
      <p class="mb-0"><strong>We make your health business full of value.</strong></p>
    </div>
  </div>
</section>


            

            <div class="row mt-4 justify-content-center">
                <div class="col-md-12">
                    <div class="get-quotation">

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

                        <form action="{{ route('customer.rfq.save') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h3>Submit Your Sourcing Request Now -<small>Request for Quotations</small> </h3>

                            @if (!isCustomer())
                                <h5 class="mt-4 p-2 px-4 bg-danger text-white ">Please login as a customer to create RFQ.
                                </h5>
                            @endif

                            <h5>Buyer Information</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">First Name</label>
                                        <input type="text" name="first_name" class="form-control"
                                            value="{{ old('first_name') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Last name </label>
                                        <input type="text" name="last_name" class="form-control"
                                            value="{{ old('last_name') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Email address </label>
                                        <input type="email" name="email" class="form-control"
                                            value="{{ old('email') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Designation </label>
                                        <input type="text" name="designation" class="form-control"
                                            value="{{ old('designation') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Country </label>
                                        <input type="text" name="country" class="form-control"
                                            value="{{ old('country') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">City </label>
                                        <input type="text" name="city" class="form-control"
                                            value="{{ old('city') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="">Contact Number </label>
                                        <input type="text" name="contact_number" class="form-control"
                                            value="{{ old('contact_number') }}" required>
                                    </div>
                                </div>
                            </div>


                            <h5 class="mt-3">Business Information</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Company Name</label>
                                        <input type="text" name="company_name" class="form-control"
                                            value="{{ old('company_name') }}" required>
                                    </div>


                                    <div class="form-group">
                                        <label for="">Company Email address </label>
                                        <input type="email" name="company_email" class="form-control"
                                            value="{{ old('company_email') }}" required>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Company Address </label>
                                        <input type="text" name="company_address" class="form-control"
                                            value="{{ old('company_address') }}" required>
                                    </div>

                                </div>
                            </div>


                            <h5 class="mt-3">Sourcing Requirements</h5>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Product Name</label>
                                        <input type="text" name="product_name" class="form-control"
                                            value="{{ old('product_name') }}" required>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <label for="">Product Category </label>
                                    <select name="product_category" class="form-control" id="" required>
                                        @forelse ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @empty
                                            <option value=""></option>
                                        @endforelse

                                    </select>
                                </div>

                                <div class="col-md-12">
                                    <label for="">Product Detailed Specifications / Customizations </label>
                                    <p><small>Please mention about your product requirements and product features to make
                                            sure Fast and efficient responses from suppliers. You can include Raw material,
                                            price expectations, Size/Dimensions ,Brand Names, Standards ,Required
                                            Company/Product Certification(s) and packaging
                                            requirements.(TRANSPARENT)</small></p>
                                    <textarea name="product_customization" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">Quantity</label>
                                    <input type="text" name="quantity" class="form-control"
                                        value="{{ old('quantity') }}" required>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">Package type</label>
                                    <select name="package_type_id" class="form-control" id="" required>
                                        @forelse ($package_types as $package_type)
                                            <option value="{{ $package_type->id }}">{{ $package_type->name }}</option>
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
                                        value="{{ old('delivery_lead_time') }}" class="form-control">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">Delivery Destination </label>
                                    <input type="text" name="delivery_destination"
                                        value="{{ old('delivery_destination') }}" class="form-control">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">Delivery Address </label>
                                    <input type="text" name="delivery_address" value="{{ old('delivery_address') }}"
                                        class="form-control">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">Delivery Country</label>
                                    <input type="text" name="delivery_country" value="{{ old('delivery_country') }}"
                                        class="form-control">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">Delivery City</label>
                                    <input type="text" name="delivery_city" value="{{ old('delivery_city') }}"
                                        class="form-control">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">Delivery Zipcode</label>
                                    <input type="text" name="delivery_zipcode" value="{{ old('delivery_zipcode') }}"
                                        class="form-control">
                                </div>

                                <div class="col-md-12 mt-3">
                                    <label for="">Payment Terms</label>
                                    <textarea name="payment_terms" id="" cols="30" rows="3" class="form-control"></textarea>
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">Annual Sourcing Amount of company</label>
                                    <input type="text" name="annual_sourcing_amount"
                                        value="{{ old('annual_sourcing_amount') }}" class="form-control">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">RFQ Submission Date </label>
                                    <input type="date" name="rfq_submission_date"
                                        value="{{ old('rfq_submission_date') }}" class="form-control">
                                </div>

                                <div class="col-md-6 mt-3">
                                    <label for="">RFQ Deadline Date</label>
                                    <input type="date" name="rfq_deadline_date"
                                        value="{{ old('rfq_deadline_date') }}" class="form-control">
                                </div>


                                <div class="col-md-12 mt-3">
                                    <p><small>By submitting the sourcing request form, you will also gain the membership for
                                            Value Ceylon Online Sourcing. A registration confirmation will be sent to you
                                            later to access all the benefits and stay up to date with the latest offerings.
                                            Please see our Privacy Policy and Cookie Policy for information regarding the
                                            processing of your data. By clicking "Submit" you agree that you have read our
                                            Privacy and Cookie Policies and accepted our Terms and conditions.
                                        </small></p>
                                </div>

                            </div>


                            <div class="form-group mt-3 text-right">
                                @if (isCustomer())
                                    <button type="submit" class="btn btn-primary"> Send Request </button>
                                @else
                                    <a href="{{ route('user.login') }}">Login as a customer to post a RFQ</a>
                                @endif
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
