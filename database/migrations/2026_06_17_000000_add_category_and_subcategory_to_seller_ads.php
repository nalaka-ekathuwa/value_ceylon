<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('seller_ads', function (Blueprint $table) {
            $table->unsignedInteger('category_id')->nullable()->after('product_id');
            $table->unsignedInteger('subcategory_id')->nullable()->after('category_id');
        });
    }

    public function down()
    {
        Schema::table('seller_ads', function (Blueprint $table) {
            $table->dropColumn(['category_id', 'subcategory_id']);
        });
    }
};
