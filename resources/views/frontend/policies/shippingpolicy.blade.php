@extends('frontend.layouts.app')

@section('meta_title'){{ translate('Shipping and Delivery Policy') }} - {{ env('APP_NAME') }}@stop
@section('meta_description'){{ translate('Shipping and Delivery Policy for Value Ceylon Technologies Pvt Ltd.') }}@stop

@section('content')
    <style>
        html {
            scroll-behavior: smooth;
        }
        .policy-container {
            color: #000000;
            border: 1px solid #e2e8f0;
        }
        .policy-container p,
        .policy-container li,
        .policy-container span,
        .policy-container td,
        .policy-container th {
            color: #000000 !important;
        }
        .policy-blue-title,
        .policy-container a {
            color: rgb(27, 108, 168) !important;
        }

        /* Section Borders & Titles */
        .policy-section-border {
            border-top: 1px solid #dee2e6 !important;
            padding-top: 25px;
            margin-top: 35px;
        }
        .policy-heading-border {
            border-bottom: 1px solid #dee2e6 !important;
            padding-bottom: 8px;
        }

        /* Delivery Table Styling */
        .shipping-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            margin-bottom: 20px;
        }
        .shipping-table th,
        .shipping-table td {
            border: 1px solid #dee2e6;
            padding: 12px 15px;
            text-align: left;
        }
        .shipping-table th {
            background-color: #f8f9fa;
            font-weight: 600;
        }
    </style>

    <!-- Page Header & Breadcrumb -->
    <section class="pt-4 mb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-left">
                    <h1 class="fw-600 h3 text-dark mb-0">{{ translate('Shipping and Delivery Policy') }}</h1>
                </div>
                <div class="col-lg-6">
                    <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item opacity-50">
                            <a class="text-reset" href="{{ route('home') }}">{{ translate('Home') }}</a>
                        </li>
                        <li class="text-dark fw-600 breadcrumb-item active">
                            {{ translate('Shipping & Delivery Policy') }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Policy Content Container -->
    <section class="mb-5">
        <div class="container">
            <div class="bg-white rounded shadow-sm p-4 p-md-5 text-left policy-container">

                <div class="policy-block">
                    <h2 class="h4 fw-700 policy-blue-title policy-heading-border mb-2">Shipping and Delivery Policy</h2>
                    <p class="mb-1"><strong>Value Ceylon Technologies Pvt Ltd</strong></p>
                    <p class="text-muted small mb-4">For Value Ceylon | <strong>Last Updated:</strong> May 2026</p>

                    <!-- 1. Overview -->
                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">1. Overview</h3>
                        <p class="lh-1-8">
                            At Value Ceylon, we aim to provide reliable, timely, and secure delivery services for all customers across Sri Lanka and selected international destinations. This Shipping and Delivery Policy explains how orders are processed, shipped, tracked, and delivered through our multivendor marketplace platform.
                        </p>
                    </div>

                    <!-- 2. Delivery Coverage -->
                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">2. Delivery Coverage</h3>
                        <h4 class="h6 fw-600 text-dark mb-2">Local Deliveries</h4>
                        <p class="mb-3">
                            We currently deliver products to all major cities and regions within Sri Lanka, subject to courier service availability.
                        </p>
                        <h4 class="h6 fw-600 text-dark mb-2">International Deliveries</h4>
                        <p class="mb-2">Selected sellers may offer international shipping to certain countries. International shipping availability depends on:</p>
                        <ul class="pl-4 mb-3">
                            <li class="mb-1">Seller capability</li>
                            <li class="mb-1">Product category restrictions</li>
                            <li class="mb-1">Customs regulations</li>
                            <li class="mb-1">Shipping partner availability</li>
                        </ul>
                    </div>

                    <!-- 3. Order Processing Time -->
                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">3. Order Processing Time</h3>
                        <ul class="pl-4 mb-3">
                            <li class="mb-1">Orders are generally processed within 1–3 business days after payment confirmation.</li>
                            <li class="mb-1">Prescription medicines and healthcare products may require additional verification before dispatch.</li>
                            <li class="mb-1">Orders placed on weekends or public holidays will be processed on the next business day.</li>
                        </ul>
                    </div>

                    <!-- 4. Estimated Delivery Time -->
                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">4. Estimated Delivery Time</h3>
                        <div class="table-responsive">
                            <table class="shipping-table">
                                <thead>
                                    <tr>
                                        <th>Delivery Type</th>
                                        <th>Estimated Time</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>Colombo & Suburbs</strong></td>
                                        <td>1–3 Business Days</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Other Areas in Sri Lanka</strong></td>
                                        <td>2–7 Business Days</td>
                                    </tr>
                                    <tr>
                                        <td><strong>International Orders</strong></td>
                                        <td>7–21 Business Days</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="mb-2">Delivery times are estimates and may vary depending on:</p>
                        <ul class="pl-4 mb-3">
                            <li class="mb-1">Courier operations</li>
                            <li class="mb-1">Weather conditions</li>
                            <li class="mb-1">Public holidays</li>
                            <li class="mb-1">Customs clearance</li>
                            <li class="mb-1">Seller processing delays</li>
                        </ul>
                    </div>

                    <!-- 5. Shipping Charges -->
                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">5. Shipping Charges</h3>
                        <p class="mb-2">Shipping fees are calculated based on:</p>
                        <ul class="pl-4 mb-3">
                            <li class="mb-1">Delivery location</li>
                            <li class="mb-1">Product weight and dimensions</li>
                            <li class="mb-1">Seller shipping policies</li>
                            <li class="mb-1">
                                Courier charges:
                                <ul class="pl-4 mt-1">
                                    <li><strong>Standard delivery (1–3 business days):</strong> Rs. 500.00</li>
                                    <li><strong>Express delivery (within 24 hours in selected areas, 9.00 am to 3.00 pm on Weekdays):</strong> Rs. 550.00</li>
                                </ul>
                            </li>
                        </ul>
                        <p class="mb-2">Some vendors may offer free delivery for qualifying orders (e.g., minimum purchase value).</p>
                        <p>Applicable shipping charges will be displayed during checkout before payment confirmation.</p>
                    </div>

                    <!-- 7. Order Tracking -->
                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">7. Order Tracking</h3>
                        <p class="mb-2">Customers will receive:</p>
                        <ul class="pl-4 mb-3">
                            <li class="mb-1">Order confirmation notifications</li>
                            <li class="mb-1">Shipping confirmation updates</li>
                            <li class="mb-1">Tracking information (where available)</li>
                        </ul>
                        <p class="mb-2">Tracking details may be sent via:</p>
                        <ul class="pl-4 mb-3">
                            <li class="mb-1">Email</li>
                            <li class="mb-1">Website dashboard notifications</li>
                        </ul>
                    </div>

                    <!-- 8. Delivery Attempts -->
                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">8. Delivery Attempts</h3>
                        <p class="mb-2">Courier partners may attempt delivery multiple times depending on their policies. If delivery fails due to:</p>
                        <ul class="pl-4 mb-2">
                            <li class="mb-1">Incorrect address</li>
                            <li class="mb-1">Customer unavailability</li>
                            <li class="mb-1">Invalid contact details</li>
                        </ul>
                        <p class="mb-2">the order may be:</p>
                        <ul class="pl-4 mb-3">
                            <li class="mb-1">Returned to the seller</li>
                            <li class="mb-1">Cancelled</li>
                            <li class="mb-1">Subject to additional re-delivery charges</li>
                        </ul>
                    </div>

                    <!-- 9. Delivery Address Responsibility -->
                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">9. Delivery Address Responsibility</h3>
                        <p class="mb-2">Customers are responsible for providing:</p>
                        <ul class="pl-4 mb-3">
                            <li class="mb-1">Accurate delivery address</li>
                            <li class="mb-1">Correct phone number</li>
                            <li class="mb-1">Recipient availability</li>
                        </ul>
                        <p>Value Ceylon is not responsible for delays or failed deliveries caused by incorrect information provided by customers.</p>
                    </div>

                    <!-- 10. Prescription Medicine Deliveries -->
                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">10. Prescription Medicine Deliveries</h3>
                        <ul class="pl-4 mb-3">
                            <li class="mb-2">A valid prescription issued by a registered medical practitioner may be required before dispatching prescription-only medicines, in compliance with the regulations and guidelines of the National Medicines Regulatory Authority (NMRA) and applicable Sri Lankan laws.</li>
                            <li class="mb-2">Certain medicines and healthcare products may be subject to legal restrictions on sale, transport, or delivery within Sri Lanka.</li>
                            <li class="mb-2">Temperature-sensitive medicines and pharmaceutical products may require special storage, packaging, and cold-chain transportation to maintain product quality and safety.</li>
                            <li class="mb-2">Customers are responsible for providing accurate prescription details, patient information, and delivery information when placing orders.</li>
                        </ul>
                        <p class="mt-3">
                            <strong>National Medicines Regulatory Authority (NMRA) Sri Lanka:</strong><br>
                            Value Ceylon reserves the right to reject, cancel, delay, or request additional verification for any order that does not comply with NMRA regulations, pharmacy standards, prescription validation requirements, or other applicable Sri Lankan pharmaceutical and healthcare regulations.
                        </p>
                    </div>

                    <!-- 12. Delayed Deliveries -->
                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">12. Delayed Deliveries</h3>
                        <p class="mb-2">While we strive to ensure timely delivery, delays may occur due to:</p>
                        <ul class="pl-4 mb-3">
                            <li class="mb-1">Natural disasters</li>
                            <li class="mb-1">Courier disruptions</li>
                            <li class="mb-1">Political unrest</li>
                            <li class="mb-1">Customs delays</li>
                            <li class="mb-1">High order volumes</li>
                        </ul>
                        <p>Value Ceylon shall not be held liable for delays beyond reasonable control.</p>
                    </div>

                    <!-- 13. Delivery Restrictions -->
                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">13. Delivery Restrictions</h3>
                        <p class="mb-2">Certain products may have shipping limitations due to:</p>
                        <ul class="pl-4 mb-3">
                            <li class="mb-1">Legal regulations</li>
                            <li class="mb-1">Safety concerns</li>
                            <li class="mb-1">Import/export restrictions</li>
                            <li class="mb-1">Seller limitations</li>
                        </ul>
                        <p>Restricted items may not be available for delivery to some regions.</p>
                    </div>

                    <!-- 14. Contact Information -->
                    <div class="mt-4">
                        <h3 class="h5 fw-600 text-dark mb-3">14. Contact Information</h3>
                        <p class="mb-2">For shipping or delivery inquiries, please contact:</p>
                        <p class="mb-1"><strong>Value Ceylon Technologies Pvt Ltd</strong></p>
                        <p class="mb-1">Website: <a href="{{ route('home') }}" class="font-weight-bold">Value Ceylon Official Website</a></p>
                        <p class="mb-1">Customer Support Email: <a href="mailto:support@valueceylon.com" class="font-weight-bold">support@valueceylon.com</a></p>
                        <p class="mb-0">Phone: +94 XX XXX XXXX</p>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection
