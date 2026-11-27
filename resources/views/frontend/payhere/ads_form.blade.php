<form style="display: none" method="POST" action="{{ \App\Utility\PayhereUtility::get_action_url() }}"
    id="payhere-ads-form">
    <input type="hidden" name="merchant_id" value="{{ config('services.payhere.merchant_id') }}">
    <input type="hidden" name="return_url" value="{{ route('payhere.ads.return') }}">
    <input type="hidden" name="cancel_url" value="{{ route('payhere.ads.cancel', $ad_id) }}">
    <input type="hidden" name="notify_url" value="{{ route('payhere.ads.notify') }}">
    
    <input type="hidden" name="custom_1" value="{{ $ad_id }}">
    <input type="hidden" name="custom_2" value="">
    
    <input type="hidden" name="order_id" value="{{ $order_id }}">
    <input type="hidden" name="items" value="{{ translate('Advertisement Payment - ') . $position_label }}">
    <input type="hidden" name="currency" value="{{ config('services.payhere.currency', 'LKR') }}">
    <input type="hidden" name="amount" value="{{ number_format($amount, 2, '.', '') }}">
    
    <input type="hidden" name="first_name" value="{{ $first_name }}">
    <input type="hidden" name="last_name" value="{{ $last_name }}">
    <input type="hidden" name="email" value="{{ $email }}">
    <input type="hidden" name="phone" value="{{ $phone }}">
    <input type="hidden" name="address" value="{{ $address }}">
    <input type="hidden" name="city" value="{{ $city }}">
    <input type="hidden" name="country" value="Sri Lanka">
    <input type="hidden" name="hash" value="{{ $hash_value }}">
    <input type="submit" value="Buy Now">
</form>

<script type="text/javascript">
    document.getElementById('payhere-ads-form').submit();
</script>
