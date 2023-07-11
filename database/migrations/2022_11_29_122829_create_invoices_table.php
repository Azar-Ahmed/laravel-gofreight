<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();  
            $table->string('invoice_no')->nullable();  
            $table->string('client_name')->nullable();  
            $table->string('invoice_amt')->nullable();  
            $table->string('invoice_status')->nullable();  
            $table->date('payment_date')->nullable();  
            $table->string('payment_method')->nullable();  
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
        Schema::dropIfExists('invoices');
    }
}
