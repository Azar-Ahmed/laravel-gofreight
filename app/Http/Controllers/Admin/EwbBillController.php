<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Quotation;
use App\Models\Charges;
use App\Models\Airport;
use App\Models\User;
use App\Models\EwbBill;
use App\Models\EwbSource;
use App\Models\EwbSourceImages;
use App\Models\EwbOutsource;

use App\Models\Invoice;
use App\Models\QuoteDimention;


use DB;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Response; 
use File;
class EwbBillController extends Controller
{

    public function FetchEwbBill()
    {
        $result['ewb_data'] = EwbBill::latest()->get();
        $result['users'] = User::latest()->get();
        return view('admin.ewb_bill.index', $result);
    }


    public function EwbDateFilter(Request $request)
    {   
        $request->validate([
            'user_id' => 'required',
            'first_date' => 'required',
            'second_date' => 'required',
        ]); 

            $first_date = date('Y-m-d', strtotime($request->first_date));
            $second_date = date('Y-m-d', strtotime($request->second_date));
        
             $result['ewb_data'] = EwbBill::where('user_id', $request->user_id)
                        ->where('issuing_date', '>=', $first_date)
                        ->where('issuing_date', '<=', $second_date)
                        ->get();
                        // $result['client_name'] = User::where('id', $request->user_id)->first();
                        // $result['date_from'] = $first_date;
                        // $result['date_to'] = $second_date;
            if($request->invoice_table === 'invoice'){
                $result['sum_grandTotal'] = EwbBill::where('user_id', $request->user_id)
                ->where('issuing_date', '>=', $first_date)
                ->where('issuing_date', '<=', $second_date)
                ->sum('grand_total');
                
                return response()->json($result);
            }else{
               $result['users'] = User::latest()->get();
               return view('admin.ewb_bill.index', $result);
             }


    }

    public function EwbBill($id)
    {
        $result['quotation'] = Quotation::join('users', 'quotations.user_id', '=', 'users.id')->where('quotations.id', $id)->first(['quotations.*', 'users.name', 'users.id as user_id']);
        $result['charges'] = Charges::latest()->get();
        $result['airport'] = Airport::latest()->get();
        $result['quote_dimention'] = QuoteDimention::where('quote_id', $id)->sum('total_box');
        $result['id'] = $id;
      
        $result['ewb'] = EwbBill::latest()->first();
        // dd($result['ewb']);
        if($result['ewb']){
            if($result['ewb']['awb_no'] === 'GOF 000 00003'){
                $result['awb_no'] = 'GOF 000 00006';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00006'){
                $result['awb_no'] = 'GOF 000 00009';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00009'){
                $result['awb_no'] = 'GOF 000 00012';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00012'){
                $result['awb_no'] = 'GOF 000 00015';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00015'){
                $result['awb_no'] = 'GOF 000 00018';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00018'){
                $result['awb_no'] = 'GOF 000 00021';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00021'){
                $result['awb_no'] = 'GOF 000 00024';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00024'){
                $result['awb_no'] = 'GOF 000 00027';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00027'){
                $result['awb_no'] = 'GOF 000 00030';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00030'){
                $result['awb_no'] = 'GOF 000 00033';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00033'){
                $result['awb_no'] = 'GOF 000 00036';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00036'){
                $result['awb_no'] = 'GOF 000 00039';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00039'){
                $result['awb_no'] = 'GOF 000 00042';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00042'){
                $result['awb_no'] = 'GOF 000 00045';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00045'){
                $result['awb_no'] = 'GOF 000 00048';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00048'){
                $result['awb_no'] = 'GOF 000 00051';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00051'){
                $result['awb_no'] = 'GOF 000 00054';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00054'){
                $result['awb_no'] = 'GOF 000 00057';
            }else if($result['ewb']['awb_no'] === 'GOF 000 00057'){
                $result['awb_no'] = 'GOF 000 00060';
            }
        }else{
            $result['awb_no'] = 'GOF 000 00003';
        }
       
        // dd(mb_substr($result['awb_no']['awb_no'], -2)); 
      
        return view('admin.ewb_bill.ewb', $result);
    }

    
    public function EwbSave(Request $request)
    {
        $request->validate([
            'awb_no' => 'required',
            'carrier' => 'required',
            'client_code' => 'required',
            'origin' => 'required',
            // 'destination' => 'required',
            // 'transit' => 'required',
            'currency' => 'required',
            'region' => 'required',
            // 'dimention' => 'required',
            'cbm' => 'required',
            'service_type' => 'required',
            'charges_code' => 'required',
            'pick_up_date' => 'required',
            'nvd' => 'required',
            // 'ncv' => 'required',
            'apt_of_depature' => 'required',
            'apt_of_destination' => 'required',
            'freight_code' => 'required',
            'issuing_date' => 'required',
            'client_name' => 'required',
            'no_of_pcs' => 'required',
            'gr_wt' => 'required',
            'chargable_wt' => 'required',
            'rate_kg' => 'required',
            'total_amt' => 'required',
            'goods_desc' => 'required', 
            'shipper_name' => 'required',
            'consignee_name' => 'required',
            // 'handling_information' => 'required',
            'aaa_manual_kg' => 'required',
            'mbc' => 'required',
            'xbc' => 'required',
            'cdc' => 'required',
            'chc' => 'required',
            'other_charges' => 'required',
            'valuation_charge' => 'required',
            'sub_total' => 'required',
            'gst' => 'required',
            'gst_value' => 'required',
            'taxes_gst' => 'required',
            'grand_total' => 'required',
            // 'discrepancy' => 'required',
            // 'remark' => 'required',
            // 'payment' => 'required',
            // 'quotation' => 'required',
            // 'tracking' => 'required',
        ]); 

        $model = new EwbBill();
        $msg = "Ewb Saved Successfully";
        $model->awb_no = $request->awb_no;
        $model->user_id = $request->user_id;
        $model->quote_id = $request->quote_id;
        $model->carrier = $request->carrier;
        $model->client_code = $request->client_code;
        $model->origin = $request->origin;
        $model->destination = $request->destination;
        $model->transit = $request->transit;
        $model->currency = $request->currency;
        $model->region = $request->region;
        $model->dimention = $request->dimention;
        $model->cbm = $request->cbm;
        $model->service_type = $request->service_type;
        $model->charges_code = $request->charges_code;
        $model->pick_up_date = $request->pick_up_date;
        $model->nvd = $request->nvd;
        $model->ncv = $request->ncv;
        $model->apt_of_depature = $request->apt_of_depature;
        $model->apt_of_destination = $request->apt_of_destination;
        $model->freight_code = $request->freight_code;
        $model->issuing_date = $request->issuing_date;
        $model->client_name = $request->client_name;
        $model->no_of_pcs = $request->no_of_pcs;
        $model->gr_wt = $request->gr_wt;
        $model->chargable_wt = $request->chargable_wt;
        $model->rate_kg = $request->rate_kg;
        $model->total_amt = $request->total_amt;
        $model->goods_desc = $request->goods_desc;
        $model->shipper_name = $request->shipper_name;
        $model->consignee_name = $request->consignee_name;
        $model->handling_information = $request->handling_information;
        $model->aaa_manual_kg = $request->aaa_manual_kg;
        $model->mbc = $request->mbc;
        $model->xbc = $request->xbc;
        $model->cdc = $request->cdc;
        $model->chc = $request->chc;
        $model->other_charges = $request->other_charges;
        $model->valuation_charge = $request->valuation_charge;
        $model->sub_total = $request->sub_total;
        $model->gst = $request->gst;
        $model->gst_value = $request->gst_value;
        $model->taxes_gst = $request->taxes_gst;
        $model->grand_total = $request->grand_total;
        $model->discrepancy = $request->discrepancy;
        $model->remark = $request->remark;
        $model->payment = $request->payment;
        $model->quotation = $request->quotation;
        $model->tracking = $request->tracking;
        $model->save();  
        
        return redirect('/admin/ewb-bill/')->with('success_msg', $msg);
    }


    public function EditEwb($id){
        $result = [];
        if ($id) {
            $arr = EwbBill::where('id', $id)->first();
            $result['awb_no'] = $arr->awb_no;
            $result['carrier'] = $arr->carrier;
            $result['client_code'] = $arr->client_code;
            $result['origin'] = $arr->origin;
            $result['destination'] = $arr->destination;
            $result['transit'] = $arr->transit;
            $result['currency'] = $arr->currency;
           
            $result['region'] = $arr->region;
            $result['dimention'] = $arr->dimention;
            $result['cbm'] = $arr->cbm;
            $result['service_type'] = $arr->service_type;
            $result['charges_code'] = $arr->charges_code;
            $result['pick_up_date'] = $arr->pick_up_date;
           
            $result['nvd'] = $arr->nvd;
            $result['ncv'] = $arr->ncv;
            $result['apt_of_depature'] = $arr->apt_of_depature;

            $result['apt_of_destination'] = $arr->apt_of_destination;
            $result['freight_code'] = $arr->freight_code;
            $result['issuing_date'] = $arr->issuing_date;
            $result['client_name'] = $arr->client_name;
            $result['no_of_pcs'] = $arr->no_of_pcs;
           
            $result['gr_wt'] = $arr->gr_wt;
            $result['chargable_wt'] = $arr->chargable_wt;
            $result['rate_kg'] = $arr->rate_kg;

            $result['total_amt'] = $arr->total_amt;
            $result['goods_desc'] = $arr->goods_desc;
            $result['shipper_name'] = $arr->shipper_name;
            $result['consignee_name'] = $arr->consignee_name;
            $result['handling_information'] = $arr->handling_information;

            $result['aaa_manual_kg'] = $arr->aaa_manual_kg;
            $result['mbc'] = $arr->mbc;
            $result['xbc'] = $arr->xbc;
            $result['cdc'] = $arr->cdc;
            $result['chc'] = $arr->chc;
            $result['other_charges'] = $arr->other_charges;

            $result['valuation_charge'] = $arr->valuation_charge;
            $result['sub_total'] = $arr->sub_total;
            $result['gst'] = $arr->gst;
            $result['gst_value'] = $arr->gst_value;
            $result['taxes_gst'] = $arr->taxes_gst;
            $result['grand_total'] = $arr->grand_total;
            $result['discrepancy'] = $arr->discrepancy;
            $result['remark'] = $arr->remark;
            $result['payment'] = $arr->payment;
            $result['quotation'] = $arr->quotation;
            $result['tracking'] = $arr->tracking;
            $result['id'] = $arr->id;
        }
        $result['charges'] = Charges::latest()->get();
        $result['airport'] = Airport::latest()->get();
        $result['quote_dimention'] = QuoteDimention::where('quote_id', $id)->get();
        
        
        

        // if (EwbSource::count() > 0) {
            $result['ewb_sources'] = EwbSource::where('ewb_id', $id)->first();
            if($result['ewb_sources']){
                $result['ewb_source_images'] = EwbSourceImages::where('ewb_source_id',  $result['ewb_sources']['id'])->latest()->get();
                $result['ewb_outsources'] = EwbOutsource::where('ewb_source_id', $result['ewb_sources']['id'])->latest()->first();
                // dd($id);
                // dd($result['ewb_sources']['id']);
                // dd( $result['ewb_source_images']);
            }else{
                $result['ewb_sources'] = [];
                $result['ewb_source_images'] = [];
                $result['ewb_outsources'] = [];

            }
        // }

           
        
        return view('admin.ewb_bill.edit-ewb', $result);
        // $result['users'] = DB::table('users')->where('status' , 1)->get();
        // $result['multiple_images'] = DB::table('quotation_multiple_images')->where('quote_id', $id)->get();
        // $result['quote_dimention'] = QuoteDimention::where('quote_id', $id)->latest()->get();
   
    }

    public function UpdateEwb(Request $request)
    {
        $Update = EwbBill::find($request->ewb_id);
        $Update->awb_no = $request->awb_no;
        $Update->carrier = $request->carrier;
        $Update->client_code = $request->client_code;
        $Update->origin = $request->origin;
        $Update->destination = $request->destination;
        $Update->transit = $request->transit;
        $Update->currency = $request->currency;
        $Update->region = $request->region;
        $Update->dimention = $request->dimention;
        $Update->cbm = $request->cbm;
        $Update->service_type = $request->service_type;
        $Update->charges_code = $request->charges_code;
        $Update->pick_up_date = $request->pick_up_date;
        $Update->nvd = $request->nvd;
        $Update->ncv = $request->ncv;
        $Update->apt_of_depature = $request->apt_of_depature;
        $Update->apt_of_destination = $request->apt_of_destination;
        $Update->freight_code = $request->freight_code;
        $Update->issuing_date = $request->issuing_date;
        $Update->client_name = $request->client_name;
        $Update->no_of_pcs = $request->no_of_pcs;
        $Update->gr_wt = $request->gr_wt;
        $Update->chargable_wt = $request->chargable_wt;
        $Update->rate_kg = $request->rate_kg;
        $Update->total_amt = $request->total_amt;
        $Update->goods_desc = $request->goods_desc;
        $Update->shipper_name = $request->shipper_name;
        $Update->consignee_name = $request->consignee_name;
        $Update->handling_information = $request->handling_information;
        $Update->aaa_manual_kg = $request->aaa_manual_kg;
        $Update->mbc = $request->mbc;
        $Update->xbc = $request->xbc;
        $Update->cdc = $request->cdc;
        $Update->chc = $request->chc;
        $Update->other_charges = $request->other_charges;
        $Update->valuation_charge = $request->valuation_charge;
        $Update->sub_total = $request->sub_total;
        $Update->gst = $request->gst;
        $Update->gst_value = $request->gst_value;
        $Update->taxes_gst = $request->taxes_gst;
        $Update->grand_total = $request->grand_total;
        $Update->discrepancy = $request->discrepancy;
        $Update->remark = $request->remark;
        $Update->payment = $request->payment;
        $Update->quotation = $request->quotation;
        $Update->tracking = $request->tracking;
        $Update->save();
        return redirect('/admin/ewb-bill')->with('success_msg', 'Ewb Bill Updated');
    }


    public function frightCharges(Request $request)
    {
        return response()->json(['Status' => 200, 'data' => Charges::where('id', $request->id)->first()]);
    }

    public function PrintEwbBill($id)
    {
        // $result['print_data'] = EwbBill::where('id', $id)->first();
        $result['print_data'] = EwbBill::join('quotations', 'ewb_bills.quote_id', '=', 'quotations.id')->latest()->first(['ewb_bills.*', 'quotations.pickup_address_one', 'quotations.pickup_city', 'quotations.pickup_state', 'quotations.pickup_pincode',  'quotations.delivery_address_one',  'quotations.delivery_city', 'quotations.delivery_state', 'quotations.delivery_pincode']);

        $result['freight_data'] = Charges::where('id', $result['print_data']['freight_code'])->get();
       
        $result['airport'] = Airport::get();

        $result['QuoteDimention'] = QuoteDimention::get();

        return view('admin.ewb_bill.ewb-pdf', $result);
    }


    /// ------------------- Profit & Loss || Report ----------------------///

    public function ProfitLoss()
    {
        $result['data'] = EwbBill::join('ewb_sources', 'ewb_bills.quote_id', '=', 'ewb_sources.ewb_id')->latest()->get(['ewb_bills.*', 'ewb_sources.source_total_awb', 'ewb_sources.source_total_amt', 'ewb_sources.source_profit_loss', 'ewb_sources.source_awb_no']);
        $result['clients']= EwbBill::select('client_name')->distinct()->get();
        
        return view('admin.profit_loss.index', $result);
    }

    public function ProfitLossFilter(Request $request)
    {   
        $request->validate([
            'first_date' => 'required',
            'second_date' => 'required',
        ]); 

            $first_date = date('Y-m-d', strtotime($request->first_date));
            $second_date = date('Y-m-d', strtotime($request->second_date));
        
             $result['data'] = EwbBill::where('client_name', $request->client_name)
                        ->where('issuing_date', '>=', $first_date)
                        ->where('issuing_date', '<=', $second_date)
                        ->get();
        $result['clients']= EwbBill::select('client_name')->distinct()->get();

        return view('admin.report.index', $result);
     }

    public function Report()
    {
        $result['clients']= EwbBill::select('client_name')->distinct()->get();

        $result['data'] = EwbBill::join('ewb_sources', 'ewb_bills.id', '=', 'ewb_sources.ewb_id')->latest()->get(['ewb_bills.*', 'ewb_sources.source_total_awb', 'ewb_sources.source_total_amt', 'ewb_sources.source_profit_loss', 'ewb_sources.source_awb_no']);
        return view('admin.report.index', $result);
    }

    
    public function ReportFilter(Request $request)
    {   
        $request->validate([
            'first_date' => 'required',
            'second_date' => 'required',
        ]); 

            $first_date = date('Y-m-d', strtotime($request->first_date));
            $second_date = date('Y-m-d', strtotime($request->second_date));
        
            //  $result['data'] = EwbBill::
            //             where('client_name', $request->client_name)
            //             ->where('issuing_date', '>=', $first_date)
            //             ->where('issuing_date', '<=', $second_date)
            //             ->get();
        $result['data'] = EwbBill::join('ewb_sources', 'ewb_bills.id', '=', 'ewb_sources.ewb_id')->where('ewb_bills.client_name', $request->client_name)
                                        ->where('ewb_bills.issuing_date', '>=', $first_date)
                                        ->where('ewb_bills.issuing_date', '<=', $second_date)
                            ->latest()->get(['ewb_bills.*', 'ewb_sources.source_total_awb', 'ewb_sources.source_total_amt', 'ewb_sources.source_profit_loss', 'ewb_sources.source_awb_no']);

        $result['clients']= EwbBill::select('client_name')->distinct()->get();

        return view('admin.report.index', $result);
     }
      
    /// ------------------- Vendor Source ----------------------///

    public function VendorSource()
    {
        $result['ewb_source_data'] = EwbSource::join('ewb_bills', 'ewb_sources.ewb_id', '=', 'ewb_bills.id')->latest()->get(['ewb_sources.*', 'ewb_bills.awb_no as ewb_no']);
        return view('admin.vendor_source.index', $result);
    }

    public function VendorSourceFilter(Request $request)
    {   
        $request->validate([
            'first_date' => 'required',
            'second_date' => 'required',
        ]); 

            $first_date = date('Y-m-d', strtotime($request->first_date));
            $second_date = date('Y-m-d', strtotime($request->second_date));
        
            $result['ewb_source_data'] = EwbSource::join('ewb_bills', 'ewb_sources.ewb_id', '=', 'ewb_bills.id')
                                                    ->where('airline_date', '>=', $first_date)
                                                    ->where('airline_date', '<=', $second_date)
                                                    ->latest()->get(['ewb_sources.*', 'ewb_bills.awb_no as ewb_no']);

        return view('admin.vendor_source.index', $result);
     }

    public function VendorSourceView($id)
    {
        // $result['ewb_source_data'] = EwbSource::where('id', $id)->first();
        $result['ewb_source_data'] = EwbSource::join('ewb_bills', 'ewb_sources.ewb_id', '=', 'ewb_bills.id')->where('ewb_sources.id', $id)->first(['ewb_sources.*', 'ewb_bills.awb_no as ewb_no']);

        $result['multiple_img'] = EwbSourceImages::where('ewb_source_id', $id)->latest()->get();
        $result['out_source'] = EwbOutsource::where('ewb_source_id', $id)->latest()->get();

        return view('admin.vendor_source.view', $result);
    }


    public function EwbSourceSave(Request $request)
    {        
        $request->validate([
            'source_awb_no' => 'required',
            // 'source_service_type' => 'required',
            // 'airline_date' => 'required',
            // 'source_origin' => 'required',
            // 'source_destination' => 'required',
            // 'source_transit' => 'required',
            // 'source_no_of_pics' => 'required',
            // 'source_gross_wt' => 'required',
            // 'source_chargeable_wt' => 'required',
            // 'source_freight_amt' => 'required',
            // 'source_other_charges' => 'required',
            // 'source_discount_kg' => 'required',
            // 'source_discount_percentage' => 'required',
            // 'source_gst' => 'required',
            // 'source_awb_amt' => 'required',
            // 'source_discount_amt' => 'required',

            // 'outsources_vendor_name' => 'required',
            // 'outsources_pickup_amt' => 'required',
            // 'outsources_awb_amt' => 'required',
            // 'outsources_delivery_amt' => 'required',
            // 'outsources_tsp_amt' => 'required',

            // 'source_total_pickup' => 'required',
            // 'source_total_awb' => 'required',
            // 'source_total_delivery' => 'required',
            // 'source_total_tsp' => 'required',
            // 'source_total_amt' => 'required',
        ]); 

        $check = EwbSource::where('ewb_id', $request->ewb_id)->first();
        $msg = "Ewb Source Saved Successfully";

        if($check){
            $model = EwbSource::find($check->id);
        }else{
            $model = new EwbSource();
        }

        $randomNumber = random_int(10000, 99999);
        $model->slug = $randomNumber;

        $model->ewb_id = $request->ewb_id;
        $model->source_awb_no = $request->source_awb_no;
        $model->source_service_type = $request->source_service_type;
        $model->airline_date = $request->airline_date;
        $model->airline_image = $request->airline_image;
        $model->source_origin = $request->source_origin;
        $model->source_destination = $request->source_destination;
        $model->source_transit = $request->source_transit;
        $model->source_no_of_pics = $request->source_no_of_pics;
        $model->source_gross_wt = $request->source_gross_wt;
        $model->source_chargeable_wt = $request->source_chargeable_wt;
        $model->source_freight_amt = $request->source_freight_amt;
        $model->source_other_charges = $request->source_other_charges;
        
        $model->source_discount_type = $request->source_discount_type;
        $model->source_discount_value = $request->source_discount_value;

        // $model->source_discount_kg = $request->source_discount_kg;
        // $model->source_discount_percentage = $request->source_discount_percentage;
        $model->source_gst = $request->source_gst;
        $model->source_awb_amt = $request->source_awb_amt;
        $model->source_discount_amt = $request->source_discount_amt;


        $model->source_total_pickup = $request->source_total_pickup;
        $model->source_total_awb = $request->source_total_awb;
        $model->source_total_delivery = $request->source_total_delivery;
        $model->source_total_tsp = $request->source_total_tsp;
        $model->source_total_amt = $request->source_total_amt;
     
        $model->source_vikas = $request->source_vikas;
        $model->source_profit_loss = $request->source_profit_loss;


        if($model->save()){
            $data = EwbSource::where('slug', $randomNumber)->first();
            
            $outSourceModel = new EwbOutsource();
            $outSourceModel->ewb_source_id = $data->id;
            $outSourceModel->outsources_vendor_name1 = $request->outsources_vendor_name1;
            $outSourceModel->outsources_vendor_name2 = $request->outsources_vendor_name2;
            $outSourceModel->outsources_vendor_name3 = $request->outsources_vendor_name3;
            $outSourceModel->outsources_vendor_name4 = $request->outsources_vendor_name4;
            $outSourceModel->outsources_vendor_name5 = $request->outsources_vendor_name5;
    
            $outSourceModel->outsources_pickup_amt1 = $request->outsources_pickup_amt1;
            $outSourceModel->outsources_pickup_amt2 = $request->outsources_pickup_amt2;
            $outSourceModel->outsources_pickup_amt3 = $request->outsources_pickup_amt3;
            $outSourceModel->outsources_pickup_amt4 = $request->outsources_pickup_amt4;
            $outSourceModel->outsources_pickup_amt5 = $request->outsources_pickup_amt5;
    
            $outSourceModel->outsources_awb_amt1 = $request->outsources_awb_amt1;
            $outSourceModel->outsources_awb_amt2 = $request->outsources_awb_amt2;
            $outSourceModel->outsources_awb_amt3 = $request->outsources_awb_amt3;
            $outSourceModel->outsources_awb_amt4 = $request->outsources_awb_amt4;
            $outSourceModel->outsources_awb_amt5 = $request->outsources_awb_amt5;
    
            $outSourceModel->outsources_delivery_amt1 = $request->outsources_delivery_amt1;
            $outSourceModel->outsources_delivery_amt2 = $request->outsources_delivery_amt2;
            $outSourceModel->outsources_delivery_amt3 = $request->outsources_delivery_amt3;
            $outSourceModel->outsources_delivery_amt4 = $request->outsources_delivery_amt4;
            $outSourceModel->outsources_delivery_amt5 = $request->outsources_delivery_amt5;
    
            $outSourceModel->outsources_tsp_amt1 = $request->outsources_tsp_amt1;
            $outSourceModel->outsources_tsp_amt2 = $request->outsources_tsp_amt2;
            $outSourceModel->outsources_tsp_amt3 = $request->outsources_tsp_amt3;
            $outSourceModel->outsources_tsp_amt4 = $request->outsources_tsp_amt4;
            $outSourceModel->outsources_tsp_amt5 = $request->outsources_tsp_amt5;
            $outSourceModel->save();
          
            if($request->hasFile('multiple_images')){
                foreach($request->file('multiple_images') as $file)
                {
                    $extension = $file->getClientOriginalExtension();
                    $filename = 'multipleImage'.rand(000000,999999).'.'.$extension;
                    $file->move('uploads/ewb/source/',$filename); 
                    $imgData = $filename;

                    $multiple_img = new EwbSourceImages();
                    $multiple_img->ewb_source_id = $data->id;
                    $multiple_img->multiple_images = $imgData;
                    $multiple_img->save();
                }
            }
        }
        return redirect('/admin/ewb-bill')->with('success_msg', $msg);

    }


    public function EditVendorSource($id)
    {
        $result = [];
        if ($id) {
            $arr = EwbSource::where('id', $id)->first();
            $result['vendor_source_id'] = $arr->id;
            $result['source_awb_no'] = $arr->source_awb_no;
            $result['source_service_type'] = $arr->source_service_type;
            $result['airline_date'] = $arr->airline_date;
            $result['source_origin'] = $arr->source_origin;
            $result['source_destination'] = $arr->source_destination;
            $result['source_transit'] = $arr->source_transit;
            $result['source_no_of_pics'] = $arr->source_no_of_pics;
            $result['source_gross_wt'] = $arr->source_gross_wt;
            $result['source_chargeable_wt'] = $arr->source_chargeable_wt;
            $result['source_freight_amt'] = $arr->source_freight_amt;
            $result['source_other_charges'] = $arr->source_other_charges;
            $result['source_discount_kg'] = $arr->source_discount_kg;
            $result['source_discount_percentage'] = $arr->source_discount_percentage;
            $result['source_gst'] = $arr->source_gst;
            $result['source_awb_amt'] = $arr->source_awb_amt;
            $result['source_discount_amt'] = $arr->source_discount_amt;
            $result['source_total_pickup'] = $arr->source_total_pickup;
            $result['source_total_awb'] = $arr->source_total_awb;
            $result['source_total_delivery'] = $arr->source_total_delivery;
            $result['source_total_tsp'] = $arr->source_total_tsp;
            $result['source_total_amt'] = $arr->source_total_amt;
            $result['source_vikas'] = $arr->source_vikas;
            $result['source_profit_loss'] = $arr->source_profit_loss;
         
        }
        $result['ewb_source_images'] = DB::table('ewb_source_images')->where('ewb_source_id', $id)->get();
        $result['ewb_outsources'] = DB::table('ewb_outsources')->where('ewb_source_id', $id)->first();

        return view('admin.vendor_source.edit', $result);
    }

    public function VendorSourceUpdate(Request $request)
    {
        $Update = EwbSource::find($request->vendor_source_id);
        $Update->source_awb_no = $request->source_awb_no;
        $Update->source_service_type = $request->source_service_type;
        $Update->airline_date = $request->airline_date;
        $Update->source_origin = $request->source_origin;
        $Update->source_destination = $request->source_destination;
        $Update->source_transit = $request->source_transit;
        $Update->source_no_of_pics = $request->source_no_of_pics;
        $Update->source_gross_wt = $request->source_gross_wt;
        $Update->source_chargeable_wt = $request->source_chargeable_wt;
        $Update->source_freight_amt = $request->source_freight_amt;
        $Update->source_other_charges = $request->source_other_charges;

        $Update->source_discount_type = $request->source_discount_type;
        $Update->source_discount_value = $request->source_discount_value;

        // $Update->source_discount_kg = $request->source_discount_kg;
        // $Update->source_discount_percentage = $request->source_discount_percentage;
        $Update->source_gst = $request->source_gst;
        $Update->source_awb_amt = $request->source_awb_amt;
        $Update->source_discount_amt = $request->source_discount_amt;


        $Update->source_total_pickup = $request->source_total_pickup;
        $Update->source_total_awb = $request->source_total_awb;
        $Update->source_total_delivery = $request->source_total_delivery;
        $Update->source_total_tsp = $request->source_total_tsp;
        $Update->source_total_amt = $request->source_total_amt;
         $Update->source_vikas = $request->source_vikas;
        $Update->source_profit_loss = $request->source_profit_loss;
        if($Update->save()){
            $data = EwbSource::where('id', $request->vendor_source_id)->first();
            $outSourceModel = new EwbOutsource();
            $outSourceModel->ewb_source_id = $data->id;
            $outSourceModel->outsources_vendor_name1 = $request->outsources_vendor_name1;
            $outSourceModel->outsources_vendor_name2 = $request->outsources_vendor_name2;
            $outSourceModel->outsources_vendor_name3 = $request->outsources_vendor_name3;
            $outSourceModel->outsources_vendor_name4 = $request->outsources_vendor_name4;
            $outSourceModel->outsources_vendor_name5 = $request->outsources_vendor_name5;
    
            $outSourceModel->outsources_pickup_amt1 = $request->outsources_pickup_amt1;
            $outSourceModel->outsources_pickup_amt2 = $request->outsources_pickup_amt2;
            $outSourceModel->outsources_pickup_amt3 = $request->outsources_pickup_amt3;
            $outSourceModel->outsources_pickup_amt4 = $request->outsources_pickup_amt4;
            $outSourceModel->outsources_pickup_amt5 = $request->outsources_pickup_amt5;
    
            $outSourceModel->outsources_awb_amt1 = $request->outsources_awb_amt1;
            $outSourceModel->outsources_awb_amt2 = $request->outsources_awb_amt2;
            $outSourceModel->outsources_awb_amt3 = $request->outsources_awb_amt3;
            $outSourceModel->outsources_awb_amt4 = $request->outsources_awb_amt4;
            $outSourceModel->outsources_awb_amt5 = $request->outsources_awb_amt5;
    
            $outSourceModel->outsources_delivery_amt1 = $request->outsources_delivery_amt1;
            $outSourceModel->outsources_delivery_amt2 = $request->outsources_delivery_amt2;
            $outSourceModel->outsources_delivery_amt3 = $request->outsources_delivery_amt3;
            $outSourceModel->outsources_delivery_amt4 = $request->outsources_delivery_amt4;
            $outSourceModel->outsources_delivery_amt5 = $request->outsources_delivery_amt5;
    
            $outSourceModel->outsources_tsp_amt1 = $request->outsources_tsp_amt1;
            $outSourceModel->outsources_tsp_amt2 = $request->outsources_tsp_amt2;
            $outSourceModel->outsources_tsp_amt3 = $request->outsources_tsp_amt3;
            $outSourceModel->outsources_tsp_amt4 = $request->outsources_tsp_amt4;
            $outSourceModel->outsources_tsp_amt5 = $request->outsources_tsp_amt5;
            $outSourceModel->save();

            if($request->hasFile('multiple_images')){
                foreach($request->file('multiple_images') as $file)
                {
                    $extension = $file->getClientOriginalExtension();
                    $filename = 'multipleImage'.rand(000000,999999).'.'.$extension;
                    $file->move('uploads/ewb/source/',$filename); 
                    $imgData = $filename;

                    $multiple_img = new EwbSourceImages();
                    $multiple_img->ewb_source_id = $data->id;
                    $multiple_img->multiple_images = $imgData;
                    $multiple_img->save();
                }
            }
        }

        return redirect('/admin/ewb-bill')->with('success_msg', 'Ewb Bill Updated');
    }
}
