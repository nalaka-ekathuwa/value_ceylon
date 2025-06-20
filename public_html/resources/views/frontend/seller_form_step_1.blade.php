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
                            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0"
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

                    <form id="shop" class="" action="{{ route('seller.create-step-1.submit') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="bg-white border mb-4">
                            <div class="fs-15 fw-600 p-3">
                                {{ translate('Personal Information') }}
                            </div>
                            <div class="p-3">
                                <div class="form-group">
                                    <label>First name <span class="text-primary">*</span></label>
                                    <input type="text"
                                        class="form-control rounded-0{{ $errors->has('first_name') ? ' is-invalid' : '' }}"
                                        value="{{ old('first_name') }}" placeholder="{{ translate(' First Name') }}"
                                        name="first_name" required>
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Last name <span class="text-primary">*</span></label>
                                    <input type="text"
                                        class="form-control rounded-0{{ $errors->has('last_name') ? ' is-invalid' : '' }}"
                                        value="{{ old('last_name') }}" placeholder="{{ translate(' Last Name') }}"
                                        name="last_name" required>
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Mobile number <span class="text-primary">*</span></label>
                                    <input type="text"
                                        class="form-control rounded-0{{ $errors->has('mobile_number') ? ' is-invalid' : '' }}"
                                        value="{{ old('mobile_number') }}" placeholder="{{ translate('Mobile number') }}"
                                        name="mobile_number" required>
                                    @error('mobile_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>{{ translate('Your Email') }} <span class="text-primary">*</span></label>
                                    <input type="email"
                                        class="form-control rounded-0{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        value="{{ old('email') }}" placeholder="{{ translate('Email') }}" name="email"
                                        required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>{{ translate('Country or region') }} <span class="text-primary">*</span></label>
                                    <input type="text"
                                        class="form-control rounded-0{{ $errors->has('country') ? ' is-invalid' : '' }}"
                                        value="{{ old('country') }}" placeholder="{{ translate('Country or region') }}"
                                        name="country" required>
                                    @error('country')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>{{ translate('City') }} <span class="text-primary">*</span></label>
                                    <input type="text"
                                        class="form-control rounded-0{{ $errors->has('city') ? ' is-invalid' : '' }}"
                                        value="{{ old('city') }}" placeholder="{{ translate('City') }}" name="city"
                                        required>
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>{{ translate('Currency') }} <span class="text-primary">*</span></label>
                                    <select name="currency" id="currency"
                                        class="form-control {{ $errors->has('currency') ? ' is-invalid' : '' }}">
                                        <option value="">Select currency</option>
                                        @forelse ($currencies as $currency)
                                            <option value="{{ $currency->id }}">{{ $currency->name }}</option>
                                        @empty
                                            <option value=""></option>
                                        @endforelse
                                    </select>

                                    @error('currency')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>{{ translate('Language') }} <span class="text-primary">*</span></label>
                                    <select name="language" id="language"
                                        class="form-control {{ $errors->has('currency') ? ' is-invalid' : '' }}">
                                        <option value="">Select language</option>
                                        @forelse ($languages as $language)
                                            <option value="{{ $language->id }}">{{ $language->name }}</option>
                                        @empty
                                            <option value=""></option>
                                        @endforelse
                                    </select>

                                    @error('language')
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
