<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from html.themexriver.com/fastrans/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Sep 2022 09:29:09 GMT -->
<head>
		<meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Edit Ewb Bill</title>
        
		<link rel="shortcut icon" href="{{asset('frontend_assets/images/favicon.png')}}" type="image/x-icon">
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Css Fils -->
		<link rel="stylesheet" href="{{asset('frontend_assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend_assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend_assets/css/fontawesome-all.css')}}">
		<link rel="stylesheet" href="{{asset('frontend_assets/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('frontend_assets/css/mycss.css')}}">

	
	</head>

	<body class="nlhu-body">
    <style>
        label{
            color: black;
        }
    </style>
  

    <div class="container-fluid" style="margin-top:50px;margin-bottom:50px">
       <div class="row justify-content-center  my-3">
        <div class="col-md-10 text-center">
            <h3 class="fw-bold text-center mb-4">Update EWB Bill </h3>
        </div>
        <div class="col-md-2 text-end">
            <a href="{{url('admin/ewb-bill')}}" class="btn btn-warning text-light btn-lg">Go Back</a>
        </div>
       </div>

       <form method="POST" id="edit_ewb_main_form" action="{{ url('ewb-update') }}" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <input type="hidden" name="ewb_id" value="{{$id}}">
        {{-- <input type="hidden" name="user_id" value="{{$quotation->user_id}}"> --}}
        <div class="row">
            <div class="col-md-2 my-2">
                <label class="form-label">AWB No</label>   
                <input type="text" class="form-control" name="awb_no" value="{{$awb_no}}" readonly>
                <p class="text-danger" style="margin-left: 10px">@error('awb_no') {{ $message }} @enderror</p>
            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">Carrier</label>   
                <input type="text" class="form-control" name="carrier" value="{{$carrier}}">
                <p class="text-danger" style="margin-left: 10px">@error('carrier') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">Carrier/Client Code</label>   
                <input type="text" class="form-control" name="client_code" value="{{$client_code}}" readonly>
                <p class="text-danger" style="margin-left: 10px">@error('client_code') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                    <label class="form-label">Origin</label>   
                    <input type="text" class="form-control" name="origin" value="{{$origin}}" readonly>
                <p class="text-danger" style="margin-left: 10px">@error('origin') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                    <label class="form-label">Destination</label>   
                    <input type="text" class="form-control" name="destination" value="{{$destination}}" readonly>
                   <p class="text-danger" style="margin-left: 10px">@error('destination') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                    <label class="form-label">Transit</label>   
                    <input type="text" class="form-control" name="transit" value="{{$transit}}">
                   <p class="text-danger" style="margin-left: 10px">@error('transit') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                    <label class="form-label">Currency</label>   
                    <input type="text" class="form-control" name="currency" value="{{$currency}}" readonly>
                   <p class="text-danger" style="margin-left: 10px">@error('currency') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                    <label class="form-label">Region</label>   
                    <input type="text" class="form-control" name="region" value="{{$region}}" readonly>
                   <p class="text-danger" style="margin-left: 10px">@error('region') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                    <label class="form-label">Dimention</label>   
                    <input type="text" class="form-control" name="dimention" value="{{$dimention}}">
                   {{-- <p class="text-danger" style="margin-left: 10px">@error('dimention') {{ $message }} @enderror</p> --}}

            </div>
            <div class="col-md-2 my-2">
                    {{-- @php $cbm = $chargeable_weight / 166.66 @endphp --}}
                    <label class="form-label">CBM</label>   
                    <input type="text" class="form-control" name="cbm" value="{{number_format((float)$cbm, 2, '.', '')}}">
                    <p class="text-danger" style="margin-left: 10px">@error('cbm') {{ $message }} @enderror</p>

             </div>
             <div class="col-md-2 my-2">
                    <label class="form-label">Service Type</label>   
                    <input type="text" class="form-control" name="service_type" value="{{$service_type}}">
                   <p class="text-danger" style="margin-left: 10px">@error('service_type') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">Charges Code</label>   
                <input type="text" class="form-control" name="charges_code" value="{{$charges_code}}">
                <p class="text-danger" style="margin-left: 10px">@error('charges_code') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">Pick Up Date</label>   
                <input type="date" class="form-control" name="pick_up_date" value="{{$pick_up_date}}">
                <p class="text-danger" style="margin-left: 10px">@error('pick_up_date') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">NVD</label>   
                <input type="text" class="form-control" name="nvd" value="{{ number_format((float)$nvd, 2, '.', '')}}">
                <p class="text-danger" style="margin-left: 10px">@error('nvd') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">NCV</label>   
                <input type="text" class="form-control" name="ncv" value="{{$ncv}}">
                   <p class="text-danger" style="margin-left: 10px">@error('ncv') {{ $message }} @enderror</p>
            </div>
        </div>
        
        <hr>

        <div class="row">
            <div class="col-md-2 my-2">
                <label class="form-label">Apt of Depature</label>   
                    <select class=" form-select" name="apt_of_depature">
                        <option selected disabled>Select Destination</option>
                        @foreach ($airport as $airport_data)
                            @if ($airport_data->id == $apt_of_depature)
                                <option value="{{ $airport_data->id }}" selected>{{ $airport_data->airport_code  }}</option>
                            @else
                                <option value="{{ $airport_data->id }}">{{ $airport_data->airport_code }}</option>
                            @endif
                         @endforeach 


                    </select>
                   <p class="text-danger" style="margin-left: 10px">@error('apt_of_depature') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                    <label class="form-label">Apt of Destination</label>   
                    <select class=" form-select" name="apt_of_destination">
                        <option selected disabled>Select Destination</option>
                        @foreach ($airport as $airport_data)
                           @if ($airport_data->id == $apt_of_destination)
                                <option value="{{ $airport_data->id }}" selected>{{ $airport_data->airport_code  }}</option>
                            @else
                                <option value="{{ $airport_data->id }}">{{ $airport_data->airport_code }}</option>
                            @endif
                        @endforeach 
                    </select>
                   <p class="text-danger" style="margin-left: 10px">@error('apt_of_destination') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                    <label class="form-label">Freight Code</label>   
                    <select class=" form-select freight_charges" name="freight_code">
                    <option selected disabled>Select Freight Code</option>
                    @foreach ($charges as $freight_charges)

                    @if ($freight_charges->id == $freight_code )
                    <option value="{{ $freight_charges->id }}" selected>{{ $freight_charges->code }}</option>
                        
                    @else
                     <option value="{{ $freight_charges->id }}">{{ $freight_charges->code }}</option>
                    @endif

                    @endforeach 
                </select>
                <p class="text-danger" style="margin-left: 10px">@error('freight_code') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                    <label class="form-label">Issuing Date</label>   
                    <input type="date" class="form-control" name="issuing_date" value="{{$issuing_date}}">
                    <p class="text-danger" style="margin-left: 10px">@error('issuing_date') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                    <label class="form-label">Client Name</label>   
                    <input type="text" class="form-control" name="client_name" value="{{$client_name}}">
                   <p class="text-danger" style="margin-left: 10px">@error('client_name') {{ $message }} @enderror</p>

            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2 my-2">
                <label class="form-label">No Of Pcs</label>   
                <input type="text" class="form-control" name="no_of_pcs" value="{{$no_of_pcs}}" readonly>
                <p class="text-danger" style="margin-left: 10px">@error('no_of_pcs') {{ $message }} @enderror</p>
                         
            </div>
            <div class="col-md-2 my-2">
                    <label class="form-label">Gr Wt</label>   
                    <input type="text" class="form-control" name="gr_wt" value="{{ number_format((float)$gr_wt, 2, '.', '')}}" readonly>
                    <p class="text-danger" style="margin-left: 10px">@error('gr_wt') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                    <label class="form-label">Vol/Chargable Wt</label>   
                    <input type="text" class="form-control chargeable_weight" name="chargable_wt"  value="{{ number_format((float)$chargable_wt, 2, '.', '')}}" readonly>
                    <p class="text-danger" style="margin-left: 10px">@error('chargable_wt') {{ $message }} @enderror</p>
                
            </div>
            <div class="col-md-2 my-2">
                    <label class="form-label">Rate/Kg</label>   
                    {{-- @if ($chargable_wt < $quotation->rate_45kg)
                        <input type="text" class="form-control" name="rate_kg" value="Other">
                    @elseif($chargable_wt >= $quotation->rate_45kg && $chargable_wt < $quotation->rate_100kg)
                        <input type="text" class="form-control" name="rate_kg" value="{{$quotation->rate_45kg}}">
                    @elseif($chargable_wt >=$quotation->rate_100kg &&  $chargable_wt < $quotation->rate_250kg)
                        <input type="text" class="form-control" name="rate_kg" value="{{$quotation->rate_100kg}}">
                    @elseif($chargable_wt >=$quotation->rate_250kg &&  $chargable_wt < $quotation->rate_500kg)
                        <input type="text" class="form-control" name="rate_kg" value="{{$quotation->rate_250kg}}">
                    @elseif($chargable_wt >=$quotation->rate_500kg)
                        <input type="text" class="form-control" name="rate_kg" value="{{$quotation->rate_500kg}}">
                    @endif --}}

                    <input type="text" class="form-control rate_kg" name="rate_kg" value="{{ number_format((float)$rate_kg, 2, '.', '')}}">

                    <p class="text-danger" style="margin-left: 10px">@error('rate_kg') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                    <label class="form-label">Total Amount</label>
                    {{-- @if ($quotation->chargeable_weight < $quotation->rate_45kg)
                       <input type="text" class="form-control total_amount" name="total_amt" value="{{$quotation->rate_other}}">
                   
                       @elseif($quotation->chargeable_weight >= $quotation->rate_45kg && $quotation->chargeable_weight < $quotation->rate_100kg)
                        <input type="text" class="form-control total_amount" name="total_amt" value="{{$quotation->rate_45kg * $quotation->chargeable_weight}}">
                   
                        @elseif($quotation->chargeable_weight >=$quotation->rate_100kg &&  $quotation->chargeable_weight < $quotation->rate_250kg)
                        <input type="text" class="form-control total_amount" name="total_amt" value="{{$quotation->rate_100kg * $quotation->chargeable_weight}}">
                   
                        @elseif($quotation->chargeable_weight >=$quotation->rate_250kg &&  $quotation->chargeable_weight < $quotation->rate_500kg)
                        <input type="text" class="form-control total_amount" name="total_amt" value="{{$quotation->rate_250kg * $quotation->chargeable_weight}}">
                   
                        @elseif($quotation->chargeable_weight >=$quotation->rate_500kg)
                        <input type="text" class="form-control total_amount" name="total_amt" value="{{$quotation->rate_500kg * $quotation->chargeable_weight}}">
                    @endif --}}
                    <input type="text" class="form-control total_amount" name="total_amt" value="{{ number_format((float)$total_amt, 2, '.', '')}}">
                    <p class="text-danger" style="margin-left: 10px">@error('total_amt') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                    <label class="form-label">Goods Discription</label>   
                    <input type="text" class="form-control" name="goods_desc" value="{{$goods_desc}}" readonly>
                    <p class="text-danger" style="margin-left: 10px">@error('goods_desc') {{ $message }} @enderror</p>

            </div>

        </div>
        <hr>
        <div class="row">
            <div class="col-md-3 my-2">
                    <label class="form-label">Shipper Name</label>   
                    <input type="text" class="form-control" name="shipper_name" value="{{$shipper_name}}">
                    <p class="text-danger" style="margin-left: 10px">@error('shipper_name') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-3 my-2">
                    <label class="form-label">Consignee Name</label>   
                    <input type="text" class="form-control" name="consignee_name" value="{{$consignee_name}}">
                    <p class="text-danger" style="margin-left: 10px">@error('consignee_name') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-6 my-2">
                <label class="form-label">Handling Information</label>   
                <input type="text" class="form-control" name="handling_information"  value="{{$handling_information}}">
                <p class="text-danger" style="margin-left: 10px">@error('handling_information') {{ $message }} @enderror</p>

            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2 my-2">
                <label class="form-label">AAA</label>   
                <input type="number" class="form-control aaa_manual_kg" name="aaa_manual_kg" value="{{ number_format((float)$aaa_manual_kg, 2, '.', '')}}">
                <p class="text-danger mb-0" style="margin-left: 10px">@error('aaa_manual_kg') {{ $message }} @enderror</p>
                {{-- <p class="text-danger my-0 select_freight_msg"> <small>*Please First Select Freight Code</small> </p> --}}

            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">MBC</label>   
                <input type="text" class="form-control mbc" name="mbc" value="{{ number_format((float)$mbc, 2, '.', '')}}">
                <p class="text-danger" style="margin-left: 10px">@error('mbc') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">XBC</label>   
                <input type="text" class="form-control xbc" name="xbc" value="{{ number_format((float)$xbc, 2, '.', '')}}">
                <p class="text-danger" style="margin-left: 10px">@error('xbc') {{ $message }} @enderror</p>
            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">CDC</label>   
                <input type="text" class="form-control cdc" name="cdc" value="{{ number_format((float)$cdc, 2, '.', '')}}">
                <p class="text-danger" style="margin-left: 10px">@error('cdc') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">CHC</label>   
                <input type="text" class="form-control chc" name="chc" value="{{ number_format((float)$chc, 2, '.', '')}}">
                <p class="text-danger" style="margin-left: 10px">@error('chc') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">Other Charges/Kgs</label>   
                <input type="text" class="form-control other_charges_kg" name="other_charges" value="{{ number_format((float)$other_charges, 2, '.', '')}}" readonly>
                <p class="text-danger" style="margin-left: 10px">@error('other_charges') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-12 mb-3 text-center cal_div" style="display: none">
                <button class="btn btn-primary btn-sm cal_btn">Calculate</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 my-2">
                <?php //$valuation = (0.7 / 100) * $quotation->product_value;  ?>
                <label class="form-label">Valuation Charge</label>   
                <input type="text" class="form-control valuation_charge" name="valuation_charge" value="{{ number_format((float)$valuation_charge, 2, '.', '')}}" readonly>
                <p class="text-danger" style="margin-left: 10px">@error('valuation_charge') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-3 my-2">
                <label class="form-label">Sub Total</label>
                <input type="text" class="form-control sub_total" name="sub_total" value="{{ number_format((float)$sub_total, 2, '.', '')}}" readonly>
                <p class="text-danger" style="margin-left: 10px">@error('sub_total') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">GST </label>
                <select class=" form-select gst" name="gst">
                    <option selected disabled>Select GST</option>
                    @if ($gst == 'CGST/SGST')
                        <option value="CGST/SGST" selected>CGST/SGST</option>
                        <option value="IGST">IGST</option>
                    @elseif ($gst == 'IGST')
                        <option value="CGST/SGST">CGST/SGST</option>
                        <option value="IGST" selected>IGST</option>
                    @else
                        <option value="CGST/SGST">CGST/SGST</option>
                        <option value="IGST">IGST</option>
                    @endif
                    
                </select>
                <p class="text-danger" style="margin-left: 10px">@error('gst') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">GST Value</label>
                <input type="text" class="form-control gst_value mb-0" name="gst_value" value="{{ number_format((float)$gst_value, 2, '.', '')}}">
                <p class="text-danger mb-0" style="margin-left: 10px">@error('gst_value') {{ $message }} @enderror</p>
                {{-- <p class="text-danger my-0 select_gst_msg"> <small class="">*Please Select GST Type First</small> </p> --}}
            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">Taxes GST/ S & C</label>
                <input type="text" class="form-control taxes_gst" name="taxes_gst" value="{{ number_format((float)$taxes_gst, 2, '.', '')}}" readonly>
                <p class="text-danger" style="margin-left: 10px">@error('taxes_gst') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">Grand Total</label>
                <input type="text" class="form-control grand_total" name="grand_total" value="{{ number_format((float)$grand_total, 2, '.', '')}}" readonly>
                <p class="text-danger" style="margin-left: 10px">@error('grand_total') {{ $message }} @enderror</p>

            </div>
            <div class="col-md-3 my-2">
                <label class="form-label">Discrepancy</label>   
                <input type="text" class="form-control discrepancy" name="discrepancy" value="{{$discrepancy}}">

            </div>
            <div class="col-md-3 my-2">
                <label class="form-label">Remark</label>   
                <input type="text" class="form-control remark" name="remark" value="{{$remark}}">

            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">Payment Description</label>   
                <input type="text" class="form-control" name="payment" value="{{$payment}}">

            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">Quotation</label>   
                <input type="text" class="form-control" name="quotation" value="{{$quotation}}">

            </div>
            <div class="col-md-2 my-2">
                <label class="form-label">Tracking / Status</label> 
                <select class="form-select" name="tracking">
                    <option selected disabled>--select--</option>
                    @if ($tracking == 'Pickup')
                        <option value="Pickup" selected>Pickup</option>
                        <option value="In-transit">In-transit</option>
                        <option value="Arrived">Arrived</option>
                        <option value="Delivered">Delivered</option>
                    @elseif ($tracking == 'In-transit')
                        <option value="Pickup">Pickup</option>
                        <option value="In-transit" selected>In-transit</option>
                        <option value="Arrived">Arrived</option>
                        <option value="Delivered">Delivered</option>
                    @elseif ($tracking == 'Arrived')
                        <option value="Pickup">Pickup</option>
                        <option value="In-transit">In-transit</option>
                        <option value="Arrived" selected>Arrived</option>
                        <option value="Delivered">Delivered</option>
                    @elseif ($tracking == 'Delivered')
                        <option value="Pickup">Pickup</option>
                        <option value="In-transit">In-transit</option>
                        <option value="Arrived" >Arrived</option>
                        <option value="Delivered" selected>Delivered</option>
                    @else
                        <option value="Pickup">Pickup</option>
                        <option value="In-transit">In-transit</option>
                        <option value="Arrived">Arrived</option>
                        <option value="Delivered">Delivered</option>
                    @endif
                    
                </select>  
            </div>

        </div>
        <div class="row justify-content-center my-3">
            <div class="col-md-12 text-center">
                <button type="submit"  class="btn btn-primary text-light btn-lg">Update EWB Bill</button>
            </div>
        </div>
       </form>

       <hr style="border-top: 3px solid #ff9100;">
       <div class="row">
           <div class="col-md-4 mb-3">
                  <h4>Source</h4>
           </div>
           <div class="col-md-8 mb-3">
               @if (session('success_msg'))
                   <p class="message text-warning fw-bold fs-4 mb-0">{{ session('success_msg') }}</p>                                          
               @endif
           </div>

           <form method="POST" action="{{ url('ewb-source-save') }}" enctype="multipart/form-data"  autocomplete="off">
                   @csrf
               <input type="hidden" name="ewb_id" value="{{$id}}">
               <input type="hidden" name="new_grand_total" class="new_grand_total">

               <div class="col-md-12 my-3">
                   <div class="row">
                       <div class="col-md-2">
                           <h6>Airline Copy</h6>
                        
                       </div>

                       <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-3 my-2">
                                <label class="form-label">AWB No</label>   
                                <input type="text" class="form-control" name="source_awb_no" @if ($ewb_sources != null) value="{{$ewb_sources->source_awb_no}}" @endif>
                                <p class="text-danger" style="margin-left: 10px">@error('source_awb_no') {{ $message }} @enderror</p>

                            </div>
                            <div class="col-md-3 my-2">
                                <label class="form-label">Service Type</label>
                                <input type="text" class="form-control" name="source_service_type" @if ($ewb_sources != null) value="{{$ewb_sources->source_service_type}}" @endif>
                                <p class="text-danger" style="margin-left: 10px">@error('source_service_type') {{ $message }} @enderror</p>

                            </div>
                            <div class="col-md-3 my-2">
                                <label class="form-label">Date</label>
                                <input type="date" class="form-control" name="airline_date" @if ($ewb_sources != null) value="{{$ewb_sources->airline_date}}" @endif>
                                <p class="text-danger" style="margin-left: 10px">@error('airline_date') {{ $message }} @enderror</p>
                            </div>
                            
                            <div class="col-md-3 my-2">
                                <label class="form-label">Upload AWB Copy</label>
                                <input type="file" name="multiple_images[]"
                                class="form-control"
                                accept="image/jpg, image/jpeg, image/png" multiple="multiple">
                                <p class="text-danger" style="margin-left: 10px">@error('airline_image') {{ $message }} @enderror</p>
                          
                                <div class="row">
                                    @foreach ($ewb_source_images as $img)

                                    @if ($img->ewb_source_id)
                                    <div class="col-md-3 text-center">
                                         <a href="{{ url('uploads/ewb/source/'.$img->multiple_images) }}"
                                             target="_blank" data-lightbox="image-1"
                                             data-title="Media Image">
                                             <img class="border border-primary"
                                                 src="{{ url('uploads/ewb/source/'.$img->multiple_images) }}"
                                                 width="250px" height="200px">
                                             </a> 
                                             
                                     </div>
                                    @endif
                                         
                                     @endforeach 
                               
                               
                                </div>
                          
                            </div>

                          
                            
                            <div class="col-md-4 my-2">
                                <label class="form-label">Origin</label> 
                                <input type="text" class="form-control" name="source_origin" @if ($ewb_sources!= null) value="{{$ewb_sources->source_origin}}" @endif>
                                 <p class="text-danger" style="margin-left: 10px">@error('source_origin') {{ $message }} @enderror</p>
                            </div>
                            
                            <div class="col-md-4 my-2">
                                <label class="form-label">Destination</label>
                                <input type="text" class="form-control" name="source_destination" @if ($ewb_sources != null) value="{{$ewb_sources->source_destination}}" @endif>
                                 <p class="text-danger" style="margin-left: 10px">@error('source_destination') {{ $message }} @enderror</p>
                            </div>
                            
                            <div class="col-md-4 my-2">
                                <label class="form-label">Transit</label>   
                                <input type="text" class="form-control" name="source_transit" @if ($ewb_sources != null) value="{{$ewb_sources->source_transit}}" @endif>
                                <p class="text-danger" style="margin-left: 10px">@error('source_transit') {{ $message }} @enderror</p>
                            </div>
                            
                            <div class="col-md-4 my-2">
                                <label class="form-label">No of Pieces</label>   
                                <input type="text" class="form-control" name="source_no_of_pics" @if ($ewb_sources != null) value="{{$ewb_sources->source_no_of_pics}}" @endif>
                                <p class="text-danger" style="margin-left: 10px">@error('source_no_of_pics') {{ $message }} @enderror</p>
                            </div>
                            
                            <div class="col-md-4 my-2">
                                <label class="form-label">Gross Weight</label>   
                                <input type="text" class="form-control" name="source_gross_wt" @if ($ewb_sources != null) value="{{ number_format((float)$ewb_sources->source_gross_wt, 2, '.', '')}}" @endif>
                                <p class="text-danger" style="margin-left: 10px">@error('source_gross_wt') {{ $message }} @enderror</p>
                            </div>
                            
                            <div class="col-md-4 my-2">
                                <label class="form-label">Chargable Weight</label>   
                                <input type="text" class="form-control source_chargeable_wt" name="source_chargeable_wt" @if ($ewb_sources != null) value="{{ number_format((float)$ewb_sources->source_chargeable_wt, 2, '.', '')}}" @endif>
                                <p class="text-danger" style="margin-left: 10px">@error('source_chargeable_wt') {{ $message }} @enderror</p>
                            </div>
                            
                            <div class="col-md-2 my-2">
                                <label class="form-label">Total Freight Amount</label>
                                <input type="text" class="form-control source_freight_amt" name="source_freight_amt" @if ($ewb_sources != null) value="{{ number_format((float)$ewb_sources->source_freight_amt, 2, '.', '')}}" @endif>
                                <p class="text-danger" style="margin-left: 10px">@error('source_freight_amt') {{ $message }} @enderror</p>
                            </div>
                            
                            <div class="col-md-2 my-2">
                                <label class="form-label">Other Charges</label>   
                                <input type="text" class="form-control source_other_charges" name="source_other_charges" @if ($ewb_sources != null) value="{{number_format((float)$ewb_sources->source_other_charges, 2, '.', '')}}" @endif>
                                <p class="text-danger" style="margin-left: 10px">@error('source_other_charges') {{ $message }} @enderror</p>
                            </div>
                            <div class="col-md-2 my-2">
                                <label class="form-label">GST %</label>   
                                <input type="number" class="form-control source_gst" name="source_gst" @if ($ewb_sources != null) value="{{$ewb_sources->source_gst}}" @endif>
                                <p class="text-danger" style="margin-left: 10px">@error('source_gst') {{ $message }} @enderror</p>
    
                            </div>
                            
                            <div class="col-md-3 my-2">
                                <label class="form-label">Discount Type </label>
                                <select class=" form-select source_discount_type" name="source_discount_type">
                                    @if ($ewb_sources ?? '' != null)
                                        @if ($ewb_sources ?? ''->source_discount_type == 'Discount/Kg')
                                                <option  disabled>Select Discount Type</option>
                                                <option value="Discount/Kg" selected>Discount/Kg</option>
                                                <option value="Discount%">Discount %</option>
                                        @elseif($ewb_sources ?? ''->source_discount_type == 'Discount%')
                                                <option  disabled>Select Discount Type</option>
                                                <option value="Discount/Kg">Discount/Kg</option>
                                                <option value="Discount%" selected>Discount %</option>
                                         @endif

                                    @else
                                                <option  disabled selected>Select Discount Type</option>
                                                <option value="Discount/Kg">Discount/Kg</option>
                                                <option value="Discount%" >Discount %</option>
                                    @endif
                                    
                                    
        
                                </select>
                                <p class="text-danger" style="margin-left: 10px">@error('source_discount_type') {{ $message }} @enderror</p>
                            </div>
                            <div class="col-md-3 my-2">
                                <label class="form-label">Discount Value</label>   
                                <input type="number" class="form-control source_discount_value" name="source_discount_value" @if ($ewb_sources != null) value="{{$ewb_sources->source_discount_value}}" @endif>
                                <p class="text-danger" style="margin-left: 10px">@error('source_discount_value') {{ $message }} @enderror</p>
                            </div>

                           {{-- cal btn  --}}
                            <div class="col-md-4 my-2">
                                <label class="form-label">AWB Amount</label>   
                                <input type="text" class="form-control source_awb_amt" name="source_awb_amt"  @if ($ewb_sources != null) value="{{number_format((float)$ewb_sources->source_awb_amt, 2, '.', '')}}" @endif>
                                <p class="text-danger" style="margin-left: 10px">@error('source_awb_amt') {{ $message }} @enderror</p>

                            </div>
                            <div class="col-md-2 my-2">
                                <button class="btn btn-primary awb_cal_btn" style="margin-top: 30px;">Calculate AWB</button>
                            </div>
                            <div class="col-md-4 my-2">
                                <label class="form-label">Discount Amount</label>   
                                <input type="text" class="form-control source_discount_amt" name="source_discount_amt" @if ($ewb_sources != null) value="{{number_format((float)$ewb_sources->source_discount_amt, 2, '.', '')}}" @endif>
                                <p class="text-danger" style="margin-left: 10px">@error('source_discount_amt') {{ $message }} @enderror</p>
                            </div>
                            <div class="col-md-2 my-2">
                                <button class="btn btn-primary dicount_cal_btn" style="margin-top: 30px;">Calculate Discount </button>
                            </div>
                        </div>
                       </div>
                   </div>
               </div>
               <hr>
               <div class="col-md-12 my-3">
                   <div class="row justify-content-center">
                       <div class="col-md-2">
                             <h6>Outsource</h6>
                       </div>
                       <div class="col-md-8">
                           <div class="row dynamic-field" id="dynamic-field-1">
                               <div class="col-md-3 my-2">
                                   <label class="form-label">Vendor Name</label>   
                                   <input type="text" class="form-control outsources_vendor_name1" name="outsources_vendor_name1" placeholder="Vendor Name" @if ($ewb_outsources != null) value="{{$ewb_outsources->outsources_vendor_name1}}" @endif>
                                   <input type="text" class="form-control outsources_vendor_name2 mt-3" name="outsources_vendor_name2" placeholder="Vendor Name" @if ($ewb_outsources != null) value="{{$ewb_outsources->outsources_vendor_name2}}" @endif>
                                   <input type="text" class="form-control outsources_vendor_name3 mt-3" name="outsources_vendor_name3" placeholder="Vendor Name" @if ($ewb_outsources != null) value="{{$ewb_outsources->outsources_vendor_name3}}" @endif>
                                   <input type="text" class="form-control outsources_vendor_name4 mt-3" name="outsources_vendor_name4" placeholder="Vendor Name" @if ($ewb_outsources != null) value="{{$ewb_outsources->outsources_vendor_name4}}" @endif>
                                   <input type="text" class="form-control outsources_vendor_name5 mt-3" name="outsources_vendor_name5" placeholder="Vendor Name" @if ($ewb_outsources != null) value="{{$ewb_outsources->outsources_vendor_name5}}" @endif>
                             
                               </div>
                               <div class="col-md-3 my-2">
                                   <label class="form-label">Pick-Up Amount</label>
                                   <input type="number" class="form-control outsources_pickup_amt1" name="outsources_pickup_amt1" placeholder="Pickup Amt" @if ($ewb_outsources != null) value="{{number_format((float)$ewb_outsources->outsources_pickup_amt1, 2, '.', '') }}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_pickup_amt2 mt-3" name="outsources_pickup_amt2" placeholder="Pickup Amt"  @if ($ewb_outsources != null) value="{{number_format((float)$ewb_outsources->outsources_pickup_amt2, 2, '.', '')}}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_pickup_amt3 mt-3" name="outsources_pickup_amt3" placeholder="Pickup Amt"  @if ($ewb_outsources != null) value="{{number_format((float)$ewb_outsources->outsources_pickup_amt3, 2, '.', '')}}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_pickup_amt4 mt-3" name="outsources_pickup_amt4" placeholder="Pickup Amt"  @if ($ewb_outsources != null) value="{{number_format((float)$ewb_outsources->outsources_pickup_amt4, 2, '.', '')}}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_pickup_amt5 mt-3" name="outsources_pickup_amt5" placeholder="Pickup Amt"  @if ($ewb_outsources != null) value="{{number_format((float)$ewb_outsources->outsources_pickup_amt4, 2, '.', '')}}" @else  value="0"  @endif>
                              
                               </div>
                               <div class="col-md-2 my-2">
                                   <label class="form-label">AWB Amount</label>   
                                   <input type="number" class="form-control outsources_awb_amt1" name="outsources_awb_amt1" placeholder="Awb Amt"   @if ($ewb_outsources != null) value="{{number_format((float)$ewb_outsources->outsources_awb_amt1, 2, '.', '')}}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_awb_amt2 mt-3" name="outsources_awb_amt2" placeholder="Awb Amt"   @if ($ewb_outsources != null) value="{{number_format((float)$ewb_outsources->outsources_awb_amt2, 2, '.', '')}}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_awb_amt3 mt-3" name="outsources_awb_amt3" placeholder="Awb Amt"   @if ($ewb_outsources != null) value="{{number_format((float)$ewb_outsources->outsources_pickup_amt3, 2, '.', '')}}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_awb_amt4 mt-3" name="outsources_awb_amt4" placeholder="Awb Amt"   @if ($ewb_outsources != null) value="{{number_format((float)$ewb_outsources->outsources_pickup_amt4, 2, '.', '')}}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_awb_amt5 mt-3" name="outsources_awb_amt5" placeholder="Awb Amt"   @if ($ewb_outsources != null) value="{{number_format((float)$ewb_outsources->outsources_pickup_amt5, 2, '.', '')}}" @else  value="0"  @endif>
                               </div>
                               <div class="col-md-2 my-2">
                                   <label class="form-label">Delivery Amount</label>   
                                   <input type="number" class="form-control outsources_delivery_amt1" name="outsources_delivery_amt1" placeholder="Delivery Amount"   @if ($ewb_outsources != null) value="{{number_format((float)$ewb_outsources->outsources_delivery_amt1, 2, '.', '')}}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_delivery_amt2 mt-3" name="outsources_delivery_amt2" placeholder="Delivery Amount"   @if ($ewb_outsources != null) value="{{number_format((float)$ewb_outsources->outsources_delivery_amt2, 2, '.', '')}}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_delivery_amt3 mt-3" name="outsources_delivery_amt3" placeholder="Delivery Amount"   @if ($ewb_outsources != null) value="{{number_format((float)$ewb_outsources->outsources_delivery_amt3, 2, '.', '')}}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_delivery_amt4 mt-3" name="outsources_delivery_amt4" placeholder="Delivery Amount"   @if ($ewb_outsources != null) value="{{number_format((float)$ewb_outsources->outsources_delivery_amt4, 2, '.', '')}}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_delivery_amt5 mt-3" name="outsources_delivery_amt5" placeholder="Delivery Amount"   @if ($ewb_outsources != null) value="{{number_format((float)$ewb_outsources->outsources_delivery_amt5, 2, '.', '')}}" @else  value="0"  @endif>
                               </div>
                               <div class="col-md-2 my-2">
                                   <label class="form-label">TSP Amount</label>   
                                   <input type="number" class="form-control outsources_tsp_amt1" name="outsources_tsp_amt1" placeholder="TSP Amount" @if ($ewb_outsources != null) value="{{ number_format((float)$ewb_outsources->outsources_tsp_amt1, 2, '.', '')}}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_tsp_amt2 mt-3" name="outsources_tsp_amt2" placeholder="TSP Amount" @if ($ewb_outsources != null) value="{{ number_format((float)$ewb_outsources->outsources_tsp_amt2, 2, '.', '')}}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_tsp_amt3 mt-3" name="outsources_tsp_amt3" placeholder="TSP Amount" @if ($ewb_outsources != null) value="{{ number_format((float)$ewb_outsources->outsources_tsp_amt3, 2, '.', '')}}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_tsp_amt4 mt-3" name="outsources_tsp_amt4" placeholder="TSP Amount" @if ($ewb_outsources != null) value="{{ number_format((float)$ewb_outsources->outsources_tsp_amt4, 2, '.', '')}}" @else  value="0"  @endif>
                                   <input type="number" class="form-control outsources_tsp_amt5 mt-3" name="outsources_tsp_amt5" placeholder="TSP Amount" @if ($ewb_outsources != null) value="{{ number_format((float)$ewb_outsources->outsources_tsp_amt5, 2, '.', '')}}" @else  value="0"  @endif>
                               </div>
                               <hr>
                                   <div class="col-md-12 text-center">
                                       <button class="btn btn-warning btn-sm outsource_cal mt-1 mb-3">Calculate</button>
                                   </div>
                               <hr>
                               <div class="col-md-12 mt-4">
                                   <div class="row justify-content-center">
                                       <div class="col-md-2">
                                        <label class="form-label">Total PickUp Amt</label>   
                                           <input type="text" class="form-control source_total_pickup" name="source_total_pickup" @if ($ewb_sources != null) value="{{number_format((float)$ewb_sources->source_total_pickup, 2, '.', '')}}" @endif>
                                           <p class="text-danger" style="margin-left: 10px">@error('source_total_pickup') {{ $message }} @enderror</p>
                                       </div>
                                       <div class="col-md-2">
                                        <label class="form-label">Total Awb Amt</label>   
                                           <input type="text" class="form-control source_total_awb" name="source_total_awb" @if ($ewb_sources != null) value="{{number_format((float)$ewb_sources->source_total_awb, 2, '.', '')}}" @endif>
                                           <p class="text-danger" style="margin-left: 10px">@error('source_total_awb') {{ $message }} @enderror</p>
                                       </div>
                                       <div class="col-md-2">
                                        <label class="form-label">Total Delivery Amt</label>   
                                           <input type="text" class="form-control source_total_delivery" name="source_total_delivery" @if ($ewb_sources != null) value="{{number_format((float)$ewb_sources->source_total_delivery, 2, '.', '')}}" @endif>
                                           <p class="text-danger" style="margin-left: 10px">@error('source_total_delivery') {{ $message }} @enderror</p>
                                       </div>
                                       <div class="col-md-2">
                                           <label class="form-label">Total TSP Amt</label>   
                                           <input type="text" class="form-control source_total_tsp" name="source_total_tsp" @if ($ewb_sources != null) value="{{number_format((float)$ewb_sources->source_total_tsp, 2, '.', '')}}" @endif>
                                           <p class="text-danger" style="margin-left: 10px">@error('source_total_tsp') {{ $message }} @enderror</p>
                                       </div>
                                       <div class="col-md-2">
                                            <label class="form-label">Total Amt</label>   
                                           <input type="text" class="form-control source_total_amt" name="source_total_amt" @if ($ewb_sources != null) value="{{number_format((float)$ewb_sources->source_total_amt, 2, '.', '')}}" @endif>
                                           <p class="text-danger" style="margin-left: 10px">@error('source_total_amt') {{ $message }} @enderror</p>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div> 
                       {{-- <div class="col-md-2">
                           <div class="append-buttons">
                               <div class="clearfix">
                                   <button type="button" id="add-button"
                                       class="btn btn-warning float-left text-uppercase shadow-sm m-1"><i
                                           class="fa fa-plus fa-fw"></i>
                                   </button>
                                   <button type="button" id="remove-button"
                                       class="btn btn-warning float-left text-uppercase m-1"
                                       disabled="disabled"><i class="fa fa-minus fa-fw"></i>
                                   </button>
                               </div>
                           </div>
                       </div> --}}
                      
                   </div>
               </div>
               {{-- <hr> --}}
               <div class="row justify-content-center ">
                   <div class="col-md-4 mt-4">
                       <div class="field">
                           <label class="form-label">Vikas</label>   
                           <input type="text" class="form-control source_vikas" name="source_vikas" @if ($ewb_sources != null) value="{{number_format((float)$ewb_sources->source_vikas, 2, '.', '')}}" @endif>
                           <p class="text-danger" style="margin-left: 10px">@error('source_vikas') {{ $message }} @enderror</p>
                       </div>
                   </div>
                   <div class="col-md-4 mt-4">
                       <div class="field">
                           <label class="form-label">P&L</label>   
                           <input type="text" class="form-control source_profit_loss" name="source_profit_loss" @if ($ewb_sources != null) value="{{number_format((float)$ewb_sources->source_profit_loss, 2, '.', '')}}" @endif>
                           <p class="text-danger" style="margin-left: 10px">@error('source_profit_loss') {{ $message }} @enderror</p>
                       </div>
                   </div> 
               </div>

               <div class="row justify-content-center mt-5 mb-5">
                   <div class="col-md-12 text-center">
                       <button type="submit" class="btn btn-primary btn-lg">Add Source Data</button>
                   </div>
               </div>
           </form>
        </div>

    </div>
    

    


    <script src="{{asset('frontend_assets/js/jquery.js')}}"></script>
    <script src="{{asset('frontend_assets/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

    $(window).load(function() {
        var discrepancy = $('.discrepancy').val()
        if(discrepancy){
            $('.discrepancy').css("background-color", 'rgb(233 133 143)');
        }
        console.log(discrepancy)
        
        
        var remark = $('.remark').val()
        console.log(remark)
        if(remark){
            $('.remark').css("background-color", 'rgb(233 133 143)');
        }
    });

    $(document).ready(function () {
        setTimeout(function() {
                $('.message').fadeOut('fast');
        }, 5000);

         // Change Discepency and Remarks color ONCLICK
         $('.discrepancy').click(function (e) { 
            e.preventDefault();
            $('.discrepancy').css("background-color", 'rgb(233 133 143)');
        });

        $('.remark').click(function (e) { 
            e.preventDefault();
            $('.remark').css("background-color", 'rgb(233 133 143)');
        });


        $('.freight_charges').on('change', function(e) {
            e.preventDefault();
            
            $('.select_freight_msg').hide()

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: `{{ url('admin/get-charges') }}`,
                    data: {
                        id: $(this).val(),
                    },
                    dataType: "JSON",
                    success: function(response) {
                        if (response.Status === 200) {
                            // console.log(response.data)
                            var rate = parseFloat(response.data.rate) 
                            $('.rate_kg').val(rate)
                            
                            // convert to int
                            var first_mbc = parseFloat(response.data.mbc) 
                            var first_xbc = parseFloat(response.data.xbc) 
                            var first_cdc = parseFloat(response.data.cdc) 
                            var first_chc = parseFloat(response.data.chc) 
                            
                            var chargeable_weight = parseFloat($('.chargeable_weight').val()) 
                           
                            var mbc = first_mbc * chargeable_weight
                            var xbc = first_xbc * chargeable_weight
                            var cdc = first_cdc * chargeable_weight
                            var chc = first_chc * chargeable_weight

                            // var mbc = first_mbc
                            // var xbc = first_xbc
                            // var cdc = first_cdc
                            // var chc = first_chc
                           
                            // Show Data
                            $('.mbc').val(mbc)
                            $('.xbc').val(xbc)
                            $('.cdc').val(cdc)
                            $('.chc').val(chc)


                            $('.other_charges_kg').val(mbc+xbc+cdc+chc)

                                                          // total 
                                                          $('.total_amount').val(parseFloat($('.chargeable_weight').val()) * rate)


                            // Sub Total
                            var other_charges_kg = parseFloat($('.other_charges_kg').val())
                            var valuation_charge = parseFloat($('.valuation_charge').val())
                            var total_amount = parseFloat($('.total_amount').val())
                            $('.sub_total').val(other_charges_kg+valuation_charge+total_amount)

                            // Taxes GST/ S & C
                            var gst = parseFloat($('.gst_value').val())
                            var sub_total = parseFloat($('.sub_total').val())

                             $('.taxes_gst').val((gst / 100) * sub_total)
                            
                            // Grand Total 
                            $('.grand_total').val(parseFloat($('.sub_total').val()) + parseFloat($('.taxes_gst').val()))
                            
                        }

                        $('.gst_value').keyup(function (e) { 
                            console.log('object')
                            var gst = parseFloat($('.gst_value').val())
                            var sub_total = parseFloat($('.sub_total').val())

                            $('.taxes_gst').val((gst / 100) * sub_total)    

                            // grand total
                            $('.grand_total').val(parseFloat($('.sub_total').val()) + parseFloat($('.taxes_gst').val()))
                        });
                    }
                });
        });

        $('.aaa_manual_kg').keyup(function (e) { 
            $('.cal_div').show();
        });

        $('.cal_btn').click(function (e) { 
            e.preventDefault();
            var chargeable_weight = parseFloat($('.chargeable_weight').val()) 
          
            var aaa_manual_kg = parseFloat($('.aaa_manual_kg').val())
            var mbc = parseFloat($('.mbc').val())
            var xbc = parseFloat($('.xbc').val())
            var cdc = parseFloat($('.cdc').val())
            var chc = parseFloat($('.chc').val())
          
            // var other_charges_kg = parseFloat($('.other_charges_kg').val())
            var final = aaa_manual_kg + mbc + xbc + cdc + chc; 
            $('.other_charges_kg').val(final)    

            var other_charges_kg = parseFloat($('.other_charges_kg').val())
            var valuation_charge = parseFloat($('.valuation_charge').val())
            var total_amount = parseFloat($('.total_amount').val())

            $('.sub_total').val(other_charges_kg + valuation_charge + total_amount)
        });


        $('.gst').change(function (e) { 
            e.preventDefault();
            $('.select_gst_msg').hide()

        });

        // Airline AWB & Discount Amount 
        $('.awb_cal_btn').click(function (e) { 
            e.preventDefault();
            let source_freight_amt = parseFloat($('.source_freight_amt').val())
            let source_other_charges = parseFloat($('.source_other_charges').val())
            let source_gst = parseFloat($('.source_gst').val())
            let source_awb_amt = parseFloat($('.source_awb_amt').val())
            let awb_res = ''

            sum_awb = source_freight_amt + source_other_charges

             net_amt = (sum_awb * source_gst)/100;
             awb_res = net_amt + sum_awb;
            $('.source_awb_amt').val(awb_res)
        });

          $('.dicount_cal_btn').click(function (e) { 
            e.preventDefault();
            let discount_type = $('.source_discount_type').val()
            let discount_value = $('.source_discount_value').val()
            let source_chargeable_wt = $('.source_chargeable_wt').val()
            let source_freight_amt = $('.source_freight_amt').val()
            let res = ''

            if(discount_type == 'Discount/Kg'){
                res =  discount_value * source_chargeable_wt
               
                // gst cal
                net_amt = (res * 18)/100;
                discount_res = res + net_amt;
               
                $('.source_discount_amt').val(discount_res)

            }else if(discount_type == 'Discount%'){
                 res = (source_freight_amt/100)*discount_value ;
                
                  // gst cal
                net_amt = (res * 18)/100;
                discount_res = res + net_amt;
               
                $('.source_discount_amt').val(discount_res)
            }
        });

        // Outsource
        $('.outsource_cal').click(function (e) { 
            e.preventDefault();
           
            // pickup amt
            var pickup1= parseFloat($('.outsources_pickup_amt1').val())
            var pickup2= parseFloat($('.outsources_pickup_amt2').val())
            var pickup3= parseFloat($('.outsources_pickup_amt3').val())
            var pickup4= parseFloat($('.outsources_pickup_amt4').val())
            var pickup5= parseFloat($('.outsources_pickup_amt5').val())
            var final_pickup_amt = pickup1 + pickup2 + pickup3 + pickup4 + pickup5; 
            
            // awb amt
            var awb_amt1= parseFloat($('.outsources_awb_amt1').val())
            var awb_amt2= parseFloat($('.outsources_awb_amt2').val())
            var awb_amt3= parseFloat($('.outsources_awb_amt3').val())
            var awb_amt4= parseFloat($('.outsources_awb_amt4').val())
            var awb_amt5= parseFloat($('.outsources_awb_amt5').val())
            var final_awb_amt = awb_amt1 + awb_amt2 + awb_amt3 + awb_amt4 + awb_amt5; 

            // delivery_amt
            var delivery_amt1= parseFloat($('.outsources_delivery_amt1').val())
            var delivery_amt2= parseFloat($('.outsources_delivery_amt2').val())
            var delivery_amt3= parseFloat($('.outsources_delivery_amt3').val())
            var delivery_amt4= parseFloat($('.outsources_delivery_amt4').val())
            var delivery_amt5= parseFloat($('.outsources_delivery_amt5').val())
            var final_delivery_amt = delivery_amt1 + delivery_amt2 + delivery_amt3 + delivery_amt4 + delivery_amt5; 

            // tsp_amt
            var tsp_amt1= parseFloat($('.outsources_tsp_amt1').val())
            var tsp_amt2= parseFloat($('.outsources_tsp_amt2').val())
            var tsp_amt3= parseFloat($('.outsources_tsp_amt3').val())
            var tsp_amt4= parseFloat($('.outsources_tsp_amt4').val())
            var tsp_amt5= parseFloat($('.outsources_tsp_amt5').val())
            var final_tsp_amt = tsp_amt1 + tsp_amt2 + tsp_amt3 + tsp_amt4 + tsp_amt5; 

            // Addition 
            $('.source_total_pickup').val(final_pickup_amt)
            $('.source_total_awb').val(final_awb_amt)
            $('.source_total_delivery').val(final_delivery_amt)
            $('.source_total_tsp').val(final_tsp_amt)

            var total = final_pickup_amt + final_awb_amt + final_delivery_amt + final_tsp_amt;
            $('.source_total_amt').val(total);

             /// Vikas amt
             var airline_awb_amt = parseFloat($('.source_awb_amt').val())
            var outsource_awb_amt = parseFloat($('.source_total_awb').val())


            // var vikas_amt = outsource_total_amt - airline_awb_amt;
            var vikas_amt =  airline_awb_amt - outsource_awb_amt;
            $('.source_vikas').val(vikas_amt.toFixed(2));
            
            // Profit & loss
            var grand_total = parseFloat($('.grand_total').val())
            var outsource_total_amt = parseFloat($('.source_total_amt').val())
            var profit_loss = grand_total - outsource_total_amt 
          
            $('.source_profit_loss').val(profit_loss.toFixed(2))
        });

        // Save Ewb Source
        if ($("#edit_ewb_main_form").length > 0) {
                $("#edit_ewb_main_form").validate({
                    rules: {
                            awb_no: {
                                required: true,
                            },
                            carrier: {
                                required: true,
                            }, 
                            client_code: {
                                required: true,
                            }, 
                            origin: {
                                required: true,
                            }, 
                            destination: {
                                required: true,
                            },
                            transit: {
                                required: true,
                            },
                            currency: {
                                required: true,
                            }, 
                            region: {
                                required: true,
                            }, 
                            // dimention: {
                            //     required: true,
                            // },
                            cbm: {
                                required: true,
                            },
                            service_type: {
                                required: true,
                            }, 
                            charges_code: {
                                required: true,
                            }, 
                            pick_up_date: {
                                required: true,
                            }, 
                            nvd: {
                                required: true,
                            }, 
                            ncv: {
                                required: true,
                            }, 
                            apt_of_depature: {
                                required: true,
                            }, 
                            apt_of_destination: {
                                required: true,
                            }, 
                            freight_code: {
                                required: true,
                            }, 
                            issuing_date: {
                                required: true,
                            },
                            client_name: {
                                required: true,
                            },
                            no_of_pcs: {
                                required: true,
                            },
                            gr_wt: {
                                required: true,
                            }, 
                            chargable_wt: {
                                required: true,
                            },
                            rate_kg: {
                                required: true,
                            }, 
                            total_amt: {
                                required: true,
                            }, 
                            goods_desc: {
                                required: true,
                            }, 
                            shipper_name: {
                                required: true,
                            }, 
                            consignee_name: {
                                required: true,
                            },
                            // handling_information: {
                            //     required: true,
                            // },
                            aaa_manual_kg: {
                                required: true,
                            },
                            mbc: {
                                required: true,
                            },
                            xbc: {
                                required: true,
                            }, 
                            cdc: {
                                required: true,
                            },
                            chc: {
                                required: true,
                            },
                            other_charges: {
                                required: true,
                            },
                            valuation_charge: {
                                required: true,
                            },
                            sub_total: {
                                required: true,
                            },
                            gst: {
                                required: true,
                            },
                            gst_value: {
                                required: true,
                            },
                            taxes_gst: {
                                required: true,
                            },
                            grand_total: {
                                required: true,
                            },

                        },
                        messages: {
                            awb_no: {
                                required: 'Please Enter Awb No',
                            },
                            carrier: {
                                required: "Please Enter Carrier",
                            },
                            client_code: {
                                required: "Please Enter Client Code",
                            },
                            origin: {
                                required: "Please Enter Origin",
                            },
                            destination: {
                                required: "Please Enter Destination",
                            },
                            transit: {
                                required: "Please Enter Transit",
                            },
                            currency: {
                                required: "Please Enter Currency",
                            },
                            region: {
                                required: "Please Enter Region",
                            },
                            // dimention: {
                            //     required: "Please Enter Dimention",
                            // },
                            cbm: {
                                required: "Please Enter CBM",
                            },
                            service_type: {
                                required: "Please Enter Service Type",
                            },
                            charges_code: {
                                required: "Please Enter Charges Code",
                            },
                            pick_up_date: {
                                required: "Please Select PickUp Date",
                            },
                            nvd: {
                                required: "Please Enter nvd",
                            },
                            ncv: {
                                required: "Please Enter NCV",
                            },
                            apt_of_depature: {
                                required: "Please Select Apt of Depature",
                            },
                            apt_of_destination: {
                                required: "Please Select Apt_of Destination",
                            },
                            freight_code: {
                                required: "Please Select Freight Charges",
                            },
                            issuing_date: {
                                required: "Please Select Issuing Date",
                            },
                            client_name: {
                                required: "Please Enter Client Name",
                            },
                            no_of_pcs: {
                                required: "Please Enter No_of Pcs",
                            },
                            gr_wt: {
                                required: "Please Enter Gross Weight",
                            },
                            chargable_wt: {
                                required: "Please Enter Chargable Weight",
                            },
                            rate_kg: {
                                required: "Please Enter Rate Kg",
                            },
                            total_amt: {
                                required: "Please Enter Total Amt",
                            },
                            goods_desc: {
                                required: "Please Enter Goods Desc",
                            },
                            shipper_name: {
                                required: "Please Enter Shipper Name",
                            },
                            consignee_name: {
                                required: "Please Enter Consignee Name",
                            },
                            // handling_information: {
                            //     required: "Please Enter Handling Information",
                            // },
                            aaa_manual_kg: {
                                required: "Please Enter AAA",
                            },
                            mbc: {
                                required: "Please Enter MBC",
                            },
                            xbc: {
                                required: "Please Enter XBC",
                            },
                            cdc: {
                                required: "Please Enter CDC",
                            },
                            chc: {
                                required: "Please Enter CHC",
                            },
                            other_charges: {
                                required: "Please Enter Other Charges",
                            },
                            valuation_charge: {
                                required: "Please Enter Valuation Charge",
                            },
                            sub_total: {
                                required: "Please Enter Sub Total",
                            },
                            gst: {
                                required: "Please Enter GST",
                            },
                            gst_value: {
                                required: "Please Enter GST Value",
                            },
                            taxes_gst: {
                                required: "Please Enter Taxes GST",
                            },
                            grand_total: {
                                required: "Please Enter Grand Total",
                            },

                        },
                        errorElement: "div",
                        errorPlacement: function(error, element) {
                            error.addClass("invalid-feedback");
                            error.insertAfter(element);
                        },
                        
                    });
            }

    });
</script>
</body>
</html>