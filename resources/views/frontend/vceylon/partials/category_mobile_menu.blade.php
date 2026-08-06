<div class="px-3 py-2 text-uppercase fs-11 fw-700 text-secondary tracking-wider mt-2">{{ translate('All Categories') }}</div>
<div class="px-2">
    @foreach (get_level_zero_categories()->take(50) as $key => $category)
        @php
            $category_name = $category->getTranslation('name');
        @endphp
        <a href="{{ route('products.category', $category->slug) }}"
            class="fs-14 px-3 py-2 rounded d-flex align-items-center fw-600 text-dark hov-bg-soft-primary my-1">
            <img class="cat-image lazyload mr-3 size-24px opacity-70" src="{{ static_asset('assets/img/placeholder.jpg') }}"
                data-src="{{ isset($category->catIcon->file_name) ? my_asset($category->catIcon->file_name) : static_asset('assets/img/placeholder.jpg') }}" width="24" height="24" alt="{{ $category_name }}"
                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
            <span class="cat-name has-transition text-truncate">{{ $category_name }}</span>
        </a>
    @endforeach
</div>

