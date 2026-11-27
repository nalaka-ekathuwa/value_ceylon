@extends('seller.layouts.app')

@section('panel_content')

<style>
    .visually-hidden-select {
        position: absolute !important;
        width: 1px !important;
        height: 1px !important;
        padding: 0 !important;
        margin: -1px !important;
        overflow: hidden !important;
        clip: rect(0, 0, 0, 0) !important;
        border: 0 !important;
        display: block !important;
    }
    
    .ad-position-card {
        border: 2px solid #e2e8f0;
        border-radius: 12px;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        background: #fff;
        position: relative;
    }
    
    .ad-position-card:hover {
        border-color: #cbd5e1;
        transform: translateY(-4px);
        box-shadow: 0 12px 20px -8px rgba(0, 0, 0, 0.15);
    }
    
    .ad-position-card.selected {
        border-color: #3b82f6;
        background-color: #f0f7ff;
        box-shadow: 0 12px 20px -8px rgba(59, 130, 246, 0.25);
    }
    
    .ad-position-card .selected-badge {
        position: absolute;
        top: 12px;
        right: 12px;
        background: #3b82f6;
        color: #fff;
        width: 26px;
        height: 26px;
        border-radius: 50%;
        display: none;
        align-items: center;
        justify-content: center;
        font-size: 14px;
        z-index: 2;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }
    
    .ad-position-card.selected .selected-badge {
        display: flex;
    }
    
    .ad-position-img-wrap {
        background: #f8fafc;
        padding: 20px;
        border-bottom: 1px solid #edf2f7;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 160px;
        overflow: hidden;
        transition: background-color 0.3s ease;
    }
    
    .ad-position-card:hover .ad-position-img-wrap {
        background: #f1f5f9;
    }
    
    .ad-position-img-wrap img {
        max-height: 100%;
        max-width: 100%;
        object-fit: contain;
        transition: transform 0.3s ease;
    }
    
    .ad-position-card:hover .ad-position-img-wrap img {
        transform: scale(1.08);
    }
    
    .ad-position-info {
        padding: 16px;
    }
    
    .ad-position-title {
        font-size: 14px;
        font-weight: 600;
        color: #1e293b;
        margin-bottom: 10px;
        line-height: 1.4;
    }
    
    .ad-position-meta {
        font-size: 12px;
    }
    
    .ad-position-price {
        font-size: 13px;
    }
</style>

    <div class="aiz-titlebar text-left mt-2 mb-3">
        <div class="row align-items-center">
            <div class="col-auto">
                <h1 class="h3">{{ translate('Create Advertisement') }}</h1>
            </div>
            <div class="col text-right">
                <a href="{{ route('seller.ads.index') }}" class="btn btn-soft-secondary btn-sm">
                    <i class="las la-arrow-left"></i> {{ translate('Back to Ads') }}
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <form action="{{ route('seller.ads.store') }}" method="POST" id="ad-create-form">
                @csrf

                {{-- STEP 1: Placement & Position --}}
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="mb-0"><i class="las la-map-marker-alt mr-1"></i> {{ translate('Placement & Position') }}
                        </h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-3">
                            <label class="col-sm-3 control-label">{{ translate('Page / Placement') }} <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select name="placement" id="placement" class="form-control" required>
                                    <option value="">{{ translate('-- Select Page --') }}</option>
                                    <option value="home">{{ translate('Home Page') }}</option>
                                    <option value="category">{{ translate('Category Page') }}</option>
                                </select>
                                @error('placement')<span class="text-danger small">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <!-- Category/Subcategory Selection for Category Page Ads -->
                        <div id="category-select-wrap" style="display:none;">
                            <div class="form-group row mb-3">
                                <label class="col-sm-3 control-label">{{ translate('Category') }} <span
                                        class="text-danger">*</span></label>
                                <div class="col-sm-9">
                                    <select name="category_id" id="category_id" class="form-control aiz-selectpicker"
                                        data-live-search="true">
                                        <option value="">{{ translate('-- Select Category --') }}</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->getTranslation('name') }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')<span class="text-danger small">{{ $message }}</span>@enderror
                                </div>
                            </div>

                            <div class="form-group row mb-3" id="subcategory-wrap" style="display:none;">
                                <label class="col-sm-3 control-label">{{ translate('Subcategory') }}</label>
                                <div class="col-sm-9">
                                    <select name="subcategory_id" id="subcategory_id" class="form-control">
                                        <option value="">{{ translate('-- Select Subcategory --') }}</option>
                                    </select>
                                    @error('subcategory_id')<span class="text-danger small">{{ $message }}</span>@enderror
                                </div>
                            </div>

                            <!-- Real-time Slots Availability Summary for Category -->
                            <div class="form-group row mb-3" id="category-slots-summary-wrap" style="display:none;">
                                <label class="col-sm-3 control-label"></label>
                                <div class="col-sm-9">
                                    <div class="border p-3 rounded bg-soft-info">
                                        <h6 class="mb-2 text-info font-weight-bold" style="font-size: 13px;"><i class="las la-info-circle mr-1"></i> {{ translate('Category Slot Availability') }}</h6>
                                        <div class="d-flex flex-wrap align-items-center">
                                            <div class="mr-4 mb-2">
                                                <span class="text-muted mr-2">{{ translate('Category Top Banner:') }}</span>
                                                <span class="badge badge-inline" id="slots-avail-top">—</span>
                                            </div>
                                            <div class="mb-2">
                                                <span class="text-muted mr-2">{{ translate('Category Sidebar:') }}</span>
                                                <span class="badge badge-inline" id="slots-avail-sidebar">—</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-3" id="position-wrap" style="display:none!important;">
                            <label class="col-sm-3 control-label">{{ translate('Ad Position') }} <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select name="position" id="position" class="form-control visually-hidden-select" required>
                                    <option value="">{{ translate('-- Select Position --') }}</option>
                                </select>
                                
                                <div id="position-cards-container" class="row">
                                    <!-- Dynamic cards will be generated here -->
                                </div>

                                @error('position')<span class="text-danger small">{{ $message }}</span>@enderror
                                <small class="text-muted d-block mt-2" id="slots-info"></small>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- STEP 2: Ad Type & Media --}}
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="mb-0"><i class="las la-image mr-1"></i> {{ translate('Ad Creative') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-3">
                            <label class="col-sm-3 control-label">{{ translate('Ad Type') }} <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select name="ad_type" id="ad_type" class="form-control" required>
                                    <option value="">{{ translate('-- Select Type --') }}</option>
                                    <option value="static">{{ translate('Static Image (JPG / PNG / WebP)') }}</option>
                                    <option value="gif">{{ translate('Animated GIF') }}</option>
                                </select>
                                @error('ad_type')<span class="text-danger small">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 control-label">{{ translate('Upload Media') }} <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <div class="input-group" data-toggle="aizuploader" data-type="image" id="media-uploader">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text bg-soft-secondary font-weight-medium">
                                            {{ translate('Browse') }}</div>
                                    </div>
                                    <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                    <input type="hidden" name="media" class="selected-files" required>
                                </div>
                                <div class="file-preview box sm"></div>
                                <small class="text-muted"
                                    id="media-hint">{{ translate('Upload the ad banner image.') }}</small>
                                <div class="mt-2 text-info small" id="size-guideline" style="display:none;"></div>
                                @error('media')<span class="text-danger small">{{ $message }}</span>@enderror
                            </div>
                        </div>



                        <div class="form-group row mb-3">
                            <label class="col-sm-3 control-label">{{ translate('Linked Product') }}</label>
                            <div class="col-sm-9">
                                <select name="product_id" id="product_id" class="form-control aiz-selectpicker"
                                    data-live-search="true">
                                    <option value="">{{ translate('-- Optional --') }}</option>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                                <small class="text-muted">{{ translate('Link this ad to a specific product.') }}</small>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- STEP 3: Dates & Pricing --}}
                <div class="card mb-3">
                    <div class="card-header">
                        <h6 class="mb-0"><i class="las la-calendar mr-1"></i> {{ translate('Schedule & Pricing') }}</h6>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-3">
                            <label class="col-sm-3 control-label">{{ translate('Start Date') }} <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="date" name="start_date" id="start_date" class="form-control"
                                    min="{{ date('Y-m-d') }}" required>
                                @error('start_date')<span class="text-danger small">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <label class="col-sm-3 control-label">{{ translate('End Date') }} <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <input type="date" name="end_date" id="end_date" class="form-control" required>
                                @error('end_date')<span class="text-danger small">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        {{-- Auto-calculated pricing summary --}}
                        <div id="price-summary" class="alert alert-info d-none">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <strong id="calc-days">—</strong>
                                    <div class="small text-muted">{{ translate('Days') }}</div>
                                </div>
                                <div class="col-4 text-center">
                                    <strong id="calc-per-day">—</strong>
                                    <div class="small text-muted">{{ translate('Price / Day') }}</div>
                                </div>
                                <div class="col-4 text-center">
                                    <strong id="calc-total" class="text-primary fs-20">—</strong>
                                    <div class="small text-muted">{{ translate('Total') }}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary px-5">
                        <i class="las la-arrow-right mr-1"></i> {{ translate('Continue to Payment') }}
                    </button>
                </div>
            </form>
        </div>

        {{-- Sidebar Info --}}
        <div class="col-lg-4">
            <div class="card bg-soft-info mb-3">
                <div class="card-body">
                    <h6 class="font-weight-bold mb-3"><i class="las la-info-circle mr-1"></i>
                        {{ translate('Ad Placements') }}</h6>
                    <p class="small mb-2"><strong>{{ translate('Home Page:') }}</strong></p>
                    <ul class="list-unstyled small pl-0 mb-3">
                        <li class="d-flex justify-content-between align-items-center mb-2">
                            <span>{{ translate('Premium Hero Slider') }} <small class="text-muted">(1920x553 px)</small></span>
                            <span class="badge badge-inline badge-secondary px-2">
                                {{ isset($pricings['home.premium_hero_slider']) ? $pricings['home.premium_hero_slider']->remaining_slots : 4 }} {{ translate('slots remaining') }}
                            </span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-2">
                            <span>{{ translate('Sidebar Spotlight') }} <small class="text-muted">(242x560 px)</small></span>
                            <span class="badge badge-inline badge-secondary px-2">
                                {{ isset($pricings['home.sidebar_spotlight']) ? $pricings['home.sidebar_spotlight']->remaining_slots : 1 }} {{ translate('slots remaining') }}
                            </span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-2">
                            <span>{{ translate('Featured Ad Blocks') }} <small class="text-muted">(512x512 px)</small></span>
                            <span class="badge badge-inline badge-secondary px-2">
                                {{ isset($pricings['home.featured_ad_blocks']) ? $pricings['home.featured_ad_blocks']->remaining_slots : 3 }} {{ translate('slots remaining') }}
                            </span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-2">
                            <span>{{ translate('Mid-Page Carousel') }} <small class="text-muted">(1920x630 px)</small></span>
                            <span class="badge badge-inline badge-secondary px-2">
                                {{ isset($pricings['home.mid_page_carousel']) ? $pricings['home.mid_page_carousel']->remaining_slots : 4 }} {{ translate('slots remaining') }}
                            </span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-2">
                            <span>{{ translate('Bottom Showcase Slider') }} <small class="text-muted">(1920x630 px)</small></span>
                            <span class="badge badge-inline badge-secondary px-2">
                                {{ isset($pricings['home.bottom_showcase_slider']) ? $pricings['home.bottom_showcase_slider']->remaining_slots : 4 }} {{ translate('slots remaining') }}
                            </span>
                        </li>
                    </ul>
                    <p class="small mb-2"><strong>{{ translate('Category Page:') }}</strong></p>
                    <ul class="list-unstyled small pl-0 mb-0">
                        <li class="d-flex justify-content-between align-items-center mb-2">
                            <span>{{ translate('Category Top Banner') }} <small class="text-muted">(1200x300 px)</small></span>
                            <span class="badge badge-inline badge-secondary px-2">
                                {{ isset($pricings['category.category_top']) ? $pricings['category.category_top']->remaining_slots : 4 }} {{ translate('slots remaining') }}
                            </span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>{{ translate('Category Sidebar') }} <small class="text-muted">(360x600 px)</small></span>
                            <span class="badge badge-inline badge-secondary px-2">
                                {{ isset($pricings['category.category_sidebar']) ? $pricings['category.category_sidebar']->remaining_slots : 1 }} {{ translate('slots remaining') }}
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card bg-soft-warning">
                <div class="card-body">
                    <h6 class="font-weight-bold mb-2"><i class="las la-exclamation-triangle mr-1"></i>
                        {{ translate('Important Notes') }}</h6>
                    <ul class="small pl-3 mb-0">
                        <li>{{ translate('Slots are limited per position.') }}</li>
                        <li>{{ translate('No date overlap per slot allowed.') }}</li>
                        <li>{{ translate('Static: JPG, PNG, WebP only.') }}</li>
                        <li>{{ translate('GIF: .gif files only.') }}</li>
                        <li>{{ translate('Ad activates after admin approval.') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        $(function () {
            var CSRF = '{{ csrf_token() }}';

            var dimensionsMap = {
                'premium_hero_slider': '1920x553 px',
                'sidebar_spotlight': '242x560 px',
                'featured_ad_blocks': '512x512 px',
                'mid_page_carousel': '1920x630 px',
                'bottom_showcase_slider': '1920x630 px',
                'category_top': '1200x300 px',
                'category_sidebar': '360x600 px'
            };

            function getPositionImage(placement, position) {
                var baseUrl = '{{ asset("assets/img/ads_positions") }}';
                if (placement === 'home') {
                    return baseUrl + '/home_' + position + '.png';
                } else if (placement === 'category') {
                    if (position === 'category_top') {
                        return baseUrl + '/category_top_banner.png';
                    } else if (position === 'category_sidebar') {
                        return baseUrl + '/category_sidebar.png';
                    }
                    return baseUrl + '/' + position + '.png';
                }
                return '';
            }

            // Load positions dynamically
            function loadPositions() {
                var placement = $('#placement').val();
                if (!placement) {
                    $('#position-wrap').hide();
                    $('#position-cards-container').empty();
                    return;
                }

                var start = $('#start_date').val();
                var end = $('#end_date').val();
                var categoryId = $('#category_id').val();
                var subcategoryId = $('#subcategory_id').val();

                $.post('{{ route("seller.ads.get_positions") }}', { 
                    _token: CSRF, 
                    placement: placement,
                    start_date: start,
                    end_date: end,
                    category_id: categoryId,
                    subcategory_id: subcategoryId
                }, function (data) {
                    var $pos = $('#position');
                    var preselected = $pos.val();
                    $pos.find('option:not(:first)').remove();
                    
                    var $container = $('#position-cards-container');
                    $container.empty();

                    $.each(data, function (i, p) {
                        var label = p.position.replace(/_/g, ' ').replace(/\b\w/g, function (l) { return l.toUpperCase(); });
                        if (p.position === 'category_top') {
                            label = 'Category Top Banner';
                        }
                        
                        $pos.append('<option value="' + p.position + '" data-slots="' + p.remaining_slots + '" data-price="' + p.price_per_day + '">' + label + ' (' + p.remaining_slots + ' slots remaining)</option>');

                        var imgUrl = getPositionImage(placement, p.position);
                        var formattedPrice = formatPrice(p.price_per_day);
                        var recommendedSize = dimensionsMap[p.position] || '';
                        
                        var cardHtml = `
                            <div class="col-md-6 col-lg-4 mb-3">
                                <div class="ad-position-card h-100" data-value="${p.position}" data-slots="${p.remaining_slots}" data-price="${p.price_per_day}">
                                    <div class="selected-badge"><i class="las la-check"></i></div>
                                    <div class="ad-position-img-wrap">
                                        <img src="${imgUrl}" alt="${label}" class="img-fluid" onerror="this.src='{{ asset('assets/img/placeholder.jpg') }}';">
                                    </div>
                                    <div class="ad-position-info text-center">
                                        <div class="ad-position-title">${label}</div>
                                        <div class="ad-position-meta d-flex flex-column align-items-center">
                                            <span class="badge badge-inline badge-soft-secondary mb-2">${p.remaining_slots} slots remaining</span>
                                            ${recommendedSize ? `<span class="badge badge-inline badge-soft-info mb-2">Size: ${recommendedSize}</span>` : ''}
                                            <span class="ad-position-price text-primary font-weight-bold">${formattedPrice} / day</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                        $container.append(cardHtml);
                    });

                    $('#position-wrap').css('display', '');
                    $('#position-wrap').show();

                    // Update dynamic category slots summary
                    if (placement === 'category' && categoryId) {
                        $('#category-slots-summary-wrap').show();
                        
                        var topRemaining = 0;
                        var sidebarRemaining = 0;
                        
                        $.each(data, function (i, p) {
                            if (p.position === 'category_top') {
                                topRemaining = p.remaining_slots;
                            } else if (p.position === 'category_sidebar') {
                                sidebarRemaining = p.remaining_slots;
                            }
                        });

                        // Update top banner badge
                        var $topBadge = $('#slots-avail-top');
                        if (topRemaining > 0) {
                            $topBadge.removeClass('badge-soft-danger').addClass('badge-soft-success').text(topRemaining + ' {{ translate("remaining") }}');
                        } else {
                            $topBadge.removeClass('badge-soft-success').addClass('badge-soft-danger').text('{{ translate("Full") }}');
                        }

                        // Update sidebar banner badge
                        var $sidebarBadge = $('#slots-avail-sidebar');
                        if (sidebarRemaining > 0) {
                            $sidebarBadge.removeClass('badge-soft-danger').addClass('badge-soft-success').text(sidebarRemaining + ' {{ translate("remaining") }}');
                        } else {
                            $sidebarBadge.removeClass('badge-soft-success').addClass('badge-soft-danger').text('{{ translate("Full") }}');
                        }
                    } else {
                        $('#category-slots-summary-wrap').hide();
                    }

                    // Restore preselected value if it exists and mark as selected
                    if (preselected) {
                        $pos.val(preselected);
                        var $card = $container.find(`.ad-position-card[data-value="${preselected}"]`);
                        if ($card.length) {
                            $card.addClass('selected');
                            updateSlotsInfo(preselected);
                        }
                    }
                }, 'json');
            }

            // Load positions on placement change
            $('#placement').on('change', function() {
                var placement = $(this).val();
                if (placement === 'category') {
                    $('#category-select-wrap').show();
                    $('#category_id').attr('required', 'required');
                } else {
                    $('#category-select-wrap').hide();
                    $('#category_id').removeAttr('required').val('').trigger('change');
                    $('#subcategory_id').val('');
                    $('#subcategory-wrap').hide();
                }
                loadPositions();
            });

            // Load subcategories on category change
            $('#category_id').on('change', function() {
                var categoryId = $(this).val();
                var $sub = $('#subcategory_id');
                $sub.find('option:not(:first)').remove();
                
                if (!categoryId) {
                    $('#subcategory-wrap').hide();
                    loadPositions();
                    return;
                }
                
                $.post('{{ route("seller.ads.get_subcategories") }}', {
                    _token: CSRF,
                    category_id: categoryId
                }, function(data) {
                    if (data && data.length > 0) {
                        $.each(data, function(i, item) {
                            $sub.append('<option value="' + item.id + '">' + item.name + '</option>');
                        });
                        $('#subcategory-wrap').show();
                    } else {
                        $('#subcategory-wrap').hide();
                    }
                    loadPositions();
                }, 'json');
            });

            // Load positions on subcategory change
            $('#subcategory_id').on('change', loadPositions);

            // Card selection click handler
            $(document).on('click', '.ad-position-card', function () {
                var val = $(this).data('value');
                $('.ad-position-card').removeClass('selected');
                $(this).addClass('selected');
                
                $('#position').val(val).trigger('change');
                updateSlotsInfo(val);
            });

            function updateSlotsInfo(positionVal) {
                var $card = $(`.ad-position-card[data-value="${positionVal}"]`);
                if ($card.length) {
                    var slots = $card.data('slots');
                    var price = $card.data('price');
                    $('#slots-info').html('<strong>' + slots + '</strong> slots available. Price: <strong>' + formatPrice(price) + '</strong> per day.');
                } else {
                    $('#slots-info').empty();
                }
            }

            // Update price summary when position or dates change
            function updatePrice() {
                var placement = $('#placement').val();
                var position = $('#position').val();
                var start = $('#start_date').val();
                var end = $('#end_date').val();

                if (!placement || !position || !start || !end) return;

                $.post('{{ route("seller.ads.calculate_price") }}', {
                    _token: CSRF, placement: placement, position: position, start_date: start, end_date: end
                }, function (data) {
                    $('#calc-days').text(data.days);
                    $('#calc-per-day').text(formatPrice(data.per_day));
                    $('#calc-total').text(formatPrice(data.price));
                    $('#price-summary').removeClass('d-none');
                }, 'json');
            }

            function formatPrice(num) {
                return parseFloat(num).toLocaleString('en-LK', { style: 'currency', currency: 'LKR' });
            }

            $('#position').on('change', function() {
                var val = $(this).val();
                if (val && dimensionsMap[val]) {
                    $('#size-guideline').html('<i class="las la-image mr-1"></i> ' + '{{ translate("Recommended Image Dimension:") }}' + ' <strong>' + dimensionsMap[val] + '</strong>').show();
                } else {
                    $('#size-guideline').hide();
                }
                updatePrice();
            });

            $('#start_date, #end_date').on('change', function () {
                loadPositions();
                updatePrice();
            });

            // Update media hint on ad_type change
            $('#ad_type').on('change', function () {
                var t = $(this).val();
                if (t === 'static') {
                    $('#media-hint').text('{{ translate("Accepted formats: JPG, PNG, WebP.") }}');
                } else if (t === 'gif') {
                    $('#media-hint').text('{{ translate("Accepted formats: GIF only.") }}');
                }
            });

            // Enforce end_date > start_date
            $('#start_date').on('change', function () {
                $('#end_date').attr('min', $(this).val());
            });
        });
    </script>
@endsection