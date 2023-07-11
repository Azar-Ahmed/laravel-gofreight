<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Invoice;
use App\Models\EwbBill;

class InvoiceController extends Controller
{
    public function Invoice()
    {
        $result['data'] = Invoice::latest()->get();
        $result['clients']= Invoice::select('client_name')->distinct()->get();

        return view('admin.invoice.index', $result);
    }

    public function InvoiceView($id)
    {
        $result['invoice'] = Invoice::where('id', $id)->first();

        $first_date = date('Y-m-d', strtotime($result['invoice']['from_date']));
        $second_date = date('Y-m-d', strtotime($result['invoice']['to_date']));

        $result['ewb'] = EwbBill::where('user_id', $result['invoice']['user_id'])
                                ->where('issuing_date', '>=', $first_date)
                                ->where('issuing_date', '<=', $second_date)
                                ->get();
        // dd($result['ewb']);
        $result['sum_grandTotal'] = EwbBill::where('user_id', $result['invoice']['user_id'])->sum('grand_total');
        return view('admin.invoice.view', $result);
    }

    public function InvoicePrint($id)
    {
        $result['invoice'] = Invoice::where('id', $id)->first();

        $first_date = date('Y-m-d', strtotime($result['invoice']['from_date']));
        $second_date = date('Y-m-d', strtotime($result['invoice']['to_date']));
    
    

        $result['ewb'] = EwbBill::where('user_id', $result['invoice']['user_id'])
                                ->where('issuing_date', '>=', $first_date)
                                ->where('issuing_date', '<=', $second_date)
                                ->get();
        // dd($result['ewb']);
        $result['sum_grandTotal'] = EwbBill::where('user_id', $result['invoice']['user_id'])->sum('grand_total');
        return view('admin.invoice.print', $result);
    }


    public function form($id){
        $result = [];
        // Invoice no
        $invoice_no = Invoice::latest()->first();
        $invoice_number = '';
         if($invoice_no){
            $int = (int)mb_substr($invoice_no->invoice_no, -1);
            $gof = "GOF";
            $year = date("y");
            $no = $int+1;
            $invoice_number = $gof.$year.'/00'.$no;
        }

        if ($id != 'add') {
            $arr = Invoice::where('id', $id)->first();

            $result['user_id'] = $arr->user_id;
            $result['invoice_no'] = $arr->invoice_no;
            $result['client_name'] = $arr->client_name;
            $result['invoice_amt'] = $arr->invoice_amt;
            $result['from_date'] = $arr->from_date;
            $result['to_date'] = $arr->to_date;
            $result['amt_paid'] = $arr->amt_paid;
            $result['invoice_status'] = $arr->invoice_status;
            $result['payment_date'] = $arr->payment_date;
            $result['payment_time'] = $arr->payment_time;
            $result['payment_method'] = $arr->payment_method;
            $result['payment_desc'] = $arr->payment_desc;
            $result['remark'] = $arr->remark;
            $result['tds'] = $arr->tds;
            $result['id'] = $arr->id;
        } else {
            $result['user_id'] = '';
            $result['invoice_no'] = $invoice_number;
            $result['client_name'] = '';
            $result['invoice_amt'] = '';
            $result['from_date'] = '';
            $result['to_date'] = '';
            $result['amt_paid'] = '';
            $result['invoice_status'] = '';
            $result['payment_date'] = '';
            $result['payment_time'] = '';
            $result['payment_method'] = '';
            $result['payment_desc'] = '';
            $result['remark'] = '';
            $result['tds'] = '';
            $result['id'] = 0;
        }
        $result['users'] = User::latest()->get();

        return view('admin.invoice.manage', $result);
    }

    public function manage(Request $request)
    {  
            $request->validate([
                'invoice_no' => 'required',
                'client_name' => 'required',
                'invoice_amt' => 'required',
                // 'invoice_status' => 'required',
                // 'payment_date' => 'required',
                // 'payment_method' => 'required',
                // 'payment_desc' => 'required',
                // 'remark' => 'required',
                // 'tds' => 'required',
            ]); 
                
            if ($request->id > 0) {
                $model = Invoice::find($request->id);
                $msg = "Invoice Updated Successfully";
            } else {
                $model = new Invoice();
                $msg = "Invoice Generated Successfully";
            }

            $model->user_id = $request->user_id;
            $model->invoice_no = $request->invoice_no;
            $model->client_name = $request->client_name;
            $model->invoice_amt = $request->invoice_amt;
            $model->from_date = $request->from_date;
            $model->amt_paid = $request->amt_paid;
            $model->to_date = $request->to_date;
            $model->invoice_status = $request->invoice_status;
            $model->payment_date = $request->payment_date;
            $model->payment_time = $request->payment_time;
            $model->payment_method = $request->payment_method;
            $model->payment_desc = $request->payment_desc;
            $model->remark = $request->remark;
            $model->tds = $request->tds;
            $model->save();
            return redirect('admin/invoice')->with('success_msg', $msg);
    }

    public function Delete($id)
    {
        $data = Invoice::find($id);
        $data->delete(); 
        $message = "Invoice Deleted";
        return redirect('/admin/invoice')->with('success_msg', $message);
    }

    public function InvoiceFilter(Request $request)
    {   
        $request->validate([
            'client_name' => 'required',
            'invoice_status' => 'required',
            'first_date' => 'required',
            'second_date' => 'required',
        ]); 

            $first_date = date('Y-m-d', strtotime($request->first_date));
            $second_date = date('Y-m-d', strtotime($request->second_date));
        
             $result['data'] = Invoice::where('client_name', $request->client_name)
                        ->where('invoice_status', $request->invoice_status)
                        ->where('payment_date', '>=', $first_date)
                        ->where('payment_date', '<=', $second_date)
                        ->get();
                        // $result['client_name'] = User::where('id', $request->user_id)->first();
                        // $result['date_from'] = $first_date;
                        // $result['date_to'] = $second_date;
        $result['clients']= Invoice::select('client_name')->distinct()->get();

        return view('admin.invoice.index', $result);

             


    }

    
}
