
<div class="container-fluid border border-bottom-1">
    <div class="row align-items-stretch my-1">
        @foreach (get_level_zero_categories()->take(5) as $key => $category)

        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 cat-icon-col @if($key < 1) d-block @else d-none @endif @if($key < 2) d-sm-block @endif @if($key < 3) d-lg-block @endif  @if($key < 5) d-xl-block @endif">
            @php
                $category_name = $category->getTranslation('name');
            @endphp

            <a href="{{ route('products.category', $category->slug) }}"
                class="d-flex align-items-center px-4 py-2 fs-14 text-dark h-100">
                <img class="cat-image lazyload mr-2 flex-shrink-0" src="{{ static_asset('assets/img/placeholder.jpg') }}"
                    data-src="{{ isset($category->catIcon->file_name) ? my_asset($category->catIcon->file_name) : static_asset('assets/img/placeholder.jpg') }}" width="50" height="50"  alt="{{ $category_name }}"
                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                <span class="cat-name has-transition text-black">{{ $category_name }}</span>
            </a>
        </div> 
        @endforeach 

        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 cat-icon-col last-cat-col">
            <a href="{{ route('categories.all') }}"
                class="d-flex align-items-center px-4 py-2 fs-14 text-dark h-100">
                <span class="cat-name has-transition text-black">View all Categories</span>
            </a>
        </div>

    </div>

</div>

<style>
    .cat-icon-col {
        border-right: 1px solid #e5e7eb;
    }
    .cat-icon-col.last-cat-col {
        border-right: none;
    }
    /* On small screens, remove right border from every 3rd column (3-col layout) */
    @media (max-width: 767.98px) {
        .cat-icon-col:nth-child(2n) {
            border-right: none;
        }
    }
    @media (min-width: 768px) and (max-width: 991.98px) {
        .cat-icon-col:nth-child(3n) {
            border-right: none;
        }
    }
    /* Remove bottom padding to let separator lines fill full height */
    .cat-icon-col a:hover .cat-name {
        color: var(--main-color, #1a73e8) !important;
    }
</style>