<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEwbBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ewb_bills', function (Blueprint $table) {
            $table->id();
            $table->string('awb_no')->nullable();  
            $table->string('carrier')->nullable();  
            $table->string('client_code')->nullable();  
            $table->string('origin')->nullable();  
            $table->string('destination')->nullable();  
            $table->string('transit')->nullable();  
            $table->string('currency')->nullable();  
            $table->string('region')->nullable();  
            $table->string('dimention')->nullable();  
            $table->string('cbm')->nullable();  
            $table->string('service_type')->nullable();  
            $table->string('charges_code')->nullable();  
            $table->string('pick_up_date')->nullable();  
            $table->string('nvd')->nullable();  
            $table->string('ncv')->nullable();  
            $table->string('apt of_depature')->nullable();  
            $table->string('apt of_destination')->nullable();  
            $table->string('freight_code')->nullable();  
            $table->string('issuing_date')->nullable();  
            $table->string('client_name')->nullable();  
            $table->string('no_of_pcs')->nullable();  
            $table->string('gr_wt')->nullable();  
            $table->string('chargable_wt')->nullable();  
            $table->string('rate_kg')->nullable();  
            $table->string('total_amt')->nullable();  
            $table->string('goods_desc')->nullable();  
            $table->string('shipper_name')->nullable();  
            $table->string('consignee_name')->nullable();  
            $table->string('handling_information')->nullable();  
            $table->string('aaa_manual_kg')->nullable();  
            $table->string('mbc')->nullable();  
            $table->string('xbc')->nullable();  
            $table->string('cdc')->nullable();  
            $table->string('chc')->nullable();  
            $table->string('other_charges')->nullable();  
            $table->string('valuation_charge')->nullable(); 
            $table->string('sub_total')->nullable();  
            $table->string('gst')->nullable();  
            $table->string('taxes_gst')->nullable();  
            $table->string('grand_total')->nullable();  
            $table->string('discrepancy')->nullable();  
            $table->string('remark')->nullable();  
            $table->string('payment')->nullable();  
            $table->string('quotation')->nullable();  
            $table->string('tracking')->nullable();  
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
        Schema::dropIfExists('ewb_bills');
    }
}
