@extends('backend.layouts.app')

@section('content')


<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="row align-items-center">
        <div class="col-auto">
            <h1 class="h3">All Banners</h1>
        </div>
                    <div class="col text-right">
                <a href="{{ route('advertising.create') }}" class="btn btn-circle btn-info">
                    <span>Add New Banner</span>
                </a>
            </div>
            </div>
</div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if ($banners)
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Banner</td>
                                    <td>Title</td>
                                    <td>Category</td>
                                    <td>Actions</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($banners as $banner)
                                    <tr>
                                        <td><img src="{{ uploaded_asset($banner->banner) }}" alt="banner" class="h-50px">
                                        </td>
                                        <td>{{ $banner->title }}</td>
                                        <td>{{ $banner->category->name }}</td>
                                        <td>
                                            
                                            <a href="#" class="btn btn-soft-danger btn-icon btn-circle btn-sm confirm-delete" data-href="{{ route('advertising.delete', ['advertising' => $banner->id] ) }}" title="{{ translate('Delete') }}">
                                                <i class="las la-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection


@section('modal')
    @include('modals.delete_modal')
@endsection