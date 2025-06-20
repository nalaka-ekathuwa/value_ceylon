@extends('frontend.layouts.app')

@section('content')
<section class="pt-4 mb-4">
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-6 text-center text-lg-left">
                {{-- <h1 class="fw-700 fs-24 text-dark">{{ translate('Register your shop')}}</h1> --}}
            </div>
            <div class="col-lg-6">
                <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end">
                    <li class="breadcrumb-item has-transition opacity-50 hov-opacity-100">
                        <a class="text-reset" href="{{ route('home') }}">{{ translate('Home') }}</a>
                    </li>
                    <li class="text-dark fw-600 breadcrumb-item">
                        "{{ translate('Register your shop') }}"
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="pt-4 mb-4">
    <div class="container">
        <div class="row">
            <div class="col-xxl-5 col-xl-6 col-md-8 mx-auto">
                <h1 class="fw-700 fs-20 fs-md-24 text-dark text-center mb-3">{{ translate('Register Your Shop') }}</h1>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif


                <div id="container" class="container mt-5">
                    <div class="progress px-1" style="height: 3px;">
                        <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="step-container d-flex justify-content-between">
                        <div class="step-circle" onclick="displayStep(1)">1</div>
                        <div class="step-circle" onclick="displayStep(2)">2</div>
                        <div class="step-circle" onclick="displayStep(3)">3</div>
                        <div class="step-circle" onclick="displayStep(4)">4</div>
                    </div>

                    <form id="multi-step-form" method="POST" action="{{ route('shops.store-shop') }}">
                        @csrf
                        <div class="step step-1">
                            <!-- Step 1 form fields here -->
                            <h3>Personal Information</h3>
                            <div class="mb-3">
                                <label for="field1" class="form-label">First name*:</label>
                                <input type="text" class="form-control" id="first_name" name="first_name">
                               
                            </div>

                            <div class="mb-3">
                                <label for="field1" class="form-label">Last name*:</label>
                                <input type="text" class="form-control" id="last_name" name="last_name">
                               
                            </div>

                            <div class="mb-3">
                                <label for="field1" class="form-label">Mobile number*:</label>
                                <input type="phone" class="form-control" id="phone" name="phone">
                                
                            </div>

                            <div class="mb-3">
                                <label for="field1" class="form-label">Email*:</label>
                                <input type="email" class="form-control" id="email" name="email">
                               
                            </div>

                            <div class="mb-3">
                                <label for="field2" class="form-label">Country:</label>

                                <select name="country" id="country" class="form-control">
                                    <option value="">Select country</option>
                                    @forelse ($countries as $country )
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @empty
                                    <option value=""></option>
                                    @endforelse
                                </select>
                            </div>

                            <div class="mb-3" id="state_holder">
                                <label for="field2" class="form-label">States:</label>

                                <select name="state" id="state" class="form-control">
                                    <option value="">Select country first</option>
                                </select>
                            </div>

                            <div class="mb-3" id="city_holder">
                                <label for="field2" class="form-label">Cities:</label>

                                <select name="city" id="city" class="form-control">
                                    <option value="">Select state first</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="field2" class="form-label">Currency:</label>

                                <select name="currency" id="currency" class="form-control">
                                    <option value="">Select currency</option>
                                    @forelse ($currencies as $currency )
                                    <option value="{{ $currency->id }}">{{ $currency->name }}</option>
                                    @empty
                                    <option value=""></option>
                                    @endforelse
                                </select>
                            </div>


                            <div class="mb-3">
                                <label for="field2" class="form-label">Language:</label>

                                <select name="language" id="language" class="form-control">
                                    <option value="">Select language</option>
                                    @forelse ($languages as $language )
                                    <option value="{{ $language->id }}">{{ $language->name }}</option>
                                    @empty
                                    <option value=""></option>
                                    @endforelse
                                </select>
                            </div>




                            <button type="button" class="btn btn-primary next-step">Next</button>
                        </div>

                        <div class="step step-2">
                            <!-- Step 2 form fields here -->
                            <h3>Business Information</h3>
                            <div class="mb-3">
                                <label for="field3" class="form-label">Company name or Business name:</label>
                                <input type="text" class="form-control" id="business_name" name="business_name">
                            </div>
                            <div class="mb-3">
                                <label for="field3" class="form-label">Company profile /Description:</label>
                                <textarea class="form-control" name="business_description" id="business_description" cols="30" rows="5"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="field3" class="form-label">Company address:</label>
                                <input type="text" class="form-control" id="business_address" name="business_address">
                            </div>

                            <div class="mb-3">
                                <label for="field3" class="form-label">Legal Status:</label>
                                <select name="type_of_registration" id="type_of_registration" class="form-control">
                                    <option value="Unregistered">Unregistered</option>
                                    <option value="Sole proprietorship">Sole proprietorship</option>
                                    <option value="Partnership">Partnership</option>
                                    <option value="Private company">Private company</option>
                                    <option value="Public company">Public company</option>
                                    <option value="Cooperative society">Cooperative society</option>
                                    <option value="State owned">State owned</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="field3" class="form-label">Number of employees:</label>
                                <input type="number" class="form-control" id="number_of_employees" name="number_of_employees">
                            </div>


                            <div class="mb-3">
                                <label for="field3" class="form-label">Production Volume:</label>
                                <input type="text" class="form-control" id="manufacturing_capacity" name="manufacturing_capacity">
                            </div>

                            <div class="mb-3">
                                <label for="field3" class="form-label">Your designation:</label>
                                <input type="text" class="form-control" id="designation" name="designation">
                            </div>


                            <div class="mb-3">
                                <label for="field3" class="form-label">Business registration number:</label>
                                <input type="text" class="form-control" id="br_number" name="br_number">
                            </div>

                            <div class="mb-3">
                                <label for="field3" class="form-label">Business registration date:</label>
                                <input type="date" class="form-control" id="br_registration_date" name="br_registration_date">
                            </div>

                            <div class="mb-3">
                                <label for="field3" class="form-label">Company website:</label>
                                <input type="text" class="form-control" id="company_website" name="company_website">
                            </div>

                            <button type="button" class="btn btn-primary prev-step">Previous</button>
                            <button type="button" class="btn btn-primary next-step">Next</button>
                        </div>

                        <div class="step step-3">
                            <!-- Step 3 form fields here -->
                            <h3>Product Information</h3>

                            <div class="mb-3">
                                <label for="field3" class="form-label">Product/Service Category:</label>
                                <input type="text" class="form-control" id="product_category" name="product_category">
                            </div>

                            <div class="mb-3">
                                <label for="field1" class="form-label">Password*:</label>
                                <input type="password" class="form-control" id="password" name="password">
                               
                            </div>

                            <div class="mb-3">
                                <label for="field1" class="form-label">Confirm Password*:</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                                
                            </div>

                            <div class="mb-3">
                                <label for="field3" class="form-label">Certifications /Accreditations/Licenses:</label>
                                <textarea class="form-control" name="certifications" id="certifications" cols="30" rows="5"></textarea>
                            </div>

                            <button type="button" class="btn btn-primary prev-step">Previous</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                        <div class="step step-4">
                            <!-- Step 4 form fields here -->
                            <h3>Product Information</h3>






                            <button type="button" class="btn btn-primary prev-step">Previous</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript">
    // making the CAPTCHA  a required field for form submission
    $(document).ready(function() {
        $("#shop").on("submit", function(evt) {
            var response = grecaptcha.getResponse();
            if (response.length == 0) {
                //reCaptcha not verified
                alert("please verify you are human!");
                evt.preventDefault();
                return false;
            }
            //captcha verified
            //do the rest of your validations here
            $("#reg-form").submit();
        });


        $(document).on('change', "#country", function() {
            var $this = $(this);
            // console.log($this.val());

            $.get(
                "{{ url('shops/get_state/') }}/" + $this.val(),
                function(data, status) {
                    $('#state_holder').html(data);
                }
            );

        });


        $(document).on('change', "#state", function() {
            var $thisState = $(this);
            // console.log($thisState.val());

            $.get(
                "{{ url('shops/get_cities/') }}/" + $thisState.val(),
                function(data, status) {
                    $('#city_holder').html(data);
                }
            );

        });
    });
</script>
@endsection