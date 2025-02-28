@extends('frontend.layouts.app')

@section('content')
    <style>
        #section_featured .slick-slider .slick-list {
            /* background: #fff; */
        }

        #flash_deal .slick-slider .slick-list .slick-slide,
        #section_featured .slick-slider .slick-list .slick-slide {
            margin-bottom: -5px;
        }

        @media (max-width: 991px) {
            #flash_deal .slick-slider .slick-list .slick-slide {
                margin-bottom: 0px;
            }
        }

        @media (max-width: 575px) {
            #section_featured .slick-slider .slick-list .slick-slide {
                margin-bottom: -4px;
            }
        }
    </style>

    <!-- Sliders -->
    <div class="home-banner-area">
        <div class="p-0">
            <!-- Sliders -->
            <div class="home-slider slider-full">
                @if (get_setting('home_slider_images') != null)
                    <div class="aiz-carousel dots-inside-bottom mobile-img-auto-height" data-autoplay="true"
                        data-infinite="true">
                        @php
                            $decoded_slider_images = json_decode(get_setting('home_slider_images'), true);
                            $sliders = get_slider_images($decoded_slider_images);
                        @endphp
                        @foreach ($sliders as $key => $slider)
                            <div class="carousel-box">
                                <a href="{{ json_decode(get_setting('home_slider_links'), true)[$key] }}">
                                    <!-- Image -->
                                    <div
                                        class="d-block mw-100 img-fit overflow-hidden h-180px h-md-320px h-lg-460px h-xl-553px overflow-hidden">
                                        <img class="img-fit h-100 m-auto has-transition ls-is-cached lazyloaded"
                                            src="{{ $slider ? my_asset($slider->file_name) : static_asset('assets/img/placeholder.jpg') }}"
                                            alt="{{ env('APP_NAME') }} promo"
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Flash Deal -->
    @php
        $flash_deal = get_featured_flash_deal();
        $flash_deal_bg = get_setting('flash_deal_bg_color');
        $flash_deal_bg_full_width = get_setting('flash_deal_bg_full_width') == 1 ? true : false;
        $flash_deal_banner_menu_text =
            get_setting('flash_deal_banner_menu_text') == 'dark' || get_setting('flash_deal_banner_menu_text') == null
                ? 'text-dark'
                : 'text-white';

    @endphp
    @if ($flash_deal != null)
        <section class="mb-2 mb-md-3 mt-2 mt-md-3"
            style="background: {{ $flash_deal_bg_full_width && $flash_deal_bg != null ? $flash_deal_bg : '' }};"
            id="flash_deal">
            <div class="container">
                <!-- Top Section sm to lg -->
                <div
                    class="d-flex d-lg-none flex-wrap mb-2 mb-md-3 @if ($flash_deal_bg_full_width && $flash_deal_bg != null) pt-2 pt-md-3 @endif align-items-baseline justify-content-between">
                    <!-- Title -->
                    <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0">
                        <span class="d-inline-block {{ $flash_deal_banner_menu_text }}">{{ translate('Flash Sale') }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24" viewBox="0 0 16 24"
                            class="ml-3">
                            <path id="Path_28795" data-name="Path 28795"
                                d="M30.953,13.695a.474.474,0,0,0-.424-.25h-4.9l3.917-7.81a.423.423,0,0,0-.028-.428.477.477,0,0,0-.4-.207H21.588a.473.473,0,0,0-.429.263L15.041,18.151a.423.423,0,0,0,.034.423.478.478,0,0,0,.4.2h4.593l-2.229,9.683a.438.438,0,0,0,.259.5.489.489,0,0,0,.571-.127L30.9,14.164a.425.425,0,0,0,.054-.469Z"
                                transform="translate(-15 -5)" fill="#fcc201" />
                        </svg>
                    </h3>
                    <!-- Links -->
                    <div>
                        <div class="text-dark d-flex align-items-center mb-0">
                            <a href="{{ route('flash-deals') }}"
                                class="fs-10 fs-md-12 fw-700 has-transition {{ $flash_deal_banner_menu_text }} @if (get_setting('flash_deal_banner_menu_text') == 'light') text-white opacity-60 hov-opacity-100 animate-underline-white @else text-reset opacity-60 hov-opacity-100 hov-text-primary animate-underline-primary @endif mr-3">{{ translate('View All Flash Sale') }}</a>
                            <span class=" border-left border-soft-light border-width-2 pl-3">
                                <a href="{{ route('flash-deal-details', $flash_deal->slug) }}"
                                    class="fs-10 fs-md-12 fw-700 has-transition {{ $flash_deal_banner_menu_text }} @if (get_setting('flash_deal_banner_menu_text') == 'light') text-white opacity-60 hov-opacity-100 animate-underline-white @else text-reset opacity-60 hov-opacity-100 hov-text-primary animate-underline-primary @endif">{{ translate('View All Products from This Flash Sale') }}</a>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Countdown for small device -->
                <div class="bg-white mb-3 d-md-none">
                    <div class="aiz-count-down-circle" end-date="{{ date('Y/m/d H:i:s', $flash_deal->end_date) }}"></div>
                </div>

                <div class="row no-gutters align-items-center" style="background: {{ $flash_deal_bg }};">
                    <!-- Flash Deals Baner & Countdown -->
                    <div class="col-xxl-4 col-lg-5 col-6 h-200px h-md-400px h-lg-475px">
                        <div class="h-100 w-100 w-xl-auto"
                            style="background-image: url('{{ uploaded_asset($flash_deal->banner) }}'); background-size: cover; background-position: center center;">
                            <div class="py-5 px-md-3 px-xl-5 d-none d-md-block">
                                <div class="bg-white">
                                    <div class="aiz-count-down-circle"
                                        end-date="{{ date('Y/m/d H:i:s', $flash_deal->end_date) }}"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xxl-8 col-lg-7 col-6">
                        <div class="pl-3 pr-lg-3 pl-xl-2rem pr-xl-2rem">
                            <!-- Top Section from lg device -->
                            <div
                                class="d-none d-lg-flex flex-wrap mb-2 mb-md-3 align-items-baseline justify-content-between">
                                <!-- Title -->
                                <h3 class="fs-16 fs-md-20 fw-700 mb-2">
                                    <span
                                        class="d-inline-block {{ $flash_deal_banner_menu_text }}">{{ translate('Flash Sale') }}</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="24"
                                        viewBox="0 0 16 24" class="ml-3">
                                        <path id="Path_28795" data-name="Path 28795"
                                            d="M30.953,13.695a.474.474,0,0,0-.424-.25h-4.9l3.917-7.81a.423.423,0,0,0-.028-.428.477.477,0,0,0-.4-.207H21.588a.473.473,0,0,0-.429.263L15.041,18.151a.423.423,0,0,0,.034.423.478.478,0,0,0,.4.2h4.593l-2.229,9.683a.438.438,0,0,0,.259.5.489.489,0,0,0,.571-.127L30.9,14.164a.425.425,0,0,0,.054-.469Z"
                                            transform="translate(-15 -5)" fill="#fcc201" />
                                    </svg>
                                </h3>
                                <!-- Links -->
                                <div>
                                    <div class="text-dark d-flex align-items-center mb-0">
                                        <a href="{{ route('flash-deals') }}"
                                            class="fs-10 fs-md-12 fw-700 has-transition {{ $flash_deal_banner_menu_text }} @if (get_setting('flash_deal_banner_menu_text') == 'light') text-white opacity-60 hov-opacity-100 animate-underline-white @else text-reset opacity-60 hov-opacity-100 hov-text-primary animate-underline-primary @endif mr-3">
                                            {{ translate('View All Flash Sale') }}
                                        </a>
                                        <span class=" border-left border-soft-light border-width-2 pl-3">
                                            <a href="{{ route('flash-deal-details', $flash_deal->slug) }}"
                                                class="fs-10 fs-md-12 fw-700 has-transition {{ $flash_deal_banner_menu_text }} @if (get_setting('flash_deal_banner_menu_text') == 'light') text-white opacity-60 hov-opacity-100 animate-underline-white @else text-reset opacity-60 hov-opacity-100 hov-text-primary animate-underline-primary @endif">{{ translate('View All Products from This Flash Sale') }}</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <!-- Flash Deals Products -->
                            @php
                                $flash_deal_products = get_flash_deal_products($flash_deal->id);
                            @endphp
                            <div class="aiz-carousel border-top @if (count($flash_deal_products) > 8) border-right @endif arrow-inactive-none arrow-x-0"
                                data-items="5" data-xxl-items="5" data-xl-items="3.5" data-lg-items="3" data-md-items="2"
                                data-sm-items="2.5" data-xs-items="2" data-arrows="true" data-dots="false">
                                @php
                                    $init = 0;
                                    $end = 1;
                                @endphp
                                @for ($i = 0; $i < 5; $i++)
                                    <div class="carousel-box bg-white @if ($i == 0) border-left @endif">
                                        @foreach ($flash_deal_products as $key => $flash_deal_product)
                                            @if ($key >= $init && $key <= $end)
                                                @if ($flash_deal_product->product != null && $flash_deal_product->product->published != 0)
                                                    @php
                                                        $product_url = route(
                                                            'product',
                                                            $flash_deal_product->product->slug,
                                                        );
                                                        if ($flash_deal_product->product->auction_product == 1) {
                                                            $product_url = route(
                                                                'auction-product',
                                                                $flash_deal_product->product->slug,
                                                            );
                                                        }
                                                    @endphp
                                                    <div
                                                        class="h-100px h-md-200px h-lg-auto flash-deal-item position-relative text-center border-bottom @if ($i != 4) border-right @endif has-transition hov-shadow-out z-1">
                                                        <a href="{{ $product_url }}"
                                                            class="d-block py-md-2 overflow-hidden hov-scale-img"
                                                            title="{{ $flash_deal_product->product->getTranslation('name') }}">
                                                            <!-- Image -->
                                                            <img src="{{ get_image($flash_deal_product->product->thumbnail) }}"
                                                                class="lazyload h-60px h-md-100px h-lg-120px mw-100 mx-auto has-transition"
                                                                alt="{{ $flash_deal_product->product->getTranslation('name') }}"
                                                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                                            <!-- Price -->
                                                            <div
                                                                class="fs-10 fs-md-14 mt-md-2 text-center h-md-48px has-transition overflow-hidden pt-md-4 flash-deal-price">
                                                                <span
                                                                    class="d-block text-primary fw-700">{{ home_discounted_base_price($flash_deal_product->product) }}</span>
                                                                @if (home_base_price($flash_deal_product->product) != home_discounted_base_price($flash_deal_product->product))
                                                                    <del
                                                                        class="d-block fw-400 text-secondary">{{ home_base_price($flash_deal_product->product) }}</del>
                                                                @endif
                                                            </div>
                                                        </a>
                                                    </div>
                                                @endif
                                            @endif
                                        @endforeach

                                        @php
                                            $init += 2;
                                            $end += 2;
                                        @endphp
                                    </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- Category section -->
    <section class="home-categories" style="background: #efefef">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 d-none d-lg-block">
                    <div style="width: 270px; background-color:#fff">
                        <h5 class="p-3 pl-4">Categories</h5>

                        @php
                            $home_categories = get_all_categories();
                        @endphp

                        @foreach ($home_categories as $home_category)
                            <div>
                                <a href="{{ route('products.category', $home_category->slug) }}"
                                    class="d-flex  p-2 pl-4 pr-4 hov-bg-black-10 fw-700 fs-13" style="color: #555">
                                    <div>
                                        <img class="cat-image lazyload mr-2 opacity-60"
                                            src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                            data-src="{{ isset($home_category->catIcon->file_name) ? my_asset($home_category->catIcon->file_name) : static_asset('assets/img/placeholder.jpg') }}"
                                            width="32" alt="{{ $home_category->name }}"
                                            onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                    </div>
                                    <div>{{ $home_category->name }}</div>
                                </a>
                            </div>
                        @endforeach

                    </div>
                </div>

                <div class="col-lg-9">
                    <div id="categories_product">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- RFQ section -->
    <section class="rfq">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                    

                    <div class="rfq-banner my-5">

                        <div class="homepage-rfq-slider">
                            <div>
                                <a href="{{ route('customer.request-for-quotation') }}" target="_blank">
                                    <img src="{{ static_asset("assets/img/banner/sourcing-banner.jpg") }}" alt="rfq banner" class="img-fluid">
        
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('customer.request-for-quotation') }}" target="_blank">
                                    <img src="{{ static_asset("assets/img/banner/sourcing-banner.jpg") }}" alt="rfq banner" class="img-fluid">
        
                                </a>
                            </div>
                            <div>
                                <a href="{{ route('customer.request-for-quotation') }}" target="_blank">
                                    <img src="{{ static_asset("assets/img/banner/sourcing-banner.jpg") }}" alt="rfq banner" class="img-fluid">
        
                                </a>
                            </div>
                          </div>

                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="home-skyscaper">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    @php
                        $rect_banners = get_advertising_banner(1, 1);
                    @endphp

                    <div class="my-5">
                        @foreach ($rect_banners as $rect_banner)
                            <img src="{{ uploaded_asset($rect_banner->banner) }}" alt="" class="img-fluid">
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-10">
                    <div id="skyskaper_products">

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Frontend banners -->
    <section class="home-banners">
        <div class="container">
            @php
                $rect_banners = get_advertising_banner(3, 3);
            @endphp

          
            <div class="row">
                @foreach ($rect_banners as $rect_banner)
                    <div class="col-md-4">
                        <img src="{{ uploaded_asset($rect_banner->banner) }}" alt="" class="img-fluid">
                    </div>
                @endforeach
            </div>
        

            @php
                $rect_banners = get_advertising_banner(2,1 );
            @endphp

            <div class="my-5">
                <div class="row">
                    <div class="col-md-12">
                        @foreach ($rect_banners as $rect_banner)
                            <img src="{{ uploaded_asset($rect_banner->banner) }}" alt="" class="img-fluid">
                        @endforeach
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="home-new-arrivals">
        <div class="container">
            <div id="new_arrivals">

            </div>
        </div>
    </section>


    <!-- Frontend banners -->
    <section class="home-banners">
        <div class="container">
            @php
                $rect_banners = get_advertising_banner(2,2 );
            @endphp
{{-- 
            <div class="my-5">
                <div class="row">
                    <div class="col-md-12">
                        
                        @foreach ($rect_banners as $rect_banner)
                            <img src="{{ uploaded_asset($rect_banner->banner) }}" alt="" class="img-fluid">
                        @endforeach
                    </div>
                </div>
            </div> --}}

            <div class="mb-5">
                <div class="row">
                    <div class="col-md-12">

                        <div class="my-5">

                            <div class="homepage-ad-slider-2">
                                <div>
                                    <a href="#" target="_blank">
                                        <img src="{{ static_asset("assets/img/banner/b2b-marketplace.jpg") }}" alt="rfq banner" class="img-fluid">
            
                                    </a>
                                </div>
                                <div>
                                    <a href="#" target="_blank">
                                        <img src="{{ static_asset("assets/img/banner/sample.jpg") }}" alt="rfq banner" class="img-fluid">
            
                                    </a>
                                </div>
                              </div>
                        </div>
                                               
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Top sellers -->
    <section class="top-sellers ceylon-brands">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Most Trusted Ceylon Brands</h3>
                    <!-- Top Sellers -->
                    @if (get_setting('vendor_system_activation') == 1)
                        @php
                            $best_selers = get_best_sellers(6);
                        @endphp
                        @if (count($best_selers) > 0)
                            <section class="mb-2 mb-md-3 mt-2 mt-md-3">
                                <div class="">
                                   
                                    
                                    <!-- Sellers Section -->
                                    <div class="aiz-carousel arrow-x-0 arrow-inactive-none" data-items="3"
                                        data-xxl-items="3" data-xl-items="3" data-lg-items="3.4"
                                        data-md-items="2.5" data-sm-items="2" data-xs-items="1.4"
                                        data-arrows="true" data-dots="false">
                                        @foreach ($best_selers as $key => $seller)
                                            @if ($seller->user != null)
                                                <div
                                                    class="carousel-box h-100 position-relative text-center  has-transition ">
                                                    <div class="position-relative px-3"
                                                        style="padding-top: 2rem; padding-bottom:2rem;">
                                                        <!-- Shop logo & Verification Status -->
                                                        <div class="mx-auto size-100px size-md-120px">
                                                            <a href="{{ route('shop.visit', $seller->slug) }}"
                                                                class="d-flex mx-auto justify-content-center align-item-center size-100px size-md-120px border overflow-hidden hov-scale-img"
                                                                tabindex="0"
                                                                style="border: 1px solid #e5e5e5; border-radius: 50%; box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.06);">
                                                                <img src="{{ static_asset('assets/img/placeholder-rect.jpg') }}"
                                                                    data-src="{{ uploaded_asset($seller->logo) }}"
                                                                    alt="{{ $seller->name }}"
                                                                    class="img-fit lazyload has-transition"
                                                                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                                                            </a>
                                                        </div>
                                                        <!-- Shop name -->
                                                        <h2
                                                            class="fs-14 fw-700 text-dark text-truncate-2 h-40px mt-3 mt-md-4 mb-0 mb-md-3">
                                                            <a href="{{ route('shop.visit', $seller->slug) }}"
                                                                class="text-reset hov-text-primary"
                                                                tabindex="0">{{ $seller->name }}</a>
                                                        </h2>

                                                    </div>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </section>



@endsection
