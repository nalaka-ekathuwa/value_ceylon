@extends('backend.layouts.app')

@section('content')
<div class="aiz-titlebar mt-2 mb-3">
    <h5 class="mb-0 h6">{{translate('Update Package Information')}}</h5>
</div>

<div class="col-lg-10 mx-auto">
    <div class="card">
        <div class="card-body p-0">
            <ul class="nav nav-tabs nav-fill border-light">
                @foreach (\App\Models\Language::all() as $key => $language)
                    <li class="nav-item">
                        <a class="nav-link text-reset @if ($language->code == $lang) active @else bg-soft-dark border-light border-left-0 @endif py-3" href="{{ route('seller_packages.edit', ['id'=>$seller_package->id, 'lang'=> $language->code] ) }}">
                            <img src="{{ static_asset('assets/img/flags/'.$language->code.'.png') }}" height="11" class="mr-1">
                            <span>{{ $language->name }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
            <form class="p-4" action="{{ route('seller_packages.update', $seller_package->id) }}" method="POST">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="lang" value="{{ $lang }}">
            	@csrf
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="name">{{translate('Package Name')}}</label>
                    <div class="col-sm-10">
                        <input type="text" placeholder="{{translate('Name')}}" value="{{ $seller_package->getTranslation('name', $lang) }}" id="name" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="amount">{{translate('Amount')}}</label>
                    <div class="col-sm-10">
                        <input type="number" min="0" step="0.01" placeholder="{{translate('Amount')}}" value="{{ $seller_package->amount }}" id="amount" name="amount" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="product_upload_limit">{{translate('Product Upload Limit')}}</label>
                    <div class="col-sm-10">
                        <input type="number" min="0" step="1" placeholder="{{translate('Product Upload Limit')}}" value="{{ $seller_package->product_upload_limit }}" id="product_upload_limit" name="product_upload_limit" class="form-control" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="duration">{{translate('Duration')}}</label>
                    <div class="col-sm-10">
                        <input type="number" min="0" step="1" placeholder="{{translate('Validity in number of days')}}" value="{{ $seller_package->duration }}" id="duration" name="duration" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="product_search_result_ranking">{{translate('Priority Search results Ranking')}}</label>
                    <div class="col-sm-10">
                        <input type="number" min="0" step="1" placeholder="{{translate('Priority Search results Ranking')}}" id="product_search_result_ranking" name="product_search_result_ranking" class="form-control" value="{{ $seller_package->product_search_result_ranking}}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="product_show_cases">{{translate('Product show cases')}}</label>
                    <div class="col-sm-10">
                        <input type="number" min="0" step="1" placeholder="{{translate('Product show cases')}}" id="product_show_cases" name="product_show_cases" class="form-control" value="{{ $seller_package->product_show_cases}}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label" for="transaction_fee_percentage">{{translate('Transaction fee (%)')}}</label>
                    <div class="col-sm-10">
                        <input type="number" min="0" step="1" placeholder="{{translate('Transaction fee (%)')}}" id="transaction_fee_percentage" name="transaction_fee_percentage" class="form-control" value="{{ $seller_package->transaction_fee_percentage}}" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">{{translate('Respond to RFQ')}}</label>
                    <div class="col-sm-10">
                        <label class="aiz-switch aiz-switch-success mb-0">
                            <input type="checkbox" name="respond_to_rfq" value="1" {{ $seller_package->respond_to_rfq == 1 ? "checked" : "" }}>
                            <span></span>
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">{{translate('On site promotions')}}</label>
                    <div class="col-sm-10">
                        <label class="aiz-switch aiz-switch-success mb-0">
                            <input type="checkbox" name="onsite_promotions" value="1" {{ $seller_package->onsite_promotions == 1 ? "checked" : "" }}>
                            <span></span>
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">{{translate('Curated Marketing
                        programme')}}</label>
                    <div class="col-sm-10">
                        <label class="aiz-switch aiz-switch-success mb-0">
                            <input type="checkbox" name="curated_marketing" value="1" {{ $seller_package->curated_marketing == 1 ? "checked" : "" }}>
                            <span></span>
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">{{translate('Post purchase Emails')}}</label>
                    <div class="col-sm-10">
                        <label class="aiz-switch aiz-switch-success mb-0">
                            <input type="checkbox" name="post_purchase_emails" value="1" {{ $seller_package->post_purchase_emails == 1 ? "checked" : "" }}>
                            <span></span>
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">{{translate('Personalized Customer Service')}}</label>
                    <div class="col-sm-10">
                        <label class="aiz-switch aiz-switch-success mb-0">
                            <input type="checkbox" name="personalized_service" value="1" {{ $seller_package->personalized_service == 1 ? "checked" : "" }}>
                            <span></span>
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">{{translate('Brand building and
                        Engagement')}}</label>
                    <div class="col-sm-10">
                        <label class="aiz-switch aiz-switch-success mb-0">
                            <input type="checkbox" name="brand_building" value="1" {{ $seller_package->brand_building == 1 ? "checked" : "" }}>
                            <span></span>
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-sm-2 col-from-label">{{translate('Chat support')}}</label>
                    <div class="col-sm-10">
                        <label class="aiz-switch aiz-switch-success mb-0">
                            <input type="checkbox" name="chat_support" value="1" {{ $seller_package->chat_support == 1 ? "checked" : "" }}>
                            <span></span>
                        </label>
                    </div>
                </div>

                <div class="form-group row">
                    <label class="col-md-2 col-form-label" for="signinSrEmail">{{translate('Package Logo')}}</label>
                    <div class="col-md-10">
                        <div class="input-group" data-toggle="aizuploader" data-type="image" data-multiple="false">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-soft-secondary font-weight-medium">{{ translate('Browse')}}</div>
                            </div>
                            <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                            <input type="hidden" name="logo" value="{{ $seller_package->logo }}" class="selected-files">
                        </div>
                        <div class="file-preview box sm">
                        </div>
                    </div>
                </div>
                <div class="form-group mb-0 text-right">
                    <button type="submit" class="btn btn-sm btn-primary">{{translate('Save')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
