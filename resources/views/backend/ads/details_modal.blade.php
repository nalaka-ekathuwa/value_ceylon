<div class="modal-header bg-light border-bottom">
    <h5 class="modal-title font-weight-bold text-dark">{{ translate('Ad Details') }} <span
            class="text-primary">#{{ $ad->id }}</span></h5>
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
<form action="{{ route('admin.seller_ads.update_status', $ad->id) }}" method="POST">
    @csrf
    <div class="modal-body p-4">
        <div class="row">
            <!-- Left side: Ad and Payment Info -->
            <div class="col-md-7 border-right pr-md-4">
                <h6 class="text-primary font-weight-bold mb-3 d-flex align-items-center">
                    <i class="las la-info-circle mr-2 fs-18"></i> {{ translate('Ad Information') }}
                </h6>
                <table class="table table-sm table-borderless fs-13">
                    <tr>
                        <td class="text-muted py-2" width="30%">{{ translate('Seller') }}</td>
                        <td class="py-2">
                            <strong>{{ optional($ad->seller)->name }}</strong><br>
                            <span class="text-muted">{{ optional($ad->seller)->email }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted py-2">{{ translate('Placement') }}</td>
                        <td class="py-2">
                            <span class="badge badge-inline badge-soft-info px-2 py-1">{{ ucfirst($ad->placement) }}
                                Page</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted py-2">{{ translate('Position') }}</td>
                        <td class="py-2 font-weight-bold text-secondary">{{ $ad->position_label }}</td>
                    </tr>
                    @if($ad->placement === 'category' && $ad->category_id)
                        <tr>
                            <td class="text-muted py-2">{{ translate('Target Category') }}</td>
                            <td class="py-2 font-weight-bold">
                                @php
                                    $ad_category = \App\Models\Category::find($ad->category_id);
                                    $ad_subcategory = $ad->subcategory_id ? \App\Models\Category::find($ad->subcategory_id) : null;
                                @endphp
                                {{ $ad_category ? $ad_category->getTranslation('name') : '' }}
                                @if($ad_subcategory)
                                    <span class="text-muted mx-1">&gt;</span> {{ $ad_subcategory->getTranslation('name') }}
                                @endif
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <td class="text-muted py-2">{{ translate('Ad Type') }}</td>
                        <td class="py-2">
                            <span
                                class="badge badge-inline badge-soft-secondary px-2 py-1">{{ strtoupper($ad->ad_type) }}</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-muted py-2">{{ translate('Period') }}</td>
                        <td class="py-2">
                            <div class="d-flex align-items-center text-dark font-weight-bold">
                                <i class="las la-calendar text-muted mr-2 fs-16"></i>
                                <span>{{ $ad->start_date->format('d M Y') }}</span>
                                <i class="las la-arrow-right text-muted mx-2 fs-12"></i>
                                <span>{{ $ad->end_date->format('d M Y') }}</span>
                            </div>
                            <span class="text-muted small">({{ $ad->duration_days }} {{ translate('days') }})</span>
                        </td>
                    </tr>
                    @if($ad->status === 'active' || $ad->status === 'expired')
                        <tr>
                            <td class="text-muted py-2">{{ translate('Remaining') }}</td>
                            <td class="py-2">
                                @if($ad->status === 'active' && $ad->days_remaining > 0)
                                    <span class="badge badge-inline badge-soft-success font-weight-bold px-2 py-1">
                                        {{ $ad->days_remaining }} {{ translate('days left') }}
                                    </span>
                                @else
                                    <span class="badge badge-inline badge-soft-dark font-weight-bold px-2 py-1">
                                        {{ translate('Expired') }}
                                    </span>
                                @endif
                            </td>
                        </tr>
                    @endif
                    @if($ad->product)
                        <tr>
                            <td class="text-muted py-2">{{ translate('Linked Product') }}</td>
                            <td class="py-2">
                                <a href="{{ route('product', $ad->product->slug) }}" target="_blank"
                                    class="text-primary font-weight-bold d-inline-flex align-items-center">
                                    {{ $ad->product->name }} <i class="las la-external-link-alt ml-1 fs-12"></i>
                                </a>
                            </td>
                        </tr>
                    @endif
                </table>

                <hr class="my-4">

                <h6 class="text-primary font-weight-bold mb-3 d-flex align-items-center">
                    <i class="las la-credit-card mr-2 fs-18"></i> {{ translate('Payment Details') }}
                </h6>
                @if($ad->payment)
                    <table class="table table-sm table-borderless fs-13">
                        <tr>
                            <td class="text-muted py-2" width="30%">{{ translate('Amount') }}</td>
                            <td class="py-2"><strong
                                    class="text-success fs-14">{{ single_price($ad->payment->amount) }}</strong></td>
                        </tr>
                        <tr>
                            <td class="text-muted py-2">{{ translate('Method') }}</td>
                            <td class="py-2"><span
                                    class="badge badge-inline badge-soft-dark px-2 py-1">{{ strtoupper(str_replace('_', ' ', $ad->payment->payment_method)) }}</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-muted py-2">{{ translate('Transaction ID') }}</td>
                            <td class="py-2"><code>{{ $ad->payment->transaction_id }}</code></td>
                        </tr>
                        <tr>
                            <td class="text-muted py-2">{{ translate('Payment Status') }}</td>
                            <td class="py-2">{!! $ad->payment->status_badge !!}</td>
                        </tr>
                        @if($ad->payment->payment_slip)
                            <tr>
                                <td class="text-muted py-2">{{ translate('Payment Slip') }}</td>
                                <td class="py-2">
                                    <a href="{{ uploaded_asset($ad->payment->payment_slip) }}" target="_blank"
                                        class="d-inline-block border p-1 bg-white"
                                        style="border-radius:6px; max-width: 150px; cursor: pointer;">
                                        <img src="{{ uploaded_asset($ad->payment->payment_slip) }}" class="img-fluid"
                                            alt="{{ translate('Payment Slip') }}" style="border-radius:4px;">
                                    </a>
                                    <small class="text-muted d-block mt-1">{{ translate('Click to view full image') }}</small>
                                </td>
                            </tr>
                        @endif
                    </table>
                @else
                    <div class="alert alert-soft-warning py-2 mb-0 d-flex align-items-center">
                        <i class="las la-exclamation-triangle mr-2 fs-16"></i> {{ translate('No payment record found.') }}
                    </div>
                @endif
            </div>

            <!-- Right side: Image Preview & Status Control -->
            <div class="col-md-5 pl-md-4 mt-4 mt-md-0">
                <div class="mb-4">
                    <h6 class="text-primary font-weight-bold mb-3 d-flex align-items-center">
                        <i class="las la-image mr-2 fs-18"></i> {{ translate('Ad Banner') }}
                    </h6>
                    
                    <div class="mb-3">
                        <label class="form-label text-muted small uppercase mb-1 d-block">{{ translate('Current Banner') }}</label>
                        <a href="{{ uploaded_asset($ad->media) }}" target="_blank"
                            class="d-inline-block border p-1 bg-white"
                            style="border-radius:6px; max-width: 100%; cursor: pointer;">
                            <img src="{{ uploaded_asset($ad->media) }}" class="img-fluid"
                                alt="{{ translate('Ad Banner') }}" style="border-radius:4px; max-height: 200px;"
                                onerror="this.onerror=null;this.src='{{ static_asset('assets/img/placeholder-rect.jpg') }}';">
                        </a>
                        <small class="text-muted d-block mt-1">{{ translate('Click to view full image') }}</small>
                    </div>

                    <div class="mt-3">
                        <label class="form-label text-muted small uppercase mb-1 d-block">{{ translate('Change Banner Image') }}</label>
                        <div class="input-group" data-toggle="aizuploader" data-type="image">
                            <div class="input-group-prepend">
                                <div class="input-group-text bg-soft-secondary font-weight-medium">
                                    {{ translate('Browse') }}</div>
                            </div>
                            <div class="form-control file-amount">{{ translate('Choose File') }}</div>
                            <input type="hidden" name="media" class="selected-files" value="{{ $ad->media }}" required>
                        </div>
                        <div class="file-preview box sm"></div>
                        <small class="text-muted">{{ translate('Change the ad banner image if needed.') }}</small>
                    </div>
                </div>

                <div class="card border-0 bg-light-soft"
                    style="background-color: rgba(0, 0, 0, 0.02); border-radius: 8px;">
                    <div class="card-body p-3">
                        <h6 class="font-weight-bold mb-3 text-dark d-flex align-items-center">
                            <i class="las la-sliders-h mr-2 fs-18"></i> {{ translate('Change Status Manually') }}
                        </h6>

                        <div class="form-group mb-3">
                            <label
                                class="form-label text-muted small uppercase mb-1">{{ translate('Current Status') }}</label>
                            <div>{!! $ad->status_badge !!}</div>
                        </div>

                        <div class="form-group mb-3">
                            <label for="statusSelect" class="form-label font-weight-bold">{{ translate('New Status') }}
                                <span class="text-danger">*</span></label>
                            <select name="status" id="statusSelect" class="form-control demo-select2-custom" required
                                onchange="toggleRejectReason(this.value)">
                                <option value="draft" @if($ad->status === 'draft') selected @endif>
                                    {{ translate('Draft') }}</option>
                                <option value="pending_payment" @if($ad->status === 'pending_payment') selected @endif>
                                    {{ translate('Pending Payment') }}</option>
                                <option value="active" @if($ad->status === 'active') selected @endif>
                                    {{ translate('Active') }}</option>
                                <option value="expired" @if($ad->status === 'expired') selected @endif>
                                    {{ translate('Expired') }}</option>
                                <option value="rejected" @if($ad->status === 'rejected') selected @endif>
                                    {{ translate('Rejected') }}</option>
                            </select>
                        </div>

                        <div class="form-group mb-0" id="rejectReasonWrapper"
                            style="display: @if($ad->status === 'rejected') block @else none @endif;">
                            <label for="rejectReason"
                                class="form-label font-weight-bold">{{ translate('Rejection Reason') }} <span
                                    class="text-danger">*</span></label>
                            <textarea name="reject_reason" id="rejectReason" class="form-control" rows="3"
                                placeholder="{{ translate('Enter reason for rejection...') }}">{{ $ad->reject_reason }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer bg-light border-top">
        <button type="button" class="btn btn-soft-secondary" data-dismiss="modal">{{ translate('Close') }}</button>
        <button type="submit" class="btn btn-primary px-4 font-weight-bold">{{ translate('Save Changes') }}</button>
    </div>
</form>

<script>
    function toggleRejectReason(val) {
        var wrapper = document.getElementById('rejectReasonWrapper');
        var textarea = document.getElementById('rejectReason');
        if (val === 'rejected') {
            wrapper.style.display = 'block';
            textarea.setAttribute('required', 'required');
        } else {
            wrapper.style.display = 'none';
            textarea.removeAttribute('required');
        }
    }
</script>