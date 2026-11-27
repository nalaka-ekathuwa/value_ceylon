@extends('backend.layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{ translate('Add Home Product Banner') }}</h5>
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('product-banners.store') }}" method="POST">
                    @csrf

                    {{-- Product Selector --}}
                    <div class="form-group row">
                        <label class="col-sm-3 control-label" for="product_id">
                            {{ translate('Select Product') }} <span class="text-danger">*</span>
                        </label>
                        <div class="col-sm-9">
                            <select name="product_id" id="product_id"
                                    class="form-control aiz-selectpicker"
                                    data-live-search="true"
                                    data-placeholder="{{ translate('Search and select a product...') }}"
                                    required>
                                <option value="">{{ translate('-- Choose a product --') }}</option>
                                @foreach ($products as $product)
                                    @php
                                        $firstStock = $product->stocks->first();
                                    @endphp
                                    <option value="{{ $product->id }}"
                                            data-sku="{{ $firstStock ? $firstStock->sku : 'N/A' }}"
                                            {{ old('product_id') == $product->id ? 'selected' : '' }}>
                                        {{ $product->name }}
                                        @if($firstStock) — SKU: {{ $firstStock->sku }} @endif
                                    </option>
                                @endforeach
                            </select>
                            <span class="small text-muted">
                                {{ translate('Choose the product this banner will link to.') }}
                            </span>
                        </div>
                    </div>

                    {{-- SKU Preview --}}
                    <div class="form-group row" id="sku-preview-row" style="display:none;">
                        <label class="col-sm-3 control-label">{{ translate('Product SKU') }}</label>
                        <div class="col-sm-9">
                            <input type="text" id="sku_display" class="form-control" readonly
                                   placeholder="{{ translate('SKU will appear here after selecting a product') }}">
                            <span class="small text-muted">
                                {{ translate('This SKU is stored as the banner meta and links the banner to the product on the homepage.') }}
                            </span>
                        </div>
                    </div>

                    {{-- Banner Image --}}
                    <div class="form-group row">
                        <label class="col-md-3 col-form-label">
                            {{ translate('Banner Image') }} <span class="text-danger">*</span>
                        </label>
                        <div class="col-md-9">
                            <div class="input-group" data-toggle="aizuploader" data-type="image">
                                <div class="input-group-prepend">
                                    <div class="input-group-text bg-soft-secondary font-weight-medium">
                                        {{ translate('Browse') }}
                                    </div>
                                </div>
                                <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                                <input type="hidden" name="banner" class="selected-files" value="{{ old('banner') }}">
                            </div>
                            <div class="file-preview box sm"></div>
                            <span class="small text-muted">
                                {{ translate('Upload the banner image that will appear on the homepage product banner section.') }}
                            </span>
                        </div>
                    </div>

                    <div class="form-group mb-0 text-right">
                        <a href="{{ route('product-banners.index') }}" class="btn btn-secondary mr-2">
                            {{ translate('Cancel') }}
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="las la-save mr-1"></i> {{ translate('Save Banner') }}
                        </button>
                    </div>
                </form>

            </div>
        </div>

        {{-- Info Card --}}
        <div class="card mt-4">
            <div class="card-header bg-soft-info">
                <h6 class="mb-0 text-info">
                    <i class="las la-info-circle mr-1"></i>
                    {{ translate('How Product Banners Work') }}
                </h6>
            </div>
            <div class="card-body">
                <ul class="mb-0 text-muted fs-13">
                    <li>Banners added here appear in the <strong>Home Product Banners</strong> section on the homepage.</li>
                    <li>Each banner is linked to a product via its <strong>SKU</strong>. When a visitor clicks the banner, they go directly to that product page.</li>
                    <li>Up to <strong>5 random banners</strong> are shown on the homepage at a time.</li>
                    <li>The banner image should ideally be <strong>wide and promotional</strong> to look great on the homepage.</li>
                </ul>
            </div>
        </div>

    </div>
</div>

@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function () {

        // When a product is selected, show its SKU
        $('#product_id').on('change', function () {
            var selectedOption = $(this).find('option:selected');
            var sku = selectedOption.data('sku');

            if (sku && sku !== 'N/A' && $(this).val() !== '') {
                $('#sku_display').val(sku);
                $('#sku-preview-row').show();
            } else {
                $('#sku_display').val('');
                $('#sku-preview-row').hide();
            }
        });

        // Trigger on page load if old value is set
        if ($('#product_id').val()) {
            $('#product_id').trigger('change');
        }
    });
</script>
@endsection
