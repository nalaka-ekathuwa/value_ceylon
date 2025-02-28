@extends('frontend.layouts.app')

@section('content')

    <div>
        <img src="{{ static_asset('assets/img/banner/become-a-seller.webp') }}" alt="" class="img-fluid">
    </div>
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

                    <h1 class="fw-700 fs-20 fs-md-24 text-dark text-center mb-5">{{ translate('Register Your Shop') }}</h1>

                    <div class="d-block">

                        <div class="progress px-1" style="height: 3px;">
                            <div class="progress-bar" role="progressbar" style="width: 66.6%;" aria-valuenow="0"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div class="step-container d-flex justify-content-between">
                            <div class="step-circle" onclick="">1</div>
                            <div class="step-circle" onclick="">2</div>
                            <div class="step-circle" onclick="">3</div>
                            <div class="step-circle" onclick="">4</div>
                        </div>

                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form id="shop" class="" action="{{ route('seller.create-step-3.submit') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="bg-white border mb-4">
                            <div class="fs-15 fw-600 p-3">
                                {{ translate('Product Information') }}
                            </div>
                            <div class="p-3">
                                <div class="form-group">
                                    <label>Product/Service Category <span class="text-primary">*</span></label>
                                    <select name="product_category" class="form-control" id="" required>
                                        @forelse ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @empty
                                            <option value=""></option>
                                        @endforelse

                                    </select>

                                    @error('product_category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Password<span class="text-primary">*</span></label>
                                    <input type="password" class="form-control" id="password" name="password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Password Confirmation <span class="text-primary">*</span></label>
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation">
                                    @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <a href="#switch_password_visibility" id="switch_password_visibility"
                                    onclick="togglePasswordVisibility()" class="d-block text-right">Show passwords</a>



                                <div class="form-group">
                                    <label>Certifications /Accreditations / Licenses <span
                                            class="text-primary"></span></label>
                                    <input type="file" multiple class="form-control" id="certificates"
                                        name="certificates[]">
                                    @error('certificates')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>


                            </div>
                        </div>


                        @if (get_setting('google_recaptcha') == 1)
                            <div class="form-group mt-2 mx-auto row">
                                <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                            </div>
                        @endif

                        <div class="text-right">
                            <button type="submit"
                                class="btn btn-primary fw-600 rounded-0">{{ translate('Next step') }}</button>
                        </div>
                    </form>
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
        });


        function togglePasswordVisibility() {
            this.event.preventDefault();
            const passwordInput = document.getElementById("password");
            const passwordConfirmationInput = document.getElementById("password_confirmation");
            const toggleButton = document.getElementById("switch_password_visibility");


            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordConfirmationInput.type = "text";
                toggleButton.textContent = "Hide passwords";
            } else {
                passwordInput.type = "password";
                passwordConfirmationInput.type = "password";
                toggleButton.textContent = "Show passwords";
            }
        }
    </script>
@endsection
