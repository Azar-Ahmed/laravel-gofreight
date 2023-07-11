<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from html.themexriver.com/fastrans/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Sep 2022 09:29:09 GMT -->
<head>
		<meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Edit Vendor Source</title>
        
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
            <h3 class="fw-bold text-center mb-4">Update Vendor Source</h3>
        </div>
        <div class="col-md-2 text-end">
            <a href="{{url('admin/vendor-source')}}" class="btn btn-warning text-light btn-lg">Go Back</a>
        </div>
       </div>
       <div class="row">
           <div class="col-md-4 mb-3">
                  <h4>Source</h4>
           </div>
           <div class="col-md-8 mb-3">
               @if (session('success_msg'))
                   <p class="message text-warning fw-bold fs-4 mb-0">{{ session('success_msg') }}</p>                                          
               @endif
           </div>

           <form method="POST" action="{{ url('vendor-source-update') }}" enctype="multipart/form-data"  autocomplete="off">
             @csrf
               <input type="hidden" name="vendor_source_id" value="{{$vendor_source_id}}">
               <div class="col-md-12 my-3">
                   <div class="row">
                       <div class="col-md-2">
                           <h6>Airline Copy</h6>
                       </div>
                       <div class="col-md-10">
                           <div class="row">
                               <div class="col-md-3 my-2">
                                   <label class="form-label">AWB No</label>   
                                   <input type="text" class="form-control" name="source_awb_no" value="{{ $source_awb_no }}">
                                   <p class="text-danger" style="margin-left: 10px">@error('source_awb_no') {{ $message }} @enderror</p>

                               </div>
                               <div class="col-md-3 my-2">
                                   <label class="form-label">Service Type</label>
                                   <input type="text" class="form-control" name="source_service_type" value="{{ $source_service_type }}">
                                   <p class="text-danger" style="margin-left: 10px">@error('source_service_type') {{ $message }} @enderror</p>

                               </div>
                               <div class="col-md-3 my-2">
                                   <label class="form-label">Date</label>
                                   <input type="date" class="form-control" name="airline_date" value="{{ $airline_date }}">
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
                                        <div class="col-md-3 text-center">
                                            <a href="{{ url('uploads/ewb/source/' . $img->multiple_images) }}"
                                                target="_blank" data-lightbox="image-1"
                                                data-title="Media Image">
                                                <img class="border border-primary"
                                                    src="{{ url('uploads/ewb/source/' . $img->multiple_images) }}"
                                                    width="250px" height="200px">
                                                </a> 
                                                
                                        </div>
                                    @endforeach
                                </div>
                               </div>
                               
                               <div class="col-md-4 my-2">
                                   <label class="form-label">Origin</label> 
                                   <input type="text" class="form-control" name="source_origin" value="{{$source_origin}}">
                                    <p class="text-danger" style="margin-left: 10px">@error('source_origin') {{ $message }} @enderror</p>
                               </div>
                               
                               <div class="col-md-4 my-2">
                                   <label class="form-label">Destination</label>
                                   <input type="text" class="form-control" name="source_destination" value="{{$source_destination}}">
                                    <p class="text-danger" style="margin-left: 10px">@error('source_destination') {{ $message }} @enderror</p>
                               </div>
                               
                               <div class="col-md-4 my-2">
                                   <label class="form-label">Transit</label>   
                                   <input type="text" class="form-control" name="source_transit" value="{{$source_transit}}">
                                   <p class="text-danger" style="margin-left: 10px">@error('source_transit') {{ $message }} @enderror</p>
                               </div>
                               
                               <div class="col-md-4 my-2">
                                   <label class="form-label">No of Pieces</label>   
                                   <input type="number" class="form-control" name="source_no_of_pics" value="{{$source_no_of_pics}}">
                                   <p class="text-danger" style="margin-left: 10px">@error('source_no_of_pics') {{ $message }} @enderror</p>
                               </div>
                               
                               <div class="col-md-4 my-2">
                                   <label class="form-label">Gross Weight</label>   
                                   <input type="number" class="form-control" name="source_gross_wt"  value="{{$source_gross_wt}}">
                                   <p class="text-danger" style="margin-left: 10px">@error('source_gross_wt') {{ $message }} @enderror</p>
                               </div>
                               
                               <div class="col-md-4 my-2">
                                   <label class="form-label">Chargable Weight</label>   
                                   <input type="number" class="form-control source_chargeable_wt" name="source_chargeable_wt" value="{{$source_chargeable_wt}}">
                                   <p class="text-danger" style="margin-left: 10px">@error('source_chargeable_wt') {{ $message }} @enderror</p>
                               </div>
                               
                               <div class="col-md-2 my-2">
                                   <label class="form-label">Total Freight Amount</label>
                                   <input type="number" class="form-control source_freight_amt" name="source_freight_amt" value="{{$source_freight_amt}}">
                                   <p class="text-danger" style="margin-left: 10px">@error('source_freight_amt') {{ $message }} @enderror</p>
                               </div>
                               
                               <div class="col-md-2 my-2">
                                   <label class="form-label">Other Charges</label>   
                                   <input type="number" class="form-control" name="source_other_charges" value="{{$source_other_charges}}">
                                   <p class="text-danger" style="margin-left: 10px">@error('source_other_charges') {{ $message }} @enderror</p>
                               </div>

                               <div class="col-md-2 my-2">
                                <label class="form-label">Discount Type </label>
                                <select class=" form-select source_discount_type" name="source_discount_type">
                                    <option selected disabled>Select Discount Type</option>
                                     <option value="Discount/Kg">Discount/Kg</option>
                                     <option value="Discount%">Discount %</option>
                
                                </select>
                                <p class="text-danger" style="margin-left: 10px">@error('source_discount_type') {{ $message }} @enderror</p>
                            </div>
                            <div class="col-md-2 my-2">
                                <label class="form-label">Discount Value</label>   
                                <input type="number" class="form-control source_discount_value" name="source_discount_value">
                                <p class="text-danger" style="margin-left: 10px">@error('source_discount_value') {{ $message }} @enderror</p>
                            </div>

                               
                               <div class="col-md-2 my-2">
                                   <label class="form-label">GST</label>   
                                   <input type="number" class="form-control" name="source_gst" value="{{$source_gst}}">
                                   <p class="text-danger" style="margin-left: 10px">@error('source_gst') {{ $message }} @enderror</p>
       
                               </div>
                               <div class="col-md-2 my-2">
                                    <button class="btn btn-primary dicount_cal_btn mt-4" >Calculate Discount</button>
                                </div>
                               <div class="col-md-6 my-2">
                                   <label class="form-label">AWB Amount</label>   
                                   <input type="number" class="form-control source_awb_amt" name="source_awb_amt" value="{{$source_awb_amt}}">
                                   <p class="text-danger" style="margin-left: 10px">@error('source_awb_amt') {{ $message }} @enderror</p>

                               </div>
                               <div class="col-md-6 my-2">
                                   <label class="form-label">Discount Amount</label>   
                                   <input type="number" class="form-control source_discount_amt" name="source_discount_amt" value="{{$source_discount_amt}}">
                                   <p class="text-danger" style="margin-left: 10px">@error('source_discount_amt') {{ $message }} @enderror</p>
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
                                   <input type="text" class="form-control outsources_vendor_name1" name="outsources_vendor_name1" value="{{$ewb_outsources->outsources_vendor_name1}}" placeholder="Vendor Name">
                                   <input type="text" class="form-control outsources_vendor_name2 mt-3" name="outsources_vendor_name2" value="{{$ewb_outsources->outsources_vendor_name2}}" placeholder="Vendor Name">
                                   <input type="text" class="form-control outsources_vendor_name3 mt-3" name="outsources_vendor_name3" value="{{$ewb_outsources->outsources_vendor_name3}}" placeholder="Vendor Name">
                                   <input type="text" class="form-control outsources_vendor_name4 mt-3" name="outsources_vendor_name4" value="{{$ewb_outsources->outsources_vendor_name4}}" placeholder="Vendor Name">
                                   <input type="text" class="form-control outsources_vendor_name5 mt-3" name="outsources_vendor_name5" value="{{$ewb_outsources->outsources_vendor_name5}}" placeholder="Vendor Name">
                             
                               </div>
                               <div class="col-md-3 my-2">
                                   <label class="form-label">Pick-Up Amount</label>
                                   <input type="number" class="form-control outsources_pickup_amt1" name="outsources_pickup_amt1" value="{{$ewb_outsources->outsources_pickup_amt1}}" placeholder="Pickup Amt" value="0">
                                   <input type="number" class="form-control outsources_pickup_amt2 mt-3" name="outsources_pickup_amt2" value="{{$ewb_outsources->outsources_pickup_amt2}}" placeholder="Pickup Amt"  value="0">
                                   <input type="number" class="form-control outsources_pickup_amt3 mt-3" name="outsources_pickup_amt3" value="{{$ewb_outsources->outsources_pickup_amt3}}" placeholder="Pickup Amt"  value="0">
                                   <input type="number" class="form-control outsources_pickup_amt4 mt-3" name="outsources_pickup_amt4" value="{{$ewb_outsources->outsources_pickup_amt4}}" placeholder="Pickup Amt"  value="0">
                                   <input type="number" class="form-control outsources_pickup_amt5 mt-3" name="outsources_pickup_amt5" value="{{$ewb_outsources->outsources_pickup_amt5}}" placeholder="Pickup Amt"  value="0">
                              
                               </div>
                               <div class="col-md-2 my-2">
                                   <label class="form-label">AWB Amount</label>   
                                   <input type="number" class="form-control outsources_awb_amt1" name="outsources_awb_amt1" value="{{$ewb_outsources->outsources_awb_amt1}}" placeholder="Awb Amt"  value="0">
                                   <input type="number" class="form-control outsources_awb_amt2 mt-3" name="outsources_awb_amt2" value="{{$ewb_outsources->outsources_awb_amt2}}" placeholder="Awb Amt"  value="0">
                                   <input type="number" class="form-control outsources_awb_amt3 mt-3" name="outsources_awb_amt3" value="{{$ewb_outsources->outsources_awb_amt3}}" placeholder="Awb Amt"  value="0">
                                   <input type="number" class="form-control outsources_awb_amt4 mt-3" name="outsources_awb_amt4" value="{{$ewb_outsources->outsources_awb_amt4}}" placeholder="Awb Amt"  value="0">
                                   <input type="number" class="form-control outsources_awb_amt5 mt-3" name="outsources_awb_amt5" value="{{$ewb_outsources->outsources_awb_amt5}}" placeholder="Awb Amt"  value="0">
                               </div>
                               <div class="col-md-2 my-2">
                                   <label class="form-label">Delivery Amount</label>   
                                   <input type="number" class="form-control outsources_delivery_amt1" name="outsources_delivery_amt1" value="{{$ewb_outsources->outsources_delivery_amt1}}" placeholder="Delivery Amount"  value="0">
                                   <input type="number" class="form-control outsources_delivery_amt2 mt-3" name="outsources_delivery_amt2" value="{{$ewb_outsources->outsources_delivery_amt2}}" placeholder="Delivery Amount"  value="0">
                                   <input type="number" class="form-control outsources_delivery_amt3 mt-3" name="outsources_delivery_amt3" value="{{$ewb_outsources->outsources_delivery_amt3}}" placeholder="Delivery Amount"  value="0">
                                   <input type="number" class="form-control outsources_delivery_amt4 mt-3" name="outsources_delivery_amt4" value="{{$ewb_outsources->outsources_delivery_amt4}}" placeholder="Delivery Amount"  value="0">
                                   <input type="number" class="form-control outsources_delivery_amt5 mt-3" name="outsources_delivery_amt5" value="{{$ewb_outsources->outsources_delivery_amt5}}" placeholder="Delivery Amount"  value="0">
                               </div>
                               <div class="col-md-2 my-2">
                                   <label class="form-label">TSP Amount</label>   
                                   <input type="number" class="form-control outsources_tsp_amt1" name="outsources_tsp_amt1" value="{{$ewb_outsources->outsources_tsp_amt1}}" placeholder="TSP Amount"  value="0">
                                   <input type="number" class="form-control outsources_tsp_amt2 mt-3" name="outsources_tsp_amt2" value="{{$ewb_outsources->outsources_tsp_amt2}}" placeholder="TSP Amount"  value="0">
                                   <input type="number" class="form-control outsources_tsp_amt3 mt-3" name="outsources_tsp_amt3" value="{{$ewb_outsources->outsources_tsp_amt3}}" placeholder="TSP Amount"  value="0">
                                   <input type="number" class="form-control outsources_tsp_amt4 mt-3" name="outsources_tsp_amt4" value="{{$ewb_outsources->outsources_tsp_amt4}}" placeholder="TSP Amount"  value="0">
                                   <input type="number" class="form-control outsources_tsp_amt5 mt-3" name="outsources_tsp_amt5" value="{{$ewb_outsources->outsources_tsp_amt5}}" placeholder="TSP Amount"  value="0">
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
                                           <input type="text" class="form-control source_total_pickup" name="source_total_pickup"  value="{{$source_total_pickup}}">
                                           <p class="text-danger" style="margin-left: 10px">@error('source_total_pickup') {{ $message }} @enderror</p>
                                       </div>
                                       <div class="col-md-2">
                                        <label class="form-label">Total Awb Amt</label>   
                                           <input type="text" class="form-control source_total_awb" name="source_total_awb" value="{{$source_total_awb}}">
                                           <p class="text-danger" style="margin-left: 10px">@error('source_total_awb') {{ $message }} @enderror</p>
                                       </div>
                                       <div class="col-md-2">
                                        <label class="form-label">Total Delivery Amt</label>   
                                           <input type="text" class="form-control source_total_delivery" name="source_total_delivery" value="{{$source_total_delivery}}">
                                           <p class="text-danger" style="margin-left: 10px">@error('source_total_delivery') {{ $message }} @enderror</p>
                                       </div>
                                       <div class="col-md-2">
                                        <label class="form-label">Total TSP Amt</label>   
                                           <input type="text" class="form-control source_total_tsp" name="source_total_tsp" value="{{$source_total_tsp}}">
                                           <p class="text-danger" style="margin-left: 10px">@error('source_total_tsp') {{ $message }} @enderror</p>
                                       </div>
                                       <div class="col-md-2">
                                        <label class="form-label">Total Amt</label>   
                                           <input type="text" class="form-control source_total_amt" name="source_total_amt" value="{{$source_total_amt}}">
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
                           <input type="text" class="form-control source_vikas" name="source_vikas" value="{{$source_vikas}}">
                           <p class="text-danger" style="margin-left: 10px">@error('source_vikas') {{ $message }} @enderror</p>
                       </div>
                   </div>
                   <div class="col-md-4 mt-4">
                       <div class="field">
                           <label class="form-label">P&L</label>   
                           <input type="text" class="form-control source_profit_loss" name="source_profit_loss" value="{{$source_profit_loss}}">
                           <p class="text-danger" style="margin-left: 10px">@error('source_profit_loss') {{ $message }} @enderror</p>
                       </div>
                   </div> 
               </div>

               <div class="row justify-content-center mt-5 mb-5">
                   <div class="col-md-12 text-center">
                       <button type="submit" class="btn btn-primary btn-lg">Update Source Data</button>
                   </div>
               </div>
           </form>
        </div>

    </div>
    

    


    <script src="{{asset('frontend_assets/js/jquery.js')}}"></script>
    <script src="{{asset('frontend_assets/js/popper.min.js')}}"></script>
    <script src="{{asset('frontend_assets/js/bootstrap.min.js')}}"></script>

<script>
    $(document).ready(function () {
        setTimeout(function() {
                $('.message').fadeOut('fast');
        }, 5000);

         // Airline Discount Amount 
         $('.dicount_cal_btn').click(function (e) { 
            e.preventDefault();
            let discount_type = $('.source_discount_type').val()
            let discount_value =  parseFloat($('.source_discount_value').val())
            let source_chargeable_wt =  parseFloat($('.source_chargeable_wt').val())
            let source_freight_amt =  parseFloat($('.source_freight_amt').val())
            let res = ''



            if(discount_type == 'Discount/Kg'){
                res =  discount_value * source_chargeable_wt
                $('.source_discount_amt').val(res)
            }else if(discount_type == 'Discount%'){
                 res =  source_freight_amt / discount_value;
                $('.source_discount_amt').val(res)
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
            var outsource_total_amt = parseFloat($('.source_total_amt').val())
            var airline_awb_amt = parseFloat($('.source_awb_amt').val())

            // var vikas_amt = outsource_total_amt - airline_awb_amt;
            var vikas_amt =  final_awb_amt - airline_awb_amt;

            $('.source_vikas').val(vikas_amt);

            // Profit & loss
            var grand_total = parseFloat($('.grand_total').val())
            var profit_loss = grand_total - outsource_total_amt 
            $('.source_profit_loss').val(profit_loss)
        });

    });
</script>
</body>
</html>