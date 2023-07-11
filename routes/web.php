<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\QuotationController;
use App\Http\Controllers\Admin\AirportController;
use App\Http\Controllers\Admin\ChargesController;
use App\Http\Controllers\Admin\DriveTogetherController;
use App\Http\Controllers\Admin\EwbBillController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\VendorController;

use App\Http\Controllers\Front\UserAuthController;
use App\Http\Controllers\Front\FrontController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Admin Login
Route::get('/admin/login', [AuthController::class, 'Login']);
Route::post('login-submit', [AuthController::class, 'LoginSubmit'])->name('login_submit');

Route::get('/admin/register', [AuthController::class, 'Register']);
Route::post('register-submit', [AuthController::class, 'RegisterSubmit'])->name('register_submit');

// Admin Panel
Route::group(['middleware' => 'admin_auth'], function () {
    
    Route::get('/admin/dashboard', [DashboardController::class, 'Dashboard']);
    
    // users
    Route::get('/admin/users', [UserController::class, 'Users']);
    Route::get('admin/user-form/{slug}', [UserController::class, 'form']);
    Route::post('admin/user/save', [UserController::class, 'userManage'])->name('user.save');
    Route::get('user-delete/{id}', [UserController::class, 'Delete']);
    Route::get('user-status/{status}/{id}', [UserController::class, 'Status']);
    Route::get('users-view/{id}', [UserController::class, 'View']);

     // Airport
     Route::get('/admin/airport', [AirportController::class, 'Index']);
     Route::get('admin/airport-form/{slug}', [AirportController::class, 'form']);
     Route::post('admin/airport/save', [AirportController::class, 'manage'])->name('airport.save');
     Route::get('airport-delete/{id}', [AirportController::class, 'Delete']);
     Route::get('airport-status/{status}/{id}', [AirportController::class, 'Status']);

     // Charges
     Route::get('/admin/charges', [ChargesController::class, 'Index']);
     Route::get('admin/charges-form/{slug}', [ChargesController::class, 'form']);
     Route::post('admin/charges/save', [ChargesController::class, 'manage'])->name('charges.save');
     Route::get('charges-delete/{id}', [ChargesController::class, 'Delete']);
     Route::get('charges-status/{status}/{id}', [ChargesController::class, 'Status']);
     Route::get('charges-view/{id}', [ChargesController::class, 'View']);

     // Drive Together
     Route::get('/admin/drive', [DriveTogetherController::class, 'Index']);
     Route::get('admin/drive-form/{slug}', [DriveTogetherController::class, 'form']);
     Route::post('admin/drive/save', [DriveTogetherController::class, 'manage'])->name('drive.save');
     Route::get('drive-delete/{id}', [DriveTogetherController::class, 'Delete']);
     Route::get('drive-status/{status}/{id}', [DriveTogetherController::class, 'Status']);

    // quotation
    Route::get('/admin/quotation', [QuotationController::class, 'Index']);
    Route::get('admin/quotation-form/{slug}', [QuotationController::class, 'form']);
    Route::post('admin/quotation/save', [QuotationController::class, 'manage'])->name('quotation.save');
    Route::get('quotation-delete/{id}', [QuotationController::class, 'Delete']);
    Route::get('quotation-status/{status}/{id}', [QuotationController::class, 'Status']);
    Route::get('quotation-view/{id}', [QuotationController::class, 'View']);
    Route::post('quotation-progress', [QuotationController::class, 'QuotationProgress'])->name('QuotationProgress');
    Route::post('quotation-image-delete', [QuotationController::class, 'DeleteMultipleImage'])->name('DeleteMultipleImage');
    
    // quotation dimention
    Route::post('quote-dimention-add', [QuotationController::class, 'AddDimention'])->name('AddDimention');
    Route::post('quote-dimention-edit', [QuotationController::class, 'EditDimention'])->name('EditDimention');
    Route::post('quote-dimention-update', [QuotationController::class, 'UpdateDimention'])->name('UpdateDimention');
    Route::post('quote-dimention-delete', [QuotationController::class, 'DeleteDimention'])->name('DeleteDimention');
    Route::post('weight-cal-reset', [QuotationController::class, 'WeightCalReset'])->name('WeightCalReset');

    
    // quotation Mail 
    Route::post('quote-send-mail', [QuotationController::class, 'SendQuotationMail'])->name('SendQuotationMail');
    
    // quotation sorting
    Route::get('quotation/{progress}', [QuotationController::class, 'QuotationSorting']);

    // EWB Bill
    Route::get('/admin/ewb-bill', [EwbBillController::class, 'FetchEwbBill']);
    Route::post('/ewb-date-filter', [EwbBillController::class, 'EwbDateFilter'])->name('EwbDateFilter');

    // Add Ewb Bill
    Route::get('/admin/ewb-bill/{id}', [EwbBillController::class, 'EwbBill']);
    Route::post('/admin/get-charges', [EwbBillController::class, 'frightCharges'])->name('frightCharges');
    Route::post('ewb-save', [EwbBillController::class, 'EwbSave'])->name('EwbSave');

    // Save Ewb Bill Vendor Source
    Route::get('admin/vendor-source', [EwbBillController::class, 'VendorSource']);
    Route::post('vendor-source-filter', [EwbBillController::class, 'VendorSourceFilter'])->name('VendorSourceFilter');
    Route::post('ewb-source-save', [EwbBillController::class, 'EwbSourceSave'])->name('EwbSourceSave');
    Route::get('/admin/edit-vendor-source/{id}', [EwbBillController::class, 'EditVendorSource']);
    Route::post('vendor-source-update', [EwbBillController::class, 'VendorSourceUpdate'])->name('VendorSourceUpdate');

    Route::get('admin/vendor-source-view/{id}', [EwbBillController::class, 'VendorSourceView']);
       
    // Edit EWb Bill
    Route::get('/admin/edit-ewb/{id}', [EwbBillController::class, 'EditEwb']);
    Route::post('ewb-update', [EwbBillController::class, 'UpdateEwb'])->name('UpdateEwb');

    // Print EWB Bill 
    Route::get('/admin/print-ewb-bill/{id}', [EwbBillController::class, 'PrintEwbBill']);

    // Profit & Loss
    Route::get('/admin/profit-loss', [EwbBillController::class, 'ProfitLoss']);
    Route::post('profit-loss-filter', [EwbBillController::class, 'ProfitLossFilter'])->name('ProfitLossFilter');

     // Report
     Route::get('/admin/report', [EwbBillController::class, 'Report']);
     Route::post('report-filter', [EwbBillController::class, 'ReportFilter'])->name('ReportFilter');


    // Invoice
    Route::get('/admin/invoice', [InvoiceController::class, 'Invoice']);
    Route::get('/admin/invoice-view/{id}', [InvoiceController::class, 'InvoiceView']);
    Route::get('/admin/invoice-print/{id}', [InvoiceController::class, 'InvoicePrint']);
    Route::get('admin/invoice-form/{slug}', [InvoiceController::class, 'form']);
    Route::post('admin/invoice/save', [InvoiceController::class, 'manage'])->name('invoice.save');
    Route::get('invoice-delete/{id}', [InvoiceController::class, 'Delete']);
    Route::post('invoice-filter', [InvoiceController::class, 'InvoiceFilter'])->name('InvoiceFilter');
    
    // Vendor Payment
    Route::get('/admin/vendor', [VendorController::class, 'Vendor']);
    Route::get('admin/vendor-form/{slug}', [VendorController::class, 'form']);
    Route::post('admin/vendor/save', [VendorController::class, 'manage'])->name('vendor.save');
    Route::get('vendor-delete/{id}', [VendorController::class, 'Delete']);
    Route::get('vendor-status/{status}/{id}', [VendorController::class, 'Status']);
    // Logout
     Route::get('logout', function () {
        session()->forget(['AdminLogin', 'AdminID', 'AdminName', 'AdminEmail']);
        return redirect('admin/login')->with('success', 'Logout successfully done');
    });
});


/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [FrontController::class, 'Index']);

// Auth 
Route::get('/login', [UserAuthController::class, 'UserLogin']);
Route::post('user-login-submit', [UserAuthController::class, 'UserLoginSubmit'])->name('user_login_submit');

Route::get('/register', [UserAuthController::class, 'UserRegister']);
Route::post('user-signup-submit', [UserAuthController::class, 'UserRegisterSubmit'])->name('user_signup_submit');

Route::get('/forgot-password', [UserAuthController::class, 'ForgotPassword']);
Route::post('forgot-password-submit', [UserAuthController::class, 'ForgotPasswordSubmit'])->name('ForgotPasswordSubmit');


// Get Links
Route::get('/about', [FrontController::class, 'About']);
Route::get('/term', [FrontController::class, 'Term']);
Route::get('/conditions', [FrontController::class, 'Conditions']);
Route::get('/air-fright-services', [FrontController::class, 'AirFrightServices']);
Route::get('/custom-clearance', [FrontController::class, 'CustomClearance']);
Route::get('/dangerous', [FrontController::class, 'Dangerous']);
Route::get('/ecommerce-services', [FrontController::class, 'EcommerceServices']);
Route::get('/freight-forwarding', [FrontController::class, 'FreightForwarding']);
Route::get('/pet-services', [FrontController::class, 'PetServices']);
Route::get('/road-freight-services', [FrontController::class, 'RoadFreightServices']);
Route::get('/services', [FrontController::class, 'Services']);
Route::get('/train-freight-services', [FrontController::class, 'TrainFreightServices']);
Route::get('/warehouse-packaging', [FrontController::class, 'WarehousePackaging']);

Route::get('/airline', [FrontController::class, 'Airline']);
Route::get('/career', [FrontController::class, 'Career']);
Route::get('/contact', [FrontController::class, 'contact']);
Route::get('/franchise', [FrontController::class, 'Franchise']);
Route::get('/restricted', [FrontController::class, 'Rrestricted']);


Route::group(['middleware' => 'user_auth'], function () {

        // Quotation
        Route::get('/quotation', [FrontController::class, 'Quotation']);
        Route::post('/quotation-submit', [FrontController::class, 'QuotationSubmit'])->name('QuotationSubmit');

        // Drive Together
        Route::get('/drive-together', [FrontController::class, 'DriveTogether']);

        // User Profile
        Route::get('/profile', [FrontController::class, 'Profile']);
        Route::post('/edit-profile', [FrontController::class, 'editProfile'])->name('editProfile');
        Route::post('/update-profile', [FrontController::class, 'updateProfile'])->name('updateProfile');

        Route::get('/user-quotation-detail/{id}', [FrontController::class, 'UserQuotationDetail']);
        Route::post('/customer-quote-confirmation', [FrontController::class, 'CustomerQuoteConfirmation']);

        // Logout
        Route::get('user/logout', function () {
            session()->forget(['UserLogin', 'UserData']);
            return redirect('login')->with('success', 'Logout successfully done');
        });
});









