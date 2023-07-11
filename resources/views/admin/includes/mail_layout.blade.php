
<!doctype html>
<html lang="en-US">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>Contact Mail</title>
    <meta name="description" content="Appointment Reminder Email Template">
</head>
<style>
    a:hover {text-decoration: underline !important;}
</style>

<body marginheight="0" topmargin="0" marginwidth="0" style="margin: 0px; background-color: #f2f3f8;" leftmargin="0">
    <table cellspacing="0" border="0" cellpadding="0" width="100%" bgcolor="#f2f3f8"
        style="@import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700|Open+Sans:300,400,600,700); font-family: 'Open Sans', sans-serif;">
        <tr>
            <td>
                <table style="background-color: #f2f3f8; max-width:670px; margin:0 auto;" width="100%" border="0"
                    align="center" cellpadding="0" cellspacing="0">
                    <tr>
                        <td style="height:80px;">&nbsp;</td>
                    </tr>
                    <!-- Logo -->
                    {{-- <tr>
                        <td style="text-align:center;">
                          <a href="https://rakeshmandal.com" title="logo" target="_blank">
                            <img width="60" src="https://i.ibb.co/hL4XZp2/android-chrome-192x192.png" title="logo" alt="logo">
                          </a>
                        </td>
                    </tr> --}}
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <!-- Email Content -->
                    <tr>
                        <td>
                            <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0"
                                style="max-width:670px; background:#fff; border-radius:3px;-webkit-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);-moz-box-shadow:0 6px 18px 0 rgba(0,0,0,.06);box-shadow:0 6px 18px 0 rgba(0,0,0,.06);padding:0 40px;">
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                                <!-- Title -->
                                <tr>
                                    <td style="padding:0 15px; text-align:center;">
                                        <h1 style="color:#1e1e2d; font-weight:400; margin:0;font-size:32px;font-family:'Rubik',sans-serif;">Response Mail</h1>
                                        <span style="display:inline-block; vertical-align:middle; margin:29px 0 26px; border-bottom:1px solid #cecece; 
                                        width:100px;"></span>
                                    </td>
                                </tr>
                                <!-- Details Table -->
                                <tr>
                                    <td>
                                        <h3>Hey {{$name}}, you get response quotation from GoFreight  <br>
                                        Please visit this url : {{$url}}</h3>

                                        <h3>Thank you for the enquiry, based on the details provided below we are pleased to offer
                                            Minimum INR__ All in</h3>

                                       <hr>
                                       <p>Pickup Date : {{$pickup_date}}</p>
                                       <p>Pickup City : {{$pickup_city}}</p>
                                       <p>Delivery City : {{$delivery_city}}</p>
                                       <p>Chargeable Weight : {{$chargeable_weight}}</p>
                                        <p>Charge Per KG : 

                                            @if ($chargeable_weight < 45)
                                                    {{$rate_other}}
                                                
                                                    @elseif($chargeable_weight >= 45 && $chargeable_weight < 100)
                                                    {{$rate_45kg}}
                                                
                                                    @elseif($chargeable_weight >= 100 &&  $chargeable_weight < 250)
                                                    {{$rate_100kg}}
                                                
                                                    @elseif($chargeable_weight >= 250 &&  $chargeable_weight < 500)
                                                    {{$rate_250kg}}
                                                
                                                    @elseif($chargeable_weight >= 500)
                                                    {{$rate_500kg}}
                                                    @else
                                                Pending
                
                                                @endif 
                                        </p>
                                       
                                       
                                        <h2 style="margin-top: 20px">Rate Charges</h2>       
                                        <table cellpadding="0" cellspacing="0"
                                            style="width: 100%; border: 1px solid #ededed">
                                            <thead>
                                                <tr>
                                                    <th style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;  color:rgba(0,0,0,.64)"><b>Kg</b></th>
                                                    <th style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%;  color:rgba(0,0,0,.64)"><b>Amount</b></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        45+</td>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                        {{$rate_45kg}}</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        100+:</td>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                        {{$rate_100kg}}</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        250+:</td>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                        {{$rate_250kg}}</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                        500+:</td>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                        {{$rate_500kg}}</td>
                                                </tr>
                                                <tr>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; border-right: 1px solid #ededed; width: 35%; font-weight:500; color:rgba(0,0,0,.64)">
                                                       Other Rates:</td>
                                                    <td
                                                        style="padding: 10px; border-bottom: 1px solid #ededed; color: #455056;">
                                                        {{$rate_other}}</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <h5>Charged on gross or volume weight whichever is higher.</h5>
                                        <h5>Valid for 2 working days only</h5>
                                        <h5>Stackable</h5>
                                        <h5>Non DG Cargo</h5>
                                        <h5>If shipment is temperature sensitive " Temperature to be maintained wherever possible" </h5>
                                        <h5>Any temperature excursion with / without data loggers at any point of journey/travel Gifreight.in will not be held liable for any claim.</h5>
                                        <h5>Please Inform consignee for immediate delivery upon arrival</h5>
                                        <h5>In case of any variance after the clearance on gross/volume/dims, rate will be revised accordingly. </h5>
                                        <h5>Signature</h5>
                                        <h4><strong>GoFreight</strong></h4>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:40px;">&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="height:20px;">&nbsp;</td>
                    </tr>
                    <tr>
                        <td style="text-align:center;">
                                <p style="font-size:14px; color:#455056bd; line-height:18px; margin:0 0 0; margin-bottom: 20px">&copy; <strong>www.gofreight.com</strong></p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>