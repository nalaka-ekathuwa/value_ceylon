@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">{{ translate('Home Product Banners') }}</h1>
        </div>
        <div class="col text-right">
            <a href="{{ route('product-banners.create') }}" class="btn btn-circle btn-info">
                <span>{{ translate('Add New Product Banner') }}</span>
            </a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if ($banners->count() > 0)
                    <table class="table aiz-table mb-0">
                        <thead>
                            <tr>
                                <th width="80">{{ translate('Banner') }}</th>

                                <th>{{ translate('SKU (meta)') }}</th>
                                <th>{{ translate('Product Found') }}</th>
                                <th width="120">{{ translate('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($banners as $banner)
                                @php
                                    $productFromSku = get_product_by_sku($banner->meta);
                                    if (!$productFromSku && is_numeric($banner->meta)) {
                                        $productFromSku = \App\Models\Product::find($banner->meta);
                                    }
                                @endphp
                                <tr>
                                    <td>
                                        <img src="{{ uploaded_asset($banner->banner) }}"
                                             alt="{{ $banner->title }}"
                                             class="h-60px rounded">
                                    </td>

                                    <td><code>{{ $banner->meta }}</code></td>
                                    <td>
                                        @if ($productFromSku)
                                            <a href="{{ route('product', $productFromSku->slug) }}" target="_blank"
                                               class="text-primary fs-13">
                                                {{ $productFromSku->name }}
                                            </a>
                                        @else
                                            <span class="text-muted">— not found —</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('product-banners.delete', $banner->id) }}"
                                           class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete"
                                           data-href="{{ route('product-banners.delete', $banner->id) }}"
                                           title="{{ translate('Delete') }}">
                                            <i class="las la-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="aiz-pagination mt-3">
                        {{ $banners->links() }}
                    </div>
                @else
                    <div class="text-center py-5">
                        <i class="las la-image fs-40 text-muted"></i>
                        <p class="text-muted mt-2">{{ translate('No product banners found. Add your first one!') }}</p>
                        <a href="{{ route('product-banners.create') }}" class="btn btn-info mt-2">
                            {{ translate('Add Product Banner') }}
                        </a>
                    </div>
                @endif

            </div>
        </div>
    </div>
</div>

@endsection

@section('modal')
    @include('modals.delete_modal')
@endsection
