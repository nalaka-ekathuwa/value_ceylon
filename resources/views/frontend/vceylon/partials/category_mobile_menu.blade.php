<div class="px-3 py-2 text-uppercase fs-11 fw-700 text-secondary tracking-wider">{{ translate('All Categories') }}</div>
<ul class="mb-0 list-unstyled px-2">
    @foreach (get_level_zero_categories() as $key => $category)
        @php
            $category_name = $category->getTranslation('name');
            $cat_icon = isset($category->catIcon->file_name) ? my_asset($category->catIcon->file_name) : static_asset('assets/img/placeholder.jpg');
        @endphp
        <li class="mr-0">
            <a href="{{ route('products.category', $category->slug) }}"
                class="fs-13 px-3 py-2 rounded d-flex align-items-center fw-600 text-dark hov-bg-soft-primary my-1 text-decoration-none">
                <img class="cat-image mr-3 flex-shrink-0"
                    src="{{ $cat_icon }}"
                    data-src="{{ $cat_icon }}"
                    width="22" height="22"
                    style="width: 22px; height: 22px; object-fit: contain;"
                    alt="{{ $category_name }}"
                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                <span class="cat-name has-transition text-truncate">{{ $category_name }}</span>
            </a>
        </li>
    @endforeach
</ul>
