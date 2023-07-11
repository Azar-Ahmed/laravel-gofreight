<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEwbOutsourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ewb_outsources', function (Blueprint $table) {
            $table->id();
            $table->integer('ewb_source_id')->nullable();  
            $table->string('outsources_vendor_name')->nullable();  
            $table->integer('outsources_pickup_amt')->nullable();  
            $table->float('outsources_awb_amt')->nullable();  
            $table->float('outsources_delivery_amt')->nullable();  
            $table->float('outsources_tsp_amt')->nullable();  
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
        Schema::dropIfExists('ewb_outsources');
    }
}
