@extends('frontend.layouts.app')

@section('meta_title')About Us – ValueCeylon.com @stop

@section('content')
    <style>
        html {
            scroll-behavior: smooth;
        }
        .about-container {
            color: #000000;
            border: 1px solid #e2e8f0;
            font-size: 1.05rem;
        }
        .about-container p,
        .about-container li,
        .about-container span,
        .about-container div {
            color: #1e293b;
            line-height: 1.8;
            font-size: 1.025rem;
        }
        .brand-color-text {
            color: rgb(27, 108, 168) !important;
        }
        .brand-bg-header {
            background-color: rgb(27, 108, 168) !important;
            color: #ffffff !important;
        }
        .brand-bg-header * {
            color: #ffffff !important;
        }
        .about-card-primary {
            border: 1px solid rgba(27, 108, 168, 0.2);
            border-top: 4px solid rgb(27, 108, 168);
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .about-card-primary:hover {
            box-shadow: 0 10px 25px rgba(27, 108, 168, 0.1) !important;
            transform: translateY(-2px);
        }
        .about-card-secondary {
            border: 1px solid #e2e8f0;
            border-top: 4px solid #0d9488;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        .about-card-secondary:hover {
            box-shadow: 0 10px 25px rgba(13, 148, 136, 0.1) !important;
            transform: translateY(-2px);
        }
        .about-feature-box {
            background-color: #f8fafc;
            border-left: 4px solid rgb(27, 108, 168);
            padding: 1.25rem 1.5rem;
            border-radius: 4px 8px 8px 4px;
        }
        .why-choose-item {
            position: relative;
            padding-left: 2rem;
            margin-bottom: 0.85rem;
            font-weight: 500;
        }
        .why-choose-item::before {
            content: "✓";
            position: absolute;
            left: 0;
            top: 0;
            color: rgb(27, 108, 168);
            font-weight: bold;
            font-size: 1.1rem;
        }
    </style>

    <!-- Breadcrumb & Header Section -->
    <section class="pt-4 mb-4">
        <div class="container text-center">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-left">
                    <h1 class="fw-700 h4 text-dark mb-0">About Us – ValueCeylon.com</h1>
                </div>
                <div class="col-lg-6">
                    <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item has-transition opacity-50 hov-opacity-100">
                            <a class="text-reset" href="{{ route('home') }}">{{ translate('Home') }}</a>
                        </li>
                        <li class="text-dark fw-600 breadcrumb-item active">
                            About Us
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="mb-5">
        <div class="container">
            <div class="bg-white rounded-lg shadow-sm p-4 p-md-5 about-container">
                
                <!-- Hero Header Banner -->
                <div class="brand-bg-header p-4 p-md-5 rounded text-center mb-5 shadow-sm">
                    <h2 class="font-weight-bold mb-2 h3">About Us – ValueCeylon.com</h2>
                    <p class="lead mb-0 opacity-90">Sri Lanka’s Trusted Digital Healthcare & Commerce Network</p>
                </div>

                <!-- Intro Card -->
                <div class="about-feature-box mb-5">
                    <p class="lead mb-3" style="font-size: 1.15rem; font-weight: 500;">
                        Welcome to <strong>ValueCeylon.com</strong> — a modern multivendor digital platform managed by <strong>Value Ceylon Technologies Pvt Ltd</strong>, created to connect businesses, healthcare providers, pharmacies, suppliers, and consumers through one powerful online marketplace.
                    </p>
                    <p class="mb-0">
                        At ValueCeylon.com, we are committed to transforming the way Sri Lanka buys, sells, and accesses healthcare and essential products. Our platform combines technology, convenience, trust, and business growth opportunities to create a complete B2B and B2C digital ecosystem.
                    </p>
                </div>

                <!-- Who We Are -->
                <div class="mb-5 pb-3">
                    <h3 class="brand-color-text font-weight-bold mb-3 h4 pb-2 border-bottom">Who We Are</h3>
                    <p>
                        ValueCeylon.com operates as a multivendor platform that enables verified sellers, pharmacies, distributors, manufacturers, wholesalers, and retailers to connect directly with customers and business buyers across Sri Lanka.
                    </p>
                    <p class="font-weight-bold mb-2">Our mission is to build a trusted digital marketplace that creates value for every stakeholder by:</p>
                    <div class="row">
                        <div class="col-md-6 mb-2">
                            <div class="why-choose-item">Strengthening supplier and customer relationships</div>
                            <div class="why-choose-item">Supporting sustainable business growth</div>
                            <div class="why-choose-item">Improving accessibility to healthcare & essential products</div>
                        </div>
                        <div class="col-md-6 mb-2">
                            <div class="why-choose-item">Creating profitable business opportunities for vendors & partners</div>
                            <div class="why-choose-item">Delivering convenience, transparency, and reliability to consumers</div>
                        </div>
                    </div>
                    <p class="mt-3 mb-0 text-muted italic" style="font-style: italic;">
                        We believe technology can simplify healthcare commerce while improving efficiency and accessibility throughout the supply chain.
                    </p>
                </div>

                <!-- B2C & B2B Dual Grid -->
                <div class="row mb-5">
                    <!-- B2C Card -->
                    <div class="col-md-6 mb-4 d-flex">
                        <div class="card about-card-primary bg-white shadow-sm w-100 p-4">
                            <h4 class="brand-color-text font-weight-bold mb-3 h5">Our B2C Services</h4>
                            <p class="small text-muted mb-3">For individual customers, ValueCeylon.com offers a convenient and reliable online shopping experience with access to:</p>
                            <ul class="pl-3 mb-4">
                                <li class="mb-2">Medicines and healthcare products</li>
                                <li class="mb-2">Wellness and personal care products</li>
                                <li class="mb-2">Medical devices and healthcare essentials</li>
                                <li class="mb-2">Fast and secure doorstep delivery</li>
                                <li class="mb-2">Competitive pricing and special offers</li>
                                <li class="mb-0">Easy online ordering and digital convenience</li>
                            </ul>
                            <p class="mt-auto mb-0 pt-3 border-top small text-secondary">
                                <strong>Goal:</strong> Help customers save time, access genuine products, and receive trusted service from verified vendors and pharmacies.
                            </p>
                        </div>
                    </div>

                    <!-- B2B Card -->
                    <div class="col-md-6 mb-4 d-flex">
                        <div class="card about-card-secondary bg-white shadow-sm w-100 p-4">
                            <h4 class="text-teal font-weight-bold mb-3 h5" style="color: #0d9488;">Our B2B Solutions</h4>
                            <p class="small text-muted mb-2">Connecting pharmaceutical manufacturers, distributors, wholesalers, pharmacies, retailers & medical brands.</p>
                            <p class="font-weight-bold mb-2 small text-dark">Opportunities provided:</p>
                            <ul class="pl-3 mb-3">
                                <li class="mb-1">Expand market reach across Sri Lanka</li>
                                <li class="mb-1">Digitally showcase and promote products</li>
                                <li class="mb-1">Increase sales and visibility</li>
                                <li class="mb-1">Connect with pharmacies and healthcare buyers</li>
                                <li class="mb-1">Improve operational efficiency through digital commerce</li>
                                <li class="mb-0">Build stronger long-term business partnerships</li>
                            </ul>
                            <p class="mt-auto mb-0 pt-3 border-top small text-secondary">
                                Designed to support sustainable turnover, profitability, and scalable growth for retail and healthcare sectors.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Vision & Mission Banner -->
                <div class="bg-light p-4 p-md-5 rounded-lg mb-5 border">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-0 border-right-md">
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle brand-bg-header d-flex align-items-center justify-content-center mr-3" style="width: 42px; height: 42px; flex-shrink: 0;">
                                    👁️
                                </div>
                                <h4 class="brand-color-text font-weight-bold mb-0 h5">Our Vision</h4>
                            </div>
                            <p class="mb-0 text-dark" style="font-size: 1.05rem;">
                                To become Sri Lanka’s leading digital healthcare and commerce network by connecting businesses and consumers through innovative, trusted, and technology-driven solutions.
                            </p>
                        </div>
                        <div class="col-md-6 pl-md-4">
                            <div class="d-flex align-items-center mb-3">
                                <div class="rounded-circle d-flex align-items-center justify-content-center mr-3 text-white" style="width: 42px; height: 42px; flex-shrink: 0; background-color: #0d9488;">
                                    🎯
                                </div>
                                <h4 class="font-weight-bold mb-0 h5" style="color: #0d9488;">Our Mission</h4>
                            </div>
                            <p class="mb-0 text-dark" style="font-size: 1.05rem;">
                                To empower suppliers, pharmacies, manufacturers, and consumers with a reliable digital marketplace that promotes accessibility, efficiency, affordability, and sustainable business growth.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Why Choose Us -->
                <div class="mb-5">
                    <h3 class="brand-color-text font-weight-bold mb-4 h4 pb-2 border-bottom">Why Choose ValueCeylon.com?</h3>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="why-choose-item">Trusted multivendor platform</div>
                            <div class="why-choose-item">Customer-focused digital experience</div>
                            <div class="why-choose-item">Opportunities for businesses and brands</div>
                            <div class="why-choose-item">Reliable supplier and pharmacy network</div>
                        </div>
                        <div class="col-md-6">
                            <div class="why-choose-item">Secure and convenient ordering system</div>
                            <div class="why-choose-item">Commitment to quality and service excellence</div>
                            <div class="why-choose-item">Scalable solutions for both B2B and B2C markets</div>
                        </div>
                    </div>
                </div>

                <!-- Footer Callout -->
                <div class="brand-bg-header p-4 rounded text-center shadow-sm">
                    <h4 class="font-weight-bold mb-2 h5">Building the Future of Digital Commerce in Sri Lanka</h4>
                    <p class="mb-2 max-w-75 mx-auto" style="font-size: 0.975rem;">
                        At ValueCeylon.com, we are more than an online marketplace. We are building a connected digital Healthcare ecosystem that supports businesses, empowers healthcare accessibility, and creates long-term value for customers, suppliers, and partners across Sri Lanka.
                    </p>
                    <p class="font-weight-bold mb-0" style="color: #e0f2fe !important;">
                        Together, we are creating a smarter, faster, and more connected future for healthcare and commerce.
                    </p>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection