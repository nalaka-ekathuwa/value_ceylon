<div class="bg-white rounded-lg shadow-sm border mb-4 overflow-hidden" style="border-radius: 12px;">
    <div class="p-3 p-sm-4 border-bottom bg-light">
        <h6 class="fs-15 fw-700 mb-0 text-dark">
            <i class="las la-fire text-danger mr-1"></i> {{ translate('Top Selling Products') }}
        </h6>
    </div>
    <div class="p-3">
        <ul class="list-group list-group-flush mb-0">
            @foreach (get_best_selling_products(6, $detailedProduct->user_id) as $key => $top_product)
                <li class="py-2 px-0 list-group-item border-0">
                    <div class="row gutters-10 align-items-center rounded p-2 transition-3d-hover hover-bg-light">
                        <div class="col-4 col-xl-3">
                            <!-- Image -->
                            <a href="{{ route('product', $top_product->slug) }}"
                                class="d-block text-reset overflow-hidden rounded border" style="border-radius: 8px;">
                                <img class="img-fit lazyload h-65px w-100"
                                    src="{{ static_asset('assets/img/placeholder.jpg') }}"
                                    data-src="{{ uploaded_asset($top_product->thumbnail_img) }}"
                                    alt="{{ $top_product->getTranslation('name') }}"
                                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                            </a>
                        </div>
                        <div class="col text-left">
                            <!-- Product name -->
                            <div class="mb-1">
                                <h4 class="fs-13 fw-600 mb-0 text-truncate-2" style="line-height: 1.3;">
                                    <a href="{{ route('product', $top_product->slug) }}"
                                        class="d-block text-reset hov-text-primary">{{ $top_product->getTranslation('name') }}</a>
                                </h4>
                            </div>
                            <div>
                                <!-- Price -->
                                <span class="fs-14 fw-700 text-primary">{{ home_discounted_base_price($top_product) }}</span>
                                <!-- Home Price -->
                                @if(home_price($top_product) != home_discounted_price($top_product))
                                <del class="fs-12 fw-500 opacity-60 ml-1">
                                    {{ home_price($top_product) }}
                                </del>
                                @endif
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>