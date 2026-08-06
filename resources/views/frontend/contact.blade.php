@extends('frontend.layouts.app')


@section('content')
    <section class="pt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <div class="alert alert-primary" role="alert">
                        <h2 class="text-center">Contact Us</h2>
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <div class="row">
                    <!-- 📞 Customer Support Hotline -->
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">📞 Customer Support Hotline</h5>
                                <p class="card-text mb-1"><strong>Phone:</strong> +94 76 1837685</p>
                                <p class="card-text"><strong>Available:</strong> Monday to Friday, 8:00 AM – 6:00 PM
                                    (excluding public holidays)</p>
                            </div>
                        </div>
                    </div>

                    <!-- 📧 Email Us -->
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">📧 Email Us</h5>
                                <ul class="list-unstyled mb-0">
                                    <li><strong>General:</strong> support@valueceylonhealth.com</li>
                                    <li><strong>Seller:</strong> sellersupport@valueceylonhealth.com</li>
                                    <li><strong>Feedback:</strong> feedback@valueceylonhealth.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- 💬 Live Chat -->
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">💬 Live Chat</h5>
                                <p class="card-text">
                                    Click the chat icon at the bottom right corner of our website to chat with a support
                                    agent in real-time during working hours.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- 📍 Head Office Address -->
                    <div class="col-md-6 mb-4">
                        <div class="card h-100 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">📍 Head Office Address</h5>
                                <address class="mb-0">
                                    Value Ceylon Technologies (Pvt) Ltd<br>
                                    No. 265/4, Miriswatte, Piliyandala,<br>
                                    Colombo, Sri Lanka.
                                </address>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 📝 Send Us a Message Form -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white">
                                <h5 class="mb-0 text-white">📝 Send Us a Message</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('contact-us.store') }}" method="POST">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="name">{{ translate('Your Name') }} <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" required placeholder="{{ translate('Your Name') }}">
                                            @error('name')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">{{ translate('Your Email') }} <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" required placeholder="{{ translate('Your Email') }}">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">{{ translate('Subject') }} <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" value="{{ old('subject') }}" required placeholder="{{ translate('Subject') }}">
                                        @error('subject')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="message">{{ translate('Message') }} <span class="text-danger">*</span></label>
                                        <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message" rows="4" required placeholder="{{ translate('Your Message...') }}">{{ old('message') }}</textarea>
                                        @error('message')
                                            <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                        @enderror
                                    </div>

                                    <!-- Recaptcha -->
                                    @if(get_setting('google_recaptcha') == 1)
                                        <div class="form-group">
                                            <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                                            @if ($errors->has('g-recaptcha-response'))
                                                <span class="invalid-feedback" role="alert" style="display: block;">
                                                    <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    @endif

                                    <button type="submit" class="btn btn-primary px-4">{{ translate('Send Message') }}</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection

@section('script')
    @if(get_setting('google_recaptcha') == 1)
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    @endif
@endsection