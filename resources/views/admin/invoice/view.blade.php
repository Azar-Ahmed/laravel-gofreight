@extends('admin.includes.layout')
@section('page_title', 'Invoice')
    @section('container')
    <style>
        p{
            font-size: 15px;
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
                        <li class="breadcrumb-item active" aria-current="page">Invoice Detail </li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <a href="{{url('admin/invoice')}}" class="btn btn-primary float-end">Invoice List</a>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="row g-0">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <div class="p-2 flex-grow-1">
                                        <h3 >{{$invoice->client_name}}
                                            @if ($invoice->invoice_status == 'Paid')
                                                <small class="text-success fs-5">Paid</small>
                                            @elseif ($invoice->invoice_status == 'Pending')
                                                <small class="text-danger fs-5">Pending</small>
                                            @endif
                                        </h3>
                                        <a href="{{ url('admin/invoice-print/'.$invoice->id) }}" title="Print" class="btn btn-warning m-1">Print Invoice</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5> <span> Client Name: </span>  {{$invoice->client_name}}</h5>
                                    <h5>Address: <span></span></h5>
                                    <h5>GST No: <span></span></h5>
                                    <h5>Invoice No: <span>{{$invoice->invoice_no}}</span></h5>
                                    <h5>From Date: <span>{{date('d M Y', strtotime( $invoice->from_date))}}</span></h5>
                                    <h5>To Date: <span>{{date('d M Y', strtotime( $invoice->to_date))}}</span></h5>
                                    <h5>Invoice Date: <span>{{date('d M Y', strtotime( $invoice->payment_date))}} | {{$invoice->payment_time}}</span></h5>
                                    <h5>Payment Decription: <span>{{$invoice->payment_desc}}</span></h5>
                                    <h5>Payment Remark: <span>{{$invoice->remark}}</span></h5>
                                    <h5>TDS: <span>{{number_format((float)$invoice->tds, 2, '.', '')}}</span></h5>

                                </div>
                                <div class="col-md-6">
                                    <h5>Company Name : <span>Gofreight.in</span></h5>
                                    <h5>Address : <span>1st main , sahakaranagar p.o, bangalore- 92</span></h5>
                                    <h5>PAN No : <span>CGNPM7441J</span></h5>
                                    <h5>GST No : <span>29CGNPM7441J1ZQ</span></h5>
                                    <h5>SAC Code :<span>996531</span></h5>
                                </div>
                                <div class="col-md-12 my-5">
                                    <div class="card border">
                                        <div class="card-header">
                                            <h3 class="m-0">EWB Bill</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover"> 
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Date</th>
                                                            <th scope="col">Awb No</th>
                                                            <th scope="col">Shipper Name</th>
                                                            <th scope="col">Origin</th>
                                                            <th scope="col">Destination</th>
                                                            <th scope="col">Pics</th>
                                                            <th scope="col">Gross Wt</th>
                                                            <th scope="col">Chargable Wt</th>
                                                             <th scope="col">Rate Kg</th>
                                                            <th scope="col">Total Amt</th>
                                                            <th scope="col">Other Charges</th>
                                                            <th scope="col">GST</th>
                                                            <th scope="col">Taxes GST/ S & C</th>
                                                            <th scope="col">Discount</th>
                                                            <th scope="col">Grand Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        <?php $i = 0; 
                                                        ?>
                                                        @foreach ($ewb as $item)
                                                            <?php 
                                                       $source =  \App\Models\EwbSource::where(['ewb_id' => $item->id])->pluck('source_discount_amt')->first();
                                                            
                                                            $i++; ?>
                                                            <tr>
                                                                <td>{{ $i }}</td>
                                                                <td>{{ date('d M Y', strtotime($item->issuing_date)) }}</td>
                                                                <td>{{ $item->awb_no }}</td>
                                                                <td>{{ $item->shipper_name }}</td>
                                                                <td>{{ $item->origin }}</td>
                                                                <td>{{ $item->destination }}</td>

                                                                <td>{{ $item->no_of_pcs }}</td>
                                                                <td>{{ $item->gr_wt }}</td>
                                                                <td>{{ $item->chargable_wt }}</td>
                                                                <td>{{ $item->rate_kg }}</td>
                                                                <td>{{ $item->total_amt }}</td>
                                                                <td>{{number_format((float)$item->other_charges, 2, '.', '') }}</td>
                                                                <td>{{ $item->gst }}</td>
                                                                <td>{{number_format((float)$item->taxes_gst, 2, '.', '')}}</td>
                                                                <td>{{number_format((float)$source, 2, '.', '')  }}</td>
                                                                <td>{{number_format((float)$item->grand_total, 2, '.', '')  }}</td>
                                                            </tr>  
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                            <input type="hidden" class="invoiceInNumber" value="{{$sum_grandTotal}}">
                                            <input type="hidden" class="amtPaidNumber" value="{{$invoice->amt_paid}}">

                                            <h5 class="mt-4">Total Invoice Amount To Pay : <span class="text-warning fs-3">₹{{number_format($sum_grandTotal, 2, '.', ',')}}</span> (<span class="invoiceInWords font-monospace fst-italic fs-6"></span> <span class="font-monospace fst-italic fs-6">only</span>)</h5>
                                            <h5>Amount Paid : <span class="text-warning fs-3">₹{{number_format($invoice->amt_paid, 2, '.', ',')}}</span> (<span class="amtPaidWords font-monospace fst-italic fs-6"></span> <span class="font-monospace fst-italic fs-6">only</span>) </h5>
                                      
                                        </div>
                                    </div>
                                
                                </div>

                                <div class="col-md-12">
                                    <h4 class="mb-3 text-center fw-bold">Accounting Details</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>GFREIGHT.IN</h5>
                                            <h5>Bank Name : <span>ICIC BANK</span></h5>
                                            <h5>Current A/c No : <span>060405500824</span></h5>
                                            <h5>IFSC Code : <span>ICIC0000604</span></h5>
                                            <h5>Branch Name : <span>Sahakaranagar Branch</span></h5>
                                            <h5>UPI ID : <span>gofreight.in@icici</span></h5>
                                            <h5>Digital Signature : <span>AUTHORISED</span></h5>
                                            <hr>
                                            <h6>a) This tx invoice is issued in accordance with GST Act ad SST invoice rule.</h6>
                                            <h6>b) Difference, if any, must be notified within 7 days of receipt of bills</h6>
                                            <h6>c) Please pa you bills amt within 10 days of recipt</h6>
                                            <h6>d) Subject to Bangalore Judricition</h6>
                                            <h6>e) Copt of terms & comditions is available on requst E&O.E
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
@section('custom_script')
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
@endsection