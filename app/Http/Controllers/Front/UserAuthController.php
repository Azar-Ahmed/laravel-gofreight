<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Response; 
use App\Models\User;
use DB;
use File;

use Illuminate\Support\Facades\Validator;

class UserAuthController extends Controller
{
    public function UserLogin(Request $request)
    {
        if($request->session()->has('UserLogin')){
            return redirect('profile');
        }else{
            return view('frontend.auth.login');
        }
    }

    public function UserRegister()
    {
        return view('frontend.auth.register');
    }

    public function ForgotPassword()
    {
        return view('frontend.auth.forgot-password');
    }

   

    

    public function UserLoginSubmit(Request $request)
    {
        $mobile = $request->mobile;
        $password = $request->password;
        $result = User::where('mobile', $mobile)->first();
        if($result){
            //  if(Hash::check($password, $result->pwd)){
             if($password == $result->pwd){
                if($result->is_reg  == '1'){
                    $request->session()->put('UserLogin', true);
                    $request->session()->put('UserData', $result);
                    return response()->json(['success_msg' => 'Welcome To Dashboard!']);
                }else{
                    return response()->json(['error_msg' => 'Please complete signup process first!']);
                }
             }else{
                return response()->json(['error_msg' => 'Please enter valid password!']);
             }
        }else{
          return response()->json(['error_msg' => 'Please enter correct login details!']);
        }
    }


   

    public function UserRegisterSubmit(Request $request)
    {
        $check_user = User::where('mobile', $request->mobile)->first();
        if($check_user){
            if($check_user->is_reg == 1){
                return response()->json(['error' => 'User Already Registered', 'step' => 0]);
            }else{
                if($request->email){
                    $check_email = User::where('email', $request->email)->first();
                    if($check_email){
                        return response()->json(['error' => 'Email Already Exist', 'step' => 3]);
                    }else{
                        $Update = User::find($check_user->id);
                        $Update->name = $request->name;
                        $Update->email = $request->email;
                        $Update->pwd = $request->password;
                        $Update->address = $request->address;
                        $Update->city = $request->city;
                        $Update->state = $request->state;
                        $Update->pincode = $request->pincode;
                        $Update->select_type = $request->select_type;
                        $Update->company_name = $request->company_name;
                        $Update->gst_no = $request->gst_no;
                        $Update->pan_no = $request->pan_no;
                        $Update->designation = $request->designation;
                        $Update->is_reg = 1;
                        $Update->image = 'default.png';
                        $Update->update();
                        return response()->json(['message' => 'SignUp Success', 'step' => 4]);
                    }
                }else{
                    if($request->otp == $check_user->otp){
                        $Update = User::find($check_user->id);
                        $Update->mobile_verified_at = 1;
                        $Update->update();
                        return response()->json(['message' => 'Otp Matched!', 'step' => 3]);
                    }else{
                       return response()->json(['message' => 'User Added!', 'step' => 2]);
                    }
                }
            }            
        }else{

            // $generateOtp = random_int(1000, 9999);
            $generateOtp = 1234;
            $model = new User();
            $model->mobile = $request->mobile;
            $model->otp = $generateOtp;
            $model->save();

            // Send OTP On Mobile
            // $curl = curl_init();
            
            // curl_setopt_array($curl, [
            //   CURLOPT_URL => "https://api.msg91.com/api/v5/flow/",
            //   CURLOPT_RETURNTRANSFER => true,
            //   CURLOPT_ENCODING => "",
            //   CURLOPT_MAXREDIRS => 10,
            //   CURLOPT_TIMEOUT => 30,
            //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            //   CURLOPT_CUSTOMREQUEST => "POST",
            //   CURLOPT_POSTFIELDS => "{\n  \"flow_id\": \"EnterflowID\",\n  \"sender\": \"gofrig\",\n  \"short_url\": \"1 (On) or 0 (Off)\",\n  \"mobiles\": \"919XXXXXXXXX\",\n  \"VAR1\": \"VALUE 1\",\n  \"VAR2\": \"VALUE 2\"\n}",
            //   CURLOPT_HTTPHEADER => [
            //     "authkey: ",
            //     "content-type: application/json"
            //   ],
            // ]);
            
            // $response = curl_exec($curl);
            // $err = curl_error($curl);
            
            // curl_close($curl);
            
            // if ($err) {
            //   echo "cURL Error #:" . $err;
            // } else {
            //   echo $response;
            // }
            
            return response()->json(['message' => 'Otp send', 'step' => 2]);
        }

      
    }

    public function ForgotPasswordSubmit(Request $request)
    {
        $mobile = $request->mobile;
        $password = $request->password;

        $result = User::where('mobile', $mobile)->first();
        if($result){
            $Update = User::find($result->id);
            $Update->pwd = $request->password;
            $Update->update();
            return response()->json(['success_msg' => 'New Password Updated']);
        }else{
          return response()->json(['error_msg' => '*Please enter correct number!']);
        }
    }
}
