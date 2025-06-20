@if(count($todays_deal_products) > 0)
    <section class="">
        <div class="">
            <!-- Top Section -->
            <div class="d-flex mb-2 mb-md-3 align-items-baseline justify-content-between p-3 bg-primary">
                <!-- Title -->
                <h3 class="fs-16 fs-md-20 fw-700 mb-2 mb-sm-0 text-white">
                    <span class="">{{ translate('Seasonal Products') }}</span>
                </h3>
                <!-- Links -->
                <div class="d-flex">
                    <a type="button" class="arrow-prev slide-arrow link-disable text-white mr-2" onclick="clickToSlide('slick-prev','section_best_selling')"><i class="las la-angle-left fs-20 fw-600"></i></a>
                    <a type="button" class="arrow-next slide-arrow text-white ml-2" onclick="clickToSlide('slick-next','section_best_selling')"><i class="las la-angle-right fs-20 fw-600"></i></a>
                </div>
            </div>
            <!-- Products -->
            <div class="">
                <div class="aiz-carousel arrow-none" data-items="3" data-xl-items="5" data-lg-items="4"  data-md-items="3" data-sm-items="2" data-xs-items="2" data-arrows='true' data-infinite='false'>
                    @foreach ($todays_deal_products as $key => $product)
                        <div class="carousel-box position-relative has-transition  border-right border-top border-bottom @if($key == 0) border-left @endif">
                            <div class="hov-popup-shadow">
                                @include('frontend.'.get_setting('homepage_select').'.partials.product_box_1',['product' => $product])
                            </div>
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endif
