<!DOCTYPE html>

@php
    $rtl = get_session_language()->rtl;
@endphp

@if ($rtl == 1)
    <html dir="rtl" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@else
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@endif

<head>

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="app-url" content="{{ getBaseURL() }}">
    <meta name="file-base-url" content="{{ getFileBaseURL() }}">

    <title>@yield('meta_title', get_setting('website_name') . ' | ' . get_setting('site_motto'))</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="description" content="@yield('meta_description', get_setting('meta_description'))" />
    <meta name="keywords" content="@yield('meta_keywords', get_setting('meta_keywords'))">

    @yield('meta')

    @if (!isset($detailedProduct) && !isset($customer_product) && !isset($shop) && !isset($page) && !isset($blog))
        @php
            $meta_image = uploaded_asset(get_setting('meta_image'));
        @endphp
        <!-- Schema.org markup for Google+ -->
        <meta itemprop="name" content="{{ get_setting('meta_title') }}">
        <meta itemprop="description" content="{{ get_setting('meta_description') }}">
        <meta itemprop="image" content="{{ $meta_image }}">

        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product">
        <meta name="twitter:site" content="@publisher_handle">
        <meta name="twitter:title" content="{{ get_setting('meta_title') }}">
        <meta name="twitter:description" content="{{ get_setting('meta_description') }}">
        <meta name="twitter:creator" content="@author_handle">
        <meta name="twitter:image" content="{{ $meta_image }}">

        <!-- Open Graph data -->
        <meta property="og:title" content="{{ get_setting('meta_title') }}" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="{{ route('home') }}" />
        <meta property="og:image" content="{{ $meta_image }}" />
        <meta property="og:description" content="{{ get_setting('meta_description') }}" />
        <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
        <meta property="fb:app_id" content="{{ env('FACEBOOK_PIXEL_ID') }}">
    @endif

    <!-- Favicon -->
    @php
        $site_icon = uploaded_asset(get_setting('site_icon'));
    @endphp
    <link rel="icon" href="{{ $site_icon }}">
    <link rel="apple-touch-icon" href="{{ $site_icon }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ static_asset('assets/css/vendors.css') }}">
    @if ($rtl == 1)
        <link rel="stylesheet" href="{{ static_asset('assets/css/bootstrap-rtl.min.css') }}">
    @endif
    <link rel="stylesheet" href="{{ static_asset('assets/css/aiz-core.css?v=') }}{{ rand(1000, 9999) }}">
    <link rel="stylesheet" href="{{ static_asset('assets/css/custom-style.css') }}">


    <script>
        var AIZ = AIZ || {};
        AIZ.local = {
            nothing_selected: '{!! translate('Nothing selected', null, true) !!}',
            nothing_found: '{!! translate('Nothing found', null, true) !!}',
            choose_file: '{{ translate('Choose file') }}',
            file_selected: '{{ translate('File selected') }}',
            files_selected: '{{ translate('Files selected') }}',
            add_more_files: '{{ translate('Add more files') }}',
            adding_more_files: '{{ translate('Adding more files') }}',
            drop_files_here_paste_or: '{{ translate('Drop files here, paste or') }}',
            browse: '{{ translate('Browse') }}',
            upload_complete: '{{ translate('Upload complete') }}',
            upload_paused: '{{ translate('Upload paused') }}',
            resume_upload: '{{ translate('Resume upload') }}',
            pause_upload: '{{ translate('Pause upload') }}',
            retry_upload: '{{ translate('Retry upload') }}',
            cancel_upload: '{{ translate('Cancel upload') }}',
            uploading: '{{ translate('Uploading') }}',
            processing: '{{ translate('Processing') }}',
            complete: '{{ translate('Complete') }}',
            file: '{{ translate('File') }}',
            files: '{{ translate('Files') }}',
        }
    </script>

    <style>
        :root{
            --blue: #3490f3;
            --hov-blue: #2e7fd6;
            --soft-blue: rgba(0, 123, 255, 0.15);
            --secondary-base: {{ get_setting('secondary_base_color', '#ffc519') }};
            --hov-secondary-base: {{ get_setting('secondary_base_hov_color', '#dbaa17') }};
            --soft-secondary-base: {{ hex2rgba(get_setting('secondary_base_color', '#ffc519'), 0.15) }};
            --gray: #9d9da6;
            --gray-dark: #8d8d8d;
            --secondary: #919199;
            --soft-secondary: rgba(145, 145, 153, 0.15);
            --success: #85b567;
            --soft-success: rgba(133, 181, 103, 0.15);
            --warning: #f3af3d;
            --soft-warning: rgba(243, 175, 61, 0.15);
            --light: #f5f5f5;
            --soft-light: #dfdfe6;
            --soft-white: #b5b5bf;
            --dark: #292933;
            --soft-dark: #1b1b28;
            --primary: {{ get_setting('base_color', '#d43533') }};
            --hov-primary: {{ get_setting('base_hov_color', '#9d1b1a') }};
            --soft-primary: {{ hex2rgba(get_setting('base_color', '#d43533'), 0.15) }};
        }
        body{
            font-family: 'Public Sans', sans-serif;
            font-weight: 400;
        }

        .pagination .page-link,
        .page-item.disabled .page-link {
            min-width: 32px;
            min-height: 32px;
            line-height: 32px;
            text-align: center;
            padding: 0;
            border: 1px solid var(--soft-light);
            font-size: 0.875rem;
            border-radius: 0 !important;
            color: var(--dark);
        }
        .pagination .page-item {
            margin: 0 5px;
        }

        .aiz-carousel.coupon-slider .slick-track{
            margin-left: 0;
        }

        .form-control:focus {
            border-width: 2px !important;
        }
        .iti__flag-container {
            padding: 2px;
        }
        .modal-content {
            border: 0 !important;
            border-radius: 0 !important;
        }

        .tagify.tagify--focus{
            border-width: 2px;
            border-color: var(--primary);
        }

        #map{
            width: 100%;
            height: 250px;
        }
        #edit_map{
            width: 100%;
            height: 250px;
        }

        .pac-container { z-index: 100000; }
    </style>





@php
    echo get_setting('header_script');
@endphp

</head>
<body>
    <!-- aiz-main-wrapper -->
    <div class="aiz-main-wrapper d-flex flex-column bg-white">



        @yield('content')


    </div>


    @yield('modal')

    <!-- SCRIPTS -->
    <script src="{{ static_asset('assets/js/vendors.js') }}"></script>
    <script src="{{ static_asset('assets/js/aiz-core.js?v=') }}{{ rand(1000, 9999) }}"></script>


    @yield('script')

    @php
        echo get_setting('footer_script');
    @endphp

    <script>
        @foreach (session('flash_notification', collect())->toArray() as $message)
            AIZ.plugins.notify('{{ $message['level'] }}', '{{ $message['message'] }}');
        @endforeach
    </script>

</body>
</html>
