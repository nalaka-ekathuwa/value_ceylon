@extends('backend.layouts.app')

@section('content')

<div class="aiz-titlebar text-left mt-2 mb-3">
    <div class="align-items-center">
        <h1 class="h3">{{translate('Edit Feedback')}}</h1>
    </div>
</div>


<div class="card">
    <form class="" action="{{ route('admin.feedbacks.update', $feedback->id ) }}" method="post">
        @csrf
        @method('put')
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
                            <select name="status" id="" class="form-control">
                                <option @if($feedback->status == 0) selected @endif value="0">Unseen</option>
                                <option @if($feedback->status == 1) selected @endif value="1">Pending</option>
                                <option @if($feedback->status == 2) selected @endif value="2">Completed</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Comment</strong></td>
                        <td>
                            <textarea name="comment" id="" cols="30" rows="10" class="form-control">{{ $feedback->comment }}</textarea>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class=" text-right">
                <button class="btn btn-primary" type="submit">Update</button>
            </div>
        </div>
    </form>
</div>


@endsection

@section('modal')

@endsection

@section('script')
    
@endsection
