<div class="text-left product-info-panel">
    <style>
        /* ── Product Info Panel ── */
        .product-info-panel .product-title {
            font-size: 2.2rem;
            font-weight: 700;
            line-height: 1.2;
            color: #000000;
            letter-spacing: -0.5px;
            margin-bottom: 12px;
        }
        .product-info-panel .product-rating-row {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
            color: #000000;
        }
        .product-info-panel .rating i {
            color: #cbd5e1;
            font-size: 1.1rem;
        }
        .product-info-panel .rating i.active,
        .product-info-panel .rating i.half {
            color: #f59e0b;
        }
        .product-info-panel .ship-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #e8f5e9;
            color: #16a34a;
            font-size: 0.85rem;
            font-weight: 600;
            padding: 4px 14px;
            border-radius: 50px;
            border: none;
        }
        .product-info-panel .wishlist-compare-row {
            display: flex;
            gap: 16px;
            font-size: 0.95rem;
            margin-bottom: 16px;
        }
        .product-info-panel .wishlist-compare-row a {
            color: #000000;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            text-decoration: none;
            transition: color 0.2s;
        }
        .product-info-panel .wishlist-compare-row a:hover {
            color: rgb(27, 108, 168);
        }
        .product-info-panel .product-meta-row-wrapper {
            display: flex;
            align-items: center;
            gap: 16px;
            font-size: 0.95rem;
            padding: 12px 0;
            border-top: 1px solid #f1f5f9;
            border-bottom: 1px solid #f1f5f9;
            margin-bottom: 20px;
            color: #000000;
        }
        .product-info-panel .meta-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .product-info-panel .meta-label {
            color: #000000;
            font-weight: 500;
        }
        .product-info-panel .meta-value {
            color: #000000;
            font-weight: 700;
        }
        .product-info-panel .meta-divider {
            width: 1px;
            height: 18px;
            background: #000000;
        }
        .product-info-panel .btn-message-seller {
            border: 1px solid #000000;
            border-radius: 50px;
            padding: 6px 18px;
            font-size: 0.88rem;
            font-weight: 600;
            color: #000000;
            background: #ffffff;
            transition: all 0.2s;
        }
        .product-info-panel .btn-message-seller:hover {
            background: rgb(27, 108, 168);
            border-color: rgb(27, 108, 168);
            color: #ffffff;
        }
        .product-info-panel .price-block {
            background: #f8fafc;
            border-radius: 12px;
            padding: 18px 24px;
            margin-bottom: 24px;
            border: 1px solid #f1f5f9;
        }
        .product-info-panel .price-main {
            font-size: 1.6rem;
            font-weight: 700;
            color: #000000;
        }
        .product-info-panel .price-unit {
            color: #000000;
            font-size: 1.05rem;
            font-weight: 500;
        }
        .product-info-panel .price-old {
            font-size: 1rem;
            color: #888;
            text-decoration: line-through;
            margin-left: 10px;
        }
        .product-info-panel .discount-badge {
            background: #ff4d4f;
            color: #fff;
            font-size: 0.75rem;
            font-weight: 700;
            padding: 2px 8px;
            border-radius: 50px;
            margin-left: 10px;
        }
        .product-info-panel .field-label {
            color: #000000;
            font-size: 0.95rem;
            font-weight: 600;
        }
        .product-info-panel .select-dropdown-style .aiz-megabox-elem {
            background: #ffffff;
            border: 1px solid #000000 !important;
            border-radius: 8px !important;
            color: #000000;
            font-weight: 500;
            font-size: 0.95rem;
            min-width: 180px;
            box-shadow: none;
        }
        .product-info-panel .select-dropdown-style input:checked + .aiz-megabox-elem {
            border-color: rgb(27, 108, 168) !important;
            border-width: 2px !important;
        }
        .product-info-panel .color-swatches-elem {
            border: 1px solid #e2e8f0 !important;
            border-radius: 8px !important;
            padding: 2px !important;
            display: inline-flex;
            transition: all 0.2s ease;
        }
        .product-info-panel input:checked + .color-swatches-elem {
            border: 1px solid rgb(27, 108, 168) !important;
        }
        .product-info-panel .color-swatches-elem span {
            width: 24px !important;
            height: 24px !important;
            border-radius: 6px !important;
        }
        .product-info-panel .qty-control-modern {
            background: #f1f5f9;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            justify-content: space-between;
            padding: 3px;
            width: 130px;
            height: 42px;
            user-select: none;
        }
        .product-info-panel .qty-control-modern .btn-qty {
            border: none;
            background: transparent;
            color: #0f172a;
            width: 34px;
            height: 34px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            padding: 0;
            font-size: 14px;
            line-height: 1;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.15s ease-in-out;
            flex-shrink: 0;
        }
        .product-info-panel .qty-control-modern .btn-qty i {
            line-height: 1;
            display: inline-block;
            vertical-align: middle;
        }
        .product-info-panel .qty-control-modern .btn-qty:hover:not(:disabled) {
            background: #e2e8f0;
            color: #000000;
        }
        .product-info-panel .qty-control-modern .btn-qty:disabled {
            opacity: 0.4;
            cursor: not-allowed;
        }
        .product-info-panel .qty-control-modern .input-qty {
            border: none;
            background: transparent;
            width: 100%;
            height: 100%;
            text-align: center;
            font-weight: 700;
            color: #0f172a;
            font-size: 1rem;
            padding: 0;
            margin: 0;
            outline: none !important;
            box-shadow: none !important;
            -moz-appearance: textfield;
        }
        .product-info-panel .qty-control-modern .input-qty::-webkit-outer-spin-button,
        .product-info-panel .qty-control-modern .input-qty::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
        .product-info-panel .product-quantity {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 8px;
        }
        .product-info-panel .available-stock-text {
            color: #000000;
            font-size: 0.95rem;
            font-weight: 500;
            white-space: nowrap;
        }
        .product-info-panel .price-blue {
            color: #000000;
            font-size: 1.1rem;
            font-weight: 700;
        }
        .product-info-panel .action-buttons-wrapper {
            display: flex;
            gap: 16px;
            margin-top: 20px;
        }
        .product-info-panel .btn-add-to-cart {
            background: rgb(27, 108, 168);
            color: #ffffff;
            font-weight: 600;
            font-size: 1rem;
            border-radius: 10px;
            padding: 14px 28px;
            border: none;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: background 0.2s, transform 0.15s;
        }
        .product-info-panel .btn-add-to-cart:hover {
            background: rgb(22, 90, 140);
            color: #ffffff;
            transform: translateY(-1px);
        }
        .product-info-panel .btn-buy-now {
            background: #e2e6fd;
            color: #000000;
            font-weight: 600;
            font-size: 1rem;
            border-radius: 10px;
            padding: 14px 28px;
            border: none;
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: background 0.2s, transform 0.15s;
        }
        .product-info-panel .btn-buy-now:hover {
            background: #d4dcfa;
            color: #000000;
            transform: translateY(-1px);
        }
        .product-info-panel .trust-features-card {
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 16px 20px;
            margin-top: 24px;
            background: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .product-info-panel .trust-feature-item {
            display: flex;
            align-items: center;
            gap: 12px;
            flex: 1;
        }
        .product-info-panel .trust-icon {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .product-info-panel .trust-title {
            font-weight: 700;
            color: #000000;
            font-size: 0.9rem;
            line-height: 1.2;
        }
        .product-info-panel .trust-subtitle {
            color: #000000;
            font-size: 0.82rem;
            line-height: 1.2;
            margin-top: 2px;
            font-weight: 500;
        }
        .product-info-panel .trust-feature-divider {
            width: 1px;
            height: 32px;
            background: #e2e8f0;
            margin: 0 12px;
        }

        /* ── Desktop View Font Adjustments (min-width: 992px) ── */
        @media (min-width: 992px) {
            .product-info-panel .product-title {
                font-size: 2.4rem;
                margin-bottom: 16px;
            }
            .product-info-panel .product-rating-row {
                font-size: 1.05rem;
                gap: 14px;
                margin-bottom: 16px;
            }
            .product-info-panel .wishlist-compare-row {
                font-size: 1.05rem;
                margin-bottom: 20px;
            }
            .product-info-panel .product-meta-row-wrapper {
                font-size: 1.05rem;
                padding: 14px 0;
            }
            .product-info-panel .btn-message-seller {
                font-size: 0.92rem;
                padding: 8px 22px;
            }
            .product-info-panel .price-block {
                padding: 20px 28px;
            }
            .product-info-panel .price-main {
                font-size: 1.8rem;
                color: #000000;
            }
            .product-info-panel .price-unit {
                font-size: 1.15rem;
            }
            .product-info-panel .field-label {
                font-size: 1.1rem;
                font-weight: 600;
            }
            .product-info-panel .select-dropdown-style .aiz-megabox-elem {
                font-size: 1.05rem;
                padding: 10px 20px !important;
            }
            .product-info-panel .qty-control-modern {
                width: 145px;
                padding: 4px;
            }
            .product-info-panel .qty-control-modern .input-qty {
                font-size: 1.1rem;
            }
            .product-info-panel .available-stock-text {
                font-size: 1.05rem;
            }
            .product-info-panel .price-blue {
                font-size: 1.2rem;
                color: #000000;
            }
            .product-info-panel .btn-add-to-cart,
            .product-info-panel .btn-buy-now {
                font-size: 1.1rem;
                padding: 16px 32px;
            }
            .product-info-panel .trust-title {
                font-size: 0.95rem;
            }
            .product-info-panel .trust-subtitle {
                font-size: 0.88rem;
            }
        }

        /* ── Tablet & Mobile Responsiveness ── */
        @media (max-width: 991.98px) {
            .product-info-panel .product-title {
                font-size: 1.8rem;
            }
            .product-info-panel .trust-features-card {
                flex-direction: column;
                align-items: flex-start;
                gap: 14px;
                padding: 16px;
            }
            .product-info-panel .trust-feature-divider {
                width: 100%;
                height: 1px;
                margin: 0;
            }
        }

        @media (max-width: 575.98px) {
            .product-info-panel .product-title {
                font-size: 1.45rem;
            }
            .product-info-panel .product-meta-row-wrapper {
                flex-wrap: wrap;
                gap: 10px;
            }
            .product-info-panel .btn-message-seller {
                margin-left: 0 !important;
                width: 100%;
                text-align: center;
                margin-top: 4px;
            }
            .product-info-panel .action-buttons-wrapper {
                flex-direction: column;
                gap: 10px;
            }
            .product-info-panel .btn-add-to-cart,
            .product-info-panel .btn-buy-now {
                width: 100%;
                padding: 12px 18px;
                font-size: 0.95rem;
            }
            .product-info-panel .price-block {
                padding: 14px 16px;
                margin-bottom: 16px;
            }
            .product-info-panel .price-main {
                font-size: 1.4rem;
            }
            .product-info-panel .field-label {
                font-size: 0.9rem;
                margin-bottom: 4px;
            }
            .product-info-panel .qty-control-modern {
                width: 110px;
                margin-right: 6px !important;
            }
            .product-info-panel .available-stock-text {
                font-size: 0.85rem;
                white-space: nowrap;
            }
            .product-info-panel .color-swatches-elem {
                padding: 2px !important;
                border-radius: 6px !important;
            }
            .product-info-panel .color-swatches-elem span {
                width: 22px !important;
                height: 22px !important;
                border-radius: 4px !important;
            }
            .product-info-panel .select-dropdown-style .aiz-megabox-elem {
                min-width: 130px;
                font-size: 0.88rem;
                padding: 8px 12px !important;
            }
        }
    </style>

    <!-- Product Name -->
    <h1 class="product-title">
        {{ $detailedProduct->getTranslation('name') }}
    </h1>

    <!-- Rating & badges row -->
    <div class="product-rating-row">
        @if ($detailedProduct->auction_product != 1)
            @php
                $total = 0;
                $total += $detailedProduct->reviews->count();
            @endphp
            <span class="rating rating-mr-1">
                {{ renderStarRating($detailedProduct->rating) }}
            </span>
            <span class="text-dark fw-500 fs-14">({{ $total }} {{ translate('reviews') }})</span>
        @endif
        @if ($detailedProduct->est_shipping_days)
            <span class="ship-badge">
                <i class="las la-shipping-fast"></i>
                {{ $detailedProduct->est_shipping_days }} {{ translate('Days') }}
            </span>
        @endif
        @if ($detailedProduct->digital == 1)
            <span class="badge badge-pill badge-success" style="font-size:.8rem;">{{ translate('In stock') }}</span>
        @endif
    </div>
    <!-- Wishlist / inquiry row -->
    <div class="wishlist-compare-row">
        @if ($detailedProduct->auction_product != 1)
            <a href="javascript:void(0)" onclick="addToWishList({{ $detailedProduct->id }})" class="wishlist-link">
                <i class="la la-heart-o"></i> {{ translate('Add to wishlist') }}
            </a>
        @endif
        @if(get_setting('product_query_activation') == 1)
            <a href="javascript:void();" onclick="goToView('product_query')" class="text-primary fw-600 d-flex align-items-center ml-3">
                <i class="la la-question-circle mr-1"></i>
                <span class="animate-underline-blue">{{ translate('Product Inquiry') }}</span>
            </a>
        @endif
    </div>

    <!-- Brand + Seller meta -->
    <div class="product-meta-row-wrapper">
        @if ($detailedProduct->brand != null)
            <div class="meta-item">
                <span class="meta-label">{{ translate('Brand') }}</span>
                <a href="{{ route('products.brand', $detailedProduct->brand->slug) }}"
                    class="meta-value hov-text-primary">{{ $detailedProduct->brand->name }}</a>
            </div>
            <span class="meta-divider"></span>
        @endif
        <div class="meta-item">
            <span class="meta-label">{{ translate('Sold by') }}</span>
            @if ($detailedProduct->added_by == 'seller' && get_setting('vendor_system_activation') == 1)
                <a href="{{ route('shop.visit', $detailedProduct->user->shop->slug) }}"
                    class="meta-value hov-text-primary">{{ $detailedProduct->user->shop->name }}</a>
            @else
                <span class="meta-value">{{ translate('Inhouse product') }}</span>
            @endif
        </div>
        @if (get_setting('conversation_system') == 1)
            <button class="btn btn-sm btn-message-seller ml-auto"
                onclick="show_chat_modal()">
                <i class="la la-comment-o mr-1"></i>{{ translate('Message Seller') }}
            </button>
        @endif
    </div>

    <hr class="modern-divider">

    <!-- For auction product -->
    @if ($detailedProduct->auction_product)
        <div class="row no-gutters mb-3">
            <div class="col-sm-2">
                <div class="text-secondary fs-14 fw-400 mt-1">{{ translate('Auction Will End') }}</div>
            </div>
            <div class="col-sm-10">
                @if ($detailedProduct->auction_end_date > strtotime('now'))
                    <div class="aiz-count-down align-items-center"
                        data-date="{{ date('Y/m/d H:i:s', $detailedProduct->auction_end_date) }}"></div>
                @else
                    <p>{{ translate('Ended') }}</p>
                @endif

            </div>
        </div>

        <div class="row no-gutters mb-3">
            <div class="col-sm-2">
                <div class="text-secondary fs-14 fw-400 mt-1">{{ translate('Starting Bid') }}</div>
            </div>
            <div class="col-sm-10">
                <span class="opacity-50 fs-20">
                    {{ single_price($detailedProduct->starting_bid) }}
                </span>
                @if ($detailedProduct->unit != null)
                    <span class="opacity-70">/{{ $detailedProduct->getTranslation('unit') }}</span>
                @endif
            </div>
        </div>

        @if (Auth::check() &&
                Auth::user()->product_bids->where('product_id', $detailedProduct->id)->first() != null)
            <div class="row no-gutters mb-3">
                <div class="col-sm-2">
                    <div class="text-secondary fs-14 fw-400 mt-1">{{ translate('My Bidded Amount') }}</div>
                </div>
                <div class="col-sm-10">
                    <span class="opacity-50 fs-20">
                        {{ single_price(Auth::user()->product_bids->where('product_id', $detailedProduct->id)->first()->amount) }}
                    </span>
                </div>
            </div>
            <hr>
        @endif

        @php $highest_bid = $detailedProduct->bids->max('amount'); @endphp
        <div class="row no-gutters my-2 mb-3">
            <div class="col-sm-2">
                <div class="text-secondary fs-14 fw-400 mt-1">{{ translate('Highest Bid') }}</div>
            </div>
            <div class="col-sm-10">
                <strong class="h3 fw-600 text-primary">
                    @if ($highest_bid != null)
                        {{ single_price($highest_bid) }}
                    @endif
                </strong>
            </div>
        </div>
    @else
        <!-- Without auction product -->
        @if ($detailedProduct->wholesale_product == 1)
            <!-- Wholesale -->
            <table class="table mb-3">
                <thead>
                    <tr>
                        <th class="border-top-0">{{ translate('Min Qty') }}</th>
                        <th class="border-top-0">{{ translate('Max Qty') }}</th>
                        <th class="border-top-0">{{ translate('Unit Price') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($detailedProduct->stocks->first()->wholesalePrices as $wholesalePrice)
                        <tr>
                            <td>{{ $wholesalePrice->min_qty }}</td>
                            <td>{{ $wholesalePrice->max_qty }}</td>
                            <td>{{ single_price($wholesalePrice->price) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <!-- Without Wholesale -->
            @if (home_price($detailedProduct) != home_discounted_price($detailedProduct))
                <!-- Price block with discount -->
                <div class="price-block">
                    <div class="d-flex align-items-center flex-wrap" style="gap:8px;">
                        <span class="price-main">
                            {{ home_discounted_price($detailedProduct) }}
                        </span>
                        <span class="price-old">{{ home_price($detailedProduct) }}</span>
                        @if ($detailedProduct->unit != null)
                            <span class="fs-13 text-secondary font-weight-normal">
                                @if(is_numeric($detailedProduct->getTranslation('unit')))
                                    / {{ translate('Pc') }}
                                @else
                                    / {{ $detailedProduct->getTranslation('unit') }}
                                @endif
                            </span>
                        @endif
                        @if (discount_in_percentage($detailedProduct) > 0)
                            <span class="discount-badge">-{{ discount_in_percentage($detailedProduct) }}%</span>
                        @endif
                        @if (addon_is_activated('club_point') && $detailedProduct->earn_point > 0)
                            <div class="ml-2 bg-secondary-base d-flex justify-content-center align-items-center px-3 py-1"
                                style="width: fit-content; border-radius:50px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                    <g id="Group_23922a" transform="translate(-973 -633)">
                                        <circle cx="6" cy="6" r="6" transform="translate(973 633)" fill="#fff" />
                                        <g transform="translate(973 633)">
                                            <path d="M7.667,3H4.333L3,5,6,9,9,5Z" fill="#f3af3d" />
                                            <path d="M5.33,3h-1L3,5,6,9,4.331,5Z" fill="#f3af3d" opacity="0.5" />
                                            <path d="M12.666,3h1L15,5,12,9l1.664-4Z" transform="translate(-5.995 0)" fill="#f3af3d" />
                                        </g>
                                    </g>
                                </svg>
                                <small class="fs-11 fw-500 text-white ml-2">{{ translate('Club Point') }}: {{ $detailedProduct->earn_point }}</small>
                            </div>
                        @endif
                    </div>
                </div>
            @else
                <!-- Price block without discount -->
                <div class="price-block">
                    <div class="d-flex align-items-center flex-wrap" style="gap:8px;">
                        <span class="price-main">
                            {{ home_discounted_price($detailedProduct) }}
                        </span>
                        @if ($detailedProduct->unit != null)
                            <span class="fs-13 text-secondary font-weight-normal">
                                @if(is_numeric($detailedProduct->getTranslation('unit')))
                                    / {{ translate('Pc') }}
                                @else
                                    / {{ $detailedProduct->getTranslation('unit') }}
                                @endif
                            </span>
                        @endif
                        @if (addon_is_activated('club_point') && $detailedProduct->earn_point > 0)
                            <div class="ml-2 bg-secondary-base d-flex justify-content-center align-items-center px-3 py-1"
                                style="width: fit-content; border-radius:50px;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12">
                                    <g id="Group_23922b" transform="translate(-973 -633)">
                                        <circle cx="6" cy="6" r="6" transform="translate(973 633)" fill="#fff" />
                                        <g transform="translate(973 633)">
                                            <path d="M7.667,3H4.333L3,5,6,9,9,5Z" fill="#f3af3d" />
                                            <path d="M5.33,3h-1L3,5,6,9,4.331,5Z" fill="#f3af3d" opacity="0.5" />
                                            <path d="M12.666,3h1L15,5,12,9l1.664-4Z" transform="translate(-5.995 0)" fill="#f3af3d" />
                                        </g>
                                    </g>
                                </svg>
                                <small class="fs-11 fw-500 text-white ml-2">{{ translate('Club Point') }}: {{ $detailedProduct->earn_point }}</small>
                            </div>
                        @endif
                    </div>
                </div>
            @endif
        @endif
    @endif

    @if ($detailedProduct->auction_product != 1)
        <form id="option-choice-form">
            @csrf
            <input type="hidden" name="id" value="{{ $detailedProduct->id }}">

            @if ($detailedProduct->digital == 0)
                <!-- Choice Options -->
                @if ($detailedProduct->choice_options != null)
                    @foreach (json_decode($detailedProduct->choice_options) as $key => $choice)
                        <div class="row align-items-center mb-3">
                            <div class="col-sm-3 col-4">
                                <div class="field-label">
                                    {{ get_single_attribute_name($choice->attribute_id) }}
                                </div>
                            </div>
                            <div class="col-sm-9 col-8">
                                <div class="aiz-radio-inline select-dropdown-style">
                                    @foreach ($choice->values as $key => $value)
                                        <label class="aiz-megabox pl-0 mr-2 mb-0">
                                            <input type="radio" name="attribute_id_{{ $choice->attribute_id }}"
                                                value="{{ $value }}"
                                                @if ($key == 0) checked @endif>
                                            <span
                                                class="aiz-megabox-elem rounded-2 d-flex align-items-center justify-content-between py-2 px-3">
                                                <span>{{ $value }}</span>
                                            </span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif

                <!-- Color Options -->
                @if ($detailedProduct->colors != null && count(json_decode($detailedProduct->colors)) > 0)
                    <div class="row align-items-center mb-3">
                        <div class="col-sm-3 col-4">
                            <div class="field-label">{{ translate('Color') }}</div>
                        </div>
                        <div class="col-sm-9 col-8">
                            <div class="aiz-radio-inline">
                                @foreach (json_decode($detailedProduct->colors) as $key => $color)
                                    <label class="aiz-megabox pl-0 mr-2 mb-0" data-toggle="tooltip"
                                        data-title="{{ get_single_color_name($color) }}">
                                        <input type="radio" name="color"
                                            value="{{ get_single_color_name($color) }}"
                                            @if ($key == 0) checked @endif>
                                        <span
                                            class="aiz-megabox-elem color-swatches-elem rounded-2 p-1">
                                            <span class="size-25px d-inline-block rounded-1"
                                                style="background: {{ $color }};"></span>
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Quantity + Add to cart -->
                <div class="row align-items-center mb-3">
                    <div class="col-sm-3 col-4">
                        <div class="field-label">{{ translate('Quantity') }}</div>
                    </div>
                    <div class="col-sm-9 col-8">
                        <div class="product-quantity d-flex align-items-center">
                            <div class="qty-control-modern aiz-plus-minus mr-3">
                                <button class="btn btn-qty" type="button"
                                    data-type="minus" data-field="quantity" disabled="">
                                    <i class="las la-minus"></i>
                                </button>
                                <input type="number" name="quantity"
                                    class="input-qty input-number" placeholder="1"
                                    value="{{ $detailedProduct->min_qty }}" min="{{ $detailedProduct->min_qty }}"
                                    max="10" lang="en">
                                <button class="btn btn-qty" type="button"
                                    data-type="plus" data-field="quantity">
                                    <i class="las la-plus"></i>
                                </button>
                            </div>
                            @php
                                $qty = 0;
                                foreach ($detailedProduct->stocks as $key => $stock) {
                                    $qty += $stock->qty;
                                }
                            @endphp
                            <div class="available-stock-text">
                                @if ($detailedProduct->stock_visibility_state == 'quantity')
                                    (<span id="available-quantity">{{ $qty }}</span>
                                    {{ translate('available') }})
                                @elseif($detailedProduct->stock_visibility_state == 'text' && $qty >= 1)
                                    (<span id="available-quantity">{{ translate('In Stock') }}</span>)
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <!-- Quantity -->
                <input type="hidden" name="quantity" value="1">
            @endif

            <!-- Total Price -->
            <div class="row align-items-center mb-4" id="chosen_price_div">
                <div class="col-sm-3 col-4">
                    <div class="field-label">{{ translate('Total Price') }}</div>
                </div>
                <div class="col-sm-9 col-8">
                    <div class="product-price">
                        <strong id="chosen_price" class="price-blue">
                            {{ home_discounted_price($detailedProduct) }}
                        </strong>
                    </div>
                </div>
            </div>

        </form>
    @endif

    @if ($detailedProduct->auction_product)
        @php
            $highest_bid = $detailedProduct->bids->max('amount');
            $min_bid_amount = $highest_bid != null ? $highest_bid + 1 : $detailedProduct->starting_bid;
        @endphp
        @if ($detailedProduct->auction_end_date >= strtotime('now'))
            <div class="mt-4">
                @if (Auth::check() && $detailedProduct->user_id == Auth::user()->id)
                    <span
                        class="badge badge-inline badge-danger">{{ translate('Seller cannot Place Bid to His Own Product') }}</span>
                @else
                    <button type="button" class="btn btn-primary buy-now  fw-600 min-w-150px rounded-0"
                        onclick="bid_modal()">
                        <i class="las la-gavel"></i>
                        @if (Auth::check() &&
                                Auth::user()->product_bids->where('product_id', $detailedProduct->id)->first() != null)
                            {{ translate('Change Bid') }}
                        @else
                            {{ translate('Place Bid') }}
                        @endif
                    </button>
                @endif
            </div>
        @endif
    @else
        <!-- Add to cart & Buy now Buttons -->
        <div class="action-buttons-wrapper mb-4">
            @if ($detailedProduct->digital == 0)
                @if ($detailedProduct->external_link != null)
                    <a type="button" class="btn btn-buy-now px-4"
                        href="{{ $detailedProduct->external_link }}">
                        <i class="la la-share"></i> {{ translate($detailedProduct->external_link_btn) }}
                    </a>
                @else
                    <button type="button"
                        class="btn btn-add-to-cart add-to-cart"
                        @if (Auth::check()) onclick="addToCart()" @else onclick="showLoginModal()" @endif>
                        <i class="las la-shopping-bag font-18"></i> {{ translate('Add to cart') }}
                    </button>
                    <button type="button" class="btn btn-buy-now buy-now"
                        @if (Auth::check()) onclick="buyNow()" @else onclick="showLoginModal()" @endif>
                        <i class="las la-bolt font-18"></i> {{ translate('Buy Now') }}
                    </button>
                @endif
                <button type="button" class="btn btn-secondary out-of-stock fw-600 d-none btn-add-cart" disabled>
                    <i class="la la-cart-arrow-down"></i> {{ translate('Out of Stock') }}
                </button>
            @elseif ($detailedProduct->digital == 1)
                <button type="button"
                    class="btn btn-add-to-cart add-to-cart"
                    @if (Auth::check()) onclick="addToCart()" @else onclick="showLoginModal()" @endif>
                    <i class="las la-shopping-bag font-18"></i> {{ translate('Add to cart') }}
                </button>
                <button type="button" class="btn btn-buy-now buy-now"
                    @if (Auth::check()) onclick="buyNow()" @else onclick="showLoginModal()" @endif>
                    <i class="las la-bolt font-18"></i> {{ translate('Buy Now') }}
                </button>
            @endif
        </div>

        <!-- Trust Features Card -->
        <div class="trust-features-card">
            <div class="trust-feature-item">
                <div class="trust-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                        <path d="M9 12l2 2 4-4"></path>
                    </svg>
                </div>
                <div class="trust-content">
                    <div class="trust-title">{{ translate('Secure Payment') }}</div>
                    <div class="trust-subtitle">{{ translate('100% protected') }}</div>
                </div>
            </div>
            <div class="trust-feature-divider"></div>
            <div class="trust-feature-item">
                <div class="trust-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21.5 2v6h-6M21.34 15.57a10 10 0 1 1-.57-8.38l5.67-5.67"></path>
                    </svg>
                </div>
                <div class="trust-content">
                    <div class="trust-title">{{ translate('Easy Returns') }}</div>
                    <div class="trust-subtitle">{{ translate('7 days return policy') }}</div>
                </div>
            </div>
            <div class="trust-feature-divider"></div>
            <div class="trust-feature-item">
                <div class="trust-icon">
                    <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#16a34a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="8" r="7"></circle>
                        <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                    </svg>
                </div>
                <div class="trust-content">
                    <div class="trust-title">{{ translate('Genuine Products') }}</div>
                    <div class="trust-subtitle">{{ translate('Quality assured') }}</div>
                </div>
            </div>
        </div>

        <!-- Promote Link -->
        <div class="d-table width-100 mt-3">
            <div class="d-table-cell">
                @if (Auth::check() &&
                        addon_is_activated('affiliate_system') &&
                        get_affliate_option_status() &&
                        Auth::user()->affiliate_user != null &&
                        Auth::user()->affiliate_user->status)
                    @php
                        if (Auth::check()) {
                            if (Auth::user()->referral_code == null) {
                                Auth::user()->referral_code = substr(Auth::user()->id . Str::random(10), 0, 10);
                                Auth::user()->save();
                            }
                            $referral_code = Auth::user()->referral_code;
                            $referral_code_url = URL::to('/product') . '/' . $detailedProduct->slug . "?product_referral_code=$referral_code";
                        }
                    @endphp
                    <div>
                        <button type="button" id="ref-cpurl-btn" class="btn btn-secondary w-200px rounded-0"
                            data-attrcpy="{{ translate('Copied') }}" onclick="CopyToClipboard(this)"
                            data-url="{{ $referral_code_url }}">{{ translate('Copy the Promote Link') }}</button>
                    </div>
                @endif
            </div>
        </div>

        <!-- Refund -->
        @php
            $refund_sticker = get_setting('refund_sticker');
        @endphp
        @if (addon_is_activated('refund_request'))
            <div class="row no-gutters mt-3">
                <div class="col-sm-2">
                    <div class="text-secondary fs-14 fw-400 mt-2">{{ translate('Refund') }}</div>
                </div>
                <div class="col-sm-10">
                    @if ($detailedProduct->refundable == 1)
                        <a href="{{ route('returnpolicy') }}" target="_blank">
                            @if ($refund_sticker != null)
                                <img src="{{ uploaded_asset($refund_sticker) }}" height="36">
                            @else
                                <img src="{{ static_asset('assets/img/refund-sticker.jpg') }}" height="36">
                            @endif
                        </a>
                        <a href="{{ route('returnpolicy') }}" class="text-blue hov-text-primary fs-14 ml-3"
                            target="_blank">{{ translate('View Policy') }}</a>
                    @else
                        <div class="text-dark fs-14 fw-400 mt-2">{{ translate('Not Applicable') }}</div>
                    @endif
                </div>
            </div>
        @endif

        <!-- Seller Guarantees -->
        @if ($detailedProduct->digital == 1)
            @if ($detailedProduct->added_by == 'seller')
                <div class="row no-gutters mt-3">
                    <div class="col-2">
                        <div class="text-secondary fs-14 fw-400">{{ translate('Seller Guarantees') }}</div>
                    </div>
                    <div class="col-10">
                        @if ($detailedProduct->user->shop->verification_status == 1)
                            <span class="text-success fs-14 fw-700">{{ translate('Verified seller') }}</span>
                        @else
                            <span class="text-danger fs-14 fw-700">{{ translate('Non verified seller') }}</span>
                        @endif
                    </div>
                </div>
            @endif
        @endif
    @endif

    <!-- Share -->
    <div class="row no-gutters mt-4">
        <div class="col-sm-2">
            <div class="text-secondary fs-14 fw-400 mt-2">{{ translate('Share') }}</div>
        </div>
        <div class="col-sm-10">
            <div class="aiz-share"></div>
        </div>
    </div>
</div>
