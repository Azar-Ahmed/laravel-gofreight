<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuoteDimentionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quote_dimentions', function (Blueprint $table) {
            $table->id();
            $table->integer('quote_id')->nullable();  
            $table->integer('total_box')->nullable();  
            $table->float('box_length')->nullable();  
            $table->float('box_breath')->nullable();  
            $table->float('box_height')->nullable();  
            $table->float('box_weight')->nullable();  
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
        Schema::dropIfExists('quote_dimentions');
    }
}
