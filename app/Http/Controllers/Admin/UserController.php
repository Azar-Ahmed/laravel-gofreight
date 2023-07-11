<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use DB;

class UserController extends Controller
{
    public function Users()
    {
        $result['data'] = User::latest()->get();
        return view('admin.user.users', $result);
    }

    public function form($id){
        $result = [];
        if ($id != 'add') {
            $arr = User::where('id', $id)->first();
            $result['name'] = $arr->name;
            $result['email'] = $arr->email;
            $result['mobile'] = $arr->mobile;
            $result['password'] = $arr->pwd;
            $result['address'] = $arr->address;
            $result['city'] = $arr->city;
            $result['state'] = $arr->state;
            $result['pincode'] = $arr->pincode;
            $result['select_type'] = $arr->select_type;
            $result['company_name'] = $arr->company_name;
            $result['gst_no'] = $arr->gst_no;
            $result['pan_no'] = $arr->pan_no;
            $result['designation'] = $arr->designation;

            $result['id'] = $arr->id;
        } else {
            $result['name'] = '';
            $result['mobile'] = '';
            $result['email'] = '';
            $result['password'] = '';
            $result['address'] ='';
            $result['city'] = '';
            $result['state'] = '';
            $result['pincode'] = '';
            $result['select_type'] = '';
            $result['company_name'] = '';
            $result['gst_no'] = '';
            $result['pan_no'] = '';
            $result['designation'] = '';

            $result['id'] = 0;
        
        }
        $result['users'] = DB::table('users')->where('status' , 1)->get();
   
        return view('admin.user.manage', $result);

    }

    public function userManage(Request $request)
    {   
        if($request->select_type == 'Company'){
            $company_name = 'required';
            $gst_no = 'required';
            $pan_no = 'required';
            $designation = 'required';
        }else{
            $company_name = '';
            $gst_no = '';
            $pan_no = '';
            $designation = '';
        }
            $request->validate([
                'name' => 'required',
                'mobile' => 'required',
                'email' => 'required',
                'password' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required',
                'pincode' => 'required',
                'select_type' => 'required',
                'company_name' => $company_name,
                'gst_no' =>  $gst_no,
                'pan_no' =>  $pan_no,
                'designation' => $designation,
            ]); 
                
            if ($request->id > 0) {
                $model = User::find($request->id);
                $msg = "User Updated Successfully";
            } else {
                $model = new User();
                $msg = "User Submitted Successfully";
            }

            
            $model->name = $request->name;
            $model->mobile = $request->mobile;
            $model->email = $request->email;
            $model->pwd = $request->password;
            $model->mobile_verified_at = 1;
            $model->address = $request->address;
            $model->city = $request->city;
            $model->state = $request->state;
            $model->pincode = $request->pincode;
            $model->select_type = $request->select_type;
            $model->company_name = $request->company_name;
            $model->gst_no = $request->gst_no;
            $model->pan_no = $request->pan_no;
            $model->designation = $request->designation;
            $model->is_reg = 1;
            $model->save();
            return redirect('/admin/users')->with('success_msg', $msg);
    }


    public function Delete($id)
    {
        $data = User::find($id);
        $data->delete(); 
        $message = "Customer Deleted";
        return redirect('/admin/users')->with('success_msg', $message);
    }

    public function View($id)
    {
        $result['data'] = User::where('id', $id)->get();
        return view('admin.user.view', $result);
    }

    public function Status($status, $id)
    {
        if ($status == "deactive") {
            $status = '0';
            $message = "User Deactive";

        } elseif($status == "active") {
            $status = '1';
            $message = "User Active";
        }
        $model = User::where('id', $id)->first();
        if ($model != null) {
            $model->status = $status;
            $model->save();
            return redirect('admin/users')->with('success_msg', $message);
        }
    }
}
