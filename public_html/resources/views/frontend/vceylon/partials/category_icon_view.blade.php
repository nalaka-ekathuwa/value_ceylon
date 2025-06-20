
<div class="container-fluid border border-bottom-1">
    <div class="row align-items-center my-1">
        @foreach (get_level_zero_categories()->take(5) as $key => $category)

        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 @if($key < 1) d-block @else d-none @endif @if($key < 2) d-sm-block @endif @if($key < 3) d-lg-block @endif  @if($key < 5) d-xl-block @endif">
            @php
                $category_name = $category->getTranslation('name');
            @endphp

            <a href="{{ route('products.category', $category->slug) }}"
                class="d-flex px-4 fs-14 d-block text-dark">
                <img class="cat-image lazyload mr-2 align-self-center" src="{{ static_asset('assets/img/placeholder.jpg') }}"
                    data-src="{{ isset($category->catIcon->file_name) ? my_asset($category->catIcon->file_name) : static_asset('assets/img/placeholder.jpg') }}" width="50" height=50  alt="{{ $category_name }}"
                    onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder.jpg') }}';">
                <span class="cat-name has-transition text-black">{{ $category_name }}</span>
            </a>
        </div> 
        @endforeach 

        <div class="col-6 col-sm-4 col-md-4 col-lg-3 col-xl-2 ">
            <a href="{{ route('categories.all') }}"
                class="d-flex px-4 fs-14 d-block text-dark">
                <span class="cat-name has-transition text-black">View all Categories</span>
            </a>
        </div>

    </div>

</div>