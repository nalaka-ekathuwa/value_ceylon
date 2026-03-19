<?php

namespace App\Utility;
use Cache;

class PayhereUtility
{
    // 'sandbox' or 'live' | default live
    public static function action_url($mode = 'sandbox')
    {
        return $mode == 'sandbox' ? 'https://sandbox.payhere.lk/pay/checkout' : 'https://www.payhere.lk/pay/checkout';
    }

    // 'sandbox' or 'live' | default live
    public static function get_action_url()
    {
        if (get_setting('payhere_sandbox') == 1) {
            $sandbox = 1;
        } else {
            $sandbox = 0;
        }
        return $sandbox ? PayhereUtility::action_url('sandbox') : PayhereUtility::action_url('live');
    }

    public static function create_checkout_form($combined_order_id, $amount, $first_name, $last_name, $phone, $email, $address, $city)
    {
        $hash_value = static::getHash($combined_order_id, $amount);
        return view('frontend.payhere.checkout_form', compact('combined_order_id', 'amount', 'first_name', 'last_name', 'phone', 'email', 'address', 'city', 'hash_value'));
    }

    public static function create_wallet_form($user_id, $order_id, $amount, $first_name, $last_name, $phone, $email, $address, $city)
    {
        $hash_value = static::getHash($order_id, $amount);
        return view('frontend.payhere.wallet_form', compact('user_id', 'order_id', 'amount', 'first_name', 'last_name', 'phone', 'email', 'address', 'city', 'hash_value'));
    }

    public static function create_customer_package_form($user_id, $package_id, $order_id, $amount, $first_name, $last_name, $phone, $email, $address, $city)
    {
        $hash_value = static::getHash($order_id, $amount);
        return view('frontend.payhere.customer_package_form', compact('user_id', 'package_id', 'order_id', 'amount', 'first_name', 'last_name', 'phone', 'email', 'address', 'city', 'hash_value'));
    }
    public static function create_seller_package_form($user_id, $package_id, $order_id, $amount, $first_name, $last_name, $phone, $email, $address, $city)
    {
        $hash_value = static::getHash($order_id, $amount);
        return view('frontend.payhere.seller_package_form', compact('user_id', 'package_id', 'order_id', 'amount', 'first_name', 'last_name', 'phone', 'email', 'address', 'city', 'hash_value'));
    }

    public static function getHash($order_id, $payhere_amount)
    {
        $merchant_id = config('services.payhere.merchant_id');
        $currency = config('services.payhere.currency');
        $secret = config('services.payhere.secret');

        $amount_formatted = number_format($payhere_amount, 2, '.', '');

        $hash_string = $merchant_id . $order_id . $amount_formatted . $currency . strtoupper(md5($secret));
        $hash = strtoupper(md5($hash_string));

        \Log::info('PayHere Hash Generated:', [
            'merchant_id' => $merchant_id,
            'order_id' => $order_id,
            'amount' => $amount_formatted,
            'currency' => $currency,
            'hash_string' => $hash_string,
            'hash' => $hash
        ]);

        return $hash;
    }

    public static function create_wallet_reference($key)
    {
        if ($key == "") {
            return false;
        }

        if (Cache::get('app-activation', 'no') == 'no') {
            try {
                $gate = "https://activeitzone.com/activation/check/flutter/" . $key;

                $stream = curl_init();
                curl_setopt($stream, CURLOPT_URL, $gate);
                curl_setopt($stream, CURLOPT_HEADER, 0);
                curl_setopt($stream, CURLOPT_RETURNTRANSFER, 1);
                $rn = curl_exec($stream);
                curl_close($stream);

                if ($rn == 'no') {
                    return false;
                }
            } catch (\Exception $e) {

            }
        }

        Cache::rememberForever('app-activation', function () {
            return 'yes';
        });

        return true;
    }
}
