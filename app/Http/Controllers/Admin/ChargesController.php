<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Charges;
use DB;

class ChargesController extends Controller
{
    public function Index()
    {
        $result['data'] = Charges::latest()->get();
        return view('admin.charges.charges', $result);
    }

    public function form($id){
        $result = [];
        if ($id != 'add') {
            $arr = Charges::where('id', $id)->first();
            $result['company'] = $arr->company;
            $result['source'] = $arr->source;
            $result['destination'] = $arr->destination;
            $result['code'] = $arr->code;
            $result['rate'] = $arr->rate;
            $result['xbc'] = $arr->xbc;
            $result['chc'] = $arr->chc;
            $result['mbc'] = $arr->mbc;
            $result['cdc'] = $arr->cdc;
            $result['id'] = $arr->id;
        } else {
            $result['company'] = '';
            $result['source'] = '';
            $result['destination'] = '';
            $result['code'] = '';
            $result['rate'] = '';
            $result['xbc'] = ''; 
            $result['chc'] = ''; 
            $result['mbc'] = ''; 
            $result['cdc'] = ''; 
            $result['id'] = 0;
        }
        return view('admin.charges.manage', $result);
    }

    public function manage(Request $request)
    {  
            $request->validate([
                'company' => 'required',
                'source' => 'required',
                'destination' => 'required',
                'code' => 'required',
                'rate' => 'required',
                'xbc' => 'required', 
                'chc' => 'required', 
                'mbc' => 'required', 
                'cdc' => 'required', 
            ]); 
                
            if ($request->id > 0) {
                $model = Charges::find($request->id);
                $msg = "Charges Updated Successfully";
            } else {
                $model = new Charges();
                $msg = "Charges Added Successfully";
            }

            $model->company = $request->company;
            $model->source = $request->source;
            $model->destination = $request->destination;
            $model->code = $request->code;
            $model->rate = $request->rate;
            $model->xbc = $request->xbc;
            $model->chc = $request->chc;
            $model->mbc = $request->mbc;
            $model->cdc = $request->cdc;
            $model->save();
            return redirect('/admin/charges')->with('success_msg', $msg);
    }

    public function Status($status, $id)
    {
        if ($status == "deactive") {
            $status = '0';
            $message = "Manager Deactive";

        } elseif($status == "active") {
            $status = '1';
            $message = "Manager Active";
        }
        $model = Charges::where('id', $id)->first();
        if ($model != null) {
            $model->status = $status;
            $model->save();
            return redirect('/admin/charges')->with('success_msg', $message);
        }
    }

    public function Delete($id)
    {
        $data = Charges::find($id);
        $data->delete(); 
        $message = "Charges Deleted";
        return redirect('/admin/charges')->with('success_msg', $message);
    }

    public function View($id)
    {
        $result['data'] = Charges::where('id', $id)->get();
        return view('admin.charges.view', $result);
    }
}
