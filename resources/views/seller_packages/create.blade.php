@extends('backend.layouts.app')

@section('content')

    <div class="col-lg-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0 h6">{{translate('Create New Seller Package')}}</h5>
            </div>

            <form class="form-horizontal" action="{{ route('seller_packages.store') }}" method="POST" enctype="multipart/form-data">
            	@csrf
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label" for="name">{{translate('Package Name')}}</label>
                        <div class="col-sm-10">
                            <input type="text" placeholder="{{translate('Name')}}" id="name" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label" for="amount">{{translate('Amount')}}</label>
                        <div class="col-sm-10">
                            <input type="number" min="0" step="0.01" placeholder="{{translate('Amount')}}" id="amount" name="amount" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label" for="product_upload_limit">{{translate('Product Upload Limit')}}</label>
                        <div class="col-sm-10">
                            <input type="number" min="0" step="1" placeholder="{{translate('Product Upload Limit')}}" id="product_upload_limit" name="product_upload_limit" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label" for="product_search_result_ranking">{{translate('Priority Search results Ranking')}}</label>
                        <div class="col-sm-10">
                            <input type="number" min="0" step="1" placeholder="{{translate('Priority Search results Ranking')}}" id="product_search_result_ranking" name="product_search_result_ranking" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label" for="product_show_cases">{{translate('Product show cases')}}</label>
                        <div class="col-sm-10">
                            <input type="number" min="0" step="1" placeholder="{{translate('Product show cases')}}" id="product_show_cases" name="product_show_cases" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label" for="transaction_fee_percentage">{{translate('Transaction fee (%)')}}</label>
                        <div class="col-sm-10">
                            <input type="number" min="0" step="1" placeholder="{{translate('Transaction fee (%)')}}" id="transaction_fee_percentage" name="transaction_fee_percentage" class="form-control" required>
                        </div>
                    </div>



                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label" for="duration">{{translate('Duration')}}</label>
                        <div class="col-sm-10">
                            <input type="number" min="0" step="1" placeholder="{{translate('Validity in number of days')}}" id="duration" name="duration" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label">{{translate('Respond to RFQ')}}</label>
                        <div class="col-sm-10">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" name="respond_to_rfq" value="1">
                                <span></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label">{{translate('On site promotions')}}</label>
                        <div class="col-sm-10">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" name="onsite_promotions" value="1">
                                <span></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label">{{translate('Curated Marketing
                            programme')}}</label>
                        <div class="col-sm-10">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" name="curated_marketing" value="1">
                                <span></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label">{{translate('Post purchase Emails')}}</label>
                        <div class="col-sm-10">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" name="post_purchase_emails" value="1">
                                <span></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label">{{translate('Personalized Customer Service')}}</label>
                        <div class="col-sm-10">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" name="personalized_service" value="1">
                                <span></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label">{{translate('Brand building and
                            Engagement')}}</label>
                        <div class="col-sm-10">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" name="brand_building" value="1">
                                <span></span>
                            </label>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-from-label">{{translate('Chat support')}}</label>
                        <div class="col-sm-10">
                            <label class="aiz-switch aiz-switch-success mb-0">
                                <input type="checkbox" name="chat_support" value="1">
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
                                <input type="hidden" name="logo" class="selected-files">
                            </div>
                            <div class="file-preview box sm">
                            </div>
                        </div>
                    </div>
                    <div class="form-group mb-0 text-right">
                        <button type="submit" class="btn btn-sm btn-primary">{{translate('Save')}}</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
