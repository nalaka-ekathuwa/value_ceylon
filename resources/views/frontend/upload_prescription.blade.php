@extends('frontend.layouts.app')

@section('content')
    <section class="request-for-quotation my-5">
        <div class="container">
            <div class="row">

                <!-- <div class="col-md-12 mb-3">
                        <img class="img-fluid" src="{{ static_asset('assets/img/banner/sourcing-banner.jpg') }}">
                    </div> -->

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

                            <form action="{{ route('customer.prescription.save') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <h3>Submit Your Prescription </h3>

                                @if (!isCustomer())
                                    <h5 class="mt-4 p-2 px-4 bg-danger text-white ">Please login as a customer to Submit
                                        prescription
                                    </h5>
                                @endif

                                <h5>Customer Information</h5>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Customer Name</label>
                                            <input type="text" name="cus_name" class="form-control"
                                                value="{{ old('cus_name') }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Contact Number </label>
                                            <input type="text" name="contact_number" class="form-control"
                                                value="{{ old('contact_number') }}" required>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Email address </label>
                                            <input type="email" name="email" class="form-control"
                                                value="{{ old('email') }}" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="">Address </label>
                                            <input type="text" name="address" class="form-control"
                                                value="{{ old('address') }}" required>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="mt-3">Patient Information</h5>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Patient Name </label>
                                            <input type="text" name="patient_name" class="form-control"
                                                value="{{ old('patient_name') }}" required>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                           <label for="">Patient Age</label>
                                            <input type="number" name="patient_age" class="form-control"
                                                   max="130" min="0" value="{{ old('patient_age') }}" required>
                                        </div>
                                    </div>
                                </div>


                                <h5 class="mt-3">Prescription Details</h5>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Duration</label>
                                            <select name="duration" class="form-control" id="" required>
                                                <option value="1">one week</option>
                                                <option value="2">two weeks</option>
                                                <option value="3">three weeks</option>
                                                <option value="4">one month</option>
                                                <option value="5">two months</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="">Delivery Method </label>
                                            <select name="delivery_method" class="form-control" id="" required>
                                                <option value="1">Method one</option>
                                                <option value="2">Method 2</option>
                                                <option value="3">Method 3</option>
                                                <option value="4">Method 4</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="">Upload Prescription </label>
                                        <p><small>Please mention about your product requirements and product features to
                                                make
                                                sure Fast and efficient responses from suppliers. You can include Raw
                                                material,
                                                price expectations, Size/Dimensions ,Brand Names, Standards ,Required
                                                Company/Product Certification(s) and packaging
                                                requirements.(TRANSPARENT)</small></p>
                                        <input name="prescription" id="" type="file" class="form-control" required>
                                    </div>



                                    <div class="col-md-12 mt-3">
                                        <label for="">Patient Allergies if have</label>
                                        <textarea name="allergies" id="" cols="30" rows="3" class="form-control"></textarea>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <p><small>By submitting the sourcing request form, you will also gain the membership
                                                for
                                                Value Ceylon Online Sourcing. A registration confirmation will be sent to
                                                you
                                                later to access all the benefits and stay up to date with the latest
                                                offerings.
                                                Please see our Privacy Policy and Cookie Policy for information regarding
                                                the
                                                processing of your data. By clicking "Submit" you agree that you have read
                                                our
                                                Privacy and Cookie Policies and accepted our Terms and conditions.
                                            </small></p>
                                    </div>

                                </div>


                                <div class="form-group mt-3 text-right">
                                    @if (isCustomer())
                                        <button type="submit" class="btn btn-primary"> Send Prescription </button>
                                    @else
                                        <a href="{{ route('user.login') }}">Login as a customer to submit prescription</a>
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