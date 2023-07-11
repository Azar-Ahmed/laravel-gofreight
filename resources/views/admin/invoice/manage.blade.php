@extends('admin.includes.layout')
@section('page_title', 'Invoice')
    @section('container')
    <style>
        .latest_img{
            max-width:180px;
          }
          input[type=file]{
          padding:10px;
        }
 </style>
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
           <div class="breadcrumb-title pe-3">Invoice</div>
           <div class="ps-3">
               <nav aria-label="breadcrumb">
                   <ol class="breadcrumb mb-0 p-0">
                       <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                       </li>
                       <li class="breadcrumb-item active" aria-current="page"> @if ($id >  0)
                           Update Invoice
                       @else
                       Generate Invoice
                       @endif</li>
                   </ol>
               </nav>
           </div>
           <div class="ms-auto">
               <a href="{{url('admin/invoice')}}" class="btn btn-primary float-end">Invoice List</a>
           </div>
       </div>
       <!--end breadcrumb-->
       {{-- form --}}
       <div class="row">
           <div class="col-xl-12 mx-auto">
            <form id="filter_frm" method="post">
                @csrf
                <input type="hidden" name="invoice_table" value="invoice">
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <label>Slect Customer</label>
                        <select class="form-select form-select-sm user_id" name="user_id" aria-label="Default select example" required>
                        <option selected disabled>Select Customer</option>
                        @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                        <p class="text-danger"> @error('user_id'){{ $message }} @enderror</p>
                    </div>  
                    <div class="col-md-2">
                        <label>From</label>
                        <input type="date" name="first_date" class="form-control form-control-sm first_date" placeholder="First Data" required>
                        <p class="text-danger"> @error('first_date'){{ $message }} @enderror</p>
                    </div>
                    <div class="col-md-2">
                        <label>To</label>
                        <input type="date" name="second_date" class="form-control form-control-sm second_date" placeholder="Second Data" required>
                        <p class="text-danger"> @error('second_date'){{ $message }} @enderror</p>
                    </div>
                    <div class="col-md-2">
                      <button type="submit" class="btn btn-warning mt-3" id="submit">Filter</button>
                    </div>
                </div>
            </form>
            <div class="card border my-4 ewb_list" style="display: none">
                <div class="card-header">
                    <h3>Ewb Bill List</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-hover border border-1" id="records_table" style="display: none"> </table>
                </div>
            </div>
               <hr/>
               <div class="card">
                   <div class="card-body">
                       <div class="p-4 border rounded">
                        <form  method="POST" action="{{url('admin/invoice/save')}}" enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <input type="hidden" name="id" value="{{$id}}">
                            <input type="hidden" name="user_id" class="user_frm_id" value="{{$user_id}}">
                            <input type="hidden" name="origin" class="origin">
                            <input type="hidden" name="destination" class="destination">

                                <div class="row">
                                        <div class="col-md-4 my-3">
                                            <div class="mb-3">
                                                <label  class="form-label text-dark">invoice_no</label>
                                                <input type="text" name="invoice_no" value="{{$invoice_no}}" class="form-control border border-dark border-1" placeholder="Invoice No">
                                                <p class="text-danger" style="margin-left: 10px">@error('invoice_no'){{$message}} @enderror</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 my-3">
                                            <div class="mb-3">
                                                <label  class="form-label text-dark">Client Name</label>
                                                <input type="text" name="client_name" value="{{$client_name}}" class="form-control border border-dark border-1 client_name" placeholder="Client Name">
                                                <p class="text-danger" style="margin-left: 10px">@error('client_name'){{$message}} @enderror</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 my-3">
                                            <div class="mb-3">
                                                <label  class="form-label text-dark">Invoice Amt</label>
                                                <input type="text" name="invoice_amt" value="{{number_format((float)$invoice_amt, 2, '.', '')}}" class="form-control border border-dark border-1 grand_total" placeholder="Invoice Amt" readonly>
                                                <!--<p class="text-danger" style="margin-left: 10px">@error('invoice_amt'){{$message}} @enderror</p>-->
                                            </div>
                                        </div>
                                        <div class="col-md-6 my-3">
                                            <div class="mb-3">
                                                <label  class="form-label text-dark">From Date</label>
                                                <input type="text" name="from_date" value="{{$from_date}}" class="form-control border border-dark border-1 from_date" placeholder="From Date" readonly>
                                                <!--<p class="text-danger" style="margin-left: 10px">@error('from_date'){{$message}} @enderror</p>-->
                                            </div>
                                        </div>
                                        <div class="col-md-6 my-3">
                                            <div class="mb-3">
                                                <label  class="form-label text-dark">To Date</label>
                                                <input type="text" name="to_date" value="{{$to_date}}" class="form-control border border-dark border-1 to_date" placeholder="To Date" readonly>
                                                <!--<p class="text-danger" style="margin-left: 10px">@error('to_date'){{$message}} @enderror</p>-->
                                            </div>
                                        </div>
                                        @if ($id >  0)
                                        <div class="col-md-4 my-3">
                                            <div class="mb-3">
                                                <label  class="form-label text-dark">Amount Paid</label>
                                                <input type="text" name="amt_paid" value="{{$amt_paid}}" class="form-control border border-dark border-1 amt_paid" placeholder="Paid Amount">
                                                <p class="text-danger" style="margin-left: 10px">@error('amt_paid'){{$message}} @enderror</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 my-3">
                                            <div class="mb-3">
                                                <label  class="form-label text-dark">Invoice Status</label>
                                            
                                                <select class="form-select border border-dark border-1" name="invoice_status" aria-label="Default select example" required>
                                                    <option selected disabled>Select Status</option>
                                                    @if ($invoice_status == 'Pending')
                                                        <option value="Pending" selected>Pending</option>
                                                        <option value="Paid">Paid</option>
                                                    @elseif($invoice_status == 'Paid') 
                                                        <option value="Pending">Pending</option>
                                                        <option value="Paid" selected>Paid</option>  
                                                    @else
                                                        <option value="Pending" selected>Pending</option>
                                                        <option value="Paid">Paid</option>
                                                    @endif
                                                        
                                                </select>
                                            <p class="text-danger" style="margin-left: 10px">@error('invoice_status'){{$message}} @enderror</p>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 my-3">
                                            <div class="mb-3">
                                                <label  class="form-label text-dark">Payment Method</label>
                                                <select class="form-select border border-dark border-1" name="payment_method" aria-label="Default select example" required>
                                                    <option selected disabled>Select Method</option>
                                                    @if($payment_method == 'RTGS/NEFT') 
                                                        <option value="RTGS/NEFT" selected>RTGS/NEFT</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="Cheque">Cheque</option>  
                                                        <option value="UPI">UPI</option>
                                                    @elseif($payment_method == 'Cash') 
                                                        <option value="RTGS/NEFT">RTGS/NEFT</option>
                                                        <option value="Cash" selected>Cash</option>
                                                        <option value="Cheque">Cheque</option>  
                                                        <option value="UPI">UPI</option>
                                                    @elseif($payment_method == 'Cheque') 
                                                        <option value="RTGS/NEFT">RTGS/NEFT</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="Cheque" selected>Cheque</option>
                                                        <option value="UPI">UPI</option>
                                                    @elseif($payment_method == 'Cheque') 
                                                        <option value="RTGS/NEFT">RTGS/NEFT</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="Cheque">Cheque</option>
                                                        <option value="UPI" selected>UPI</option>   
                                                    @else
                                                        <option value="RTGS/NEFT">RTGS/NEFT</option>
                                                        <option value="Cash">Cash</option>
                                                        <option value="Cheque">Cheque</option>
                                                        <option value="UPI">UPI</option>
                                                    @endif
                                                        
                                                </select>
                                            <p class="text-danger" style="margin-left: 10px">@error('payment_method'){{$message}} @enderror</p>
                                            </div>
                                        </div>

                                        <div class="col-md-6 my-3">
                                            <div class="mb-3">
                                                <label  class="form-label text-dark">Payment Date</label>
                                                <input type="date" name="payment_date" value="{{$payment_date}}" class="form-control border border-dark border-1" placeholder="Payment Date">
                                                <p class="text-danger" style="margin-left: 10px">@error('payment_date'){{$message}} @enderror</p>
                                            </div>
                                        </div>

                                        <div class="col-md-6 my-3">
                                            <div class="mb-3">
                                                <label  class="form-label text-dark">Payment Time</label>
                                                <input type="time" name="payment_time" value="{{$payment_time}}" class="form-control border border-dark border-1" placeholder="Payment Time">
                                                <p class="text-danger" style="margin-left: 10px">@error('payment_time'){{$message}} @enderror</p>
                                            </div>
                                        </div>
                                        <div class="col-md-6 my-3 mb-4">
                                            <label  class="form-label text-dark">Payment Decription</label>
                                            <textarea class="form-control border border-dark border-1" name="payment_desc">{{ $payment_desc }}</textarea>
                                            <p class="text-danger" style="margin-left: 10px">@error('payment_desc'){{$message}} @enderror</p>
                                        </div>
                                        <div class="col-md-6 my-3 mb-4">
                                            <label  class="form-label text-dark">Payment Remark</label>
                                            <textarea class="form-control border border-dark border-1" name="remark">{{ $remark }}</textarea>
                                            <p class="text-danger" style="margin-left: 10px">@error('remark'){{$message}} @enderror</p>
                                        </div>
                                        <div class="col-md-8 my-3">
                                            <div class="mb-3">
                                                <label  class="form-label text-dark">TDS</label>
                                                <input type="text" name="tds" value="{{$tds}}" class="form-control border border-dark border-1 tds" placeholder="TDS">
                                                <p class="text-danger" style="margin-left: 10px">@error('tds'){{$message}} @enderror</p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 my-4">
                                            <div class="mt-4">
                                                <button class="btn btn-dark cal_tds">Calculate TDS</button>
                                                
                                            </div>
                                        </div>
                                        @endif

                                        <div class="col-md-12 text-center">
                                            @if ($id > 0)
                                                 <button id="submit" type="submit" class="btn btn-primary btn-lg" onclick="return checkDelete()"> Update Invoice</button>
                                            @else
                                                 <button id="submit" type="submit" class="btn btn-primary btn-lg" onclick="return checkDelete()"> Generate Invoice</button>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                        </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
    

    @endsection
@section('custom_script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {

        $('.user_id').change(function (e) { 
            $('.client_name').val($(this).find(":selected").text())
            $('.user_frm_id').val($(this).find(":selected").val())

        });
        
        $('.first_date').change(function (e) { 
            e.preventDefault();
            $('.from_date').val($('.first_date').val())
        });

        $('.second_date').change(function (e) { 
            e.preventDefault();
            $('.to_date').val($('.second_date').val())
        });

        $('.cal_tds').click(function (e) { 
            e.preventDefault();
            var invoice_amt = $('.grand_total').val()
            var amt_paid = $('.amt_paid').val()
            var tds = parseFloat(invoice_amt) - parseFloat(amt_paid)
            

            $('.tds').val(tds.toFixed(2)) 

        });

        if (jQuery("#filter_frm").length > 0) {
				jQuery("#filter_frm").validate({
					rules: {
						user_id: {
							required: true,
						},
						first_date: {
							required: true,
						},
                        second_date: {
							required: true,
						},
					},
					messages: {
							
						user_id: {
							required: 'Please select customer',
						},
						first_date: {
							required: 'Please select date',
						},
						second_date: {
							required: "Please select date",
						},
						
					},
					errorElement: "div",
					errorPlacement: function(error, element) {
						error.addClass("invalid-feedback");
						error.insertAfter(element);
					},
	
					submitHandler: function(form) {
						jQuery.ajaxSetup({
							headers: {
							'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
						}
					});
					jQuery('#submit').html('Please Wait...');
					jQuery("#submit"). attr("disabled", true);
                    $('.grand_total').val()

					jQuery.ajax({
						url: "{{url('ewb-date-filter')}}",
						type: "POST",
						data: $('#filter_frm').serialize(),
						success: function(response) {
							$('#submit').html('Filter');
							$("#submit"). attr("disabled", false);
							// document.getElementById("user_signup_frm").reset(); 
							console.log(response.ewb_data)

                            $('.ewb_list').show()
                            $('#records_table').show(); 

                            var trHTML = '';
                            trHTML += '<tr><td>Awb No</td><td>Shipper Name</td><td>Grand Total</td></tr>';
                            $.each(response.ewb_data, function (i, item) {
                                trHTML += '<tr><td>' + item.awb_no + '</td><td>' + item.shipper_name + '</td><td>' + item.grand_total + '</td></tr>';
                            });
                            $('#records_table').html(trHTML);
                            var grand_total = response.sum_grandTotal.toFixed(2)
                            $('.grand_total').val(grand_total)
                    	}
					});
				 }
				})
			 }
    });
</script>
@endsection