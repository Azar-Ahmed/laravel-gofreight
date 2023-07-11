<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;
use App\Models\Charges;


class VendorController extends Controller
{
    public function Vendor()
    {
        $result['data'] = Vendor::latest()->get();
        return view('admin.vendor.vendor', $result);
    }

    

    public function form($id){
        $result = [];
        if ($id != 'add') {
            $arr = Vendor::where('id', $id)->first();
            $result['date'] = $arr->date;
            $result['vendor_name'] = $arr->vendor_name;
            $result['amount'] = $arr->amount;
            $result['reason'] = $arr->reason;
            $result['remark'] = $arr->remark;
            $result['id'] = $arr->id;
        } else {
            $result['date'] = '';
            $result['vendor_name'] = '';
            $result['amount'] = '';
            $result['reason'] = '';
            $result['remark'] = '';
            $result['id'] = 0;
        }
        $result['charges'] = Charges::latest()->get();

        return view('admin.vendor.manage', $result);
    }

    public function manage(Request $request)
    {  
            $request->validate([
                'date' => 'required',
                'vendor_name' => 'required',
                'amount' => 'required',
                'reason' => 'required',
                'remark' => 'required',
            ]); 
                
            if ($request->id > 0) {
                $model = Vendor::find($request->id);
                $msg = "Vendor Updated Successfully";
            } else {
                $model = new Vendor();
                $msg = "Vendor Added Successfully";
            }

            $model->date = $request->date;
            $model->vendor_name = $request->vendor_name;
            $model->amount = $request->amount;
            $model->reason = $request->reason;
            $model->remark = $request->remark;
            $model->save();
            return redirect('/admin/vendor')->with('success_msg', $msg);
    }

    public function Status($status, $id)
    {
        if ($status == "deactive") {
            $status = '0';
            $message = "Vendor Deactive";

        } elseif($status == "active") {
            $status = '1';
            $message = "Vendor Active";
        }
        $model = Vendor::where('id', $id)->first();
        if ($model != null) {
            $model->status = $status;
            $model->save();
            return redirect('/admin/vendor')->with('success_msg', $message);
        }
    }

    public function Delete($id)
    {
        $data = Vendor::find($id);
        $data->delete(); 
        $message = "Vendor Deleted";
        return redirect('/admin/vendor')->with('success_msg', $message);
    }

}
