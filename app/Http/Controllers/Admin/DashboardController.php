<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Quotation;

class DashboardController extends Controller
{
    public function Dashboard()
    {
        $customerCount = User::count();
        $quotationCount = Quotation::count();
        $ongoingCount = Quotation::where('progress','send-quote')->count();
        $approvedCount = Quotation::where('progress','customer-approved')->count();
        $unapprovedCount = Quotation::where('progress','customer-unapproved')->count();
        $customers = User::latest()->limit(5)->get();
        
        $today_order = Quotation::where('pickup_date', now()->format('Y-m-d'))
                                ->orWhere('pickup_date', date('Y-m-d', strtotime('+1 days')))
                                ->orWhere('pickup_date', date('Y-m-d', strtotime('+2 days')))
                                ->orderBy('pickup_date','asc')
                                ->get();

      
        return view('admin.dashboard', compact('customerCount', 'quotationCount', 'ongoingCount', 'approvedCount', 'unapprovedCount', 'customers', 'today_order'));
    }
}
