<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\SellerAd;
use App\Models\AdSlotPricing;
use Tests\TestCase;

class AdminAdTest extends TestCase
{
    /** @test */
    public function it_can_load_ad_details_modal_for_admin()
    {
        // Set HTTP_HOST to satisfy any host checks in middleware
        $_SERVER['HTTP_HOST'] = '127.0.0.1';

        $admin = User::where('user_type', 'admin')->first();
        if (!$admin) {
            $this->markTestSkipped('No admin user found to test.');
        }

        $ad = SellerAd::first();
        if (!$ad) {
            $this->markTestSkipped('No seller ad found to test.');
        }

        $response = $this->actingAs($admin)
            ->post(route('admin.seller_ads.details'), [
                'id' => $ad->id
            ]);

        $response->assertStatus(200);
        $response->assertSee('Ad Details');
        $response->assertSee('Change Status Manually');
    }

    /** @test */
    public function it_can_update_ad_status_manually_as_admin()
    {
        // Set HTTP_HOST to satisfy any host checks in middleware
        $_SERVER['HTTP_HOST'] = '127.0.0.1';

        $admin = User::where('user_type', 'admin')->first();
        if (!$admin) {
            $this->markTestSkipped('No admin user found to test.');
        }

        $ad = SellerAd::first();
        if (!$ad) {
            $this->markTestSkipped('No seller ad found to test.');
        }

        $response = $this->actingAs($admin)
            ->post(route('admin.seller_ads.update_status', $ad->id), [
                'status' => 'active',
                'media' => $ad->media ?? '1'
            ]);

        $response->assertStatus(302);
        
        $ad->refresh();
        $this->assertEquals('active', $ad->status);
    }

    /** @test */
    public function it_handles_reject_reason_correctly()
    {
        $_SERVER['HTTP_HOST'] = '127.0.0.1';

        $admin = User::where('user_type', 'admin')->first();
        if (!$admin) {
            $this->markTestSkipped('No admin user found to test.');
        }

        $ad = SellerAd::first();
        if (!$ad) {
            $this->markTestSkipped('No seller ad found to test.');
        }

        // Test rejecting saves reason
        $response = $this->actingAs($admin)
            ->post(route('admin.seller_ads.update_status', $ad->id), [
                'status' => 'rejected',
                'reject_reason' => 'Invalid content',
                'media' => $ad->media ?? '1'
            ]);

        $response->assertStatus(302);
        $ad->refresh();
        $this->assertEquals('rejected', $ad->status);
        $this->assertEquals('Invalid content', $ad->reject_reason);

        // Test moving back to active clears reason
        $response = $this->actingAs($admin)
            ->post(route('admin.seller_ads.update_status', $ad->id), [
                'status' => 'active',
                'media' => $ad->media ?? '1'
            ]);

        $response->assertStatus(302);
        $ad->refresh();
        $this->assertEquals('active', $ad->status);
        $this->assertNull($ad->reject_reason);
    }

    /** @test */
    public function it_calculates_days_remaining_correctly()
    {
        $ad = SellerAd::first();
        if (!$ad) {
            $this->markTestSkipped('No seller ad found to test.');
        }

        // Set status to draft, should return null
        $ad->status = 'draft';
        $ad->save();
        $this->assertNull($ad->days_remaining);

        // Set status to active
        $ad->status = 'active';
        
        // Scenario 1: Today is within the range
        // end_date is 5 days from today
        $ad->start_date = now()->subDays(2);
        $ad->end_date = now()->addDays(5);
        $ad->save();
        $this->assertEquals(6, $ad->days_remaining); // 5 days + today = 6

        // Scenario 2: Today is before start_date
        $ad->start_date = now()->addDays(2);
        $ad->end_date = now()->addDays(7);
        $ad->duration_days = 6;
        $ad->save();
        $this->assertEquals(6, $ad->days_remaining); // Should return duration_days

        // Scenario 3: Today is after end_date (Expired)
        $ad->start_date = now()->subDays(7);
        $ad->end_date = now()->subDays(2);
        $ad->save();
        $this->assertEquals(0, $ad->days_remaining);
    }

    /** @test */
    public function it_can_update_slots_for_editable_positions_as_admin()
    {
        $_SERVER['HTTP_HOST'] = '127.0.0.1';

        $admin = User::where('user_type', 'admin')->first();
        if (!$admin) {
            $this->markTestSkipped('No admin user found to test.');
        }

        // Ensure default positions exist
        $this->actingAs($admin)->get(route('admin.ad_pricing.index'));

        $pricing = AdSlotPricing::where('placement', 'home')
            ->where('position', 'premium_hero_slider')
            ->first();

        $response = $this->actingAs($admin)
            ->post(route('admin.ad_pricing.update_slots', $pricing->id), [
                'total_slots' => 10
            ]);

        $response->assertStatus(302);
        $pricing->refresh();
        $this->assertEquals(10, $pricing->total_slots);
    }

    /** @test */
    public function it_cannot_update_slots_for_non_editable_positions_as_admin()
    {
        $_SERVER['HTTP_HOST'] = '127.0.0.1';

        $admin = User::where('user_type', 'admin')->first();
        if (!$admin) {
            $this->markTestSkipped('No admin user found to test.');
        }

        // Ensure default positions exist
        $this->actingAs($admin)->get(route('admin.ad_pricing.index'));

        $pricing = AdSlotPricing::where('placement', 'home')
            ->where('position', 'sidebar_spotlight')
            ->first();

        $originalSlots = $pricing->total_slots;

        $response = $this->actingAs($admin)
            ->post(route('admin.ad_pricing.update_slots', $pricing->id), [
                'total_slots' => 10
            ]);

        $response->assertStatus(302);
        $pricing->refresh();
        $this->assertEquals($originalSlots, $pricing->total_slots);
    }

    /** @test */
    public function it_calculates_occupied_and_remaining_slots_correctly()
    {
        $_SERVER['HTTP_HOST'] = '127.0.0.1';

        $admin = User::where('user_type', 'admin')->first();
        if (!$admin) {
            $this->markTestSkipped('No admin user found to test.');
        }

        // Ensure default positions exist
        $this->actingAs($admin)->get(route('admin.ad_pricing.index'));

        $pricing = AdSlotPricing::where('placement', 'home')
            ->where('position', 'premium_hero_slider')
            ->first();

        $pricing->update(['total_slots' => 5]);

        // Delete any existing ads for clean state
        SellerAd::query()->delete();

        $this->assertEquals(0, $pricing->getOccupiedSlotsCount());
        $this->assertEquals(5, $pricing->getRemainingSlotsCount());

        // Create an active ad for today
        SellerAd::create([
            'seller_id'     => $admin->id, // Use admin id just for testing
            'placement'     => 'home',
            'position'      => 'premium_hero_slider',
            'ad_type'       => 'static',
            'media'         => 'test.png',
            'start_date'    => now()->toDateString(),
            'end_date'      => now()->addDays(5)->toDateString(),
            'duration_days' => 6,
            'price'         => 3000,
            'status'        => 'active',
        ]);

        $this->assertEquals(1, $pricing->getOccupiedSlotsCount());
        $this->assertEquals(4, $pricing->getRemainingSlotsCount());

        // Create a pending ad for today
        SellerAd::create([
            'seller_id'     => $admin->id,
            'placement'     => 'home',
            'position'      => 'premium_hero_slider',
            'ad_type'       => 'static',
            'media'         => 'test2.png',
            'start_date'    => now()->toDateString(),
            'end_date'      => now()->addDays(5)->toDateString(),
            'duration_days' => 6,
            'price'         => 3000,
            'status'        => 'pending_payment',
        ]);

        $this->assertEquals(2, $pricing->getOccupiedSlotsCount());
        $this->assertEquals(3, $pricing->getRemainingSlotsCount());
    }

    /** @test */
    public function it_returns_remaining_slots_in_get_positions_api()
    {
        $_SERVER['HTTP_HOST'] = '127.0.0.1';

        $seller = User::where('user_type', 'seller')->first();
        if (!$seller) {
            $seller = new User();
            $seller->name = 'Test Seller';
            $seller->email = 'seller-test-' . uniqid() . '@example.com';
            $seller->password = bcrypt('secret');
            $seller->user_type = 'seller';
            $seller->email_verified_at = now();
            $seller->seller_account_complete_level = null;
            $seller->banned = 0;
            $seller->save();
        } else {
            $seller->seller_account_complete_level = null;
            $seller->banned = 0;
            $seller->save();
        }

        // Make sure some positions are seeded
        $pricing = AdSlotPricing::where('placement', 'home')
            ->where('position', 'premium_hero_slider')
            ->first();
        if (!$pricing) {
            $pricing = AdSlotPricing::create([
                'placement' => 'home',
                'position' => 'premium_hero_slider',
                'total_slots' => 4,
                'price_per_day' => 500
            ]);
        } else {
            $pricing->update(['total_slots' => 4]);
        }

        // Delete any existing ads for clean state
        SellerAd::query()->delete();

        // 1. Without dates, remaining slots should be total slots (4)
        $response = $this->actingAs($seller)
            ->post(route('seller.ads.get_positions'), [
                'placement' => 'home'
            ]);

        $response->assertStatus(200);
        $data = $response->json();
        $item = collect($data)->firstWhere('position', 'premium_hero_slider');
        $this->assertNotNull($item);
        $this->assertEquals(4, $item['remaining_slots']);

        // 2. Create an active ad for today
        SellerAd::create([
            'seller_id'     => $seller->id,
            'placement'     => 'home',
            'position'      => 'premium_hero_slider',
            'ad_type'       => 'static',
            'media'         => 'test.png',
            'start_date'    => now()->toDateString(),
            'end_date'      => now()->addDays(2)->toDateString(),
            'duration_days' => 3,
            'price'         => 1500,
            'status'        => 'active',
        ]);

        // Query with dates matching that active ad
        $response = $this->actingAs($seller)
            ->post(route('seller.ads.get_positions'), [
                'placement' => 'home',
                'start_date' => now()->toDateString(),
                'end_date' => now()->addDays(2)->toDateString(),
            ]);

        $response->assertStatus(200);
        $data = $response->json();
        $item = collect($data)->firstWhere('position', 'premium_hero_slider');
        $this->assertEquals(3, $item['remaining_slots']);
    }

    /** @test */
    public function it_redirects_card_payment_to_payhere()
    {
        $_SERVER['HTTP_HOST'] = '127.0.0.1';

        $seller = User::where('user_type', 'seller')->first();
        if (!$seller) {
            $seller = User::create([
                'name' => 'Test Seller',
                'email' => 'seller-' . uniqid() . '@example.com',
                'password' => bcrypt('secret'),
                'user_type' => 'seller',
                'email_verified_at' => now(),
            ]);
        }

        $ad = SellerAd::create([
            'seller_id'     => $seller->id,
            'placement'     => 'home',
            'position'      => 'premium_hero_slider',
            'ad_type'       => 'static',
            'media'         => 'test.png',
            'start_date'    => now()->toDateString(),
            'end_date'      => now()->addDays(2)->toDateString(),
            'duration_days' => 3,
            'price'         => 1500,
            'status'        => 'draft',
        ]);

        $response = $this->actingAs($seller)
            ->post(route('seller.ads.payment.process', $ad->id), [
                'payment_method' => 'card'
            ]);

        $response->assertStatus(200);
        $response->assertSee('payhere-ads-form');
        $response->assertSee('Buy Now');
    }

    /** @test */
    public function it_handles_valid_payhere_ads_notify()
    {
        $_SERVER['HTTP_HOST'] = '127.0.0.1';

        // Configure dummy secrets in config
        $originalSecret = config('services.payhere.secret');
        $originalMerchantId = config('services.payhere.merchant_id');
        $originalCurrency = config('services.payhere.currency');

        config([
            'services.payhere.secret' => 'TESTSECRET',
            'services.payhere.merchant_id' => '1215091',
            'services.payhere.currency' => 'LKR',
        ]);

        $seller = User::where('user_type', 'seller')->first();
        if (!$seller) {
            $seller = User::create([
                'name' => 'Test Seller',
                'email' => 'seller-' . uniqid() . '@example.com',
                'password' => bcrypt('secret'),
                'user_type' => 'seller',
                'email_verified_at' => now(),
            ]);
        }

        $ad = SellerAd::create([
            'seller_id'     => $seller->id,
            'placement'     => 'home',
            'position'      => 'premium_hero_slider',
            'ad_type'       => 'static',
            'media'         => 'test.png',
            'start_date'    => now()->toDateString(),
            'end_date'      => now()->addDays(2)->toDateString(),
            'duration_days' => 3,
            'price'         => 1500,
            'status'        => 'draft',
        ]);

        $merchant_id = '1215091';
        $order_id = 'AD-' . $ad->id . '-999999';
        $payhere_amount = '1500.00';
        $payhere_currency = 'LKR';
        $status_code = '2';
        $merchant_secret = 'TESTSECRET';

        $md5sig = strtoupper(md5($merchant_id . $order_id . $payhere_amount . $payhere_currency . $status_code . strtoupper(md5($merchant_secret))));

        $response = $this->post(route('payhere.ads.notify'), [
            'merchant_id' => $merchant_id,
            'order_id' => $order_id,
            'payhere_amount' => $payhere_amount,
            'payhere_currency' => $payhere_currency,
            'status_code' => $status_code,
            'md5sig' => $md5sig,
            'custom_1' => $ad->id,
            'method' => 'VISA',
            'payment_id' => 'PAYHERE-TRANS-123',
        ]);

        $response->assertStatus(200);
        $response->assertSee('Success');

        $ad->refresh();
        $this->assertEquals('pending_payment', $ad->status);

        $payment = \App\Models\AdPayment::where('ad_id', $ad->id)->first();
        $this->assertNotNull($payment);
        $this->assertEquals(1500, $payment->amount);
        $this->assertEquals('paid', $payment->status);
        $this->assertEquals('PAYHERE-TRANS-123', $payment->transaction_id);

        // Cleanup
        config([
            'services.payhere.secret' => $originalSecret,
            'services.payhere.merchant_id' => $originalMerchantId,
            'services.payhere.currency' => $originalCurrency,
        ]);
    }

    /** @test */
    public function it_rejects_invalid_payhere_ads_notify()
    {
        $_SERVER['HTTP_HOST'] = '127.0.0.1';

        $response = $this->post(route('payhere.ads.notify'), [
            'merchant_id' => '1215091',
            'order_id' => 'AD-123',
            'payhere_amount' => '1500.00',
            'payhere_currency' => 'LKR',
            'status_code' => '2',
            'md5sig' => 'INVALID_SIGNATURE',
            'custom_1' => 99999,
        ]);

        $response->assertStatus(400);
    }

    /** @test */
    public function it_handles_payhere_ads_return_and_cancel()
    {
        $_SERVER['HTTP_HOST'] = '127.0.0.1';

        $seller = User::where('user_type', 'seller')->first();
        if (!$seller) {
            $seller = User::create([
                'name' => 'Test Seller',
                'email' => 'seller-' . uniqid() . '@example.com',
                'password' => bcrypt('secret'),
                'user_type' => 'seller',
                'email_verified_at' => now(),
            ]);
        }

        $response = $this->actingAs($seller)->get(route('payhere.ads.return'));
        $response->assertRedirect(route('seller.ads.index'));

        $response2 = $this->actingAs($seller)->get(route('payhere.ads.cancel', 123));
        $response2->assertRedirect(route('seller.ads.payment', 123));
    }

    /** @test */
    public function it_stores_bank_transfer_payment_slip_and_approves_payment()
    {
        $_SERVER['HTTP_HOST'] = '127.0.0.1';

        $seller = User::where('user_type', 'seller')->first();
        if (!$seller) {
            $seller = User::create([
                'name' => 'Test Seller',
                'email' => 'seller-' . uniqid() . '@example.com',
                'password' => bcrypt('secret'),
                'user_type' => 'seller',
                'email_verified_at' => now(),
            ]);
        }

        $admin = User::where('user_type', 'admin')->first();
        if (!$admin) {
            $admin = User::create([
                'name' => 'Admin User',
                'email' => 'admin-' . uniqid() . '@example.com',
                'password' => bcrypt('secret'),
                'user_type' => 'admin',
                'email_verified_at' => now(),
            ]);
        }

        // Create mock upload record
        $upload = \App\Models\Upload::create([
            'file_original_name' => 'receipt123',
            'file_name'          => 'uploads/receipt123.png',
            'user_id'            => $seller->id,
            'extension'          => 'png',
            'type'               => 'image',
            'file_size'          => 1024,
        ]);

        $ad = SellerAd::create([
            'seller_id'     => $seller->id,
            'placement'     => 'home',
            'position'      => 'premium_hero_slider',
            'ad_type'       => 'static',
            'media'         => 'test.png',
            'start_date'    => now()->toDateString(),
            'end_date'      => now()->addDays(2)->toDateString(),
            'duration_days' => 3,
            'price'         => 1500,
            'status'        => 'draft',
        ]);

        // 1. Submit bank transfer with payment slip ID
        $response = $this->actingAs($seller)
            ->post(route('seller.ads.payment.process', $ad->id), [
                'payment_method' => 'bank_transfer',
                'payment_slip'   => (string) $upload->id
            ]);

        $response->assertRedirect(route('seller.ads.index'));

        $ad->refresh();
        $this->assertEquals('pending_payment', $ad->status);

        $payment = $ad->payment;
        $this->assertNotNull($payment);
        $this->assertEquals('bank_transfer', $payment->payment_method);
        $this->assertEquals('AD-' . $ad->id, $payment->transaction_id);
        $this->assertEquals($upload->id, $payment->payment_slip);
        $this->assertEquals('pending', $payment->status);

        // 2. Admin details modal sees the slip
        $modalResponse = $this->actingAs($admin)
            ->post(route('admin.seller_ads.details'), [
                'id' => $ad->id
            ]);
        $modalResponse->assertStatus(200);
        $modalResponse->assertSee('Payment Slip');
        $modalResponse->assertSee('uploads/receipt123.png');

        // 3. Admin approves the ad, setting payment to paid
        $approveResponse = $this->actingAs($admin)
            ->get(route('admin.seller_ads.approve', $ad->id));

        $approveResponse->assertStatus(302);

        $ad->refresh();
        $this->assertEquals('active', $ad->status);
        $this->assertEquals('paid', $ad->payment->status);
    }

    /** @test */
    public function it_displays_active_hero_slider_ads_on_homepage()
    {
        $_SERVER['HTTP_HOST'] = '127.0.0.1';

        // Delete any existing ads for clean state
        SellerAd::query()->delete();

        $seller = User::where('user_type', 'seller')->first();
        if (!$seller) {
            $seller = User::create([
                'name' => 'Test Seller',
                'email' => 'seller-' . uniqid() . '@example.com',
                'password' => bcrypt('secret'),
                'user_type' => 'seller',
                'email_verified_at' => now(),
            ]);
        }

        // Create mock upload record for the ad media
        $upload = \App\Models\Upload::create([
            'file_original_name' => 'ad_banner',
            'file_name'          => 'uploads/ad_banner123.png',
            'user_id'            => $seller->id,
            'extension'          => 'png',
            'type'               => 'image',
            'file_size'          => 1024,
        ]);

        // Create an active ad for premium hero slider
        $ad = SellerAd::create([
            'seller_id'     => $seller->id,
            'placement'     => 'home',
            'position'      => 'premium_hero_slider',
            'ad_type'       => 'static',
            'media'         => (string) $upload->id,
            'start_date'    => now()->toDateString(),
            'end_date'      => now()->addDays(2)->toDateString(),
            'duration_days' => 3,
            'price'         => 1500,
            'status'        => 'active',
        ]);

        // Ensure default positions / slot pricing exist
        $pricing = AdSlotPricing::where('placement', 'home')
            ->where('position', 'premium_hero_slider')
            ->first();
        if (!$pricing) {
            AdSlotPricing::create([
                'placement' => 'home',
                'position' => 'premium_hero_slider',
                'total_slots' => 4,
                'price_per_day' => 500
            ]);
        }

        // Set the homepage select setting to vceylon
        $setting = \App\Models\BusinessSetting::where('type', 'homepage_select')->first();
        if (!$setting) {
            $setting = new \App\Models\BusinessSetting();
            $setting->type = 'homepage_select';
        }
        $setting->value = 'vceylon';
        $setting->save();

        $response = $this->get(route('home'));

        $response->assertStatus(200);
        // It should display the uploaded asset for the active seller ad
        $response->assertSee('uploads/ad_banner123.png');
    }
}
