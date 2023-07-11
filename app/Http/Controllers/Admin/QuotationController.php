<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Quotation;
use App\Models\QuotationMultipleImage;
use App\Models\QuoteDimention;
use App\Models\User;
use App\Models\EwbBill;
use DB;
use File;


class QuotationController extends Controller
{
    public function Index()
    {
        $result['data'] = Quotation::join('users', 'quotations.user_id', '=', 'users.id')->latest()->get(['quotations.*', 'users.name']);
        
        //  $result['data'] = Quotation::join('users', 'quotations.user_id', '=', 'users.id')
        //                             ->join('ewb_bills', 'quotations.id', '=', 'ewb_bills.quote_id')
        //                             ->latest()
        //                             ->get(['quotations.*', 'users.name', 'ewb_bills.tracking']);
     

        return view('admin.quotation.quotation', $result);
    }

    public function form($id){
        $result = [];
        if ($id != 'add') {
            $arr = Quotation::where('id', $id)->first();
            $result['user_id'] = $arr->user_id;
            $result['progress'] = $arr->progress;
            $result['pickup_name'] = $arr->pickup_name;
            $result['pickup_mobile'] = $arr->pickup_mobile;
            $result['pickup_address_one'] = $arr->pickup_address_one;
            $result['pickup_address_two'] = $arr->pickup_address_two;
            $result['pickup_city'] = $arr->pickup_city;
            $result['pickup_state'] = $arr->pickup_state;
            $result['pickup_pincode'] = $arr->pickup_pincode;
           
            $result['delivery_name'] = $arr->delivery_name;
            $result['delivery_mobile'] = $arr->delivery_mobile;
            $result['delivery_address_one'] = $arr->delivery_address_one;
            $result['delivery_address_two'] = $arr->delivery_address_two;
            $result['delivery_city'] = $arr->delivery_city;
            $result['delivery_state'] = $arr->delivery_state;
            $result['delivery_pincode'] = $arr->delivery_pincode;
           
            $result['pickup_date'] = $arr->pickup_date;
            $result['service_mode'] = $arr->service_mode;
            $result['goods_nature'] = $arr->goods_nature;
            $result['ref_pcs'] = $arr->ref_pcs;
            $result['ref_grossweight'] = $arr->ref_grossweight;


            $result['total_box'] = $arr->total_box;
            $result['box_length'] = $arr->box_length;
            $result['box_breath'] = $arr->box_breath;
            $result['box_height'] = $arr->box_height;
            $result['box_weight'] = $arr->box_weight;
           
            $result['gross_weight'] = $arr->gross_weight;
            $result['volumetric_weight'] = $arr->volumetric_weight;
            $result['chargeable_weight'] = $arr->chargeable_weight;
       
            $result['rate_45kg'] = $arr->rate_45kg;
            $result['rate_100kg'] = $arr->rate_100kg;
            $result['rate_250kg'] = $arr->rate_250kg;
            $result['rate_500kg'] = $arr->rate_500kg;
            $result['rate_other'] = $arr->rate_other;

            $result['product_value'] = $arr->product_value;
            $result['notes'] = $arr->notes;

            $result['id'] = $arr->id;
        } else {
            $result['user_id'] = '';
            $result['progress'] = '';
            $result['pickup_name'] = '';
            $result['pickup_mobile'] = '';
            $result['pickup_address_one'] = '';
            $result['pickup_address_two'] = '';
            $result['pickup_city'] = '';
            $result['pickup_state'] ='';
            $result['pickup_pincode'] = '';
           
            $result['delivery_name'] = '';
            $result['delivery_mobile'] = '';
            $result['delivery_address_one'] = '';
            $result['delivery_address_two'] = '';
            $result['delivery_city'] = '';
            $result['delivery_state'] = '';
            $result['delivery_pincode'] = '';
           
            $result['pickup_date'] = '';
            $result['service_mode'] = '';
            $result['goods_nature'] = '';
            $result['ref_pcs'] = '';
            $result['ref_grossweight'] = '';


            $result['total_box'] = '';
            $result['box_length'] = '';
            $result['box_breath'] = '';
            $result['box_height'] = '';
            $result['box_weight'] = '';
           
            $result['gross_weight'] = '';
            $result['volumetric_weight'] = '';
            $result['chargeable_weight'] = '';

            $result['rate_45kg'] = 0;
            $result['rate_100kg'] = 0;
            $result['rate_250kg'] = 0;
            $result['rate_500kg'] = 0;
            $result['rate_other'] = 0;

            $result['product_value'] = 0;
            $result['notes'] = '';

            $result['id'] = 0;
        
        }
        $result['users'] = DB::table('users')->where('status' , 1)->where('is_reg', 1)->get();
        $result['multiple_images'] = DB::table('quotation_multiple_images')->where('quote_id', $id)->get();
        $result['quote_dimention'] = QuoteDimention::where('quote_id', $id)->latest()->get();
   
        return view('admin.quotation.manage', $result);
    }

    public function manage(Request $request)
    {
        // dd($request);
            if ($request->id > 0) {
                $image_validation = 'mimes:jpg,png,jpeg,gif,svg|max:2048';
            } else {
                $image_validation = 'mimes:jpg,png,jpeg,gif,svg|max:2048';
            }
            $request->validate([
                'pickup_name' => 'required',
                'pickup_mobile' => 'required',
                'pickup_address_one' => 'required',
                'pickup_city' => 'required',
                'pickup_state' => 'required',
                // 'pickup_pincode' => 'required',
                'delivery_name' => 'required',
                'delivery_mobile' => 'required',
                'delivery_address_one' => 'required',
                'delivery_city' => 'required',
                'delivery_state' => 'required',
                // 'delivery_pincode' => 'required',
                'pickup_date' => 'required',
                'service_mode' => 'required',
                'goods_nature' => 'required',
                // 'total_box' => 'required',
                // 'box_length' => 'required',
                // 'box_breath' => 'required',
                // 'box_height' => 'required',
                // 'box_weight' => 'required',
                // 'product_value' => 'required',
                // 'image' => $image_validation,
            ]); 
            
            if ($request->id > 0) {
                $model = Quotation::find($request->id);
                $msg = "Quotation Updated Successfully";
                $model->rate_45kg = $request->rate_45kg;
                $model->rate_100kg = $request->rate_100kg;
                $model->rate_250kg = $request->rate_250kg;
                $model->rate_500kg = $request->rate_500kg;
                $model->rate_other = $request->rate_other;

          
            } else {
                $model = new Quotation();
                $msg = "Quotation Submitted Successfully";
                $model->progress = 'quotation-request';

                $model->rate_45kg = 0;
                $model->rate_100kg = 0;
                $model->rate_250kg = 0;
                $model->rate_500kg = 0;
                $model->rate_other = 0;

            }
            
            $randomNumber = random_int(10000, 99999);
            $model->user_id = $request->user_id;
            $model->pickup_name = $request->pickup_name;
            $model->pickup_mobile = $request->pickup_mobile;
            $model->pickup_address_one = $request->pickup_address_one;
            $model->pickup_address_two = $request->pickup_address_two;
            $model->pickup_city = $request->pickup_city;
            $model->pickup_state = $request->pickup_state;
            $model->pickup_pincode = $request->pickup_pincode;
           
            
            $model->delivery_name = $request->delivery_name;
            $model->delivery_mobile = $request->delivery_mobile;
            $model->delivery_address_one = $request->delivery_address_one;
            $model->delivery_address_two = $request->delivery_address_two;
            $model->delivery_city = $request->delivery_city;
            $model->delivery_state = $request->delivery_state;
            $model->delivery_pincode = $request->delivery_pincode;
           
            $model->pickup_date = $request->pickup_date;
            $model->service_mode = $request->service_mode;
            $model->goods_nature = $request->goods_nature;
            $model->ref_pcs = $request->ref_pcs;
            $model->ref_grossweight = $request->ref_grossweight;

         
            $model->box_length = null;
            $model->box_length = null;
            $model->box_length = null;
            $model->box_weight = null;
    
            $model->gross_weight = $request->gross_weight;
            $model->volumetric_weight = $request->volumetric_weight;
            $model->chargeable_weight = $request->chargeable_weight;

     
          
            $model->product_value = $request->product_value;
            $model->notes = $request->notes;
            $model->slug = $randomNumber;
            if($model->save()){
                $data = Quotation::where('slug', $randomNumber)->first();
                if($request->hasFile('multiple_images')){
                    foreach($request->file('multiple_images') as $file)
                    {
                        $extension = $file->getClientOriginalExtension();
                        $filename = 'multipleImage'.rand(000000,999999).'.'.$extension;
                        $file->move('uploads/quotations/',$filename); 
                        $imgData = $filename;
    
                        $multiple_img = new QuotationMultipleImage();
                        $multiple_img->quote_id = $data->id;
                        $multiple_img->multiple_images = $imgData;
                        $multiple_img->save();
                    }
                }
                    return redirect('/admin/quotation')->with('success_msg', $msg);
            }
    }


    public function SendQuotationMail(Request $request)
    {
       $quotation_data = Quotation::where('id', $request->dimention_id)->first();
       $userData = User::where('id', $quotation_data->user_id)->first();
 
       $mailData = [
        'name'=>$userData->name, 
        'url'=>'https://ecoply.in',
        'pickup_date' => $quotation_data->pickup_date,
        'pickup_city' => $quotation_data->pickup_city,
        'delivery_city' => $quotation_data->delivery_city,
        'chargeable_weight' => $quotation_data->chargeable_weight,

         'rate_45kg' => $quotation_data->rate_45kg,
         'rate_100kg' => $quotation_data->rate_100kg, 
         'rate_250kg' => $quotation_data->rate_250kg,
         'rate_500kg' => $quotation_data->rate_500kg, 
         'rate_other' => $quotation_data->rate_other
        ];
       $user['to']=$userData->email; 
       
       Mail::send('admin/includes/mail_layout', $mailData, function($message) use ($user){
               $message->to($user['to']);
               $message->subject('Quotation Response From GoFreight');
       }); 

       $Update = Quotation::find($quotation_data->id);
       $Update->progress = 'send-quote';
       $Update->update();
       return response()->json(['Status' => 200, 'message' =>  'Quotation Mail Send']);

    }


    public function View($id)
    {
        $result['quotation'] = Quotation::join('users', 'quotations.user_id', '=', 'users.id')->where('quotations.id', $id)->latest()->get(['quotations.*', 'users.name']);
        $result['multiple_img'] = QuotationMultipleImage::where('quote_id', $id)->latest()->get();
        $result['quote_dimention'] = QuoteDimention::where('quote_id', $id)->latest()->get();
        return view('admin.quotation.view', $result);
    }


    public function Delete($id)
    {
        $data = Quotation::find($id);
        $data->delete(); 
        $message = "Quotation Deleted";
        return redirect('admin/quotation')->with('success_msg', $message);
    }

    public function Status($status, $id)
    {
        if ($status == "deactive") {
            $status = '0';
            $message = "Quotation Unapproved";

        } elseif($status == "active") {
            $status = '1';
            $message = "Quotation Approved";
        }
        $model = Quotation::where('id', $id)->first();
        if ($model != null) {
            $model->status = $status;
            $model->save();
            return redirect('admin/quotation')->with('success_msg', $message);
        }
    }
    
    public function QuotationProgress(Request $request)
    {
        $model = Quotation::where('id', $request->quote_id)->first();
        if ($model != null) {
            $model->progress = $request->progress;
            $model->save();
        }
         return response()->json(['status' => 200, 'success_msg' => 'Progress Updated']);

        // if($request->progress ==  'ewb-bill'){
        //     $ewb_model = EwbBill::where('quote_id', $request->quote_id)->first();
        //     if($ewb_model){
        //         $model = Quotation::where('id', $request->quote_id)->first();
        //         if ($model != null) {
        //             $model->progress = $request->progress;
        //             $model->save();
        //         }
        //          return response()->json(['status' => 200, 'success_msg' => 'Progress Updated']);
        //     }
        // }else{

        // }
    }

    public function DeleteMultipleImage(Request $request)
    {
        $Media = QuotationMultipleImage::find($request->image_id);
            $path = 'uploads/quotation'.$Media->multiple_images;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $Media->delete(); 
        $message = "Image Deleted";
        return response()->json(['Status' => 200, 'Message' => $message]);
    }

    // ----------------------- Dimention Functions ---------------------//

    public function AddDimention(Request $request)
    {
        // dd($request);
        $model = new QuoteDimention();
        $msg = "Dimensions Added Successfully";
        
        $randomNumber = random_int(10000, 99999);

        $model->quote_id = $request->quote_dimention_id;
        $model->total_box = $request->new_total_box;
        $model->box_length = $request->new_length;
        $model->box_breath = $request->new_breath;
        $model->box_height = $request->new_height;
        $model->box_weight = $request->new_weight;
        $model->slug = $randomNumber;
       
        if($model->save()){
            $dimention = QuoteDimention::where('slug', $randomNumber)->first();
        
                // Gross Weight
                // $gross_weight = $dimention->total_box * $dimention->box_weight;
                $gross_weight = $dimention->box_weight;

              
               
                // Volumetric Weight
                $output = $dimention->box_length * $dimention->box_breath * $dimention->box_height;
                $total = $output / 6000;
                $volumetric = $dimention->total_box * $total;

                // Chargeable Weight ------------------- (getting wrong value)
                // if ($gross_weight > $volumetric) {
                //     $chargeable_weight = $gross_weight;
                // } else if ($volumetric > $gross_weight) {
                //     $chargeable_weight = $volumetric;
                // }
                
                $Update = Quotation::find($request->quote_dimention_id);
                if($Update->gross_weight == null){
                        $Update->gross_weight = $gross_weight;
                        $Update->volumetric_weight = $volumetric;
                        // $Update->chargeable_weight = $chargeable_weight;
                }else{
                      $sum_gw = $Update->gross_weight + $gross_weight;
                      $sum_vw = $Update->volumetric_weight + $volumetric;
                    //   $sum_cw = $Update->chargeable_weight + $chargeable_weight;
                     
                      $Update->gross_weight = $sum_gw;
                      $Update->volumetric_weight = $sum_vw;
                    //   $Update->chargeable_weight = $sum_cw;
                }
                if($Update->update()){
                    $final_call = Quotation::where('id', $request->quote_dimention_id)->first();
                        if ($final_call->gross_weight > $final_call->volumetric_weight) {
                            $cw = $final_call->gross_weight;
                        } else if ($final_call->volumetric_weight > $final_call->gross_weight) {
                            $cw = $final_call->volumetric_weight;
                        }

                    $UpdateCW = Quotation::find($request->quote_dimention_id);
                    $UpdateCW->chargeable_weight = $cw;
                    $UpdateCW->update();  
                }
                    
       }

        return response()->json(['Status' => 200, 'Message' => $msg]);

    }


    public function EditDimention(Request $request)
    {
        $arr = QuoteDimention::where('id', $request->dimention_id)->first();
        return response()->json(['Status' => 200, 'data' =>  $arr]);
    }

    public function UpdateDimention(Request $request)
    {
        $Update = QuoteDimention::find($request->dimention_id);
        $Update->total_box = $request->input_total_box;
        $Update->box_length = $request->input_length;
        $Update->box_breath = $request->input_breath;
        $Update->box_height = $request->input_height;
        $Update->box_weight = $request->input_weight;
        // $Update->update();
        if($Update->update()){
            $dimention = QuoteDimention::where('id', $request->dimention_id)->first();
                // Gross Weight
                $gross_weight = $dimention->box_weight;
               
                  // Volumetric Weight
                  $output = $dimention->box_length * $dimention->box_breath * $dimention->box_height;
                  $total = $output / 6000;
                  $volumetric = $dimention->total_box * $total;
  
                  // Chargeable Weight 
                //   if ($gross_weight > $volumetric) {
                //       $chargeable_weight = $gross_weight;
                //   } else if ($volumetric > $gross_weight) {
                //       $chargeable_weight = $volumetric;
                //   }
                
                  $Update = Quotation::find($request->quote_dimention_id);
                  if($Update->gross_weight == null){
                          $Update->gross_weight = $gross_weight;
                          $Update->volumetric_weight = $volumetric;
                        //   $Update->chargeable_weight = $chargeable_weight;
                  }else{
                        $sum_gw = $Update->gross_weight + $gross_weight;
                        $sum_vw = $Update->volumetric_weight + $volumetric;
                        // $sum_cw = $Update->chargeable_weight + $chargeable_weight;
                       
                        $Update->gross_weight = $sum_gw;
                        $Update->volumetric_weight = $sum_vw;
                        // $Update->chargeable_weight = $sum_cw;
                  }
                //   $Update->update();  
                if($Update->update()){
                    $final_call = Quotation::where('id', $request->quote_dimention_id)->first();
                        if ($final_call->gross_weight > $final_call->volumetric_weight) {
                            $cw = $final_call->gross_weight;
                        } else if ($final_call->volumetric_weight > $final_call->gross_weight) {
                            $cw = $final_call->volumetric_weight;
                        }

                    $UpdateCW = Quotation::find($request->quote_dimention_id);
                    $UpdateCW->chargeable_weight = $cw;
                    $UpdateCW->update();  
                }
       }       
       return response()->json(['Status' => 200, 'message' =>  'Dimention Updated']);
    }

    public function DeleteDimention(Request $request)
    {
        $dimention = QuoteDimention::where('id', $request->dimention_id)->first();
        if($dimention->total_box > 0){
        
            // Gross Weight
            $gross_weight = $dimention->box_weight;
          
            // Volumetric Weight
            $output = $dimention->box_length * $dimention->box_breath * $dimention->box_height;
            $total = $output / 6000;
            $volumetric = $dimention->total_box * $total;
            
            // Chargeable Weight 
            // if ($gross_weight > $volumetric) {
            //     $chargeable_weight = $gross_weight;
            // } else if ($volumetric > $gross_weight) {
            //     $chargeable_weight = $volumetric;
            // }

            $Update = Quotation::find($request->quote_dimention_id);
           
            $sum_gw = $Update->gross_weight - $gross_weight;
            $sum_vw = $Update->volumetric_weight - $volumetric;
            // $sum_cw = $Update->chargeable_weight - $chargeable_weight;
           
            $Update->gross_weight = $sum_gw;
            $Update->volumetric_weight = $sum_vw;
            // $Update->chargeable_weight = $sum_cw;

            if($Update->update()){
                $dimention_delete = QuoteDimention::find($request->dimention_id);
                
                if($dimention_delete->delete()){
                    $final_call = Quotation::where('id', $request->quote_dimention_id)->first();
                        if ($final_call->gross_weight > $final_call->volumetric_weight) {
                            $cw = $final_call->gross_weight;
                        } else if ($final_call->volumetric_weight > $final_call->gross_weight) {
                            $cw = $final_call->volumetric_weight;
                        }

                    $UpdateCW = Quotation::find($request->quote_dimention_id);
                    $UpdateCW->chargeable_weight = $cw;
                    $UpdateCW->update();  
                }

            }
         }
        $message = "Dimention Deleted";
        return response()->json(['Status' => 200, 'Message' => $message]);
    }

    

    public function WeightCalReset(Request $request)
    {
        // $model = Quotation::where('id', $request->quote_id)->first();
        $Update = Quotation::find($request->quote_id);
        $Update->gross_weight = null;
        $Update->volumetric_weight = null;
        $Update->chargeable_weight = null;
        $Update->update(); 
        $message = "Reset Done";
        return response()->json(['Status' => 200, 'Message' => $message]);
    }

    public function QuotationSorting($progress)
    {
        $result['data'] = Quotation::join('users', 'quotations.user_id', '=', 'users.id')->where('quotations.progress', $progress)->latest()->get(['quotations.*', 'users.name']);
        return view('admin.quotation.quotation', $result);
    }
}
