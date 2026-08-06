@extends('frontend.layouts.app')

@section('meta_title'){{ $page->meta_title }}@stop

@section('meta_description'){{ $page->meta_description }}@stop

@section('meta_keywords'){{ $page->tags }}@stop

@section('meta')
    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="{{ $page->meta_title }}">
    <meta itemprop="description" content="{{ $page->meta_description }}">
    <meta itemprop="image" content="{{ uploaded_asset($page->meta_image) }}">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="website">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="{{ $page->meta_title }}">
    <meta name="twitter:description" content="{{ $page->meta_description }}">
    <meta name="twitter:creator" content="@author_handle">
    <meta name="twitter:image" content="{{ uploaded_asset($page->meta_image) }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $page->meta_title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ URL($page->slug) }}" />
    <meta property="og:image" content="{{ uploaded_asset($page->meta_image) }}" />
    <meta property="og:description" content="{{ $page->meta_description }}" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
@endsection

@section('content')
    <style>
        html {
            scroll-behavior: smooth;
        }
        .policy-container {
            color: #000000;
            border: 1px solid #e2e8f0;
            font-size: 1.05rem;
        }
        .policy-container p,
        .policy-container li,
        .policy-container span,
        .policy-container div,
        .policy-container a {
            color: #000000;
            line-height: 1.8;
            font-size: 1.025rem !important;
        }
        .policy-container small,
        .policy-container .small {
            font-size: 0.925rem !important;
        }
        .policy-blue-title,
        .policy-container a {
            color: rgb(27, 108, 168) !important;
        }
        .policy-container a:hover {
            text-decoration: underline;
        }
        .policy-container h1,
        .policy-container h2,
        .policy-container h3,
        .policy-container h4,
        .policy-container h5,
        .policy-container h6 {
            color: rgb(27, 108, 168) !important;
            font-weight: 700;
            border-bottom: 1px solid #dee2e6 !important;
            padding-bottom: 8px;
            margin-top: 28px;
            margin-bottom: 16px;
        }
        .policy-container h1 { font-size: 1.85rem !important; }
        .policy-container h2 { font-size: 1.55rem !important; }
        .policy-container h3 { font-size: 1.3rem !important; }
        .policy-container h4 { font-size: 1.15rem !important; }
        .policy-container h5 { font-size: 1.08rem !important; }
        .policy-container h6 { font-size: 1.025rem !important; }

        .policy-container h1:first-child,
        .policy-container h2:first-child,
        .policy-container h3:first-child,
        .policy-container h4:first-child,
        .policy-container h5:first-child,
        .policy-container h6:first-child {
            margin-top: 0;
        }
        .policy-container ul,
        .policy-container ol {
            padding-left: 25px;
            margin-bottom: 20px;
        }
        .policy-container li {
            margin-bottom: 8px;
        }
        .policy-container table,
        .table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            margin-bottom: 25px;
        }
        .policy-container th,
        .policy-container td,
        .table th,
        .table td {
            border: 1px solid #dee2e6 !important;
            padding: 14px 18px !important;
            vertical-align: middle !important;
            text-align: left;
            line-height: 1.6;
        }
        .policy-container td,
        .table td {
            font-size: 1rem !important;
            color: #000000 !important;
        }
        .policy-container th,
        .table th {
            background-color: #f8fafc !important;
            font-weight: 700;
            font-size: 1.025rem !important;
            color: #000000 !important;
        }
        .policy-section-border {
            border-top: 1px solid #dee2e6 !important;
            padding-top: 25px;
            margin-top: 35px;
        }
        .policy-heading-border {
            border-bottom: 1px solid #dee2e6 !important;
            padding-bottom: 8px;
        }
    </style>

    <!-- Page Header & Breadcrumb -->
    <section class="pt-4 mb-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-left">
                    <h1 class="fw-600 h3 text-dark mb-0">{{ $page->getTranslation('title') }}</h1>
                </div>
                <div class="col-lg-6">
                    <ul class="breadcrumb bg-transparent p-0 justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item opacity-50">
                            <a class="text-reset" href="{{ route('home') }}">{{ translate('Home') }}</a>
                        </li>
                        <li class="text-dark fw-600 breadcrumb-item active">
                            {{ translate('Return Policy') }}
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
                @php
                    echo $page->getTranslation('content');
                @endphp
            </div>
        </div>
    </section>
@endsection

