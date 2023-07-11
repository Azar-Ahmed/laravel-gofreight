@extends('admin.includes.layout')
@section('page_title', 'Quotation')
    @section('container')

{{-- <style>
.dropbtn {
background-color: #f9f9f9;
color: #0f0f0f;
padding: 16px;
font-size: 16px;
border: none;
cursor: pointer;
min-width: 160px;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown {
position: relative;
display: inline-block;
}

.dropdown-content {
position: absolute;
background-color: #f9f9f9;
box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
z-index: 98;
max-height: 0;
min-width: 160px;
transition: max-height 0.15s ease-out;
overflow: hidden;
}

.dropdown-content a {
color: black;
background-color: #f9f9f9;
padding: 12px 16px;
text-decoration: none;
display: block;
}

.dropdown-content a:hover {
background-color: #e2e2e2;
}

.dropdown:hover .dropdown-content {
max-height: 500px;
min-width: 160px;
transition: max-height 0.25s ease-in;
}

.dropdown:hover .dropbtn {
background-color: #f9f9f9;
border-bottom: 1px solid #e0e0e0;
transition: max-height 0.25s ease-in;
}
</style> --}}

<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Quotation</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Quotation's List</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <?php $id = 'add'; ?>
            <a href="{{url('admin/quotation-form/'.$id)}}" class="btn btn-primary float-end">Add Quotation</a>
        </div>
    </div>
    <!--end breadcrumb-->
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a class="btn {{ request()->is('admin/quotation*') ? 'btn-primary' : 'btn-outline-dark' }} m-1 btn-sm" href="{{url('admin/quotation')}}">All Order's</a>
            <a class="btn {{ request()->is('quotation/quotation-request*') ? 'btn-primary' : 'btn-outline-dark' }} m-1 btn-sm" href="{{url('quotation/quotation-request')}}">Quotation Request</a>
            <a class="btn {{ request()->is('quotation/send-quote*') ? 'btn-primary' : 'btn-outline-dark' }} m-1 btn-sm" href="{{url('quotation/send-quote')}}">Send Quote To Customer</a>
            <a class="btn {{ request()->is('quotation/customer-approved*') ? 'btn-primary' : 'btn-outline-dark' }} m-1 btn-sm" href="{{url('quotation/customer-approved')}}">Customer Approved</a>
            <a class="btn {{ request()->is('quotation/customer-unapproved*') ? 'btn-primary' : 'btn-outline-dark' }} m-1 btn-sm" href="{{url('quotation/customer-unapproved')}}">Customer Unapproved</a>
            <a class="btn {{ request()->is('quotation/cargo-on-hand*') ? 'btn-primary' : 'btn-outline-dark' }} m-1 btn-sm" href="{{url('quotation/cargo-on-hand')}}">Cargo On Hand</a>
            <a class="btn {{ request()->is('quotation/ewb-bill*') ? 'btn-primary' : 'btn-outline-dark' }} m-1 btn-sm" href="{{url('quotation/ewb-bill')}}">Ewb Bill</a>
        </div>
    </div>
    {{-- @if (session('success_msg'))
        <p class="message text-primary fw-bold fs-4 mb-0 text-uppercase">{{ session('success_msg') }}</p>                                          
    @endif --}}
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example2" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Pickup Date</th>
                            <th>Pickup City</th>
                            <th>Delivery City</th>
                            <th>Mode of Shipment</th>
                            <th>Nature Of Goods</th>
                            <th>No of Pcs</th>
                            <th>Chargable Weight</th>
                            <th>Charges Per K.g</th>
                            <th>Total Cost</th>
                            <th>Progress</th>
                            <th>Tracking</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($data as $item)
                            <?php $i++; ?>
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ date('d M Y', strtotime($item->pickup_date)) }}</td>
                                <td>{{ $item->pickup_city }}</td>
                                <td>{{ $item->delivery_city }}</td>
                                <td>
                                    <?php 
                                    $service_mode = str_replace("-", " ", $item->service_mode);
                                    echo $service_mode; 
                                    ?>
                                    </td>
                                <td>{{ $item->goods_nature }}</td>
                                <td>
                                    {{
                                       $no_pcs =  \App\Models\QuoteDimention::where('quote_id', $item->id)->sum('total_box');
                                    }}
                                </td>
                                <td>
                                    @if ($item->chargeable_weight == null)
                                        Pending
                                    @else
                                    {{ number_format((float)$item->chargeable_weight, 2, '.', '')}}
                                </td>
                                    @endif
                                <td>
                                    @if ($item->chargeable_weight < 45)
                                    {{ number_format((float)$item->rate_other, 2, '.', '')}}

                                
                                    @elseif($item->chargeable_weight >= 45 && $item->chargeable_weight < 100)
                                    {{ number_format((float)$item->rate_45kg, 2, '.', '')}}
                                
                                    @elseif($item->chargeable_weight >= 100 &&  $item->chargeable_weight < 250)
                                    {{ number_format((float)$item->rate_100kg, 2, '.', '')}}
                                
                                    @elseif($item->chargeable_weight >= 250 &&  $item->chargeable_weight < 500)
                                    {{ number_format((float)$item->rate_250kg, 2, '.', '')}}
                                
                                    @elseif($item->chargeable_weight >= 500)
                                    {{ number_format((float)$item->rate_500kg, 2, '.', '')}}

                                    @else
                                   Pending

                                @endif 
                                </td>
                                <td>
                                    <?php $total_cost =  \App\Models\EwbBill::select('grand_total')->where('quote_id', $item->id)->get();  ?>
                                    @foreach ($total_cost as $grand)
                                   {{ number_format((float)$grand->grand_total, 2, '.', '')}}
                                    @endforeach
                                </td>
                                <td class="text-uppercase">
                                    <?php 
                                    $progress = str_replace("-", " ", $item->progress);
                                    echo $progress; 
                                    ?>
                                </td>
                                <td>
                                    @php
                                    $value_qoute = \App\Models\EwbBill::where('quote_id', $item->id)->get();
                                    foreach ($value_qoute as $key => $value) {
                                        if($value->tracking){
                                            echo $value->tracking;
                                        }
                                    }
                                     @endphp
                                </td>
                                <td class="text-center">
                                    {{-- Edit --}}
                                      <a href="{{ url('admin/quotation-form/'.$item->id) }}" class="m-1" title="Edit"><i class="fa-solid fa-pen-to-square fa-lg"></i></a>
                                    {{-- View --}}
                                      <a href="{{ url('quotation-view/'.$item->id) }}" title="View" class="text-warning m-1"><i class="fa-solid fa-eye fa-lg"></i></a>
                                    {{-- Delete --}}
                                     <a href="{{ url('quotation-delete/'.$item->id)}}" title="Delete" class="text-danger" onclick="return checkDelete()"><i class="fa-solid fa-trash fa-lg"></i></a>
                                </td>
                            </tr>  
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>



    @endsection
@section('custom_script')
<script>

        $(document).ready(function () {
         
        });
    </script>   
@endsection