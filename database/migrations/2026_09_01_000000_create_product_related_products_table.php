<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('product_related_products');

        Schema::create('product_related_products', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id')->index();
            $table->integer('related_product_id')->index();
            $table->timestamps();

            $table->unique(['product_id', 'related_product_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_related_products');
    }
};
