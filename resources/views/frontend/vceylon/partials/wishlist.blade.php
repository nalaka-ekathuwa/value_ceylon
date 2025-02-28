<a href="{{ route('wishlists.index') }}" class="d-flex align-items-center text-dark" data-toggle="tooltip" data-title="{{ translate('Wishlist') }}" data-placement="top">
    <span class="position-relative d-inline-block">
        <img src="{{ static_asset('/assets/img/icons/wishlist.png') }}" alt="" class="img-fluid image-icon">
        @if(Auth::check() && count(Auth::user()->wishlists)>0)
            <span class="badge badge-primary badge-inline badge-pill absolute-top-right--10px">{{ count(Auth::user()->wishlists)}}</span>
        @endif
    </span>
</a>
