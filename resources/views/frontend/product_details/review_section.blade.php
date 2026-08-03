<div class="bg-white border mb-4">
    <div class="p-3 p-sm-4">
        <h3 class="fs-16 fw-700 mb-0">
            <span class="mr-4">{{ translate('Reviews & Ratings') }}</span>
        </h3>
    </div>
    <!-- Ratting -->
    <div class="px-3 px-sm-4 mb-4">
        <div class="border border-secondary-base bg-soft-secondary-base p-3 p-sm-4">
            <div class="row align-items-center">
                <div class="col-md-8 mb-3 mb-md-0">
                    <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center justify-content-between justify-content-md-start" style="gap: 12px;">
                        <!-- Score: 0 out of 5.0 -->
                        <div class="d-flex align-items-center text-nowrap">
                            <span class="fs-36 mr-2 fw-700">{{ $detailedProduct->rating }}</span>
                            <span class="fs-14 mr-3">{{ translate('out of 5.0') }}</span>
                        </div>
                        
                        <!-- Stars & Review Count -->
                        <div class="d-flex flex-column flex-sm-row align-items-start align-items-sm-center" style="gap: 8px;">
                            @php
                                $total = 0;
                                $total += $detailedProduct->reviews->count();
                            @endphp
                            <!-- Stars on 1 row without breaking -->
                            <span class="rating rating-mr-1 text-nowrap d-inline-block">
                                {{ renderStarRating($detailedProduct->rating) }}
                            </span>
                            <!-- Reviews count on 1 row -->
                            <span class="fs-14 text-nowrap">({{ $total }} {{ translate('reviews') }})</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-left text-md-right mt-2 mt-md-0">
                    <a href="javascript:void(0);" onclick="product_review('{{ $detailedProduct->id }}')" 
                        class="btn btn-secondary-base fw-400 rounded-0 text-white">
                        <span class="d-md-inline-block"> {{ translate('Rate this Product') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Reviews -->
    @include('frontend.product_details.reviews')
</div>