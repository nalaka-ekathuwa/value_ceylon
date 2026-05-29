<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        // Ad Slot Pricing (admin configurable)
        Schema::create('ad_slot_pricings', function (Blueprint $table) {
            $table->id();
            $table->string('placement'); // home | category
            $table->string('position');  // premium_hero_slider, sidebar_spotlight, etc.
            $table->integer('total_slots')->default(1);
            $table->decimal('price_per_day', 10, 2)->default(0);
            $table->timestamps();
            $table->unique(['placement', 'position']);
        });

        // Seller Ads
        Schema::create('seller_ads', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('seller_id'); // user_id of seller
            $table->string('placement');             // home | category
            $table->string('position');              // position key
            $table->string('ad_type');              // static | gif
            $table->string('media')->nullable();     // file path (upload id)
            $table->unsignedInteger('product_id')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->integer('duration_days')->default(0);
            $table->decimal('price', 10, 2)->default(0);
            $table->string('status')->default('draft'); // draft|pending_payment|active|expired|rejected
            $table->text('reject_reason')->nullable();
            $table->timestamps();

            $table->foreign('seller_id')->references('id')->on('users')->onDelete('cascade');
        });

        // Ad Payments
        Schema::create('ad_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ad_id');
            $table->decimal('amount', 10, 2)->default(0);
            $table->string('payment_method')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('status')->default('pending'); // pending | paid | failed
            $table->timestamps();

            $table->foreign('ad_id')->references('id')->on('seller_ads')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('ad_payments');
        Schema::dropIfExists('seller_ads');
        Schema::dropIfExists('ad_slot_pricings');
    }
};
