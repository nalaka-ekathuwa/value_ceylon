@extends('seller.layouts.app')

@section('panel_content')

    <div class="row">
        <div class="col-md-6">
            <div class="card">

            
                <div class="card-body">
                    <!-- Error Meassages -->
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        
                    <form action="{{ route('seller.rfqs.replies.update' , ['rfq' => $rfq->id, 'reply' => $reply->id]) }}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" class="form-control" name="title" value="{{ old('title', $reply->title) }}">
                        </div>
        
                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea name="message" class="form-control" id="" cols="30" rows="10">{{ old('message', $reply->message) }}</textarea>
                        </div>
        
                        <button type="submit" class="btn btn-primary">Update reply</button>
                    </form>
                  
                </div>
            </div>
        </div>

    </div>

    

@endsection

@section('script')
    <script type="text/javascript">
        function sort_orders(el) {
            $('#sort_orders').submit();
        }
    </script>
@endsection
 