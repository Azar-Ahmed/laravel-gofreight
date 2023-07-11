@extends('admin.includes.layout')
@section('page_title', 'Ewb Source')
    @section('container')
    <style>
        p{
            font-size: 15px;
        }
    </style>
    
    <div class="page-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Ewb Source</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Ewb Source Detail</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <a href="{{url('admin/vendor-source')}}" class="btn btn-primary float-end">Ewb Source List</a>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="row  g-0">
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex">
                                <div class="p-2 flex-grow-1">
                                        <h3 >{{$ewb_source_data->source_awb_no}}</h3>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h6>Ewb No:  <span class="fs-5">{{$ewb_source_data->ewb_no}}  </span></h6>

                                    <h6>Awb No:  <span class="fs-5">{{$ewb_source_data->source_awb_no}}  </span></h6>
                                    <h6>Service Type: <span class="fs-5">{{$ewb_source_data->source_service_type}}</span></h6>
                                    <h6>Date: <span class="fs-5">{{ date('d M Y', strtotime($ewb_source_data->airline_date)) }}</span></h6>
                                    <h6>Origin: <span>{{$ewb_source_data->source_origin}}</span></h6>
                                    <h6>Destination: <span>{{$ewb_source_data->source_destination}}</span></h6>
                                    <h6>Transit: <span>{{$ewb_source_data->source_transit}}</span></h6>
                                    <h6>No Of Pcs: <span>{{$ewb_source_data->source_no_of_pics}}</span></h6>
                                    <h6>Gross Weight: <span>{{$ewb_source_data->source_gross_wt}}</span></h6>
                                    <h6>Chargable Weight: <span>{{$ewb_source_data->source_chargeable_wt}}</span></h6>
                                    <h6>Freight Amt: <span>{{$ewb_source_data->source_freight_amt}}</span></h6>
                                    <h6>Other Charges: <span>{{$ewb_source_data->source_other_charges}}</span></h6>
                                </div>
                                <div class="col-md-6">
                                    {{-- <h6>Discount Kg:  <span class="fs-5">{{$ewb_source_data->source_discount_kg}}  </span></h6>
                                    <h6>Discount %: <span class="fs-5">{{$ewb_source_data->source_discount_percentage}}</span></h6> --}}
                                    <h6>Discount Type: <span>{{$ewb_source_data->source_discount_type}}</span></h6>
                                    <h6>Discount Value: <span>{{$ewb_source_data->source_discount_value	}}</span></h6>
                               
                                    <h6>GST: <span>{{$ewb_source_data->source_gst}}</span></h6>
                                    <h6>Awb Amt: <span>{{$ewb_source_data->source_awb_amt}}</span></h6>
                                    <h6>Discount Amt: <span>{{$ewb_source_data->source_discount_amt}}</span></h6>
                                </div>
                                <div class="col-md-12">
                                    <h5 class="my-3 fw-bold">AWB Copy :</h5>
                                    <div class="row">
                                        @foreach ($multiple_img as $images)
                                            <div class="col-md-2 text-center my-2">
                                                <a href="{{ url('uploads/ewb/source/'.$images->multiple_images) }}" target="_blank" data-lightbox="image-1" data-title="Slider Image">
                                                <img class="border border-primary" src="{{ url("uploads/ewb/source/".$images->multiple_images) }}" width="100px" height="100px"></a> <br>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="row justify-content-center ">
                                    <div class="col-md-12 my-5">
                                        <div class="card border">
                                            <div class="card-header">
                                                <h3 class="m-0">EWB Bill Outsource</h3>
                                            </div>
                                            <div class="card-body">

                                                <div class="table-responsive">
                                                    <table id="example2" class="table table-striped table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Vendor Name</th>
                                                                <th>Pick Up Amount</th>
                                                                <th>AWB Amount</th>
                                                                <th>Delivery Amount</th>
                                                                <th>TSP Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php $i = 0; ?>
                                                            @foreach ($out_source as $item)
                                                                <tr>
                                                                    <td>1</td>
                                                                    <td>{{ $item->outsources_vendor_name1 }}</td>
                                                                    <td>{{ $item->outsources_pickup_amt1 }}</td>
                                                                    <td>{{ $item->outsources_awb_amt1 }}</td>
                                                                    <td>{{ $item->outsources_delivery_amt1 }}</td>
                                                                    <td>{{ $item->outsources_tsp_amt1 }}</td>
                                                                </tr>  
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>{{ $item->outsources_vendor_name2 }}</td>
                                                                    <td>{{ $item->outsources_pickup_amt2 }}</td>
                                                                    <td>{{ $item->outsources_awb_amt2 }}</td>
                                                                    <td>{{ $item->outsources_delivery_amt2 }}</td>
                                                                    <td>{{ $item->outsources_tsp_amt2 }}</td>
                                                                </tr>  
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>{{ $item->outsources_vendor_name3 }}</td>
                                                                    <td>{{ $item->outsources_pickup_amt3 }}</td>
                                                                    <td>{{ $item->outsources_awb_amt3 }}</td>
                                                                    <td>{{ $item->outsources_delivery_amt3 }}</td>
                                                                    <td>{{ $item->outsources_tsp_amt3 }}</td>
                                                                </tr>  
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>{{ $item->outsources_vendor_name4 }}</td>
                                                                    <td>{{ $item->outsources_pickup_amt4 }}</td>
                                                                    <td>{{ $item->outsources_awb_amt4 }}</td>
                                                                    <td>{{ $item->outsources_delivery_amt4 }}</td>
                                                                    <td>{{ $item->outsources_tsp_amt4 }}</td>
                                                                </tr> 
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>{{ $item->outsources_vendor_name5 }}</td>
                                                                    <td>{{ $item->outsources_pickup_amt5 }}</td>
                                                                    <td>{{ $item->outsources_awb_amt5 }}</td>
                                                                    <td>{{ $item->outsources_delivery_amt5 }}</td>
                                                                    <td>{{ $item->outsources_tsp_amt5 }}</td>
                                                                </tr>  
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>


                                             <div class="row justify-content-center mt-3">
                                                <div class="col-md-3">
                                                    <div class="card text-center">
                                                        <div class="card-header">
                                                            <h6>Total Pick-Up Amount</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <h6 class="fw-bold mt-1 mb-0">{{$ewb_source_data->source_total_pickup}}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card text-center">
                                                        <div class="card-header">
                                                            <h6>Total AWB Amount</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <h6 class="fw-bold mt-1 mb-0">{{$ewb_source_data->source_total_awb}}</h6>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card text-center">
                                                        <div class="card-header">
                                                            <h6>Total Delivery Amount</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <h6 class="fw-bold mt-1 mb-0">{{$ewb_source_data->source_total_delivery}}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="card text-center">
                                                        <div class="card-header">
                                                            <h6>Total TSP Amount</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <h6 class="fw-bold mt-1 mb-0">{{$ewb_source_data->source_total_tsp}}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                             </div>
                                             <div class="row justify-content-center mt-5">
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <h6>Total Amt:  <span class="fs-5">{{$ewb_source_data->source_total_amt}}  </span></h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                        <h6>Vikas:  <span class="fs-5">{{$ewb_source_data->source_vikas}}  </span></h6>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="card">
                                                        <div class="card-body">
                                                        <h6>Profit & Loss:  <span class="fs-5">{{$ewb_source_data->source_profit_loss}}  </span></h6>

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
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
@section('custom_script')
@endsection