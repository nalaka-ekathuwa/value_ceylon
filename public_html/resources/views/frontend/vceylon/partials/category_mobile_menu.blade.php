        <h6 class="mx-3 pl-3 text-underline">All Categories</h6 >
        @foreach (get_level_zero_categories()->take(50) as $key => $category)
            @php
                $category_name = $category->getTranslation('name');
            @endphp
                <a href="{{ route('products.category', $category->slug) }}"
                    class="text-truncate px-4 fs-14 d-block hov-column-gap-1 text-dark my-2">
                    <img class="cat-image lazyload mr-2 opacity-60" src="{{ static_asset('assets/img/placeholder.jpg') }}"
                        data-src="{{ isset($category->catIcon->file_name) ? my_asset($category->catIcon->file_name) : static_asset('assets/img/placeholder.jpg') }}" width="32" alt="{{ $category_name }}"
                        onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                    <span class="cat-name has-transition text-black">{{ $category_name }}</span>
                </a>
        @endforeach

