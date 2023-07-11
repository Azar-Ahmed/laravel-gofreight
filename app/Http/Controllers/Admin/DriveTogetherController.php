<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DriveTogether;
use File;

class DriveTogetherController extends Controller
{
    public function Index()
    {
        $result['data'] = DriveTogether::latest()->get();
        return view('admin.drive.drive', $result);
    }

    public function form($id){
        $result = [];
        if ($id != 'add') {
            $arr = DriveTogether::where('id', $id)->first();
            $result['name'] = $arr->name;
            $result['email'] = $arr->email;
            $result['mobile'] = $arr->mobile;
            $result['doc'] = $arr->doc;
            $result['id'] = $arr->id;
        } else {
            $result['name'] = '';
            $result['email'] = '';
            $result['mobile'] = '';
            $result['doc'] = '';
            $result['id'] = 0;
        }
        return view('admin.drive.manage', $result);
    }

    public function manage(Request $request)
    {  
        if ($request->id > 0) {
            $image_validation = 'mimes:doc,pdf,docx|max:10000';
        } else {
            $image_validation = 'required|mimes:doc,pdf,docx|max:10000';
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'doc' => $image_validation,

        ]); 
                
            if ($request->id > 0) {
                $model = DriveTogether::find($request->id);
                $msg = "Drive Updated Successfully";
                if($request->hasfile('image')){
                    $path = 'uploads/dive_together/'.$model->doc;
                    if(File::exists($path)){
                        File::delete($path);
                    } 
                } 
            } else {
                $model = new DriveTogether();
                $msg = "Drive Added Successfully";
            }

            if($request->hasfile('doc'))
            {
                $filenameWithExt = $request->file('doc')->getClientOriginalName();
                $filename  = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('doc')->getClientOriginalExtension();
                $fileNameToStore = $filename . '_' . time() . '.' . $extension;
                $request->doc->move(public_path('uploads/dive_together/'), $fileNameToStore);
                $model->doc = $fileNameToStore;
            }

            $model->name = $request->name;
            $model->email = $request->email;
            $model->mobile = $request->mobile;
            $model->save();
            if($request->source == 'front'){
                return redirect('drive-together')->with('success_msg', $msg);
            }else{
                return redirect('admin/drive')->with('success_msg', $msg);
            }
    }
    public function Status($status, $id)
    {
        if ($status == "deactive") {
            $status = '0';
            $message = "Driver Deactive";

        } elseif($status == "active") {
            $status = '1';
            $message = "Driver Active";
        }
        $model = DriveTogether::where('id', $id)->first();
        if ($model != null) {
            $model->status = $status;
            $model->save();
            return redirect('/admin/drive')->with('success_msg', $message);
        }
    }
    public function Delete($id)
    {
        $data = DriveTogether::find($id);
        $data->delete(); 
        $message = "Driver Deleted";
        return redirect('/admin/drive')->with('success_msg', $message);
    }

}
