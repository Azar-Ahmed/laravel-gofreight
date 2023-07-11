<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Quotation;
use App\Models\QuoteDimention;
use App\Models\QuotationMultipleImage;
use DB;
use File;

class FrontController extends Controller
{
    public function Index()
    {
        return view('frontend.index');
    }

    public function Profile(Request $request)
    {
        $userData = session()->get('UserData');
        $result['user'] = User::where('id', $userData->id)->get();
        
        $result['quotation'] = Quotation::where('user_id', $userData->id)->latest()->get();
        // foreach ($result['quotation_list'] as $key => $value) {
        //     $result['quotation_list']['progress']
        // }
        // $result['quotation'] = Quotation::join('ewb_bills', 'quotations.id', '=', 'ewb_bills.quote_id')->where('quotations.user_id', $userData->id)->latest()->get(['quotations.*', 'ewb_bills.tracking']);

        // $result['']uotation::where('user_id', $userData->id)->get();


        $result['quotation_count'] = Quotation::where('user_id', $userData->id)->count();
        return view('frontend.profile.profile', $result);
    }

    public function editProfile(Request $request)
    {
        $result['user'] = User::where('id', $request->user_id)->first();
        return response()->json(['Status' => 200, 'data' => $result]);
    }
   
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'image' => 'mimes:jpg,png,jpeg',
        ]); 

        $Update = User::find($request->id);

        if($request->hasfile('image')){
            $path = 'uploads/users/'.$Update->image;
            if($Update->image != 'default.png'){
                if(File::exists($path)){
                    File::delete($path);
                }
            }
        } 

        if($request->hasfile('image'))
        {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename  = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $request->image->move(public_path('uploads/users/'), $fileNameToStore);
            $Update->image = $fileNameToStore;
        }

        $Update->name = $request->name;
        $Update->email = $request->email;
        $Update->address = $request->address;
        $Update->city = $request->city;
        $Update->state = $request->state;
        $Update->pincode = $request->pincode;

        $Update->company_name = $request->company_name;
        $Update->gst_no = $request->gst_no;
        $Update->pan_no = $request->pan_no;
        $Update->designation = $request->designation;   
        $Update->update();
        return redirect('profile')->with('success', 'Profile Updated Successfully');    
    }

    public function UserQuotationDetail($id)
    {
        $result['quotation'] = Quotation::join('users', 'quotations.user_id', '=', 'users.id')->where('quotations.id', $id)->latest()->get(['quotations.*', 'users.name']);
        $result['multiple_img'] = QuotationMultipleImage::where('quote_id', $id)->latest()->get();
        $result['quote_dimention'] = QuoteDimention::where('quote_id', $id)->latest()->get();
        $result['id'] = $id;
        return view('frontend.profile.quotation_detail', $result);
    }


    public function CustomerQuoteConfirmation(Request $request)
    {
        $Update = Quotation::find($request->quote_id);
        if($request->select == 'Approved'){
            $Update->progress = 'customer-approved';
            $msg = 'Quotation Send';
        }else if($request->select == 'UnApproved'){
            $Update->progress = 'customer-unapproved';
            $msg = 'Quotation Cancle';
        }
        $Update->update();
        return response()->json(['Status' => 200, 'message' =>  $msg]);
    }

    public function Quotation(Request $request)
    {
        // dd($request->session->get('UserData'));
        // $Update = Quotation::find($request->quote_id);
        return view('frontend.quotation');
    }

    public function QuotationSubmit(Request $request)
    {
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
            // 'multiple_images' => 'required',
        ]); 
        $model = new Quotation();
        $msg = "Quotation Submitted Successfully";
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
        $model->product_value = $request->product_value;
        $model->notes = $request->notes;
        $model->slug = $randomNumber;
        $model->progress = 'quotation-request';


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
                
                // return redirect('user-quotation-detail/'.$data->id)->with('success_msg', 'Quotation Submitted Successfully');
                return redirect('profile')->with('success_msg', 'Quotation Submitted Successfully');
            }else{
                // return redirect('user-quotation-detail/'.$data->id)->with('success_msg', 'Quotation Submitted Successfully');
                return redirect('profile')->with('success_msg', 'Quotation Submitted Successfully');

            }
        }
    }
    
    public function DriveTogether()
    {
        return view('frontend.drive_together');
    }
    


    public function About()
    {
        return view('frontend.about');
    }

    public function Term()
    {
        return view('frontend.term');
    }

    public function Conditions()
    {
        return view('frontend.conditions');
    }

    
    public function AirFrightServices()
    {
        return view('frontend.air-fright-services');
    }

    
    public function CustomClearance()
    {
        return view('frontend.custom-clearance');
    }

    public function Dangerous()
    {
        return view('frontend.dangerous');
    }

    public function EcommerceServices()
    {
        return view('frontend.ecommmerce-services');
    }

    public function FreightForwarding()
    {
        return view('frontend.freight-forwarding');
    }
    public function PetServices()
    {
        return view('frontend.pet-services');
    }

    public function RoadFreightServices()
    {
        return view('frontend.road-freight-services');
    }
    public function Services()
    {
        return view('frontend.services');
    }
    public function TrainFreightServices()
    {
        return view('frontend.train-freight-services');
    }
    public function WarehousePackaging()
    {
        return view('frontend.warehouse-packaging');
    }

    public function EwbBill()
    {
        return view('frontend.ewb-bill');
    }

    public function Airline()
    {
        return view('frontend.airline');
    }

    public function Career()
    {
        return view('frontend.career');
    }
    public function Contact()
    {
        return view('frontend.contact');
    }
    public function Franchise()
    {
        return view('frontend.franchise');
    }
    public function Rrestricted()
    {
        return view('frontend.restricted');
    }
    
}
