<!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
        <title>Print EWB Bill</title>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
     
    </head>
      <body>
          <div class="text-center my-3">
              <button id="button" class="btn btn-secondary">Print PDF</button>
          </div>
        <div class="container" >

        <div id="makepdf"> 
            <div style="display: flex;flex-direction: row;justify-content: space-between;color: #000!important;">
                <p style="margin-bottom: 0px;font-size: 12px;"><b>{{$print_data->awb_no}}</b></p>
                <p style="margin-bottom: 0px;font-size: 12px;"><b>{{$print_data->awb_no}}</b></p>
            </div>
            

            <div style="display:grid;grid-template-columns: 50% 50%;">
                <div style="padding-left:5px;border: 1px solid black;">
                    <div style="display:flex;flex-direction: row;justify-content: space-between;">
                      <div>
                        <p style="margin-bottom: 0px;font-size: 10px;margin-top: 0px;">{{$print_data->shipper_name}}</p>
                        <p style="margin-bottom: 0px;font-size: 9px;font-weight: 500;color: #000!important;">
                         {{$print_data->pickup_address_one}}<br>
                         {{$print_data->pickup_city}}, {{$print_data->pickup_state}}<br>
                         INDIA - {{$print_data->pickup_pincode}}
                        </p>  
                        {{-- <p>{{$print_data->pickup_mobile}}</p> --}}
                      </div>
                      <div style="text-align:center;border: 1px solid black;height: fit-content;padding: 0px 10px;">
                        <p style="font-size: 10px;margin-bottom: 0px;margin-top: 0px;">Shipper's Account Number</p>
                        <p style="font-size: 9px;font-weight: 500;color: #000!important;margin-bottom: 0px;">526358 99554 85552</p>
                      </div> 
                    </div>
                </div>

                <div style="padding-left:5px;border: 1px solid black;">
                    <div style="display:flex;flex-direction: row;justify-content: space-between;">
                      <div style="margin-bottom:15px;">
                        <p style="margin-bottom: 0px;font-size: 10px;margin-top: 0px;">Not negotiable</p>
                        <p style="font-size: 9px;font-weight: 500;color: #000!important;margin-bottom: 0px;">Air Waybill</p>
                      </div>
                      <div>
                        <p style="margin-bottom: 0px;font-size: 10px;margin-top: 0px;">Issued by</p>
                        <p style="font-size: 9px;font-weight: 500;color: #000!important;margin-bottom: 0px;">Gofreight.in<br>
                            1<sup>st</sup> main, Shabarinagar, Bytrayanapura,<br>
                            Bangalore -560092 India<br>
                            GSTIN Number: 29CGNPM7441J1ZQ
                        </p>
                     </div>
                    </div>
                </div>
            </div>

            <div style="display:grid;grid-template-columns: 50% 50%;">
                <div style="border: 1px solid black;">
                    <div style="display:flex;flex-direction: row;justify-content: space-between;">
                        <div>
                            <p style="margin-bottom: 0px;font-size: 10px;padding-left:5px;margin-top: 0px;">{{$print_data->consignee_name}}</p>
                            <p style="padding-left:5px;margin-bottom: 0px;font-size: 9px;font-weight: 500;color: #000!important;">
                                {{$print_data->delivery_address_one}}, {{$print_data->delivery_city}}<br>
                                {{$print_data->delivery_state}} ,<br>
                                INDIA - {{$print_data->delivery_pincode}}
                            </p>  
                        </div>
                        <div style="text-align: center;border: 1px solid black;height: fit-content;padding: 0px 10px;">
                            <p style="font-size: 10px;margin-bottom: 0px;margin-top: 0px;">Consignee's Account Number</p>
                            <p style="font-size: 9px;font-weight: 500;color: #000!important;margin-bottom: 0px;">526358 99554 85552</p>
                        </div>
                    </div>
                    <div style="border-top:1px solid black;padding-left:5px;">
                        <p style="font-size: 10px;margin-bottom: 0px;margin-top: 0px;">Issuing Carrier's Agent Name and City</p>
                        <p style="margin-bottom: 0px;font-size: 9px;font-weight: 500;color: #000!important;">Gofreight.in BANGALORE</p>
                    </div>
                </div>

                <div style="border: 1px solid black;">
                    <div>
                        <p style="margin-bottom: 0px;margin-top:0px;font-size: 10px;font-weight: 500;color: #000!important; text-align: center;margin-top: 0px;">Copies 1,2 and 3 of this Air Waybill are originals and have the same validity</p>
                    </div>
                    <div style="border-top:1px solid black;">
                        <p style="padding:0px 5px;margin-bottom: 0px;font-size: 9px;margin-top: 0px;">It is agreed that the goods described here in, are accepted in apparent good 
                            order and condition (except as noted) for carnage SUBJECT TO THE CONDITIONS OF CONTRACTION 
                            THE REVERSE HERE OF ALL GOODS MAY BE CARRIED BY ANY OTHER MEANS INCLUDING OR ANY OTHER 
                            CARRIER UNLESS SPECIFIC CONTRARY INSRTUCTIONS ARE GIVEN HERE ON BY THE SHIPPER AGREES 
                            THAT THE SHIPMENT MAY BE CARRIED VIA INTERMEDIATE STOPPING PLACESWHICH THE CARRIER DEEMS 
                            AIRPORTE, THE SHIPPERS ATTENTION IS DRAWN TO THE NOTICE CONCERNING CARRIERS LOMITATION OF 
                            LIABILITY Shipper any increase such limitation of liability by declaring a higher value 
                            for carrier and paying a supplemental change if required.
                        </p>
                    </div>
                </div>
            </div>

            <div style="display:grid;grid-template-columns: 50% 50%;">
                <div>
                    <table style="width: 100%;border: 1px solid black;border-collapse: collapse;">
                        <tr style="border: 1px solid black;border-collapse: collapse;text-align: center;">
                            <th style="border: 1px solid black;border-collapse: collapse;font-size: 10px;margin-top: 0px;">Agent's Code</th>
                            <th style="border: 1px solid black;border-collapse: collapse;font-size: 10px;margin-top: 0px;">Account No.</th>
                        </tr>
                        <tr style="border: 1px solid black;border-collapse: collapse;text-align: center;">
                            <td style="border: 1px solid black;border-collapse: collapse;font-size: 11px;color: #000!important;font-weight: 700;">GOF - BLR/22</td>
                            <td style="border: 1px solid black;border-collapse: collapse;font-size: 9px;color: #000!important;"></td>
                        </tr>
                    </table>
                    <div style="padding-left:5px;border: 1px solid black;">
                        <p style="margin-bottom: 0px;font-size: 10px;margin-top: 0px;">Airport of Departure (Addr. of first Carrier) and requested routing</p>
                        <p style="margin-bottom: 0px;font-size: 11px;font-weight: 700;color: #000!important;"> 
                        @foreach ($airport as $air)
                            @if($air->id == $print_data->apt_of_depature)
                                   <span>{{$air->airport_code}}-{{$air->airport_name}}</span>   
                              @endif
                          @endforeach</p>
                    </div>
                </div>
                <div style="border: 1px solid black;">
                    <p style="padding-left: 5px;margin-bottom: 0px;font-size: 10px;margin-top: 0px;">Accounting Information</p>
                    <p style="padding-left: 5px;margin-bottom: 0px;font-size: 9px;font-weight: 500;color: #000!important;"></p>
                </div>
            </div>

            <div style="display:grid;grid-template-columns: auto;">
                <div style="display:flex;flex-direction: row;justify-content: space-between;border: 1px solid black;">
                    <div style="padding:0px 20px;border-right: 1px solid black;">
                        <p style="font-size:10px;margin-top: 0px;">TO</p>
                        <p style="align-items: flex-end;margin-bottom: 0px;font-size: 11px;color: #000!important;font-weight: 700;">
                        @foreach ($airport as $air)
                          @if($air->id == $print_data->apt_of_destination)
                          <span>{{$air->airport_code}}</span>   

                            @endif
                        @endforeach
                        </p>
                    </div>
                    
                    <div style="display:flex;flex-direction: row;justify-content: space-around;">
                        <div>
                            <p style="margin-bottom: 0px;padding: 0px 20px;font-size: 10px;margin-top: 0px;">By first Career</p>
                            <p class="text-uppercase" style="margin-bottom: 0px;font-size: 11px;font-weight: 700;color: #000!important;text-align: center;padding-top: 5px;">{{$print_data->service_type}}</p>
                        </div>
                        <div>
                            <p style="border: 1px solid black;margin-bottom:0px;padding:0px 20px;font-size:10px;margin-top: 0px;">Routing and Destination</p>
                            <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;text-align: center;padding-top: 5px;"></p>
                        </div>
                    </div>

                    <div style="padding:0px 30px;border-left: 1px solid black;border-right: 1px solid black;">
                        <p style="font-size: 10px;margin-top: 0px;">To</p>
                        <p style="margin-bottom:0px;"></p>
                    </div>
                    <div style="padding-right:25px;border-right: 1px solid black;">
                        <p style="font-size: 10px;margin-top: 0px;">By</p>
                        <p style="margin-bottom:0px;"></p>
                    </div>
                    <div style="padding-right:25px;border-right: 1px solid black;">
                        <p style="font-size: 10px;margin-top: 0px;">To</p>
                        <p style="margin-bottom:0px;"></p>
                    </div>
                    <div style="padding-right:25px;border-right: 1px solid black;">
                        <p style="font-size: 10px;margin-top: 0px;">By</p>
                        <p style="margin-bottom:0px;"></p>
                    </div>
                    
                    <div style="padding-right: 5px;border-right: 1px solid black;">
                        <p style="font-size: 10px;margin-top: 0px;">Currency</p>
                        <p style="align-items: flex-end;margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;">INR</p>
                    </div>
                    <div style="padding-right: 5px;border-right: 1px solid black;">
                        <p style="font-size: 10px;margin-top: 0px;">Chgs-Code</p>
                        <p style="align-items: flex-end;margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;">PP</p>
                    </div>
                    <div style="padding-right: 5px;border-right: 1px solid black;">
                        <p style="font-size: 10px;margin-top: 0px;">WT/VAL</p>
                        <p style="align-items: flex-end;margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;">P</p>
                    </div>
                    <div style="padding-right: 5px;border-right: 1px solid black;">
                        <p style="font-size: 10px;margin-top: 0px;">Others</p>
                        <p style="align-items: flex-end;margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;">P</p>
                    </div>
                    <div style="padding-right: 5px;border-right: 1px solid black;">
                        <p style="font-size: 10px;margin-top: 0px;">Declared Value for carriage</p>
                        <p style="align-items: flex-end;margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;">NVD {{$print_data->nvd}}</p>
                    </div>
                    <div>
                        <p style="font-size: 10px;margin-top: 0px;">Declared Value for customs</p>
                        <p style="align-items: flex-end;margin-bottom: 0px;font-size: 9px;font-weight: 500;color: #000!important;">NCV {{$print_data->ncv}}</p>
                    </div>
                </div>

                <!--<div style="display:flex;flex-direction: row;justify-content: space-around;border: 1px solid black;">-->
                <!--    <div style="padding-right: 5px;border-right: 1px solid black;">-->
                <!--        <p style="font-size: 10px;margin-top: 0px;">Currency</p>-->
                <!--        <p style="align-items: flex-end;margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;">INR</p>-->
                <!--    </div>-->
                <!--    <div style="padding-right: 5px;border-right: 1px solid black;">-->
                <!--        <p style="font-size: 10px;margin-top: 0px;">Chgs-Code</p>-->
                <!--        <p style="align-items: flex-end;margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;">PP</p>-->
                <!--    </div>-->
                <!--    <div style="padding-right: 5px;border-right: 1px solid black;">-->
                <!--        <p style="font-size: 10px;margin-top: 0px;">WT/VAL</p>-->
                <!--        <p style="align-items: flex-end;margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;">P</p>-->
                <!--    </div>-->
                <!--    <div style="padding-right: 5px;border-right: 1px solid black;">-->
                <!--        <p style="font-size: 10px;margin-top: 0px;">Others</p>-->
                <!--        <p style="align-items: flex-end;margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;">P</p>-->
                <!--    </div>-->
                <!--    <div style="padding-right: 5px;border-right: 1px solid black;">-->
                <!--        <p style="font-size: 10px;margin-top: 0px;">Declared Value for carriage</p>-->
                <!--        <p style="align-items: flex-end;margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;">NVD</p>-->
                <!--    </div>-->
                <!--    <div>-->
                <!--        <p style="font-size: 10px;margin-top: 0px;">Declared Value for customs</p>-->
                <!--        <p style="align-items: flex-end;margin-bottom: 0px;font-size: 9px;font-weight: 500;color: #000!important;">NCV</p>-->
                <!--    </div>-->
                <!--</div>-->
            </div>

            <div style="display:grid;grid-template-columns: 50% 50%;">
                <div style="border: 1px solid black;display:flex;flex-direction: row;justify-content: space-evenly;">
                    <div style="padding-right: 60px;border-right: 1px solid black;">
                        <p style="font-size: 10px;text-align: center;margin-top: 0px;margin-bottom: 0px;">Airport of Destination</p>
                        <p style="align-items: flex-end;margin-bottom: 0px;padding-top:5px;font-size: 11px;font-weight: 700;color: #000!important;">  @foreach ($airport as $air)
                            @if($air->id == $print_data->apt_of_destination)
                            <span>{{$air->airport_code}}-{{$air->airport_name}}</span>   
  
                              @endif
                          @endforeach</p>
                    </div>
                    <div style="display: flex;height: fit-content;flex-direction: column;margin-top: 0px;">
                        <p style="border: 1px solid black;text-align: center;margin-bottom: 0px;font-size: 10px;padding:0px 20px;margin-top: 0px;">Requested Flight/Date</p>
                        <div style="display:flex;justify-content: space-between;align-items: center;">
                            <div>
                                       @foreach ($freight_data as $freight_data_item)
                                        <p style="align-items: flex-end;padding:0px 20px;font-size: 11px;font-weight: 700;color: #000!important;margin-bottom: 0px;padding-top: 10px;">{{ $freight_data_item->code }}  </p>
                                        @endforeach
                            </div>
                            <div>
                                <p style="font-size: 11px;font-weight: 700;color: #000!important;align-items: flex-end;margin-bottom: 0px;padding-top: 10px;"> {{ date('d-m-Y', strtotime($print_data->issuing_date)) }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="border: 1px solid black;display:flex;flex-direction: row;justify-content: space-between;">
                    <div style="padding-left: 5px;border-right: 1px solid black;">
                        <p style="font-size: 10px;margin-bottom:0px;margin-top: 0px;">Amount Of Insurance</p>
                        <p style="font-size: 11px;font-weight: 600;color: #000!important;align-items: flex-end;margin-bottom: 0px;">xxxx.xx</p>
                    </div>
                    <div style="padding-left: 5px;">
                        <p style="font-size: 10px;margin-bottom:0px;margin-top: 0px;">Insurance if carrier offers insurance, and such insurance is requested on accordance with the conditions thereof, indicates amount benisureed in fiGures in box marked "Amount Of Insurance"</p>
                    </div>
                </div>
            </div>

            <div style="display:grid;grid-template-columns: auto;">
                <div style="border: 1px solid black;display:flex;flex-direction: row;justify-content: space-between;">
                    <div>
                        <p style="margin-top:0px;margin-bottom:0px;font-size:10px;padding-left: 5px;">Handling Information</p>
                        <p style="font-size: 11px;font-weight: 600;color: #000!important;margin-bottom:0px;padding-left: 5px;">SHC:GEN: General Cargo</p>
                    </div>
                    <div style="align-self: end;">
                        <p style="padding-right: 100px;margin-top:0px;margin-bottom:0px;border: 1px solid black;font-size: 10px;">SCI</p>
                    </div>
                </div>
            </div>

            <div style="display:grid;grid-template-columns: auto;">
                <div style="border: 1px solid black;border-top:hidden;display:flex;flex-direction: row;justify-content: space-between;">
                    <table style="width:100%;border-collapse: collapse;">
                        <tr>
                            <th style="border: 1px solid black;border-collapse: collapse;text-align:center;font-size:10px;">No of Pieces <br>RCP</th>
                            <th style="border: 1px solid black;border-collapse: collapse;text-align:center;font-size:10px;">Gross Weight</th>
                            <th style="border: 1px solid black;border-collapse: collapse;text-align:center;font-size:10px;">Kg/Lb</th>
                            <th style="border: 1px solid black;border-collapse: collapse;text-align:center;font-size:10px;">Rate Class</th>
                            <th style="border: 1px solid black;border-collapse: collapse;text-align:center;font-size:10px;">Commodity <br>Item No.</th>
                            <th style="border: 1px solid black;border-collapse: collapse;text-align:center;font-size:10px;">Chargeable <br>Weight</th>
                            <th style="border: 1px solid black;border-collapse: collapse;text-align:center;font-size:10px;">Rate/Charge</th>
                            <th style="border: 1px solid black;border-collapse: collapse;text-align:center;font-size:10px;">Total</th>
                            <th style="border: 1px solid black;border-collapse: collapse;text-align:center;font-size:10px;" colspan="2">Nature and Quality Of Goods<br>(incl. Dimensions or Volume)</th>
                        </tr>
                        <tr style="vertical-align: text-top; text-align: center;">
                            <td style="font-size: 11px;font-weight: 600;color: #000!important;border: 1px solid black;border-collapse: collapse;margin-bottom:0px;">{{$print_data->no_of_pcs}}</td>
                            <td style="font-size: 11px;font-weight: 600;color: #000!important;border: 1px solid black;border-collapse: collapse;margin-bottom:0px;">{{$print_data->gr_wt}}</td>
                            <td style="font-size: 11px;font-weight: 600;color: #000!important;border: 1px solid black;border-collapse: collapse;margin-bottom:0px;">Kg</td>
                            <td style="font-size: 11px;font-weight: 600;color: #000!important;border: 1px solid black;border-collapse: collapse;margin-bottom:0px;">Q</td>
                            <td style="font-size: 11px;font-weight: 600;color: #000!important;border: 1px solid black;border-collapse: collapse;margin-bottom:0px;">GEN</td>
                            <td style="font-size: 11px;font-weight: 600;color: #000!important;border: 1px solid black;border-collapse: collapse;margin-bottom:0px;">{{round($print_data->chargable_wt)}}</td>
                            <td style="font-size: 11px;font-weight: 600;color: #000!important;border: 1px solid black;border-collapse: collapse;margin-bottom:0px;">{{$print_data->rate_kg}}</td>
                            <td style="font-size: 11px;font-weight: 600;color: #000!important;border: 1px solid black;border-collapse: collapse;margin-bottom:0px;">{{round($print_data->total_amt)}}</td>
                            <td style="text-align:left;border: 1px solid black;border-collapse: collapse;"><p style="font-size: 11px;font-weight: 600;color: #000!important;margin-bottom:0px;text-align:center;margin-top: 0px;">{{$print_data->goods_desc}}</p>
                            <p style="font-size: 11px;font-weight: 600;color: #000!important;margin-bottom:0px;text-align:center;margin-top: 0px;">DIMS(Cms) :
                                @foreach ($QuoteDimention as $item)
                                    @if ($item->quote_id == $print_data->quote_id)
                                           <span>{{$item->box_length}}x{{$item->box_breath}}x{{$item->box_height}}x{{$item->box_weight}}x{{$item->total_box}}pcs</span> <br> 
                                    @endif  
                                @endforeach</p>
                            </td>
                        </tr>
                        <tr style="text-align: center;">
                            <td style="font-size: 12px;font-weight: 700;color: #000!important;border: 1px solid black;border-collapse: collapse;">{{$print_data->no_of_pcs}}</td>
                            <td style="font-size: 12px;font-weight: 700;color: #000!important;border: 1px solid black;border-collapse: collapse;">{{$print_data->gr_wt}}</td>
                            <td style="font-size: 11px;font-weight: 600;color: #000!important;border: 1px solid black;border-top-style: hidden;border-collapse: collapse;"></td>
                            <td style="font-size: 11px;font-weight: 600;color: #000!important;border: 1px solid black;border-top-style: hidden;border-collapse: collapse;"></td>
                            <td style="font-size: 11px;font-weight: 600;color: #000!important;border: 1px solid black;border-top-style: hidden;border-collapse: collapse;"></td>
                            <td style="font-size: 11px;font-weight: 600;color: #000!important;border: 1px solid black;border-top-style: hidden;border-collapse: collapse;"></td>
                            <td style="font-size: 11px;font-weight: 600;color: #000!important;border: 1px solid black;border-top-style: hidden;border-collapse: collapse;"></td>
                            <td style="font-size: 12px;font-weight: 700;color: #000!important;border: 1px solid black;border-collapse: collapse;">{{number_format((float)$print_data->total_amt, 2, '.', '')}}</td>
                            <td style="font-size: 11px;font-weight: 600;color: #000!important;border: 1px solid black;border-top-style: hidden;border-collapse: collapse;"></td>
                        </tr>
                    </table>
                </div>
            </div>
            
            <div style="display:grid;grid-template-columns: 50% 50%">
                <div style="border: 1px solid black;border-top:hidden;">
                    <div style="display:flex;flex-direction: row;justify-content: space-around;border-bottom: 1px solid black;border-left: 1px solid black;">
                        <div>
                            <p style="margin-bottom: 0px;padding: 0px 20px;font-size: 10px;margin-top: 0px;">Prepaid</p>
                            <p style="margin-bottom: 0px;font-size: 12px;font-weight: 700;color: #000!important;text-align: center;padding-top: 5px;">{{number_format((float)$print_data->total_amt, 2, '.', '')}}</p>
                        </div>
                        <div>
                            <p style="margin-bottom: 0px;padding: 0px 20px;font-size: 10px;margin-top: 0px;">Weight Charge</p>
                            <p style="margin-bottom: 0px;font-size: 12px;font-weight: 700;color: #000!important;text-align: center;padding-top: 5px;"></p>
                        </div>
                        <div>
                            <p style="margin-bottom:0px;padding:0px 20px;font-size:10px;margin-top: 0px;">Collect</p>
                            <p style="margin-bottom: 0px;font-size: 12px;font-weight: 700;color: #000!important;text-align: center;padding-top: 5px;"></p>
                        </div>
                    </div>

                    

                    <!--<div style="display:flex;flex-direction: row;justify-content: space-around;border-bottom: 1px solid black;">-->
                    <!--    <div>-->
                    <!--        <p style="border:1px solid black;margin-bottom: 0px;padding: 0px 20px;font-size: 10px;margin-top: 0px;">Valuation Charge</p>-->
                    <!--        <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;text-align: center;padding-top: 5px;">{{$print_data->valuation_charge}}</p>-->
                    <!--    </div>-->
                    <!--    <div>-->
                    <!--        <p style="border: 1px solid black;margin-bottom:0px;padding:0px 20px;font-size:10px;margin-top: 0px;">...</p>-->
                    <!--        <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;text-align: center;padding-top: 5px;"></p>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div style="display:grid;grid-template-columns: 50% 50%">
                        <div style="border-left: 1px solid black;border-right: 1px solid black;">
                            <div>
                                <p style="text-align:center;margin-bottom: 0px;padding: 0px 20px;font-size: 10px;margin-top: 0px;">Valuation Charge</p>
                                <p style="margin-bottom: 0px;font-size: 12px;font-weight: 700;color: #000!important;text-align: center;padding-top: 5px;">{{number_format((float)$print_data->valuation_charge, 2, '.', '')}}</p>
                            </div>
                        </div>    
    
                        <div style="border-left: 1px solid black;">   
                            <div>
                                <p style="margin-bottom:0px;text-align:center;padding:0px 20px;font-size:10px;margin-top: 0px;">Valuation Charge</p>
                                <p style="margin-bottom: 0px;font-size: 12px;font-weight: 700;color: #000!important;text-align: center;padding-top: 5px;"></p>
                            </div>
                        </div>
                    </div>

                    <!--<div style="display:flex;flex-direction: row;justify-content: space-around;border-bottom: 1px solid black;">-->
                    <!--    <div>-->
                    <!--        <p style="border:1px solid black;margin-bottom: 0px;padding: 0px 20px;font-size: 10px;margin-top: 0px;">TAX</p>-->
                    <!--        <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;text-align: center;padding-top: 5px;">{{$print_data->taxes_gst}}</p>-->
                    <!--    </div>-->
                    <!--    <div>-->
                    <!--        <p style="border: 1px solid black;margin-bottom:0px;padding:0px 20px;font-size:10px;margin-top: 0px;">...</p>-->
                    <!--        <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;text-align: center;padding-top: 5px;"></p>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div style="display:grid;grid-template-columns: 50% 50%">
                        <div style="border: 1px solid black;">
                            <div>
                                <p style="text-align:center;margin-bottom: 0px;padding: 0px 20px;font-size: 10px;margin-top: 0px;">TAX</p>
                                    <p style="margin-bottom: 0px;font-size: 12px;font-weight: 700;color: #000!important;text-align: center;padding-top: 5px;">{{number_format((float)$print_data->taxes_gst, 2, '.', '')}}</p>
                                </div>
                        </div>    
    
                        <div style="border: 1px solid black;border-right:hidden;">   
                            <div>
                                <p style="margin-bottom:0px;text-align:center;padding:0px 20px;font-size:10px;margin-top: 0px;">TAX</p>
                                <p style="margin-bottom: 0px;font-size: 12px;font-weight: 700;color: #000!important;text-align: center;padding-top: 5px;"></p>
                            </div>
                        </div>
                    </div>

                    <!--<div style="display:flex;flex-direction: row;justify-content: space-around;border-bottom: 1px solid black;">-->
                    <!--    <div>-->
                    <!--        <p style="border:1px solid black;margin-bottom: 0px;padding: 0px 20px;font-size: 10px;margin-top: 0px;">Total other charges Due Agent</p>-->
                    <!--        <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;text-align: center;padding-top: 5px;">{{$print_data->other_charges}}</p>-->
                    <!--    </div>-->
                    <!--    <div>-->
                    <!--        <p style="border: 1px solid black;margin-bottom:0px;padding:0px 20px;font-size:10px;margin-top: 0px;">Total other charges Due Carrier</p>-->
                    <!--        <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;text-align: center;padding-top: 5px;"></p>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div style="display:grid;grid-template-columns: 50% 50%">
                        <div style="border-left: 1px solid black;border-right: 1px solid black;">
                            <div>
                                <p style="text-align:center;margin-bottom: 0px;padding: 0px 20px;font-size: 10px;margin-top: 0px;">Total other charges Due Agent</p>
                                <p style="margin-bottom: 0px;font-size: 12px;font-weight: 700;color: #000!important;text-align: center;padding-top: 5px;">{{number_format((float)$print_data->other_charges, 2, '.', '')}}</p>
                            </div>
                        </div>    
    
                        <div style="border-left: 1px solid black;">   
                            <div>
                                <p style="margin-bottom:0px;text-align:center;padding:0px 20px;font-size:10px;margin-top: 0px;">Total other charges Due Carrie</p>
                                <p style="margin-bottom: 0px;font-size: 12px;font-weight: 700;color: #000!important;text-align: center;padding-top: 5px;"></p>
                            </div>
                        </div>
                    </div>

                    <!--<div style="display:flex;flex-direction: row;justify-content: space-around;border-bottom: 1px solid black;">-->
                    <!--    <div>-->
                    <!--        <p style="border:1px solid black;margin-bottom: 0px;padding: 0px 20px;font-size: 10px;margin-top: 0px;">Total Prepaid</p>-->
                    <!--        <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;text-align: center;padding-top: 5px;">{{$print_data->grand_total}}</p>-->
                    <!--    </div>-->
                    <!--    <div>-->
                    <!--        <p style="border: 1px solid black;margin-bottom:0px;padding:0px 20px;font-size:10px;margin-top: 0px;">Total Collect</p>-->
                    <!--        <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;text-align: center;padding-top: 5px;"></p>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div style="display:grid;grid-template-columns: 50% 50%">
                        <div style="border: 1px solid black;">
                            <div>
                                <p style="text-align:center;margin-bottom: 0px;padding: 0px 20px;font-size: 10px;margin-top: 0px;">Total Prepaid</p>
                                <p style="margin-bottom: 0px;font-size: 12px;font-weight: 700;color: #000!important;text-align: center;padding-top: 5px;">{{round($print_data->grand_total)}}.00</p>
                            </div>
                        </div>    
    
                        <div style="border: 1px solid black;border-right:hidden;">   
                            <div>
                                <p style="margin-bottom:0px;text-align:center;padding:0px 20px;font-size:10px;margin-top: 0px;">Total Collect</p>
                                <p style="margin-bottom: 0px;font-size: 12px;font-weight: 700;color: #000!important;text-align: center;padding-top: 5px;"></p>
                            </div>
                        </div>
                    </div>

                    <!--<div style="display:flex;flex-direction: row;justify-content: space-around;border-bottom: 1px solid black;">-->
                    <!--    <div>-->
                    <!--        <p style="border:1px solid black;margin-bottom: 0px;padding: 0px 20px;font-size: 10px;margin-top: 0px;">Currency Convertion Rate</p>-->
                    <!--        <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;text-align: center;padding-top: 5px;"></p>-->
                    <!--    </div>-->
                    <!--    <div>-->
                    <!--        <p style="border: 1px solid black;margin-bottom:0px;padding:0px 20px;font-size:10px;margin-top: 0px;">Total collect in Dest. Currency</p>-->
                    <!--        <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;text-align: center;padding-top: 5px;">INR</p>-->
                    <!--    </div>-->
                    <!--</div>-->
                    
                    <div style="display:grid;grid-template-columns: 50% 50%">
                        <div style="border-left: 1px solid black;border-right: 1px solid black;">
                            <div>
                                <p style="text-align:center;margin-bottom: 0px;padding: 0px 20px;font-size: 10px;margin-top: 0px;">Currency Convertion Rate</p>
                                <p style="margin-bottom: 0px;font-size: 12px;font-weight: 700;color: #000!important;text-align: center;padding-top: 5px;"></p>
                            </div>
                        </div>    
    
                        <div style="border-left: 1px solid black;">   
                            <div>
                                <p style="margin-bottom:0px;text-align:center;padding:0px 20px;font-size:10px;margin-top: 0px;">Total collect in Dest. Currency</p>
                                <p style="margin-bottom: 0px;font-size: 12px;font-weight: 700;color: #000!important;text-align: center;padding-top: 5px;">INR</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
           
                <div style="border: 1px solid black;border-top:hidden;">
                    <div style="border-bottom: 1px solid black;padding-left: 5px;margin-top: 0px;">
                        <div>
                            <p style="font-size:10px; margin-bottom:0px;margin-top: 0px;">Other Charges</p>
                        </div>
                        <div style="display:flex;flex-direction: row;justify-content: space-around;">
                            <div>
                                <p style="margin-bottom:0px;font-size:11px;font-weight:700;color:#000!important;">AAA : {{ number_format((float)$print_data->aaa_manual_kg, 2, '.', '')}}</p>
                                <p style="margin-bottom:0px;font-size:11px;font-weight:700;color:#000!important;">XBC : {{ number_format((float)$print_data->xbc, 2, '.', '')}}</p>
                                <p style="margin-bottom:0px;font-size:11px;font-weight:700;color:#000!important;">CHC : {{ number_format((float)$print_data->chc, 2, '.', '')}}</p>
                            </div>
                            <div>
                                <p style="margin-bottom:0px;font-size:11px;font-weight:700;color:#000!important;">MBC : {{ number_format((float)$print_data->mbc, 2, '.', '')}}</p>
                                <p style="margin-bottom:0px;font-size:11px;font-weight:700;color:#000!important;">CDC : {{ number_format((float)$print_data->cdc, 2, '.', '')}}</p>
                            </div>
                        </div>
                    </div>

                    <div style="border-bottom: 1px solid black;margin-bottom: 20px; padding: 0px 5px;">
                        <p style="font-size:9px;margin-top: 0px;">Shipper certificates that the particulars on the lace here of are correct and that In so tar as 
                            any pan a, the consignment contains dangerous goods, such pan is properly described by name and is proper 
                            condition for carnage by air according to the applicable Dangerous Goods Regulations.
                        </p>
                        <p style="font-size:10px;font-weight:700;padding-top: 10px;margin-bottom: 0px;text-align: center;">{{$print_data->shipper_name}}</p>
                        <hr style="height: 2px;color: #000000!important;margin: 0px;">
                        <p style="font-size:9px;text-align: center;margin-bottom: 0px;margin-bottom: 0px;">Signature of Shipper or his Agent</p>
                    </div>
                    <div style="display:flex;flex-direction: row;justify-content: space-around;">
                        <div>
                            <p style="border-bottom:1px solid black;padding: 0px 20px;text-align: center;font-size: 12px;font-weight:700;margin-bottom: 0px;">
                                {{ date('d-m-Y', strtotime($print_data->issuing_date)) }}</p>
                            <p style="text-align: center;margin-bottom: 0px;font-size: 9px;margin-top: 0px;">EXECUTED ON</p>
                        </div>
                        <div>
                            <p style="border-bottom:1px solid black;padding: 0px 40px; text-align: center;margin-bottom: 0px;font-size: 12px;font-weight: 700;">  @foreach ($airport as $air)
                                @if($air->id == $print_data->apt_of_depature)
                                       <span>{{$air->airport_code}}</span>   
                                  @endif
                              @endforeach</p>
                            <p style="text-align: center;margin-bottom:0px;font-size:9px;margin-top: 0px;">(Place)</p>
                        </div>
                        <div>
                            <p style="border-bottom:1px solid black;padding: 0px 50px;text-align: center;margin-bottom: 0px;font-size: 10px;">Signature</p>
                            <p style="text-align:center;margin-bottom:0px;font-size:9px;margin-top: 0px;">Signature of Issuing Carrier</p>
                        </div>
                    </div>
                </div>
            </div>

            <div style="display:grid;grid-template-columns: 70% 30%;">
                <div style="display:flex;flex-direction: row;justify-content: space-around;border: 1px solid black;border-top: hidden;">
                    <div>
                        <p style="margin-bottom: 0px;padding: 0px 10px;font-size: 10px;margin-top: 0px;">For Carrier Use only at Destination</p>
                        <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;text-align: center;padding-top: 5px;"></p>
                    </div>
                    <div>
                        <p style="border:1px solid black;margin-bottom: 0px;padding: 0px 10px;font-size: 10px;margin-top: 0px;">Charges At Destination</p>
                        <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;text-align: center;padding-top: 5px;">  </p>
                    </div>
                    <div>
                        <p style="border: 1px solid black;margin-bottom:0px;padding:0px 10px;font-size:10px;margin-top: 0px;">Total Collect Charges</p>
                        <p style="margin-bottom: 0px;font-size: 11px;font-weight: 600;color: #000!important;text-align: center;padding-top: 5px;"></p>
                    </div>
                </div>

                <div style="display: flex;flex-direction: row;justify-content: center;align-items: center;">
                    <p style="color:#000;text-align: center;margin-bottom: 0px;font-size: 12px;margin-top: 0px;"><b>{{$print_data->awb_no}}</b></p>
                </div>
            </div>

        </div>
    
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
   
		<script src="{{asset('frontend_assets/js/jquery.js')}}"></script>
   
 <script>
            var button = document.getElementById("button");
            var makepdf = document.getElementById("makepdf");
          
            button.addEventListener("click", function () {


                var mywindow = window.open("", "PRINT", 
                        "height=400,width=600");
          
                mywindow.document.write(makepdf.innerHTML);
          
                mywindow.document.close();
                mywindow.focus();
          
                mywindow.print();
                mywindow.close();
          
                return true;
            });
        </script> 
    </body>
    </html>