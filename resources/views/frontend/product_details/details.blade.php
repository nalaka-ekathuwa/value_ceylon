<div class="text-left product-info-panel">
    <style>
        /* ── Product Info Panel ── */
        .product-info-panel .product-title {
            font-size: 2.1rem;
            font-weight: 700;
            line-height: 1.25;
            color: #1a1a2e;
            margin-bottom: 12px;
        }
        .product-info-panel .product-rating-row {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 14px;
        }
        .product-info-panel .product-meta-row {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 0.9rem;
            margin-bottom: 6px;
        }
        .product-info-panel .meta-label {
            color: #888;
            font-weight: 500;
            min-width: 70px;
        }
        .product-info-panel .meta-value {
            font-weight: 600;
            color: #333;
        }
        .product-info-panel .modern-divider {
            border: none;
            border-top: 1px solid #f0f0f0;
            margin: 16px 0;
        }
        .product-info-panel .price-block {
            background: #f9fafb;
            border-radius: 8px;
            padding: 14px 16px;
            margin-bottom: 16px;
            border: 1px solid #eef0f3;
        }
        .product-info-panel .price-main {
            font-size: 1.65rem;
            font-weight: 700;
            color: var(--primary);
        }
        .product-info-panel .price-old {
            font-size: 1rem;
            color: #aaa;
            text-decoration: line-through;
            margin-left: 10px;
        }
        .product-info-panel .discount-badge {
            background: #ff4d4f;
            color: #fff;
            font-size: 0.72rem;
            font-weight: 700;
            padding: 2px 8px;
            border-radius: 50px;
            margin-left: 10px;
        }
        .product-info-panel .btn-add-cart {
            border-radius: 8px;
            font-weight: 600;
            padding: 10px 24px;
            font-size: 0.95rem;
            transition: transform .15s, box-shadow .15s;
        }
        .product-info-panel .btn-add-cart:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0,0,0,.15);
        }
        .product-info-panel .qty-control {
            border-radius: 8px;
            overflow: hidden;
            border: 1px solid #e0e0e0;
        }
        .product-info-panel .qty-control .btn {
            border-radius: 0;
        }
        .product-info-panel .qty-control input {
            border: none;
        }
        .product-info-panel .ship-badge {
            display: inline-flex;
            align-items: center;
            gap: 5px;
            background: #f0faf4;
            color: #28a745;
            font-size: 0.82rem;
            font-weight: 600;
            padding: 3px 10px;
            border-radius: 50px;
            border: 1px solid #c3e6cb;
        }
        .product-info-panel .wishlist-compare-row {
            display: flex;
            gap: 16px;
            font-size: 0.88rem;
            margin-bottom: 12px;
        }
        .product-info-panel .wishlist-compare-row a {
            color: #666;
            transition: color .2s;
        }
        .product-info-panel .wishlist-compare-row a:hover {
            color: var(--primary);
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
            <span class="opacity-50 fs-14">({{ $total }} {{ translate('reviews') }})</span>
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
    <div class="wishlist-compare-row mb-2">
        @if ($detailedProduct->auction_product != 1)
            <a href="javascript:void(0)" onclick="addToWishList({{ $detailedProduct->id }})">
                <i class="la la-heart-o"></i> {{ translate('Add to Wishlist') }}
            </a>
        @endif
        @if(get_setting('product_query_activation') == 1)
            <a href="javascript:void();" onclick="goToView('product_query')" class="text-primary fw-600 d-flex align-items-center">
                <i class="la la-question-circle mr-1"></i>
                <span class="animate-underline-blue">{{ translate('Product Inquiry') }}</span>
            </a>
        @endif
    </div>


    <!-- Brand + Seller meta -->
    <div class="mt-2 mb-2">
        @if ($detailedProduct->brand != null)
            <div class="product-meta-row">
                <span class="meta-label">{{ translate('Brand') }}</span>
                <a href="{{ route('products.brand', $detailedProduct->brand->slug) }}"
                    class="meta-value hov-text-primary">{{ $detailedProduct->brand->name }}</a>
            </div>
        @endif
        <div class="product-meta-row">
            <span class="meta-label">{{ translate('Sold by') }}</span>
            @if ($detailedProduct->added_by == 'seller' && get_setting('vendor_system_activation') == 1)
                <a href="{{ route('shop.visit', $detailedProduct->user->shop->slug) }}"
                    class="meta-value hov-text-primary">{{ $detailedProduct->user->shop->name }}</a>
            @else
                <span class="meta-value">{{ translate('Inhouse product') }}</span>
            @endif
            @if (get_setting('conversation_system') == 1)
                <button class="btn btn-sm btn-outline-secondary ml-3 px-3"
                    style="border-radius:50px;font-size:.8rem;"
                    onclick="show_chat_modal()">
                    <i class="la la-comment-o mr-1"></i>{{ translate('Message Seller') }}
                </button>
            @endif
        </div>
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
                            <span class="opacity-70" style="font-size:.85rem;">/{{ $detailedProduct->getTranslation('unit') }}</span>
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
                            <span class="opacity-70" style="font-size:.85rem;">/{{ $detailedProduct->getTranslation('unit') }}</span>
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
                        <div class="row no-gutters mb-3">
                            <div class="col-sm-2">
                                <div class="text-secondary fs-14 fw-400 mt-2 ">
                                    {{ get_single_attribute_name($choice->attribute_id) }}
                                </div>
                            </div>
                            <div class="col-sm-10">
                                <div class="aiz-radio-inline">
                                    @foreach ($choice->values as $key => $value)
                                        <label class="aiz-megabox pl-0 mr-2 mb-0">
                                            <input type="radio" name="attribute_id_{{ $choice->attribute_id }}"
                                                value="{{ $value }}"
                                                @if ($key == 0) checked @endif>
                                            <span
                                                class="aiz-megabox-elem rounded-0 d-flex align-items-center justify-content-center py-1 px-3">
                                                {{ $value }}
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
                    <div class="row no-gutters mb-3">
                        <div class="col-sm-2">
                            <div class="text-secondary fs-14 fw-400 mt-2">{{ translate('Color') }}</div>
                        </div>
                        <div class="col-sm-10">
                            <div class="aiz-radio-inline">
                                @foreach (json_decode($detailedProduct->colors) as $key => $color)
                                    <label class="aiz-megabox pl-0 mr-2 mb-0" data-toggle="tooltip"
                                        data-title="{{ get_single_color_name($color) }}">
                                        <input type="radio" name="color"
                                            value="{{ get_single_color_name($color) }}"
                                            @if ($key == 0) checked @endif>
                                        <span
                                            class="aiz-megabox-elem rounded-0 d-flex align-items-center justify-content-center p-1">
                                            <span class="size-25px d-inline-block rounded"
                                                style="background: {{ $color }};"></span>
                                        </span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endif

                <!-- Quantity + Add to cart -->
                <div class="row no-gutters mb-3">
                    <div class="col-sm-2">
                        <div class="text-secondary fs-14 fw-400 mt-2">{{ translate('Quantity') }}</div>
                    </div>
                    <div class="col-sm-10">
                        <div class="product-quantity d-flex align-items-center">
                            <div class="row no-gutters align-items-center aiz-plus-minus qty-control mr-3" style="width: 130px;">
                                <button class="btn col-auto btn-icon btn-sm btn-light" type="button"
                                    data-type="minus" data-field="quantity" disabled="">
                                    <i class="las la-minus"></i>
                                </button>
                                <input type="number" name="quantity"
                                    class="col border-0 text-center flex-grow-1 fs-16 input-number" placeholder="1"
                                    value="{{ $detailedProduct->min_qty }}" min="{{ $detailedProduct->min_qty }}"
                                    max="10" lang="en">
                                <button class="btn col-auto btn-icon btn-sm btn-light" type="button"
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
                            <div class="avialable-amount opacity-60">
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
            <div class="row no-gutters pb-3 d-none" id="chosen_price_div">
                <div class="col-sm-2">
                    <div class="text-secondary fs-14 fw-400 mt-1">{{ translate('Total Price') }}</div>
                </div>
                <div class="col-sm-10">
                    <div class="product-price">
                        <strong id="chosen_price" class="fs-20 fw-700 text-primary">

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
        <div class="mt-3 d-flex flex-wrap" style="gap:10px;">
            @if ($detailedProduct->digital == 0)
                @if ($detailedProduct->external_link != null)
                    <a type="button" class="btn btn-primary buy-now fw-600 add-to-cart btn-add-cart px-4"
                        href="{{ $detailedProduct->external_link }}">
                        <i class="la la-share"></i> {{ translate($detailedProduct->external_link_btn) }}
                    </a>
                @else
                    <button type="button"
                        class="btn btn-secondary-base add-to-cart fw-600 min-w-150px text-white btn-add-cart"
                        @if (Auth::check()) onclick="addToCart()" @else onclick="showLoginModal()" @endif>
                        <i class="las la-shopping-bag"></i> {{ translate('Add to cart') }}
                    </button>
                    <button type="button" class="btn btn-primary buy-now fw-600 add-to-cart min-w-150px btn-add-cart"
                        @if (Auth::check()) onclick="buyNow()" @else onclick="showLoginModal()" @endif>
                        <i class="la la-shopping-cart"></i> {{ translate('Buy Now') }}
                    </button>
                @endif
                <button type="button" class="btn btn-secondary out-of-stock fw-600 d-none btn-add-cart" disabled>
                    <i class="la la-cart-arrow-down"></i> {{ translate('Out of Stock') }}
                </button>
            @elseif ($detailedProduct->digital == 1)
                <button type="button"
                    class="btn btn-secondary-base add-to-cart fw-600 min-w-150px text-white btn-add-cart"
                    @if (Auth::check()) onclick="addToCart()" @else onclick="showLoginModal()" @endif>
                    <i class="las la-shopping-bag"></i> {{ translate('Add to cart') }}
                </button>
                <button type="button" class="btn btn-primary buy-now fw-600 add-to-cart min-w-150px btn-add-cart"
                    @if (Auth::check()) onclick="buyNow()" @else onclick="showLoginModal()" @endif>
                    <i class="la la-shopping-cart"></i> {{ translate('Buy Now') }}
                </button>
            @endif
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
