@extends('admin.includes.layout')
@section('page_title', 'Quotation')
    @section('container')
    <style>
        p{
            font-size: 15px;
        }
    </style>
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Quotation</div>
          <div class="ps-3">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mb-0 p-0">
                      <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page"> Quotation Detail</li>
                  </ol>
              </nav>
          </div>
          <div class="ms-auto">
              <a href="{{url('admin/quotation')}}" class="btn btn-primary float-end">Quotation's List</a>
          </div>
      </div>
      <!--end breadcrumb-->
      {{-- <div class="card">
        <div class="row g-0">
          <div class="col-md-12 border-end">

          </div>
        </div>
      </div> --}}
      <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex">
                        <div class="p-2 flex-grow-1">
                            @foreach ($quotation as $item)
                                <h3 >{{$item->name}}
                                    <?php $progress = str_replace("-", " ", $item->progress); ?>
                                                
                                    <small class="fs-5 text-uppercase" title="Status">({{$progress}})</small>
                                    @if ($item->status == 1)
                                        <small class="text-success fs-5" title="Status"><i class="fa-solid fa-circle-check"></i></small>
                                    @elseif ($item->status == 0)
                                        <small class="text-danger fs-5" title="Status"><i class="fa-solid fa-circle-xmark"></i></small>
                                    @endif
                                </h3>
                            @endforeach
                        </div>
                    </div>
                    {{-- <hr class="my-3"> --}}
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($quotation as $quotation_detail)
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-6">
                                    <h4 class="my-3 fw-bold">PickUp Address :</h4>
                                        <h6 class="my-3 fw-bold">Addres 1</h6>
                                        <p>{{$quotation_detail->pickup_address_one}}</p>
                                        <h6 class="my-3 fw-bold">Addres 2</h6>
                                        <p>{{$quotation_detail->pickup_address_two}}</p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h6 class="my-3 fw-bold">City</h6>
                                                <p>{{$quotation_detail->pickup_city}}</p>
                                            </div>
                                            <div class="col-md-4">
                                                <h6 class="my-3 fw-bold">State</h6>
                                                <p>{{$quotation_detail->pickup_state}}</p>
                                            </div>
                                            <div class="col-md-4">
                                                <h6 class="my-3 fw-bold">Pincode</h6>
                                                <p>{{$quotation_detail->pickup_pincode}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                <h4 class="my-3 fw-bold">Delivery Address :</h4>

                                        <h6 class="my-3 fw-bold">Addres 1</h6>
                                        <p>{{$quotation_detail->delivery_address_one}}</p>
                                        <h6 class="my-3 fw-bold">Addres 2</h6>
                                        <p>{{$quotation_detail->delivery_address_two}}</p>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <h6 class="my-3 fw-bold">City</h6>
                                                <p>{{$quotation_detail->delivery_city}}</p>
                                            </div>
                                            <div class="col-md-4">
                                                <h6 class="my-3 fw-bold">State</h6>
                                                <p>{{$quotation_detail->delivery_state}}</p>
                                            </div>
                                            <div class="col-md-4">
                                                <h6 class="my-3 fw-bold">Pincode</h6>
                                                <p>{{$quotation_detail->delivery_pincode}}</p>
                                            </div>
                                        </div>
                                     </div>
                                </div>
                            </div>
                            <hr class="my-3">
                            <div class="col-md-12">
                                <h4 class="my-3 fw-bold">Service Mode :</h4>
                                <div class="row">
                                    <div class="col-md-4">
                                        <h6 class="my-3 fw-bold">Pickup Date:</h6>
                                        <p>{{ date('d M Y', strtotime($quotation_detail->pickup_date)) }}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="my-3 fw-bold">Service Mode:</h6>
                                        <?php $service_mode = str_replace("-", " ", $quotation_detail->service_mode); ?>
                                        <p>{{$service_mode}}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="my-3 fw-bold">Nature of Goods:</h6>
                                        <p>{{$quotation_detail->goods_nature}}</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-3">
                            <div class="col-md-12">
                                <h4 class="my-3 fw-bold">Dimentions Value:</h4>   
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-bordered ">
                                        <thead>
                                          <tr>
                                            <th scope="col">No of Box</th>
                                            <th scope="col">Length in cm</th>
                                            <th scope="col">Breath in cm</th>
                                            <th scope="col">Height in cm</th>
                                            <th scope="col">Weight in cm</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($quote_dimention as $item)
                                          <tr>
                                            <td>{{ $item->total_box }}</td>
                                            <td>{{ $item->box_length }}</td>
                                            <td>{{ $item->box_breath }}</td>
                                            <td>{{ $item->box_height }}</td>
                                            <td>{{ $item->box_weight }}</td>
                                         </tr>
                                        @endforeach
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                            <hr class="my-3">
                            <div class="col-md-12">
                                <h4 class="my-3 fw-bold">Weight Calculations :</h4>
                                <div class="row justify-content-center">
                                    <div class="col-md-4">
                                        <h6 class="my-3 fw-bold">Gross Weight:</h6>
                                        <p>{{$quotation_detail->gross_weight}}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="my-3 fw-bold">Volumetric Weight:</h6>
                                        <p>{{$quotation_detail->volumetric_weight}}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <h6 class="my-3 fw-bold">Chargeable Weight:</h6>
                                        <p>{{$quotation_detail->chargeable_weight}}</p>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-3">
                            <div class="col-md-6">
                                <h4 class="my-3 fw-bold">Value of Product :</h4>
                                 <p>{{$quotation_detail->product_value}}</p>
                            </div>
                            <div class="col-md-6">
                                <h4 class="my-3 fw-bold">Notes :</h4>
                                 <p>{{$quotation_detail->notes}}</p>
                            </div>

                            
                            <hr class="my-3">

                            <div class="col-md-12">
                                <h4 class="my-3 fw-bold">Images :</h4>
                                <div class="row">
                                    @foreach ($multiple_img as $images)
                                        <div class="col-md-3 text-center my-2">
                                            <a href="{{ url('uploads/quotations/'.$images->multiple_images) }}" target="_blank" data-lightbox="image-1" data-title="Slider Image">
                                            <img class="border border-primary" src="{{ url("uploads/quotations/".$images->multiple_images) }}" width="100px" height="100px"></a> <br>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  

    @endsection
@section('custom_script')
@endsection