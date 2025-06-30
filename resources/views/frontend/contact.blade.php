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
            </div>


        </div>
    </section>

@endsection