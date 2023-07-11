<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuotationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotations', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->text('pickup_address_one')->nullable();
            $table->text('pickup_address_two')->nullable();
            $table->string('pickup_city')->nullable();
            $table->string('pickup_state')->nullable();
            $table->integer('pickup_pincode')->nullable();

            $table->text('delivery_address_one')->nullable();
            $table->text('delivery_address_two')->nullable();
            $table->string('delivery_city')->nullable();
            $table->string('delivery_state')->nullable();
            $table->integer('delivery_pincode')->nullable();

            $table->date('pickup_date')->nullable();
            $table->string('service_mode')->nullable();
            $table->string('goods_nature')->nullable();

            $table->integer('total_box')->nullable();
            $table->integer('box_length')->nullable();
            $table->integer('box_breath')->nullable();
            $table->integer('box_height')->nullable();
            $table->integer('box_weight')->nullable();

            $table->integer('gross_weight')->nullable();
            $table->integer('volumetric_weight')->nullable();
            $table->integer('chargeable_weight')->nullable();

            $table->string('product_value')->nullable();
            $table->text('notes')->nullable();


            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quotations');
    }
}
