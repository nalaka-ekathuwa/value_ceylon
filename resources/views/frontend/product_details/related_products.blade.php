@php
    $related_products = $related_products ?? get_related_products($detailedProduct);
@endphp

@if (count($related_products) > 0)
    <style>
        .related-products-slider .slick-track {
            margin-left: 0 !important;
        }
        [dir="rtl"] .related-products-slider .slick-track {
            margin-right: 0 !important;
            margin-left: auto !important;
        }
        .related-products-slider .slick-arrow.slick-disabled {
            display: none !important;
        }
        .related-products-slider .aiz-card-box {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .related-products-slider .aiz-card-box:hover {
            box-shadow: 0 8px 24px rgba(27, 108, 168, 0.12);
        }
        .related-products-slider .cart-btn {
            background-color: #000 !important;
            opacity: 0.7 !important;
            height: 35px !important;
            display: flex !important;
            flex-direction: row !important;
            align-items: center !important;
            justify-content: center !important;
            color: #ffffff !important;
            font-size: 13px !important;
            font-weight: 700 !important;
            border: none !important;
            border-radius: 0 !important;
            text-decoration: none !important;
            transform: translateY(100%);
            transition: all 0.3s ease !important;
        }
        .related-products-slider .aiz-card-box:hover .cart-btn {
            transform: translateY(0) !important;
        }
        .related-products-slider .cart-btn:hover,
        .related-products-slider .cart-btn.active {
            background-color: #000 !important;
            opacity: 1 !important;
            color: #ffffff !important;
        }
        .related-products-slider .cart-btn .cart-btn-text {
            margin: 0 !important;
            font-size: 13px !important;
            font-weight: 600 !important;
            color: #ffffff !important;
            line-height: 1 !important;
        }
        .related-products-slider .cart-btn:hover .cart-btn-text {
            margin: 0 !important;
        }
        .related-products-slider .cart-btn i {
            font-size: 17px !important;
            line-height: 1 !important;
            color: #ffffff !important;
            margin: 0 6px 0 0 !important;
        }
        @media (max-width: 991.98px) {
            .related-products-slider .cart-btn {
                transform: translateY(0) !important;
                opacity: 1 !important;
            }
        }
    </style>

    <div class="bg-white border mb-4 p-3 p-md-4" style="border-radius: 16px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);">
        <div class="d-flex mb-3 align-items-center justify-content-between pb-2" style="border-bottom: 1px dashed #e4e5eb;">
            <h3 class="fs-16 fs-md-18 fw-700 mb-0 text-dark">
                <i class="las la-tags mr-2 text-primary"></i><span>{{ translate('Related Products') }}</span>
            </h3>
        </div>
        <div class="px-2">
            <div class="aiz-carousel gutters-10 half-outside-arrow related-products-slider" data-items="5" data-xl-items="4"
                data-lg-items="3" data-md-items="3" data-sm-items="2" data-xs-items="2"
                data-arrows='true' data-infinite='false'>
                @foreach ($related_products as $key => $related_product)
                    <div class="carousel-box px-2">
                        <div class="h-100 border" style="border-radius: 12px; overflow: hidden;">
                            @include('frontend.partials.product_box_1', ['product' => $related_product, 'hide_compare' => true])
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endif