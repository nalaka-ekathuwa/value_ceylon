@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="align-items-center">
        <h1 class="h3">{{translate('Edit Feedback')}}</h1>
    </div>
</div>


<div class="card">
    <form class="" action="{{ route('admin.feedbacks.destroy', $feedback->id ) }}" method="post">
        @csrf
        @method('delete')
        <div class="card-header row gutters-5">
            <div class="col">
                <h5 class="mb-0 h6">{{translate('Edit Feedback')}}</h5>
            </div>
            
            
        </div>
    
        <div class="card-body">
            <table class="table table-strip">
                <tbody>
                    <tr>
                        <td><strong>Email</strong></td>
                        <td>{{ $feedback->email }}</td>
                    </tr>
                    <tr>
                        <td><strong>Category</strong></td>
                        <td>{{ $feedback->category }}</td>
                    </tr>
                    <tr>
                        <td><strong>Phone</strong></td>
                        <td>{{ $feedback->phone }}</td>
                    </tr>
                    <tr>
                        <td><strong>Feedback Description</strong></td>
                        <td>{{ $feedback->description }}</td>
                    </tr>

                    <tr>
                        <td><strong>Status</strong></td>
                        <td>
                            @if($feedback->status == 0)
                            Unseen
                            @elseif($feedback->status == 1)
                            Pending
                            @elseif($feedback->status == 2)
                            Complete
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Comment</strong></td>
                        <td>
                            {{ $feedback->comment }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class=" text-right">
                <button class="btn btn-primary" type="submit">Delete</button>
            </div>
        </div>
    </form>
</div>


@endsection

@section('modal')

@endsection

@section('script')
    
@endsection
