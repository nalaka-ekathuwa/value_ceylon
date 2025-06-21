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
        Schema::create('prescriptions', function (Blueprint $table) {
           $table->id();

        $table->string('cus_name');
        $table->string('email');
        $table->string('patient_name');
        $table->integer('patient_age');
        $table->string('contact_number');
        $table->string('duration');
        $table->string('delivery_method');
        $table->text('address');

        $table->unsignedBigInteger('user_id');
        $table->unsignedBigInteger('seller_id')->nullable();

        $table->string('prescription'); // image path

        $table->timestamps();

        // Foreign keys (optional)
        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('seller_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prescriptions');
    }
};
