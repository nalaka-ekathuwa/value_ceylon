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
                            <div class="progress-bar" role="progressbar" style="width: 33.3%;" aria-valuenow="0"
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

                    <form id="shop" class="" action="{{ route('seller.create-step-2.submit') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="bg-white border mb-4">
                            <div class="fs-15 fw-600 p-3">
                                {{ translate('Business Information') }}
                            </div>
                            <div class="p-3">
                                <div class="form-group">
                                    <label>Business name <span class="text-primary">*</span></label>
                                    <input type="text"
                                        class="form-control rounded-0 {{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                        id="business_name" name="business_name" value="{{ old('business_name') }}">

                                    @error('business_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Company profile /Description <span class="text-primary">*</span></label>
                                    <textarea class="form-control" name="business_description" id="business_description" cols="30" rows="5">{{ old('business_description') }}</textarea>

                                    @error('business_description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Company address <span class="text-primary">*</span></label>
                                    <input type="text" class="form-control" id="business_address"
                                        name="business_address">
                                    @error('business_address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Legal Status <span class="text-primary">*</span></label>
                                    <select name="type_of_registration" id="type_of_registration" class="form-control">
                                        <option value="Unregistered">Unregistered</option>
                                        <option value="Sole proprietorship">Sole proprietorship</option>
                                        <option value="Partnership">Partnership</option>
                                        <option value="Private company">Private company</option>
                                        <option value="Public company">Public company</option>
                                        <option value="Cooperative society">Cooperative society</option>
                                        <option value="State owned">State owned</option>
                                    </select>
                                    @if ($errors->has('type_of_registration'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Number of employees <span class="text-primary">*</span></label>
                                    <input type="number" class="form-control" id="number_of_employees"
                                        name="number_of_employees">
                                    @error('number_of_employees')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>{{ translate('Production Volume') }} <span class="text-primary">*</span></label>
                                    <input type="text" class="form-control" id="manufacturing_capacity"
                                        name="manufacturing_capacity">
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>{{ translate('Your designation') }} <span class="text-primary">*</span></label>
                                    <input type="text" class="form-control" id="your_designation"
                                        name="your_designation">

                                    @error('your_designation')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>{{ translate('Business registration number') }} <span
                                            class="text-primary">*</span></label>
                                    <input type="text" class="form-control" id="br_number" name="br_number">

                                    @error('br_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>{{ translate('Business registration date') }} <span
                                            class="text-primary">*</span></label>
                                    <input type="date" class="form-control" id="br_registration_date"
                                        name="br_registration_date">

                                    @error('br_registration_date')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>{{ translate('Company website') }} <span class="text-primary"></span></label>
                                    <input type="text" class="form-control" id="company_website"
                                        name="company_website">

                                    @error('company_website')
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
    </script>
@endsection
