@if ($detailedProduct->added_by == 'seller' && $detailedProduct->user->shop != null)
    <div class="bg-white rounded-lg shadow-sm border mb-4 overflow-hidden" style="border-radius: 12px;">
        <div class="p-3 p-sm-4 text-left">
            <div class="text-uppercase text-muted fs-11 fw-700 tracking-wider mb-3" style="letter-spacing: 0.5px;">{{ translate('Seller Information') }}</div>
            <div class="d-flex align-items-center mb-3">
                <!-- Shop Logo -->
                @if ($detailedProduct->added_by == 'seller' && get_setting('vendor_system_activation') == 1)
                <a href="{{ route('shop.visit', $detailedProduct->user->shop->slug) }}" class="avatar avatar-md mr-3 flex-shrink-0 overflow-hidden border shadow-sm rounded-circle">
                    <img class="lazyload img-fit rounded-circle"
                        src="{{ static_asset('assets/img/placeholder.jpg') }}"
                        data-src="{{ uploaded_asset($detailedProduct->user->shop->logo) }}"
                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                </a>
                @endif
                <!-- Shop Name & Verification status -->
                <div>
                    <a href="{{ route('shop.visit', $detailedProduct->user->shop->slug) }}"
                        class="text-reset hov-text-primary d-flex align-items-center fs-15 fw-700">
                        {{ $detailedProduct->user->shop->name }}
                        @if ($detailedProduct->user->shop->verification_status == 1)
                            <span class="ml-1" title="{{ translate('Verified Seller') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 17.5 17.5">
                                    <g id="Group_25616" data-name="Group 25616" transform="translate(-537.249 -1042.75)">
                                        <path id="Union_5" data-name="Union 5" d="M0,8.75A8.75,8.75,0,1,1,8.75,17.5,8.75,8.75,0,0,1,0,8.75Zm.876,0A7.875,7.875,0,1,0,8.75.875,7.883,7.883,0,0,0,.876,8.75Zm.875,0a7,7,0,1,1,7,7A7.008,7.008,0,0,1,1.751,8.751Zm3.73-.907a.789.789,0,0,0,0,1.115l2.23,2.23a.788.788,0,0,0,1.115,0l3.717-3.717a.789.789,0,0,0,0-1.115.788.788,0,0,0-1.115,0l-3.16,3.16L6.6,7.844a.788.788,0,0,0-1.115,0Z" transform="translate(537.249 1042.75)" fill="#3490f3"/>
                                    </g>
                                </svg>
                            </span>
                        @endif
                    </a>
                    @if($detailedProduct->user->shop->address)
                        <div class="location text-muted fs-12 mt-1">
                            <i class="las la-map-marker mr-1 opacity-70"></i>{{ $detailedProduct->user->shop->address }}
                        </div>
                    @endif
                </div>
            </div>
            <!-- Rating -->
            <div class="d-flex align-items-center justify-content-between p-2 rounded bg-light mb-3">
                <div class="rating rating-mr-1">
                    {{ renderStarRating($detailedProduct->user->shop->rating) }}
                </div>
                <div class="text-muted fs-12 fw-500">
                    {{ $detailedProduct->user->shop->num_of_reviews }}
                    {{ translate('reviews') }}
                </div>
            </div>
            <!-- Social Links -->
            @if ($detailedProduct->user->shop->facebook || $detailedProduct->user->shop->google || $detailedProduct->user->shop->twitter || $detailedProduct->user->shop->youtube)
                <div class="mb-3">
                    <ul class="social list-inline mb-0">
                        @if ($detailedProduct->user->shop->facebook)
                        <li class="list-inline-item mr-2 mb-2">
                            <a href="{{ $detailedProduct->user->shop->facebook }}" class="facebook text-muted hov-text-primary"
                                target="_blank">
                                <i class="lab la-facebook-f"></i>
                            </a>
                        </li>
                        @endif
                        @if ($detailedProduct->user->shop->instagram)
                        <li class="list-inline-item mr-2 mb-2">
                            <a href="{{ $detailedProduct->user->shop->instagram }}" class="instagram text-muted hov-text-primary"
                                target="_blank">
                                <i class="lab la-instagram"></i>
                            </a>
                        </li>
                        @endif
                        @if ($detailedProduct->user->shop->google)
                        <li class="list-inline-item mr-2 mb-2">
                            <a href="{{ $detailedProduct->user->shop->google }}" class="google text-muted hov-text-primary"
                                target="_blank">
                                <i class="lab la-google"></i>
                            </a>
                        </li>
                        @endif
                        @if ($detailedProduct->user->shop->twitter)
                        <li class="list-inline-item mr-2 mb-2">
                            <a href="{{ $detailedProduct->user->shop->twitter }}" class="twitter text-muted hov-text-primary"
                                target="_blank">
                                <i class="lab la-twitter"></i>
                            </a>
                        </li>
                        @endif
                        @if ($detailedProduct->user->shop->youtube)
                        <li class="list-inline-item">
                            <a href="{{ $detailedProduct->user->shop->youtube }}" class="youtube text-muted hov-text-primary"
                                target="_blank">
                                <i class="lab la-youtube"></i>
                            </a>
                        </li>
                        @endif
                    </ul>
                </div>
            @endif
            <!-- shop link button -->
            <div>
                <a href="{{ route('shop.visit', $detailedProduct->user->shop->slug) }}"
                    class="btn btn-outline-primary btn-block fs-14 fw-600 rounded-pill shadow-none transition-3d-hover">{{ translate('Visit Store') }}</a>
            </div>
        </div>
    </div>
@endif