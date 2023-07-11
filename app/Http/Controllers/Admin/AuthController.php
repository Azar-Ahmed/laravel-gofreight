<?php

namespace App\Http\Controllers\Admin;
use App\Models\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AuthController extends Controller
{
    public function Login(Request $request)
    {
        if($request->session()->has('AdminLogin')){
            return redirect('admin/dashboard');
        }else{
            return view('admin.auth.login');
        }
    }
    public function Register()
    {
        return view('admin.auth.register');
    }


    public function RegisterSubmit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]); 
        
        $model = new Admin();
        $message = "Admin Created Successfully";
        $model->name = $request->name;
        $model->email = $request->email;
        $model->pwd = Hash::make($request->password);
        $model->role = 0;
        $model->save();
        return redirect('admin/login')->with('success_msg', $message);
    }

    public function LoginSubmit(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $result = Admin::where('email', $email)->first();
        if($result){
             if(Hash::check($password, $result->pwd)){
                $request->session()->put('AdminLogin', true);
                $request->session()->put('AdminID', $result->id);
                $request->session()->put('AdminName', $result->name);
                $request->session()->put('AdminEmail', $result->email);
                $request->session()->put('AdminRole', $result->role);
                return redirect('admin/dashboard')->with('success', 'Welcome To Dashboard!');  
             }else{
                return redirect('admin/login')->with('error', 'Please enter valid password!');  
             }
        }else{
          return redirect('admin/login')->with('error', 'Please enter correct login details');  
        }
    }
}

