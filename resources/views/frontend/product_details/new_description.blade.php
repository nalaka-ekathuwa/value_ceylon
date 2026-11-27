<div class="product-details bg-white mb-4 rounded-lg shadow-sm border p-3 p-md-4" style="border-radius: 12px;">
    <style>
        /* ── Modern Product Tabs & Spec Tables ── */
        .product-details .aiz-nav-tabs {
            flex-wrap: nowrap;
            overflow-x: auto;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
            -ms-overflow-style: none;
        }
        .product-details .aiz-nav-tabs::-webkit-scrollbar {
            display: none;
        }
        .product-details .aiz-nav-tabs a {
            border: none;
            border-bottom: 3px solid transparent;
            color: #6c757d;
            padding: 10px 14px;
            font-weight: 600;
            transition: all 0.2s ease;
            white-space: nowrap;
            flex-shrink: 0;
        }
        .product-details .aiz-nav-tabs a.active,
        .product-details .aiz-nav-tabs a.active.show {
            color: rgb(27, 108, 168) !important;
            border-bottom: 3px solid rgb(27, 108, 168) !important;
            background: transparent;
        }
        .product-details .aiz-nav-tabs a:hover {
            color: rgb(27, 108, 168) !important;
        }
        .section-subheading {
            font-size: 1.05rem;
            font-weight: 700;
            color: #1a1a2e;
            margin-top: 24px;
            margin-bottom: 14px;
            padding-left: 10px;
            border-left: 3px solid rgb(27, 108, 168);
        }
        .modern-spec-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #e9ecef;
            margin-bottom: 20px;
        }
        .modern-spec-table td {
            padding: 12px 18px;
            border-bottom: 1px solid #f1f3f5;
            font-size: 0.9rem;
            vertical-align: middle;
        }
        .modern-spec-table tr:last-child td {
            border-bottom: none;
        }
        .modern-spec-table tr:nth-child(even) {
            background-color: #fafbfc;
        }
        .modern-spec-table td.spec-label {
            width: 25%;
            font-weight: 600;
            color: #495057;
            background-color: #f8f9fa;
        }
        .modern-spec-table td.spec-val {
            color: #212529;
        }
        .modern-spec-table p {
            margin-bottom: 0;
        }
        .faq-badge {
            display: inline-flex;
            align-items: center;
            background: #f1f5f9;
            color: #334155;
            padding: 7px 14px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            border: 1px solid #e2e8f0;
            margin: 4px 6px 4px 0;
        }
        .faq-badge:hover {
            background: rgb(27, 108, 168);
            color: #ffffff;
            border-color: rgb(27, 108, 168);
            box-shadow: 0 2px 8px rgba(0,0,0,0.12);
            transform: translateY(-1px);
        }

        /* ── FAQ Accordion Arrow Alignment & Smooth Rotation ── */
        .faq-arrow {
            transition: transform 0.3s ease-in-out;
            font-size: 1.1rem;
            color: #6c757d;
            flex-shrink: 0;
        }
        .card-header[aria-expanded="true"] .faq-arrow,
        .card-header:not(.collapsed) .faq-arrow {
            transform: rotate(180deg);
            color: rgb(27, 108, 168);
        }

        /* ── Tablet & Mobile Responsiveness ── */
        @media (max-width: 991.98px) {
            .modern-spec-table td.spec-label {
                width: 35%;
            }
            .section-subheading {
                font-size: 1rem;
                margin-top: 18px;
                margin-bottom: 12px;
            }
        }

        @media (max-width: 575.98px) {
            .product-details {
                padding: 14px !important;
                border-radius: 10px !important;
            }
            .modern-spec-table td {
                padding: 10px 12px;
                font-size: 0.85rem;
            }
            .modern-spec-table td.spec-label {
                width: 40%;
                font-size: 0.82rem;
            }
            .modern-spec-table td.spec-val {
                font-size: 0.85rem;
            }
            .faq-badge {
                font-size: 12px;
                padding: 6px 12px;
                max-width: 100%;
                white-space: normal;
                line-height: 1.3;
            }
            .btn-enquiry-submit {
                width: 100%;
            }
        }
    </style>

    <!-- Tabs -->
    <div class="nav aiz-nav-tabs border-bottom mb-4 flex-nowrap overflow-auto text-nowrap">
        <a href="#tab_default_1" data-toggle="tab"
            class="mr-3 mr-md-4 pb-3 fs-15 fw-700 text-reset active show flex-shrink-0">
            <i class="las la-file-alt mr-1"></i> {{ translate('Product Details') }}
        </a>

        @if(isset($detailedProduct->faqs) && count($detailedProduct->faqs) > 0)
        <a href="#tab_default_faq" data-toggle="tab"
            class="mr-3 mr-md-4 pb-3 fs-15 fw-700 text-reset flex-shrink-0">
            <i class="las la-question-circle mr-1"></i> {{ translate('Product FAQ') }} ({{ count($detailedProduct->faqs) }})
        </a>
        @endif

        <a href="#tab_default_2" data-toggle="tab"
            class="mr-3 mr-md-4 pb-3 fs-15 fw-700 text-reset flex-shrink-0">
            <i class="las la-building mr-1"></i> {{ translate('Company Profile') }}
        </a>

        <a href="#tab_default_3" data-toggle="tab"
            class="pb-3 fs-15 fw-700 text-reset flex-shrink-0">
            <i class="las la-envelope mr-1"></i> {{ translate('Contact Supplier') }}
        </a>
    </div>

    <!-- Description -->
    <div class="tab-content pt-2">
        <!-- Description Tab -->
        <div class="tab-pane fade active show" id="tab_default_1">
            <div>
                <h5 class="section-subheading">{{ translate('Product Information') }}</h5>

                <table class="modern-spec-table">
                    <tbody>
                        <tr>
                            <td class="spec-label">{{ translate('Product Name') }}</td>
                            <td class="spec-val">
                                <strong>{{ $detailedProduct->getTranslation('name') }}</strong>
                            </td>
                        </tr>

                        @if ($detailedProduct->video_link != null || $detailedProduct->pdf != null)
                            <tr>
                                <td class="spec-label">{{ translate('Introductory Video / Attachments') }}</td>
                                <td class="spec-val">
                                    @if($detailedProduct->video_link != null)
                                        <div class="embed-responsive embed-responsive-16by9 rounded overflow-hidden shadow-sm mb-3">
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
                                    @endif

                                    @if ($detailedProduct->pdf != null)
                                        <div class="my-2">
                                            <a href="{{ uploaded_asset($detailedProduct->pdf) }}" target="_blank"
                                                class="btn btn-sm btn-outline-primary rounded-pill fw-600">
                                                <i class="las la-file-pdf mr-1"></i> {{ translate('Download Product PDF') }}
                                            </a>
                                        </div>
                                    @endif
                                </td>
                            </tr>
                        @endif

                        @if($detailedProduct->manufacturer)
                        <tr>
                            <td class="spec-label">{{ translate('Manufacturer / Supplier') }}</td>
                            <td class="spec-val">{{ $detailedProduct->manufacturer }}</td>
                        </tr>
                        @endif

                        @if($detailedProduct->city)
                        <tr>
                            <td class="spec-label">{{ translate('City') }}</td>
                            <td class="spec-val">{{ $detailedProduct->city }}</td>
                        </tr>
                        @endif

                        @if($detailedProduct->country)
                        <tr>
                            <td class="spec-label">{{ translate('Country') }}</td>
                            <td class="spec-val">{{ $detailedProduct->country }}</td>
                        </tr>
                        @endif

                        @if($detailedProduct->website)
                        <tr>
                            <td class="spec-label">{{ translate('Website') }}</td>
                            <td class="spec-val">
                                <a href="{{ Str::startsWith($detailedProduct->website, 'http') ? $detailedProduct->website : 'https://' . $detailedProduct->website }}" target="_blank" class="text-primary fw-600">
                                    {{ $detailedProduct->website }} <i class="las la-external-link-alt fs-12 ml-1"></i>
                                </a>
                            </td>
                        </tr>
                        @endif

                        @if($detailedProduct->email)
                        <tr>
                            <td class="spec-label">{{ translate('Email') }}</td>
                            <td class="spec-val">{{ $detailedProduct->email }}</td>
                        </tr>
                        @endif

                        @if(isset($detailedProduct->stocks[0]) && $detailedProduct->stocks[0]->sku)
                        <tr>
                            <td class="spec-label">{{ translate('SKU') }}</td>
                            <td class="spec-val"><code>{{ $detailedProduct->stocks[0]->sku }}</code></td>
                        </tr>
                        @endif

                        <tr>
                            <td class="spec-label">{{ translate('Unit Price') }}</td>
                            <td class="spec-val">
                                <span class="fw-700 text-dark">${{ number_format($detailedProduct->unit_price, 2) }}</span>
                            </td>
                        </tr>

                        <tr>
                            <td class="spec-label">{{ translate('Price / Discount') }}</td>
                            <td class="spec-val">
                                <span class="text-dark fw-700">${{ number_format($detailedProduct->unit_price - $detailedProduct->discount, 2) }}</span>
                                @if ($detailedProduct->discount != 0)
                                    <span class="badge badge-inline badge-success ml-2">${{ number_format($detailedProduct->discount, 2) }} OFF</span>
                                @else
                                    <span class="text-muted fs-12 ml-2">({{ translate('No Discounts') }})</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>

                <h5 class="section-subheading">{{ translate('Product Description & Specifications') }}</h5>
                <div class="p-3 bg-light rounded border mb-4">
                    {!! $detailedProduct->description !!}
                </div>

                <h5 class="section-subheading">{{ translate('Shipping Information') }}</h5>
                <table class="modern-spec-table">
                    <tbody>
                        @if($detailedProduct->weight_per_unit)
                        <tr>
                            <td class="spec-label">{{ translate('Weight per Unit') }}</td>
                            <td class="spec-val">{{ $detailedProduct->weight_per_unit }} kg</td>
                        </tr>
                        @endif

                        @if($detailedProduct->carton_dimensions)
                        <tr>
                            <td class="spec-label">{{ translate('Export Carton Dimensions / Weight') }}</td>
                            <td class="spec-val">{{ $detailedProduct->carton_dimensions }}</td>
                        </tr>
                        @endif

                        @if($detailedProduct->est_shipping_days)
                        <tr>
                            <td class="spec-label">{{ translate('Lead Time') }}</td>
                            <td class="spec-val"><i class="las la-shipping-fast text-primary mr-1"></i> {{ $detailedProduct->est_shipping_days }} {{ translate('Days') }}</td>
                        </tr>
                        @endif

                        <tr>
                            <td class="spec-label">{{ translate('Shipping Method / Terms') }}</td>
                            <td class="spec-val">
                                <span class="badge badge-inline badge-info mb-1">
                                    @if ($detailedProduct->shipping_type == 'free')
                                        {{ translate('Free shipping') }}
                                    @elseif($detailedProduct->shipping_type == 'flat_rate')
                                        {{ translate('Flat Rate') }}
                                    @else
                                        {{ translate('Quantity Multiplied') }}
                                    @endif
                                </span>
                                @if($detailedProduct->shipping_terms)
                                    <div class="fs-13 text-muted mt-1">{{ $detailedProduct->shipping_terms }}</div>
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <td class="spec-label">{{ translate('Shipping Cost') }}</td>
                            <td class="spec-val">
                                @if($detailedProduct->shipping_cost > 0)
                                    ${{ number_format($detailedProduct->shipping_cost, 2) }}
                                @else
                                    <span class="text-success font-weight-bold">{{ translate('Free') }}</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                </table>

                <h5 class="section-subheading">{{ translate('Payment Options') }}</h5>
                <table class="modern-spec-table">
                    <tbody>
                        <tr>
                            <td class="spec-label">{{ translate('Payment Methods') }}</td>
                            <td class="spec-val">
                                <span class="badge badge-inline badge-secondary"><i class="las la-credit-card mr-1"></i> {{ translate('Online Payments') }}</span>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>

        @if(isset($detailedProduct->faqs) && count($detailedProduct->faqs) > 0)
        <!-- Product FAQ Tab -->
        <div class="tab-pane fade" id="tab_default_faq">
            <div class="py-3">
                <h5 class="section-subheading mb-3">{{ translate('Frequently Asked Questions (FAQ)') }}</h5>
                <div class="accordion" id="productTabFaqAccordion">
                    @foreach($detailedProduct->faqs as $index => $faq)
                    <div class="card mb-2 border rounded overflow-hidden shadow-none">
                        <div class="card-header bg-light p-3 cursor-pointer {{ $index != 0 ? 'collapsed' : '' }}" id="headingTabFaq{{ $faq->id }}" data-toggle="collapse" data-target="#collapseTabFaq{{ $faq->id }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapseTabFaq{{ $faq->id }}">
                            <h6 class="mb-0 fs-14 fw-600 text-dark d-flex align-items-center justify-content-between w-100">
                                <span class="pr-3"><i class="las la-question-circle text-primary mr-2"></i> {{ $faq->question }}</span>
                                <i class="las la-angle-down faq-arrow"></i>
                            </h6>
                        </div>
                        <div id="collapseTabFaq{{ $faq->id }}" class="collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="headingTabFaq{{ $faq->id }}" data-parent="#productTabFaqAccordion">
                            <div class="card-body bg-white text-secondary fs-14">
                                {!! nl2br(e($faq->answer)) !!}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <!-- Company Profile Tab -->
        <div class="tab-pane fade" id="tab_default_2">
            <div class="py-3">
                <table class="modern-spec-table">
                    <tbody>
                        <tr>
                            <td class="spec-label">{{ translate('Company Name') }}</td>
                            <td class="spec-val">
                                @if ($detailedProduct->user && $detailedProduct->user->shop)
                                    <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                        <span class="fs-15 fw-700">{{ $detailedProduct->user->shop->name }}</span>
                                        <a href="{{ route('shop.visit', $detailedProduct->user->shop->slug) }}"
                                            class="btn btn-xs btn-outline-primary rounded-pill shadow-none">{{ translate('Visit Store') }} <i class="las la-angle-right ml-1"></i></a>
                                    </div>
                                @endif
                                @if ($detailedProduct->added_by == 'seller' && get_setting('vendor_system_activation') == 1 && $detailedProduct->user && $detailedProduct->user->shop)
                                    <div class="d-flex align-items-center mt-3">
                                        <a href="{{ route('shop.visit', $detailedProduct->user->shop->slug) }}"
                                            class="avatar avatar-md mr-3 flex-shrink-0 overflow-hidden border shadow-sm rounded-circle">
                                            <img class="lazyload img-fit rounded-circle"
                                                src="{{ uploaded_asset($detailedProduct->user->shop->logo) }}"
                                                data-src="{{ uploaded_asset($detailedProduct->user->shop->logo) }}"
                                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                                        </a>
                                        <div class="text-muted fs-13">{{ $detailedProduct->user->shop->meta_description }}</div>
                                    </div>
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <td class="spec-label">{{ translate('Business Type') }}</td>
                            <td class="spec-val">{{ translate('Online') }}</td>
                        </tr>

                        @if(optional($detailedProduct->user)->type_of_registration)
                        <tr>
                            <td class="spec-label">{{ translate('Legal Status') }}</td>
                            <td class="spec-val">{{ optional($detailedProduct->user)->type_of_registration }}</td>
                        </tr>
                        @endif

                        @if(optional($detailedProduct->user)->company_address)
                        <tr>
                            <td class="spec-label">{{ translate('Company Address') }}</td>
                            <td class="spec-val"><i class="las la-map-marker mr-1 text-muted"></i>{{ optional($detailedProduct->user)->company_address }}</td>
                        </tr>
                        @endif

                        @if(optional($detailedProduct->user)->br_registration_date)
                        <tr>
                            <td class="spec-label">{{ translate('Year Established') }}</td>
                            <td class="spec-val">{{ optional($detailedProduct->user)->br_registration_date }}</td>
                        </tr>
                        @endif

                        @if(optional($detailedProduct->user)->number_of_employees)
                        <tr>
                            <td class="spec-label">{{ translate('Employees') }}</td>
                            <td class="spec-val">{{ optional($detailedProduct->user)->number_of_employees }}</td>
                        </tr>
                        @endif

                        @if(optional($detailedProduct->user)->manufacturing_capacity)
                        <tr>
                            <td class="spec-label">{{ translate('Manufacturing Capacity') }}</td>
                            <td class="spec-val">{{ optional($detailedProduct->user)->manufacturing_capacity }}</td>
                        </tr>
                        @endif

                        @if(optional($detailedProduct->user)->your_designation)
                        <tr>
                            <td class="spec-label">{{ translate('Creator Designation') }}</td>
                            <td class="spec-val">{{ optional($detailedProduct->user)->your_designation }}</td>
                        </tr>
                        @endif

                        @if(optional($detailedProduct->user)->br_number)
                        <tr>
                            <td class="spec-label">{{ translate('Business Registration') }}</td>
                            <td class="spec-val"><code>{{ optional($detailedProduct->user)->br_number }}</code></td>
                        </tr>
                        @endif

                        @if(optional($detailedProduct->user)->company_website)
                        <tr>
                            <td class="spec-label">{{ translate('Website') }}</td>
                            <td class="spec-val">
                                <a href="{{ Str::startsWith(optional($detailedProduct->user)->company_website, 'http') ? optional($detailedProduct->user)->company_website : 'https://' . optional($detailedProduct->user)->company_website }}" target="_blank" class="text-primary font-weight-bold">
                                    {{ optional($detailedProduct->user)->company_website }} <i class="las la-external-link-alt fs-12 ml-1"></i>
                                </a>
                            </td>
                        </tr>
                        @endif

                        <tr>
                            <td class="spec-label">{{ translate('Reviews & Ratings') }}</td>
                            <td class="spec-val">
                                @include('frontend.product_details.review_section')
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Contact Supplier Tab -->
        <div class="tab-pane fade" id="tab_default_3">
            <div class="py-3">
                <form action="" method="post" class="p-3 bg-light rounded border mb-4">
                    @csrf
                    <div class="form-group row align-items-center">
                        <label class="col-md-3 col-form-label font-weight-bold text-dark">
                            {{ translate('Supplier Email') }} <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="email" class="form-control rounded-pill bg-white" name="to_mail"
                                value="{{ optional($detailedProduct->user)->email }}" readonly disabled>
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <label class="col-md-3 col-form-label font-weight-bold text-dark">
                            {{ translate('Buyer Email') }} <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <input type="email" class="form-control rounded-pill" name="from_mail" value="" placeholder="{{ translate('Enter your email') }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-3 col-form-label font-weight-bold text-dark pt-2">
                            {{ translate('Message') }} <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <textarea class="form-control rounded-lg" name="message" id="target-textbox" rows="5" placeholder="{{ translate('Type your message or click any quick question below...') }}" required></textarea>
                        </div>
                    </div>

                    <div class="form-group row align-items-center">
                        <label class="col-md-3 col-form-label font-weight-bold text-dark">
                            {{ translate('Attachments') }}
                        </label>
                        <div class="col-md-9">
                            <input type="file" class="form-control-file" name="attachments[]">
                        </div>
                    </div>

                    <div class="text-right mt-4">
                        <button class="btn btn-primary rounded-pill px-4 shadow-sm btn-enquiry-submit" type="submit">
                            <i class="las la-paper-plane mr-1"></i> {{ translate('Send Enquiry') }}
                        </button>
                    </div>
                </form>

                <div class="mt-4 p-3 bg-white rounded border">
                    <h6 class="fw-700 text-dark mb-2">
                        <i class="las la-question-circle text-primary mr-1"></i> {{ translate('Quick Questions (Click to add to message)') }}
                    </h6>
                    <div class="d-flex flex-wrap mt-2">
                        <span class="faq-badge"><i class="las la-plus-circle mr-1"></i> What is the best price you can offer?</span>
                        <span class="faq-badge"><i class="las la-plus-circle mr-1"></i> What is the shipping cost?</span>
                        <span class="faq-badge"><i class="las la-plus-circle mr-1"></i> Do you support customization?</span>
                        <span class="faq-badge"><i class="las la-plus-circle mr-1"></i> How long does a custom order take?</span>
                        <span class="faq-badge"><i class="las la-plus-circle mr-1"></i> How long will it take to ship to my country?</span>
                        <span class="faq-badge"><i class="las la-plus-circle mr-1"></i> What is the MOQ for this product?</span>
                        <span class="faq-badge"><i class="las la-plus-circle mr-1"></i> Do you have a new catalogue?</span>
                        <span class="faq-badge"><i class="las la-plus-circle mr-1"></i> Can I get a sample first?</span>
                        <span class="faq-badge"><i class="las la-plus-circle mr-1"></i> Can I add my own logo?</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        if (typeof $ !== 'undefined') {
            $('.faq-badge').on('click', function () {
                var textToAppend = $(this).text().trim();
                var $textbox = $('#target-textbox');
                var currentVal = $textbox.val();
                $textbox.val(currentVal ? currentVal + "\n" + textToAppend : textToAppend);
            });
        }
    });
</script>