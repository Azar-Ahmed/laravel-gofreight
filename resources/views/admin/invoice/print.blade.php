<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        
        <title>Print Invoice Bill</title>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
        <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script> -->


    </head>
    <body>

        <div class="container">

            <button id="button" class="btn btn-secondary" style="margin-top:20px;margin-bottom:20px;">Print Invoice</button>

            <div id="invoice" style="border:1px solid black">
                <div style="display:grid;grid-template-columns: 50% 50%;">
                    <div style="margin:10px 0px 10px 20px;">
                        <p style="margin-bottom: 0px;font-size: 10px;">Name : {{$invoice->client_name}}</p>
                        {{-- <p style="margin-bottom: 0px;font-size: 10px;">Address :</p>
                        <p style="margin-bottom: 0px;font-size: 10px;">GST No :</p> --}}
                        <p style="margin-bottom: 0px;font-size: 10px;">Invoice no : {{$invoice->invoice_no}}</p>
                        <p style="margin-bottom: 0px;font-size: 10px;">From Date : {{date('d M Y', strtotime( $invoice->from_date))}}</p>
                        <p style="margin-bottom: 0px;font-size: 10px;">To Date : {{date('d M Y', strtotime( $invoice->to_date))}}</p>
                        <p style="margin-bottom: 0px;font-size: 10px;">Invoice Date & Time : {{date('d M Y', strtotime( $invoice->payment_date))}} | {{$invoice->payment_time}}</p>
                        <p style="margin-bottom: 0px;font-size: 10px;">Payment Description : {{$invoice->payment_desc}}</p>
                        <p style="margin-bottom: 0px;font-size: 10px;">Payment Remarks : {{$invoice->remark}}</p>
                        <p style="margin-bottom: 0px;font-size: 10px;">TDS : {{number_format((float)$invoice->tds, 2, '.', '')}}</p>
                    </div>
    
                    <div style="margin:10px 0px 10px 0px;">
                        <p style="margin-bottom: 0px;font-size: 10px;">Company Name : GoFright.in</p>
                        <p style="margin-bottom: 0px;font-size: 10px;">Address : 1st main, Shabarinagar, Bytrayanapura, Bangalore -560092 India</p>
                        <p style="margin-bottom: 0px;font-size: 10px;">PAN No : CGNPM7441J</p>
                        <p style="margin-bottom: 0px;font-size: 10px;">GST No : 29CGNPM7441J1ZQ</p>
                        <p style="margin-bottom: 0px;font-size: 10px;">SAC Code : 996531</p>
                    </div>
                </div>
    
                <div style="display:grid;grid-template-columns: auto;margin:0px 5px 0px 5px;">
                    <p>EWB Details</p>
                    <table style="border:1px solid black">
                        <tr>
                            <th style="font-size: 10px;border:1px solid black;text-align: center;">No.</th>
                            <th style="font-size: 10px;border:1px solid black;text-align: center;">Date</th>
                            <th style="font-size: 10px;border:1px solid black;text-align: center;">AWB No</th>
                            <th style="font-size: 10px;border:1px solid black;text-align: center;">Shipper Name</th>
                            <th style="font-size: 10px;border:1px solid black;text-align: center;">Origin</th>
                            <th style="font-size: 10px;border:1px solid black;text-align: center;">Destination</th>
                            <th style="font-size: 10px;border:1px solid black;text-align: center;">Pcs</th>
                            <th style="font-size: 10px;border:1px solid black;text-align: center;">Gross Wt</th>
                            <th style="font-size: 10px;border:1px solid black;text-align: center;">Chgb Wt</th>
                            <th style="font-size: 10px;border:1px solid black;text-align: center;">Rate/ kg</th>
                            <th style="font-size: 10px;border:1px solid black;text-align: center;">Total Amt</th>
                            <th style="font-size: 10px;border:1px solid black;text-align: center;">Other Chgs</th>
                            <th style="font-size: 10px;border:1px solid black;text-align: center;">GST</th>
                            <th style="font-size: 10px;border:1px solid black;text-align: center;">Taxes GST/S&C</th>
                            <th style="font-size: 10px;border:1px solid black;text-align: center;">Grand Total</th>
                        </tr>

                        <?php $i = 0; 
                        ?>
                        @foreach ($ewb as $item)
                            <?php 
                       $source =  \App\Models\EwbSource::where(['ewb_id' => $item->id])->pluck('source_discount_amt')->first();
                            
                            $i++; ?>
                        <tr>
                            <td style="font-size: 9px;border:1px solid black;">{{ $i }}</td>
                            <td style="font-size: 9px;border:1px solid black;">{{ date('d M Y', strtotime($item->issuing_date)) }}</td>
                            <td style="font-size: 9px;border:1px solid black;">{{ $item->awb_no }}</td>
                            <td style="font-size: 9px;border:1px solid black;">{{ $item->shipper_name }}</td>
                            <td style="font-size: 9px;border:1px solid black;">{{ $item->origin }}</td>
                            <td style="font-size: 9px;border:1px solid black;">{{ $item->destination }}</td>

                            <td style="font-size: 9px;border:1px solid black;">{{ $item->no_of_pcs }}</td>
                            <td style="font-size: 9px;border:1px solid black;">{{ $item->gr_wt }}</td>
                            <td style="font-size: 9px;border:1px solid black;">{{ $item->chargable_wt }}</td>
                            <td style="font-size: 9px;border:1px solid black;">{{ $item->rate_kg }}</td>
                            <td style="font-size: 9px;border:1px solid black;">{{ $item->total_amt }}</td>
                            <td style="font-size: 9px;border:1px solid black;">{{number_format((float)$item->other_charges, 2, '.', '') }}</td>
                            <td style="font-size: 9px;border:1px solid black;">{{ $item->gst }}</td>
                            <td style="font-size: 9px;border:1px solid black;">{{number_format((float)$item->taxes_gst, 2, '.', '')}}</td>
                            <td style="font-size: 9px;border:1px solid black;">{{number_format((float)$source, 2, '.', '')  }}</td>
                            <td style="font-size: 9px;border:1px solid black;">{{number_format((float)$item->grand_total, 2, '.', '')  }}</td>
                        </tr>
                        @endforeach

                    </table>
                    <input type="hidden" class="invoiceInNumber" value="{{$sum_grandTotal}}">
                    <input type="hidden" class="amtPaidNumber" value="{{$invoice->amt_paid}}">

                    <p style="margin-bottom: 0px;font-size: 11px;">Total Invoice Amount To Pay : <span class="text-warning">₹{{number_format($sum_grandTotal, 2, '.', ',')}}</span> (<span class="invoiceInWords font-monospace fst-italic"></span> <span class="font-monospace fst-italic">only</span>)</p>
                    <p style="margin-bottom: 0px;font-size: 11px;">Amount Paid : ₹{{number_format($invoice->amt_paid, 2, '.', ',')}}</span> (<span class="amtPaidWords font-monospace fst-italic"></span> <span class="font-monospace fst-italic">only</span>)</p>
                </div>
    
                <div style="display:grid;grid-template-columns: auto;margin:0px 5px 20px 5px;">
                    <p style="margin-bottom: 0px;font-size: 13px;text-align: center;">Accounting Details</p>
                    <p style="margin-bottom: 0px;font-size: 9px;">GOFREIGHT.IN</p>
                    <p style="margin-bottom: 0px;font-size: 9px;">Bank Name : ICIC BANK</p>
                    <p style="margin-bottom: 0px;font-size: 9px;">Current A/c No : 060405500824</p>
                    <p style="margin-bottom: 0px;font-size: 9px;">IFSC Code : ICIC0000604</p>
                    <p style="margin-bottom: 0px;font-size: 9px;">Branch Name : Sahakaranagar Branch</p>
                    <p style="margin-bottom: 0px;font-size: 9px;">UPI ID : gofreight.in@icici</p>
                    <p style="margin-bottom: 0px;font-size: 9px;">Digital Signature : AUTHORISED</p>
                    
                    <hr style="margin: 7px 0;">
    
                    <p style="margin-bottom: 0px;font-size: 8px;">a. This tx invoice is issued in accordance with GST Act ad SST invoice rule.</p>
                    <p style="margin-bottom: 0px;font-size: 8px;">b. Difference, if any, must be notified within 7 days of receipt of bills.</p>
                    <p style="margin-bottom: 0px;font-size: 8px;">c. Please pa you bills amt within 10 days of recipt.</p>
                    <p style="margin-bottom: 0px;font-size: 8px;">d. Subject to Bangalore Judricition.</p>
                    <p style="margin-bottom: 0px;font-size: 8px;">e. Copt of terms & comditions is available on requst E&O.E.</p>
                </div>
            </div>

        </div>
		<script src="{{asset('frontend_assets/js/jquery.js')}}"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!--Generate Pdf script-->
        <script>
            function convertNumberToWords(num) {
                // Array of units as words
                var units = ["", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"];
                // Array of tens as words
                var tens = ["", "ten", "twenty", "thirty", "forty", "fifty", "sixty", "seventy", "eighty", "ninety"];
                // Array of special numbers as words
                var special = ["", "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen", "eighteen", "nineteen"];
                
                // Convert the number to a string
                var numString = num.toString();
                
                // Check for special cases
                if (num < 0 || isNaN(num)) {
                    return "Invalid number";
                }
                if (num === 0) {
                    return "zero";
                }
                if (num < 10) {
                    return units[num];
                }
                if (num < 20) {
                    return special[num % 10];
                }
                
                // Convert the number to an array of digits
                var digits = numString.split("");
                
                // Convert the array of digits to an array of words
                var words = [];
                var digitCount = digits.length;
                var index = 0;
                while (index < digitCount) {
                    var digit = parseInt(digits[index]);
                    if (digitCount - index === 4) {
                    words.push(units[digit]);
                    words.push("thousand");
                    } else if (digitCount - index === 3) {
                    words.push(units[digit]);
                    words.push("hundred");
                    } else if (digitCount - index === 2) {
                    if (digit === 1) {
                        words.push(special[parseInt(digits[index + 1])]);
                        break;
                    } else {
                        words.push(tens[digit]);
                    }
                    } else {
                    if (digit !== 0) {
                        words.push(units[digit]);
                    }
                    }
                    index++;
                }
                
                // Join the array of words and return the result
                return words.join(" ");
            }
        
            function numberToWords(number) {  
                var digit = ['zero', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine'];  
                var elevenSeries = ['ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen'];  
                var countingByTens = ['twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'];  
                var shortScale = ['', 'thousand', 'million', 'billion', 'trillion'];  
          
                number = number.toString(); number = number.replace(/[\, ]/g, ''); if (number != parseFloat(number)) return 'not a number'; var x = number.indexOf('.'); if (x == -1) x = number.length; if (x > 15) return 'too big'; var n = number.split(''); var str = ''; var sk = 0; for (var i = 0; i < x; i++) { if ((x - i) % 3 == 2) { if (n[i] == '1') { str += elevenSeries[Number(n[i + 1])] + ' '; i++; sk = 1; } else if (n[i] != 0) { str += countingByTens[n[i] - 2] + ' '; sk = 1; } } else if (n[i] != 0) { str += digit[n[i]] + ' '; if ((x - i) % 3 == 0) str += 'hundred '; sk = 1; } if ((x - i) % 3 == 1) { if (sk) str += shortScale[(x - i - 1) / 3] + ' '; sk = 0; } } if (x != number.length) { var y = number.length; str += 'point '; for (var i = x + 1; i < y; i++) str += digit[n[i]] + ' '; } str = str.replace(/\number+/g, ' '); return str.trim() + ".";  
          
            } 
        
            $(window).on("load", function() {
                // Code to run after all page elements have finished loading
                var invoiceInNumber = $('.invoiceInNumber').val()
                var amtPaidNumber = $('.amtPaidNumber').val()
        
                // var invoiceInWords = convertNumberToWords(parseInt(invoiceInNumber));
                // var amtPaidWords = convertNumberToWords(parseInt(amtPaidNumber));
        
                var invoiceInWords = numberToWords(parseInt(invoiceInNumber));
                var amtPaidWords = numberToWords(parseInt(amtPaidNumber));
        
                $('.invoiceInWords').text(invoiceInWords)
                $('.amtPaidWords').text(amtPaidWords)
        
            });
        
        
        
        </script>
       
       
       <script>
            var button = document.getElementById("button");
            var makepdf = document.getElementById("invoice");
          
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