<div class="product-details bg-white mb-4 border p-3 p-sm-4">
    <!-- Tabs -->
    <div class="nav aiz-nav-tabs">
        <a href="#tab_default_1" data-toggle="tab"
            class="mr-5 pb-2 fs-16 fw-700 text-reset active show">{{ translate('Product Details') }}</a>

        <a href="#tab_default_2" data-toggle="tab"
            class="mr-5 pb-2 fs-16 fw-700 text-reset">{{ translate('Company Profile') }}</a>

        <a href="#tab_default_3" data-toggle="tab"
            class="mr-5 pb-2 fs-16 fw-700 text-reset">{{ translate('Contact Supplier') }}</a>

    </div>

    <!-- Description -->
    <div class="tab-content pt-0">
        <!-- Description -->
        <div class="tab-pane fade active show" id="tab_default_1">
            <div class="py-5">
                <h5 class="mb-3">Product Infomation</h5>

                <table class="table table-stripe">
                    <tbody>

                        <tr>
                            <td style="width:20%"><strong>Product Name</strong></td>
                            <td>
                                <p>{{ $detailedProduct->getTranslation('name') }}</p>
                            </td>
                        </tr>

                        @if ($detailedProduct->video_link != null || $detailedProduct->pdf != null)
                            <tr>
                                <td><strong>Introductory Video / Attachments</strong></td>
                                <td>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        @if ($detailedProduct->video_provider == 'youtube' && isset(explode('=', $detailedProduct->video_link)[1]))
                                            <iframe class="embed-responsive-item"
                                                src="https://www.youtube.com/embed/{{ get_url_params($detailedProduct->video_link, 'v') }}"></iframe>
                                        @elseif ($detailedProduct->video_provider == 'dailymotion' && isset(explode('video/', $detailedProduct->video_link)[1]))
                                            <iframe class="embed-responsive-item"
                                                src="https://www.dailymotion.com/embed/video/{{ explode('video/', $detailedProduct->video_link)[1] }}"></iframe>
                                        @elseif ($detailedProduct->video_provider == 'vimeo' && isset(explode('vimeo.com/', $detailedProduct->video_link)[1]))
                                            <iframe
                                                src="https://player.vimeo.com/video/{{ explode('vimeo.com/', $detailedProduct->video_link)[1] }}"
                                                width="500" height="281" frameborder="0" webkitallowfullscreen
                                                mozallowfullscreen allowfullscreen></iframe>
                                        @endif
                                    </div>

                                    @if ($detailedProduct->pdf != null)
                                        <div class="py-5 text-center ">
                                            <a href="{{ uploaded_asset($detailedProduct->pdf) }}"
                                                class="btn btn-primary">{{ translate('Download Product PDF') }}</a>
                                        </div>
                                    @endif
                                </td>
                            </tr>

                        @endif

                        <tr>
                            <td><strong>Manufacturer / Supplier</strong></td>
                            <td>
                                <p>{{ $detailedProduct->manufacturer }}</p>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>City</strong></td>
                            <td>
                                <p>{{ $detailedProduct->city }}</p>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>Country</strong></td>
                            <td>
                                <p>{{ $detailedProduct->country }}</p>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>Website</strong></td>
                            <td>
                                <p>{{ $detailedProduct->website }}</p>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>Email</strong></td>
                            <td>
                                <p>{{ $detailedProduct->email }}</p>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>SKU</strong></td>
                            <td>
                                <p>{{ $detailedProduct->stocks[0]->sku }}</p>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>Unit Price</strong></td>
                            <td> <del>${{ $detailedProduct->unit_price }}</del></td>
                        </tr>

                        <tr>
                            <td><strong>Price / Discount</strong></td>
                            <td>
                                <p>${{ $detailedProduct->unit_price - $detailedProduct->discount }} / @if ($detailedProduct->discount != 0)
                                        ${{ $detailedProduct->discount }} OFF
                                    @else
                                        No Discounts
                                    @endif
                                </p>
                            </td>
                        </tr>



                    </tbody>
                </table>

                <h5 class="mb-3">Product Description</h5>

                <table class="table table-stripe">
                    <tbody>

                        <tr>
                            <td style="width:20%"><strong>Product Specification / Special Features</strong></td>
                            <td> {!! $detailedProduct->description !!}</td>
                        </tr>

                    </tbody>
                </table>

                <h5 class="mb-3">Shipping Information</h5>

                <table class="table table-stripe">
                    <tbody>

                        <tr>
                            <td style="width:20%"><strong>Weight per Unit</strong></td>
                            <td> {{ $detailedProduct->weight_per_unit }}kg</td>
                        </tr>

                        <tr>
                            <td><strong>Export carton dimensions / Weight</strong></td>
                            <td> {{ $detailedProduct->carton_dimensions }}</td>
                        </tr>

                        <tr>
                            <td><strong>Lead Time</strong></td>
                            <td> {{ $detailedProduct->est_shipping_days }} Days</td>
                        </tr>


                        <tr>
                            <td><strong>Shipping Method / Terms</strong></td>
                            <td>
                                <p>
                                    @if ($detailedProduct->shipping_type == 'free')
                                        Free shipping
                                    @elseif($detailedProduct->shipping_type == 'flat_rate')
                                        Flat Rate
                                    @else
                                        Product Quantity Mulitiply
                                    @endif
                                </p>

                                <p>{{ $detailedProduct->shipping_terms }}</p>
                            </td>
                        </tr>

                        <tr>
                            <td><strong>Shipping Cost</strong></td>
                            <td> ${{ $detailedProduct->shipping_cost }}</td>
                        </tr>

                    </tbody>
                </table>


                <h5 class="mb-3">Payment Options</h5>

                <table class="table table-stripe">
                    <tbody>

                        <tr>
                            <td style="width:20%"><strong>Payment Methods</strong></td>
                            <td> Online Payments </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>

        <!-- Company Profile -->
        <div class="tab-pane fade" id="tab_default_2">
            <div class="py-5">

                <table class="table table-stripe">
                    <tbody>

                        <tr>
                            <td style="width:20%"><strong>Company Name</strong></td>
                            <td>
                                @if ($detailedProduct->user->shop)
                                    <p>{{ $detailedProduct->user->shop->name }} <a
                                            href="{{ route('shop.visit', $detailedProduct->user->shop->slug) }}"
                                            class="btn btn-primary btn-xs">Go to shop home page</a> </p>
                                @endif
                                @if ($detailedProduct->added_by == 'seller' && get_setting('vendor_system_activation') == 1)
                                    <p class="float-none">
                                        <a href="{{ route('shop.visit', $detailedProduct->user->shop->slug) }}"
                                            class="avatar avatar-lg mr-2 overflow-hidden border float-left float-lg-none float-xl-left">
                                            <img class="lazyload"
                                                src="{{ uploaded_asset($detailedProduct->user->shop->logo) }}"
                                                data-src="{{ uploaded_asset($detailedProduct->user->shop->logo) }}"
                                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                        </a>
                                    </p>

                                    <p class="d-block mt-3">{{$detailedProduct->user->shop->meta_description}}</p>
                                @endif


                            </td>
                        </tr>


                        <tr>
                            <td style="width:20%"><strong>Business type</strong></td>
                            <td> Online </td>
                        </tr>

                        <tr>
                            <td style="width:20%"><strong>Legal Status</strong></td>
                            <td> {{ $detailedProduct->user->type_of_registration }} </td>
                        </tr>

                        <tr>
                            <td style="width:20%"><strong>Company Address</strong></td>
                            <td> {{ $detailedProduct->user->company_address }} </td>
                        </tr>

                        <tr>
                            <td style="width:20%"><strong>Year Established</strong></td>
                            <td> {{ $detailedProduct->user->br_registration_date }} </td>
                        </tr>

                        <tr>
                            <td style="width:20%"><strong>Number of employees</strong></td>
                            <td> {{ $detailedProduct->user->number_of_employees }} </td>
                        </tr>

                        <tr>
                            <td style="width:20%"><strong>Manufacturing capacity</strong></td>
                            <td> {{ $detailedProduct->user->manufacturing_capacity }} </td>
                        </tr>

                        <tr>
                            <td style="width:20%"><strong>Trading Capacity</strong></td>
                            <td> 0 </td>
                        </tr>

                        <tr>
                            <td style="width:20%"><strong>Our Products and Brand</strong></td>
                            <td> Products - 0 / Brands - 0 </td>
                        </tr>

                        <tr>
                            <td style="width:20%"><strong>Creator designation</strong></td>
                            <td> {{ $detailedProduct->user->your_designation }} </td>
                        </tr>


                        <tr>
                            <td style="width:20%"><strong>Business Registration</strong></td>
                            <td> {{ $detailedProduct->user->br_number }} </td>
                        </tr>

                        <tr>
                            <td style="width:20%"><strong>Business Registration Date</strong></td>
                            <td> {{ $detailedProduct->user->br_registration_date }} </td>
                        </tr>

                        <tr>
                            <td style="width:20%"><strong>Website</strong></td>
                            <td> {{ $detailedProduct->user->company_website }} </td>
                        </tr>

                        <tr>
                            <td style="width:20%"><strong>Company Certification / Accridation</strong></td>
                            <td> </td>
                        </tr>

                        <tr>
                            <td style="width:20%"><strong>Main Export Markets</strong></td>
                            <td> </td>
                        </tr>

                        <tr>
                            <td style="width:20%"><strong>Reviews</strong></td>
                            <td>
                                @include('frontend.product_details.review_section')
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <!-- Download -->
        <div class="tab-pane fade" id="tab_default_3">
            <div class="py-5">
                <form action="" method="post">

                    <div class="row">
                        <label for="" class="col-md-3">
                            Supplier Email *
                        </label>
                        <div class="form-group col-md-9">
                            <input type="email" class="form-control" name="to_mail"
                                value="{{ $detailedProduct->user->email }}" disabled>
                        </div>
                    </div>

                    <div class="row">
                        <label for="" class="col-md-3">
                            Buyer Email *
                        </label>
                        <div class="form-group col-md-9">
                            <input type="email" class="form-control" name="from_mail" value="">
                        </div>
                    </div>


                    <div class="row">
                        <label for="" class="col-md-3">
                            Message *
                        </label>
                        <div class="form-group col-md-9">
                            <textarea class="form-control" name="message" id="target-textbox" cols="30" rows="10"></textarea>
                        </div>
                    </div>


                    <div class="row">
                        <label for="" class="col-md-3">
                            Attachments
                        </label>
                        <div class="form-group col-md-9">
                            <input type="file" class="form-control" name="attachments[]">
                        </div>
                    </div>

                    <div class="text-right">
                        <button class="btn btn-primary" type="submit">Submit</button>
                    </div>

                </form>


                <h5>Frequently Asked Questions . Click to include them in your enquiry details.</h5>
                <p class="clickable-text">What is the best price you can offer?</p>
                <p class="clickable-text">What is the shipping cost?</p>
                <p class="clickable-text">Do you support customization?</p>
                <p class="clickable-text">How long does a custom order take?</p>
                <p class="clickable-text">How long will it take to ship to my country?</p>
                <p class="clickable-text">What is the MOQ for this product?</p>
                <p class="clickable-text">Do you have a new catalogue?</p>
                <p class="clickable-text">Can I get a sample first?</p>
                <p class="clickable-text">Can I add my own logo?</p>
            </div>
        </div>
    </div>
</div>

<script>
 
 document.addEventListener("DOMContentLoaded", function() {
  document.querySelector('.clickable-text').click(function() {
    var textToAppend = document.querySelector(this).text();
    document.querySelector('#target-textarea').val(document.querySelector('#target-textarea').val() + ' ' + textToAppend);
  });
});

</script>
