@extends('frontend.layouts.user_panel')

@section('panel_content')
    <div class="aiz-titlebar mb-4">
        <div class="d-flex align-items-center justify-content-between">
            <div>
                <h5 class="fs-20 fw-700 text-dark mb-0">
                    {{ translate('Conversation Details') }}
                </h5>
                <span class="fs-13 text-secondary">
                    {{ translate('With') }} 
                    @if ($conversation->sender_id == Auth::user()->id && optional($conversation->receiver)->shop != null)
                        <a href="{{ route('shop.visit', $conversation->receiver->shop->slug) }}" class="fw-700 text-primary">{{ $conversation->receiver->shop->name }}</a>
                    @elseif ($conversation->sender_id == Auth::user()->id)
                        <span class="fw-700 text-dark">{{ optional($conversation->receiver)->name }}</span>
                    @else
                        <span class="fw-700 text-dark">{{ optional($conversation->sender)->name }}</span>
                    @endif
                </span>
            </div>
            <a href="{{ route('conversations.index') }}" class="btn btn-sm btn-soft-primary rounded-pill d-inline-flex align-items-center">
                <i class="las la-arrow-left mr-1 fs-16"></i>
                <span class="d-none d-sm-inline">{{ translate('Back to Conversations') }}</span>
                <span class="d-sm-none">{{ translate('Back') }}</span>
            </a>
        </div>
    </div>

    <div class="card rounded-0 shadow-none border">
        <div class="card-header bg-light p-3 p-md-4">
            <div class="w-100">
                <!-- Conversation title -->
                <h5 class="card-title fs-16 fw-700 mb-1 text-dark">{{ $conversation->title }}</h5>
                <!-- Between info -->
                <p class="mb-0 fs-13 text-secondary fw-400 d-flex align-items-center flex-wrap">
                    <i class="las la-comments fs-18 mr-1 text-primary"></i>
                    <span>
                        {{ translate('Between you and') }}
                        <strong class="text-dark">
                            @if ($conversation->sender_id == Auth::user()->id)
                                {{ optional($conversation->receiver)->shop ? $conversation->receiver->shop->name : optional($conversation->receiver)->name }}
                            @else
                                {{ optional($conversation->sender)->name }}
                            @endif
                        </strong>
                    </span>
                </p>
            </div>
        </div>

        <div class="card-body p-3 p-md-4">
            <!-- Messages Container -->
            <div id="messages" class="mb-4">
                @include('frontend.'.get_setting('homepage_select').'.partials.messages', ['conversation', $conversation])
            </div>
            
            <!-- Reply form -->
            <form class="pt-3 border-top" action="{{ route('messages.store') }}" method="POST">
                @csrf
                <input type="hidden" name="conversation_id" value="{{ $conversation->id }}">
                <div class="form-group mb-3">
                    <textarea class="form-control rounded-0 fs-14" rows="4" name="message" placeholder="{{ translate('Type your reply here...') }}" required></textarea>
                </div>
                <div class="form-group mb-0 text-right">
                    <button type="submit" class="btn btn-primary rounded-pill px-4 btn-md w-100 w-sm-auto">{{ translate('Send Reply') }}</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
    function refresh_messages(){
        $.post('{{ route('conversations.refresh') }}', {_token:'{{ @csrf_token() }}', id:'{{ encrypt($conversation->id) }}'}, function(data){
            $('#messages').html(data);
        })
    }

    refresh_messages(); // This will run on page load
    setInterval(function(){
        refresh_messages() // this will run after every 4 seconds
    }, 5000);
    </script>
@endsection
