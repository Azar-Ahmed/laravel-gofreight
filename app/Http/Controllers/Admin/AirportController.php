<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Airport;
use DB;

class AirportController extends Controller
{
    public function Index()
    {
        $result['data'] = Airport::latest()->get();
        return view('admin.airport.airport', $result);
    }

    public function form($id){
        $result = [];
        if ($id != 'add') {
            $arr = Airport::where('id', $id)->first();
            $result['airport_code'] = $arr->airport_code;
            $result['airport_name'] = $arr->airport_name;
            $result['id'] = $arr->id;
        } else {
            $result['airport_code'] = '';
            $result['airport_name'] = '';
            $result['id'] = 0;
        }
        return view('admin.airport.manage', $result);
    }

    public function manage(Request $request)
    {  
            $request->validate([
                'airport_code' => 'required',
                'airport_name' => 'required',
            ]); 
                
            if ($request->id > 0) {
                $model = Airport::find($request->id);
                $msg = "Airport Updated Successfully";
            } else {
                $model = new Airport();
                $msg = "Airport Added Successfully";
            }

            $model->airport_code = $request->airport_code;
            $model->airport_name = $request->airport_name;
            $model->save();
            return redirect('/admin/airport')->with('success_msg', $msg);
    }

    public function Status($status, $id)
    {
        if ($status == "deactive") {
            $status = '0';
            $message = "Airport Deactive";

        } elseif($status == "active") {
            $status = '1';
            $message = "Airport Active";
        }
        $model = Airport::where('id', $id)->first();
        if ($model != null) {
            $model->status = $status;
            $model->save();
            return redirect('/admin/airport')->with('success_msg', $message);
        }
    }

    public function Delete($id)
    {
        $data = Airport::find($id);
        $data->delete(); 
        $message = "Airport Deleted";
        return redirect('/admin/airport')->with('success_msg', $message);
    }

}
