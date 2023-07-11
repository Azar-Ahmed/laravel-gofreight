<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEwbSourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ewb_sources', function (Blueprint $table) {
            $table->id();
            $table->string('awb_no')->nullable();  
            $table->string('service_type')->nullable();  
            $table->string('airline_date')->nullable();  
            $table->string('airline_image')->nullable();  
            $table->string('origin')->nullable();  
            $table->string('destination')->nullable();  
            $table->string('transit')->nullable();  
            $table->string('no_of_pics')->nullable();  
            $table->string('gross_wt')->nullable();  
            $table->string('chargeable_wt')->nullable();  
            $table->string('freight_amt')->nullable();  
            $table->string('other_charges')->nullable();  
            $table->string('discount_kg')->nullable();  
            $table->string('discount_percentage')->nullable();  
            $table->string('gst')->nullable();  
            $table->string('awb_amt')->nullable();
            $table->string('discount_amt')->nullable();  
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
        Schema::dropIfExists('ewb_sources');
    }
}
