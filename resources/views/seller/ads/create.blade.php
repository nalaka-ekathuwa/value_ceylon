@extends('seller.layouts.app')

@section('panel_content')

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

                        <div class="form-group row mb-3" id="position-wrap" style="display:none!important;">
                            <label class="col-sm-3 control-label">{{ translate('Ad Position') }} <span
                                    class="text-danger">*</span></label>
                            <div class="col-sm-9">
                                <select name="position" id="position" class="form-control" required>
                                    <option value="">{{ translate('-- Select Position --') }}</option>
                                </select>
                                @error('position')<span class="text-danger small">{{ $message }}</span>@enderror
                                <small class="text-muted" id="slots-info"></small>
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
                            <span>{{ translate('Premium Hero Slider') }}</span>
                            <span class="badge badge-inline badge-secondary px-2">{{ translate('4 slots') }}</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-2">
                            <span>{{ translate('Sidebar Spotlight') }}</span>
                            <span class="badge badge-inline badge-secondary px-2">{{ translate('1 slot') }}</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-2">
                            <span>{{ translate('Featured Ad Blocks') }}</span>
                            <span class="badge badge-inline badge-secondary px-2">{{ translate('3 slots') }}</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-2">
                            <span>{{ translate('Mid-Page Carousel') }}</span>
                            <span class="badge badge-inline badge-secondary px-2">{{ translate('4 slots') }}</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center mb-2">
                            <span>{{ translate('Bottom Showcase Slider') }}</span>
                            <span class="badge badge-inline badge-secondary px-2">{{ translate('4 slots') }}</span>
                        </li>
                    </ul>
                    <p class="small mb-2"><strong>{{ translate('Category Page:') }}</strong></p>
                    <ul class="list-unstyled small pl-0 mb-0">
                        <li class="d-flex justify-content-between align-items-center mb-2">
                            <span>{{ translate('Category Top Banner') }}</span>
                            <span class="badge badge-inline badge-secondary px-2">{{ translate('3 slots') }}</span>
                        </li>
                        <li class="d-flex justify-content-between align-items-center">
                            <span>{{ translate('Category Sidebar') }}</span>
                            <span class="badge badge-inline badge-secondary px-2">{{ translate('1 slot') }}</span>
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

            // Load positions on placement change
            $('#placement').on('change', function () {
                var placement = $(this).val();
                if (!placement) {
                    $('#position-wrap').hide();
                    return;
                }

                $.post('{{ route("seller.ads.get_positions") }}', { _token: CSRF, placement: placement }, function (data) {
                    var $pos = $('#position');
                    $pos.find('option:not(:first)').remove();
                    $.each(data, function (i, p) {
                        var label = p.position.replace(/_/g, ' ').replace(/\b\w/g, function (l) { return l.toUpperCase(); });
                        $pos.append('<option value="' + p.position + '" data-slots="' + p.total_slots + '" data-price="' + p.price_per_day + '">' + label + ' (' + p.total_slots + ' slots)</option>');
                    });
                    $('#position-wrap').css('display', '');
                    $('#position-wrap').show();
                }, 'json');
            });

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

            $('#position, #start_date, #end_date').on('change', updatePrice);

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