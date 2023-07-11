@extends('admin.includes.layout')
@section('page_title', 'Quotation')
@section('container')
    <style>+
        .latest_img {
            max-width: 180px;
        }
        input[type=file] {
            padding: 10px;
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
                    <li class="breadcrumb-item active" aria-current="page"> @if ($id >  0)
                        Update Quotation
                    @else
                        Add Quotation
                    @endif</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <a href="{{url('admin/quotation')}}" class="btn btn-primary float-end">Quotation's List</a>
        </div>
    </div>
    <!--end breadcrumb-->
    {{-- form --}}
    <div class="row">
        <div class="col-xl-12 mx-auto">
            {{-- <h6 class="mb-0 text-uppercase">Personal Details</h6> --}}
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded">
                        <form id="quote_form" method="POST" action="{{ url('admin/quotation/save') }}"enctype="multipart/form-data" autocomplete="off">
                            @csrf
                            <input type="hidden" name="id" value="{{ $id }}">
                            <div class="row">
                                <div class="col-md-6">
                                        <h5 class="fw-bold mb-3">Select User</h5>
                                        <div class="mb-3">
                                            <select class="form-select form-select-lg border border-dark border-1 user_name"
                                                name="user_id" aria-label="Default select example">
                                                <option selected disabled>Select User</option>
                                                @foreach ($users as $user)
                                                    @if ($user->id == $user_id)
                                                        <option value="{{ $user->id }}" selected>
                                                            {{ $user->name }}</option>
                                                    @else
                                                        <option value="{{ $user->id }}">{{ $user->name }}
                                                        </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                        @if ($id > 0)
                        <div class="col-md-6">
                            <h5 class="fw-bold mb-3">Quotation Status</h5>
                             <select class="form-select form-select-lg border border-dark border-1 progress_status" data-id="{{$id}}" aria-label="Default select example">
                                @if ($progress == 'quotation-request')
                                    <option  disabled>Select Progress</option>
                                    <option value="quotation-request" selected>Quotation Request</option>
                                    <option value="send-quote">Send Quote By Admin</option>
                                    <option value="customer-approved">Customer Approved</option>
                                    <option value="customer-unapproved">Customer Unapproved</option>
                                    <option value="cargo-on-hand">Cargo On Hand</option>
                                    <option value="ewb-bill">EWB Bill</option>
                                @elseif($progress == 'send-quote')
                                    <option  disabled>Select Progress</option>
                                    <option value="quotation-request">Quotation Request</option>
                                    <option value="send-quote" selected>Send Quote By Admin</option>
                                    <option value="customer-approved">Customer Approved</option>
                                    <option value="customer-unapproved">Customer Unapproved</option>
                                    <option value="cargo-on-hand">Cargo On Hand</option>
                                    <option value="ewb-bill">EWB Bill</option>
                                @elseif($progress == 'customer-approved')
                                    <option  disabled>Select Progress</option>
                                    <option value="quotation-request">Quotation Request</option>
                                    <option value="send-quote">Send Quote By Admin</option>
                                    <option value="customer-approved" selected>Customer Approved</option>
                                    <option value="customer-unapproved">Customer Unapproved</option>
                                    <option value="cargo-on-hand">Cargo On Hand</option>
                                    <option value="ewb-bill">EWB Bill</option>
                                @elseif($progress == 'customer-unapproved')
                                    <option  disabled>Select Progress</option>
                                    <option value="quotation-request">Quotation Request</option>
                                    <option value="send-quote">Send Quote By Admin</option>
                                        <option value="customer-approved" >Customer Approved</option>
                                    <option value="customer-unapproved" selected>Customer Unapproved</option>
                                    <option value="cargo-on-hand">Cargo On Hand</option>
                                    <option value="ewb-bill">EWB Bill</option>    
                                @elseif($progress == 'cargo-on-hand')
                                    <option  disabled>Select Progress</option>
                                    <option value="quotation-request">Quotation Request</option>
                                    <option value="send-quote">Send Quote By Admin</option>
                                    <option value="customer-approved">Customer Approved</option>
                                    <option value="customer-unapproved">Customer Unapproved</option>
                                    <option value="cargo-on-hand" selected>Cargo On Hand</option>
                                    <option value="ewb-bill">EWB Bill</option>
                                @elseif($progress == 'ewb-bill')
                                    <option  disabled>Select Progress</option>
                                    <option value="quotation-request">Quotation Request</option>
                                    <option value="send-quote">Send Quote By Admin</option>
                                    <option value="customer-approved">Customer Approved</option>
                                    <option value="customer-unapproved">Customer Unapproved</option>
                                    <option value="cargo-on-hand" >Cargo On Hand</option>
                                    <option value="ewb-bill" selected>EWB Bill</option> 
                                @else
                                    <option selected disabled>Select Progress</option>
                                    <option value="quotation-request">Quotation Request</option>
                                    <option value="send-quote">Send Quote By Admin</option>
                                    <option value="customer-approved">Customer Approved</option>
                                    <option value="customer-unapproved">Customer Unapproved</option>
                                    <option value="cargo-on-hand">Cargo On Hand</option>
                                    <option value="ewb-bill">EWB Bill</option>
                                @endif
                            </select>
                            @if ($progress == 'ewb-bill')
                            <a href="{{url('admin/ewb-bill/'.$id)}}" target="_blank" class="btn btn-primary mt-3">Generate EWB Bill</a>
                            @endif
                            <p class="progress_message mt-3 mb-0 fs-4 text-success"></p>
                        </div>
                        @endif
                            
                            </div>
                            <hr class="my-5">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <h5 class="fw-bold mb-4">PickUp Details</h5>

                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label text-dark">Name</label>
                                      
                                        @if ($id > 0)
                                            @foreach ($users as $user)
                                                @if ($user->id == $user_id)
                                                    <input type="text" class="form-control border border-dark border-1 pickup_name" name="pickup_name" value="{{ $user->name }}">
                                                @endif
                                            @endforeach
                                        @else
                                            <input type="text" class="form-control border border-dark border-1 pickup_name" name="pickup_name">
                                        @endif
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label text-dark">Phone Number</label>
                                        <input type="number" class="form-control border border-dark border-1" name="pickup_mobile" value="{{$pickup_mobile}}">

                                    </div>
                                    {{-- Address --}}
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label text-dark">Address
                                            1:</label>
                                        <textarea class="form-control border border-dark border-1" name="pickup_address_one" style="height: 50px">{{ $pickup_address_one }}</textarea>
                                        <p class="text-danger" style="margin-left: 10px">
                                            @error('pickup_address_one')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label text-dark">Address
                                            2:</label>
                                        <textarea class="form-control border border-dark border-1" name="pickup_address_two" style="height: 50px">{{ $pickup_address_two }}</textarea>
                                        <p class="text-danger" style="margin-left: 10px">
                                            @error('pickup_address_two')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-dark">City</label>
                                                <input type="text"
                                                    class="form-control border border-dark border-1"
                                                    name="pickup_city" value="{{ $pickup_city }}"
                                                    placeholder="City">
                                                <p class="text-danger" style="margin-left: 10px">
                                                    @error('pickup_city')
                                                        {{ $message }}
                                                    @enderror
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-dark">State</label>
                                                <input type="text"
                                                    class="form-control border border-dark border-1"
                                                    name="pickup_state" value="{{ $pickup_state }}"
                                                    placeholder="State">
                                                <p class="text-danger" style="margin-left: 10px">
                                                    @error('pickup_state')
                                                        {{ $message }}
                                                    @enderror
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-dark">Pincode</label>
                                                <input type="text"
                                                    class="form-control border border-dark border-1"
                                                    name="pickup_pincode" value="{{ $pickup_pincode }}"
                                                    placeholder="Pincode">
                                                <p class="text-danger" style="margin-left: 10px">
                                                    @error('pickup_pincode')
                                                        {{ $message }}
                                                    @enderror
                                                </p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="fw-bold mb-4">Delivery Details</h5>
                                    {{-- Address --}}
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1"
                                            class="form-label text-dark">Name</label>
                                        <input type="text"  class="form-control border border-dark border-1 delivery_name" name="delivery_name"  value="{{ $delivery_name }}">
                                        <p class="text-danger" style="margin-left: 10px">
                                            @error('delivery_name'){{ $message }}@enderror
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label text-dark">Phone Number</label>
                                        <input type="number" class="form-control border border-dark border-1" name="delivery_mobile" value="{{$delivery_mobile}}">

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label text-dark">Address
                                            1:</label>
                                        <textarea class="form-control border border-dark border-1" name="delivery_address_one" style="height: 50px">{{ $delivery_address_one }}</textarea>
                                        <p class="text-danger" style="margin-left: 10px">
                                            @error('delivery_address_one')
                                                {{ $message }}
                                            @enderror
                                        </p>

                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label text-dark">Address
                                            2:</label>
                                        <textarea class="form-control border border-dark border-1" name="delivery_address_two" style="height: 50px">{{ $delivery_address_two }}</textarea>
                                        <p class="text-danger" style="margin-left: 10px">
                                            @error('delivery_address_two')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-dark">City</label>
                                                <input type="text"
                                                    class="form-control border border-dark border-1"
                                                    name="delivery_city" value="{{ $delivery_city }}"
                                                    placeholder="City">
                                                <p class="text-danger" style="margin-left: 10px">
                                                    @error('delivery_city')
                                                        {{ $message }}
                                                    @enderror
                                                </p>

                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-dark">State</label>
                                                <input type="text"
                                                    class="form-control border border-dark border-1"
                                                    name="delivery_state" value="{{ $delivery_state }}"
                                                    placeholder="State">
                                                <p class="text-danger" style="margin-left: 10px">
                                                    @error('delivery_state')
                                                        {{ $message }}
                                                    @enderror
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label text-dark">Pincode</label>
                                                <input type="text"
                                                    class="form-control border border-dark border-1"
                                                    name="delivery_pincode" value="{{ $delivery_pincode }}"
                                                    placeholder="Pincode">
                                                <p class="text-danger" style="margin-left: 10px">
                                                    @error('delivery_pincode')
                                                        {{ $message }}
                                                    @enderror
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-5">
                            <div class="row justify-content-center">
                                <h5 class="fw-bold mb-4">Service Mode</h5>

                                {{-- Pickup Data --}}
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label text-dark">Pickup
                                            Date:</label>
                                        <input type="date" class="form-control border border-dark border-1"
                                            name="pickup_date" value="{{ $pickup_date }}"
                                            placeholder="Pickup Date:">
                                        <p class="text-danger" style="margin-left: 10px">
                                            @error('pickup_date')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>

                                {{-- Service Mode --}}
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Service Mode</label>
                                        <select class=" form-select border border-dark border-1"
                                            name="service_mode" aria-label="Default select example">
                                            @if ($service_mode == 'door-to-door')
                                                <option value="" disabled>Select Service</option>
                                                <option value="door-to-door" selected>Door to Door</option>
                                                <option value="door-to-port">Door to Port</option>
                                                <option value="port-to-port">Port to Port</option>
                                                <option value="port-to-door">Port to Door</option>
                                            @elseif($service_mode == 'door-to-port')
                                                <option value="" disabled>Select Service</option>
                                                <option value="door-to-door">Door to Door</option>
                                                <option value="door-to-port" selected>Door to Port</option>
                                                <option value="port-to-port">Port to Port</option>
                                                <option value="port-to-door">Port to Door</option>
                                            @elseif($service_mode == 'port-to-port')
                                                <option value="" disabled>Select Service</option>
                                                <option value="door-to-door">Door to Door</option>
                                                <option value="door-to-port">Door to Port</option>
                                                <option value="port-to-port" selected>Port to Port</option>
                                                <option value="port-to-door">Port to Door</option>
                                            @elseif($service_mode == 'port-to-door')
                                                <option value="" disabled>Select Service</option>
                                                <option value="door-to-door">Door to Door</option>
                                                <option value="door-to-port">Door to Port</option>
                                                <option value="port-to-port">Port to Port</option>
                                                <option value="port-to-door" selected>Port to Door</option>
                                            @else
                                                <option value="" selected disabled>Select Service</option>
                                                <option value="door-to-door">Door to Door</option>
                                                <option value="door-to-port">Door to Port</option>
                                                <option value="port-to-port">Port to Port</option>
                                                <option value="port-to-door">Port to Door</option>
                                            @endif
                                        </select>
                                        <p class="text-danger" style="margin-left: 10px">
                                            @error('service_mode')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                                {{-- Nature of Goods --}}
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Nature of Goods</label>
                                        <input type="text" class="form-control border border-dark border-1"
                                            name="goods_nature" value="{{ $goods_nature }}"
                                            placeholder="Nature of Goods">
                                        <p class="text-danger" style="margin-left: 10px">
                                            @error('service_mode')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @if ($id > 0)

                            <hr class="my-5">
                            <div class="row justify-content-center">
                                <h5 class="fw-bold mb-4">Reference</h5>

                                <div class="col-md-6">
                                    <?php
                                        //$no_pcs =  \App\Models\QuoteDimention::where('quote_id', $id)->sum('total_box');
                                  ?>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label text-dark">Total No of Pcs</label>
                                        <input type="text" class="form-control border border-dark border-1" name="ref_pcs" value="{{$ref_pcs}}" placeholder="Total No of Pcs" readonly>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Gross Weight</label>
                                   
                                    <input type="text" class="form-control border border-dark border-1" name="ref_grossweight" value="{{number_format((float)$ref_grossweight, 2, '.', '')}}"
                                            placeholder="Gross Weight" readonly>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-5">
                            <div class="row justify-content-center">
                                {{-- Dimentions: --}}
                                <div class="col-md-12">
                                    <div class="d-flex bd-highlight">
                                        <div class="p-2 flex-grow-1 bd-highlight">
                                            <h5 class="fw-bold">Dimentions</h5>
                                        </div>
                                        <div class="p-2 bd-highlight">
                                            <button type="button" class="add_dimention btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#addDimentionModal">
                                                Add Dimentions
                                              </button>
                                        </div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-bordered ">
                                            <thead>
                                              <tr>
                                                <th scope="col">No of Box</th>
                                                <th scope="col">Length in cm</th>
                                                <th scope="col">Breath in cm</th>
                                                <th scope="col">Height in cm</th>
                                                <th scope="col">Weight in kg</th>
                                                <th scope="col">Action</th>
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
                                                {{-- @if ($box_weight != null) --}}
                                                <td >
                                                    {{-- @if ($progress == 'ewb-bill')
                                                    <button type="button" class="edit_dimention btn btn-primary btn-sm" value="{{$item->id}}" data-bs-toggle="modal" data-bs-target="#editDimentionModal" disabled>
                                                        Edit
                                                      </button>
                                                    <button class="delete_dimention btn btn-danger btn-sm" value="{{$item->id}}" disabled>Delete</button>
                                                    @else
                                                    @endif --}}
                                                    
                                                    <button type="button" class="edit_dimention btn btn-primary btn-sm" value="{{$item->id}}" data-bs-toggle="modal" data-bs-target="#editDimentionModal">
                                                        Edit
                                                    </button>
                                                      <button class="delete_dimention btn btn-danger btn-sm" value="{{$item->id}}">Delete</button>
                                             
                                                </td>
                                                {{-- @endif --}}
                                            </tr>
                                              
                                            @endforeach
                                            </tbody>
                                          </table>
                                    </div>
                                   
                                </div>
                                @endif
                            </div>
                            @if ($id > 0)

                            <hr class="my-5">
                            <div class="row justify-content-center">

                                {{-- Weight Calculations:: --}}
                              
                                <div class="d-flex">
                                    <div class="p-2 w-100">  <h5 class="fw-bold mb-4">Weight Calculations</h5></div>
                                    <div class="p-2 flex-shrink-1"><button class="btn btn-danger btn-sm reset_cal">Reset Calculation</button></div>
                                  </div>

                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Gross Weight</label>
                                        <input type="text"
                                            class="form-control border border-dark border-1 gross_weight"
                                            name="gross_weight" value="{{ $gross_weight }}"
                                            placeholder="Gross Weight" readonly>
                                        <p class="text-danger" style="margin-left: 10px">
                                            @error('box_weight')
                                                {{ $message }}
                                            @enderror
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Volumetric Weight</label>
                                        <input type="text"
                                            class="form-control border border-dark border-1 volumetric_weight"
                                            name="volumetric_weight" value="{{ $volumetric_weight }}"
                                            placeholder="Volumetric Weight" readonly>
                                        <p class="text-danger" style="margin-left: 10px">
                                            @error('volumetric_weight')
                                                {{ $message }}
                                            @enderror
                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Chargeable Weight</label>
                                        <input type="text"
                                            class="form-control border border-dark border-1 chargeable_weight"
                                            name="chargeable_weight" value="{{ $chargeable_weight }}"
                                            placeholder="Chargeable Weight" readonly>
                                        <p class="text-danger" style="margin-left: 10px">
                                            @error('chargeable_weight')
                                                {{ $message }}
                                            @enderror
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <hr class="my-5">
                            <div class="col-md-12">
                                <h5 class="fw-bold mb-4">Rate Charges</h5>
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label text-dark">+45 KG</label>
                                        <input type="number" name="rate_45kg" class="form-control border border-dark border-1" placeholder="Amount" value="{{$rate_45kg}}" required>
                                        <p class="text-danger" style="margin-left: 10px">@error('rate_45kg'){{ $message }} @enderror</p>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label class="form-label text-dark">+100 KG</label>
                                        <input type="number" name="rate_100kg" class="form-control border border-dark border-1" placeholder="Amount" value="{{$rate_100kg}}" required>
                                        <p class="text-danger" style="margin-left: 10px">@error('rate_100kg'){{ $message }} @enderror</p>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label class="form-label text-dark">+250 KG</label>
                                        <input type="number" name="rate_250kg" class="form-control border border-dark border-1" placeholder="Amount" value="{{$rate_250kg}}" required>
                                        <p class="text-danger" style="margin-left: 10px">@error('rate_250kg'){{ $message }} @enderror</p>
                                    </div>
                                    <div class="col-md-2 mb-3">
                                        <label class="form-label text-dark">+500 KG</label>
                                        <input type="number" name="rate_500kg" class="form-control border border-dark border-1" placeholder="Amount" value="{{$rate_500kg}}" required>
                                        <p class="text-danger" style="margin-left: 10px">@error('rate_500kg'){{ $message }} @enderror</p>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <label class="form-label text-dark">Minimum</label>
                                        <input type="number" name="rate_other" class="form-control border border-dark border-1" placeholder="Amount" value="{{$rate_other}}" required>
                                        <p class="text-danger" style="margin-left: 10px">@error('rate_other'){{ $message }} @enderror</p>
                                    </div>
                                    
                                </div>
                            </div>
                            @endif
                            
                            <hr class="my-5">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <h5 class="fw-bold mb-4">Value of Product</h5>
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Value of Product</label>
                                        <input type="number" name="product_value" value="{{ $product_value }}"
                                            class="form-control border border-dark border-1">
                                        <p class="text-danger" style="margin-left: 10px">
                                            @error('product_value')
                                                {{ $message }}
                                            @enderror
                                        </p>

                                    </div>
                                </div>

                                {{-- Note* : --}}
                                <div class="col-md-6">
                                    <h5 class="fw-bold mb-4">Note</h5>
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Handling Information</label>
                                        <textarea class="form-control border border-dark border-1" name="notes" style="height: 50px">{{ $notes }}</textarea>
                                        <p class="text-danger" style="margin-left: 10px">
                                            @error('notes')
                                                {{ $message }}
                                            @enderror
                                        </p>

                                    </div>
                                </div>

                               
                            </div>
                            <hr class="my-5">
                            <div class="row">

                                {{-- Upload Images/Files : --}}
                                <div class="col-md-12">
                                    <h5 class="fw-bold mb-4">Upload Multiple Images/Files </h5>
                                    <div class="mb-3">
                                        <label class="form-label text-dark">Upload Images/Files :</label>
                                        <input type="file" name="multiple_images[]"
                                            class="form-control border border-dark border-1"
                                            accept="image/jpg, image/jpeg, image/png" multiple="multiple">
                                    </div>
                                    <div class="row">
                                        @foreach ($multiple_images as $img)
                                            <div class="col-md-3 text-center">
                                                <a href="{{ url('uploads/quotations/' . $img->multiple_images) }}"
                                                    target="_blank" data-lightbox="image-1"
                                                    data-title="Media Image">
                                                    <img class="border border-primary"
                                                        src="{{ url('uploads/quotations/' . $img->multiple_images) }}"
                                                        width="150px" height="100px"></a> <br>
                                                <button class="btn btn-danger btn-sm my-3 delete_image "
                                                    value="{{ $img->id }}" title="Delete">Delete</button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="row justify-content-center">
                                <div class="col-md-10 text-center my-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-4">
                                        
                                            @if ($id > 0)
                                                @if ($rate_45kg > 0 || $rate_100kg > 0 || $rate_250kg > 0 || $rate_500kg > 0 || $rate_other > 0)
                                                        {{-- <button type="submit" value="{{$id}}" class="btn btn-secondary btn-lg send_mail_btn" disabled>Send Mail To Customer</button>
                                                        <p class="my-2 text-danger">*Please Enter Rate Charges For Sending Mail To Customer</p> --}}
                                                        @if ($progress == 'quotation-request' || $progress == 'send-quote'|| $progress == 'customer-approved'|| $progress == 'customer-unapproved')
                                                                <button type="submit" value="{{$id}}" class="btn btn-warning btn-lg send_mail_btn">Send Mail To Customer</button>
                                                        @endif
                                                        {{-- @else --}}
                                                   
                                                    {{-- @if ($progress == 'cargo-on-hand' || $progress == 'ewb-bill')
                                                            <button type="submit" value="{{$id}}" class="btn btn-warning btn-lg send_mail_btn" disabled>Send Mail To Customer</button>
                                                    @else
                                                            <button type="submit" value="{{$id}}" class="btn btn-warning btn-lg send_mail_btn">Send Mail To Customer</button>
                                                    @endif --}}
                                                @endif
                                            @endif
                                        </div>
                                        <div class="col-md-4">
                                            @if ($id > 0)
                                                @if ($progress == 'cargo-on-hand' || $progress == 'ewb-bill')
                                                <button id="submit" type="submit" class="btn btn-secondary btn-lg" onclick="return checkDelete()" disabled> Update
                                                    Quotation</button>
                                                @else
                                                <button id="submit" type="submit" class="btn btn-primary btn-lg" onclick="return checkDelete()"> Update
                                                    Quotation</button>
                                                @endif
                                           
                                             @else
                                             <button id="submit" type="submit" class="btn btn-primary btn-lg" onclick="return checkDelete()"> Submit
                                                Quotation</button>
                                             @endif 
                                        </div>
                                        <div class="col-md-4">
                                            <a href="{{ url('admin/quotation') }}" class="btn btn-danger btn-lg"><i
                                                class="fa-solid fa-angle-left"></i>Go Back</a>
                                        </div>
                                    </div>
                                      
                               
                                     {{-- => --}}
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

<!-- addDimentionModal -->
<div class="modal fade" id="addDimentionModal" tabindex="-1" aria-labelledby="addDimentionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="addDimentionModalLabel">Add Dimention</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" id="add_dimention_frm">
                @csrf
                <input type="hidden" name="quote_dimention_id" class="quote_dimention_id" value="{{$id}}">
                <div class="row">
                        <div class="col-md-6 mb-3">
                          <label class="form-label">No of Box</label>
                          <input type="number" name="new_total_box" class="form-control new_total_box" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Length in cm</label>
                            <input type="number" name="new_length" class="form-control new_length" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Breath in cm	</label>
                            <input type="number" name="new_breath" class="form-control new_breath" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Height in cm</label>
                            <input type="number" name="new_height" class="form-control new_height" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Weight in kg</label>
                            <input type="number" name="new_weight" class="form-control new_weight" required>
                        </div>
                        <button class="btn btn-primary" class="add_dimention_btn">Add Dimentions</button>
                        
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>


<!-- editDimentionModal -->
<div class="modal fade" id="editDimentionModal" tabindex="-1" aria-labelledby="editDimentionModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="editDimentionModalLabel">Edit Dimention</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form method="POST" id="update_dimention_frm">
                @csrf
                <input type="hidden" name="dimention_id" class="dimention_id">
                <input type="hidden" name="quote_dimention_id" class="quote_dimention_id" value="{{$id}}">
                <div class="row">
                        <div class="col-md-6 mb-3">
                          <label class="form-label">No of Box</label>
                          <input type="text" name="input_total_box" class="form-control input_total_box" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Length in cm</label>
                            <input type="text" name="input_length" class="form-control input_length" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Breath in cm	</label>
                            <input type="text" name="input_breath" class="form-control input_breath" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Height in cm</label>
                            <input type="text" name="input_height" class="form-control input_height" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label">Weight in kg</label>
                            <input type="text" name="input_weight" class="form-control input_weight" required>
                        </div>
                        <button class="btn btn-primary" class="update_dimention">Update</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>

@endsection

@section('custom_script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function() {
            var buttonAdd = $("#add-button");
            var buttonRemove = $("#remove-button");
            var className = ".dynamic-field";
            var count = 0;
            var field = "";
            var maxFields = 50;

            function totalFields() {
                return $(className).length;
            }

            function addNewField() {
                count = totalFields() + 1;
                field = $("#dynamic-field-1").clone();
                field.attr("id", "dynamic-field-" + count);
                field.children("label").text("Field " + count);
                field.find("input").val("");
                $(className + ":last").after($(field));
            }

            function removeLastField() {
                if (totalFields() > 1) {
                    $(className + ":last").remove();
                }
            }

            function enableButtonRemove() {
                if (totalFields() === 2) {
                    buttonRemove.removeAttr("disabled");
                    buttonRemove.addClass("shadow-sm");
                }
            }

            function disableButtonRemove() {
                if (totalFields() === 1) {
                    buttonRemove.attr("disabled", "disabled");
                    buttonRemove.removeClass("shadow-sm");
                }
            }

            function disableButtonAdd() {
                if (totalFields() === maxFields) {
                    buttonAdd.attr("disabled", "disabled");
                    buttonAdd.removeClass("shadow-sm");
                }
            }

            function enableButtonAdd() {
                if (totalFields() === (maxFields - 1)) {
                    buttonAdd.removeAttr("disabled");
                    buttonAdd.addClass("shadow-sm");
                }
            }

            buttonAdd.click(function() {
                addNewField();
                enableButtonRemove();
                disableButtonAdd();

                $('.box_weight').keyup(function(e) {
                e.preventDefault();
                var box_weight = $(this).val()
                var total_box = $('.total_box').val()
                var length = $('.box_length').val()
                var breath = $('.box_breath').val()
                var height = $('.box_height').val()

                // Gross Weight
                let gross_weight = total_box * box_weight;
                $('.gross_weight').val(gross_weight)

                // Volumetric Weight
                var output = length * breath * height;
                var total = output / 6000;
                var volumetric = total_box * total;


                
                
                var volumetric = total;
                $('.volumetric_weight').val(volumetric)

                // Chargeable Weight 
                if (gross_weight > volumetric) {
                    $('.chargeable_weight').val(gross_weight);
                } else if (volumetric > gross_weight) {
                    $('.chargeable_weight').val(volumetric);
                }
            });
            });

            buttonRemove.click(function() {
                removeLastField();
                disableButtonRemove();
                enableButtonAdd();
            });
        });
    </script>


    <script>
        $(document).ready(function() {
          

            // add dimentions form
            if ($("#add_dimention_frm").length > 0) {
                $("#add_dimention_frm").validate({
                    rules: {
                            new_total_box: {
                                required: true,
                                number: true,
                            },
                            new_length: {
                                required: true,
                                number: true,
                            }, 
                            new_breath: {
                                required: true,
                                number: true,
                            }, 
                            new_height: {
                                required: true,
                                number: true,
                            }, 
                            new_weight: {
                                required: true,
                                number: true,
                            }, 
                        },
                        messages: {
                            new_total_box: {
                                required: 'Please Enter Box Number',
                                number: 'Please Enter Only Digits',
                            },
                            new_length: {
                                required: "Please Enter Length",
                                number: 'Please Enter Only Digits',
                            },
                            new_breath: {
                                required: "Please Enter Breath",
                                number: 'Please Enter Only Digits',
                            },
                            new_height: {
                                required: "Please Enter Height",
                                number: 'Please Enter Only Digits',
                            },
                            new_weight: {
                                required: "Please Enter Weight",
                                number: 'Please Enter Only Digits',
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
                        $('.add_dimention_btn').html('Add Dimention');
                        $(".add_dimention_btn").attr("disabled", false);
                        $.ajax({
                            url: `{{ url('quote-dimention-add') }}`,
                            type: "POST",
                            data: $('#add_dimention_frm').serialize(),
                            success: function(response) {
                                if (response.Status === 200) {
                                    console.log(response)
                                    location.reload();
                                 }
                            }
                        });
                    }
                    });
                    

            }
           
             // Edit dimentions form
             $('.edit_dimention').click(function(e) {
                e.preventDefault();

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: `{{ url('quote-dimention-edit') }}`,
                    data: {
                        dimention_id: $(this).val(),
                    },
                    dataType: "JSON",
                    success: function(response) {
                        if (response.Status === 200) {
                                
                                $('.dimention_id').val(response.data.id);
                                $('.input_total_box').val(response.data.total_box)
                                $('.input_length').val(response.data.box_length)
                                $('.input_breath').val(response.data.box_breath)
                                $('.input_height').val(response.data.box_height)
                                $('.input_weight').val(response.data.box_weight)
                              
                        }
                    }
                });
            });

             // Update
            if ($("#update_dimention_frm").length > 0) {
                $("#update_dimention_frm").validate({
                    rules: {
                            input_total_box: {
                                required: true,
                                number: true,
                            },
                            input_length: {
                                required: true,
                                number: true,
                            }, 
                            input_breath: {
                                required: true,
                                number: true,
                            }, 
                            input_height: {
                                required: true,
                                number: true,
                            }, 
                            input_weight: {
                                required: true,
                                number: true,
                            }, 
                        },
                        messages: {
                            input_total_box: {
                                required: 'Please Enter Box Number',
                                number: 'Please Enter Only Digits',
                            },
                            input_length: {
                                required: "Please Enter Length",
                                number: 'Please Enter Only Digits',
                            },
                            input_breath: {
                                required: "Please Enter Breath",
                                number: 'Please Enter Only Digits',
                            },
                            input_height: {
                                required: "Please Enter Height",
                                number: 'Please Enter Only Digits',
                            },
                            input_weight: {
                                required: "Please Enter Weight",
                                number: 'Please Enter Only Digits',
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
                        $('.update_dimention').html('Login');
                        $(".update_dimention").attr("disabled", false);
                        $.ajax({
                            url: `{{ url('quote-dimention-update') }}`,
                            type: "POST",
                            data: $('#update_dimention_frm').serialize(),
                            success: function(response) {
                                if (response.Status === 200) {
                                    console.log(response)
                                    location.reload();
                                 }
                            }
                        });
                    }
                    });
                    

            }

             // delete_dimention
            $('.delete_dimention').click(function(e) {
                e.preventDefault();
                swal({
                        title: "Are you sure?",
                        text: "You Want to Send Quotation Mail To Customer!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    }) .then((willDelete) => {
                        if (willDelete) {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                type: "POST",
                                url: `{{ url('quote-dimention-delete') }}`,
                                data: {
                                    dimention_id: $(this).val(),
                                    quote_dimention_id: {{$id}},

                                },
                                dataType: "JSON",
                                success: function(response) {
                                    if (response.Status === 200) {
                                        location.reload();
                                    }
                                }
                            });
                        }else{
                            swal("Dimention is not Delete!");
                        }
                    })
            });

            // reset cal dimention
            $('.reset_cal').click(function (e) { 
                e.preventDefault();
                swal({
                        title: "Are you sure?",
                        text: "You want to reset weight calculation!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    }) .then((willDelete) => {
                        if (willDelete) {
                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                }
                            });
                            $.ajax({
                                type: "POST",
                                url: `{{ url('weight-cal-reset') }}`,
                                data: {
                                    quote_id: {{$id}},
                                },
                                dataType: "JSON",
                                success: function(response) {
                                    if (response.Status === 200) {
                                        location.reload();
                                    }
                                }
                            });
                        }else{
                            swal("Not Reset!");
                        }
                    })
            });
          
          
          
          
            // quotation status
            $('.progress_status').change(function (e) { 
                e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                let Quotedata = {
                    'progress': $(this).val(),
                    'quote_id': $(this).attr('data-id')
                }
                $.ajax({
                    url: "{{url('quotation-progress')}}",
                    type: "POST",
                    data: Quotedata,
                    dataType: "JSON",
                    success: function (response) {
                        // $('#submit').html('Login');
                        $("#submit").attr("disabled", false);
                       
                        if (response.success_msg) {
                            $('.progress_message').html('Quotation Status Updated').show();

                            setTimeout(function() {
                                $('.progress_message').fadeOut();
                                location.reload();
                            }, 2000);
                        }
                    }
                });
            });

            // Fetch PickUp Name
            $('.user_name').click(function (e) { 
                e.preventDefault();
                var username = $(this).find(":selected").html()

                $('.pickup_name').val(username.trim()); 
                
            });

            // Delete
            $('.delete_image').click(function(e) {
                e.preventDefault();
                swal({
                        title: "Are you sure?",
                        text: "You Want to Send Quotation Mail To Customer!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    }) .then((willDelete) => {
                        if (willDelete) {
                            $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                            });
                            $.ajax({
                                type: "POST",
                                url: `{{ url('quotation-image-delete') }}`,
                                data: {
                                    image_id: $(this).val(),
                                },
                                dataType: "JSON",
                                success: function(response) {
                                    if (response.Status === 200) {
                                        location.reload();
                                    }
                                }
                            });
                        }else{
                            swal("Image is safe!");
                        }
                    })
                     
                   
                
            });
           
            // Calculation
            $('.box_weight').keyup(function(e) {
                e.preventDefault();
                var box_weight = $(this).val()
                var total_box = $('.total_box').val()
                var length = $('.box_length').val()
                var breath = $('.box_breath').val()
                var height = $('.box_height').val()

                // Gross Weight
                let gross_weight = total_box * box_weight;
                $('.gross_weight').val(gross_weight)

                // Volumetric Weight
                var output = length * breath * height;
                var total = output / 6000;
                // var volumetric = total_box * total;
                var volumetric = total;

                $('.volumetric_weight').val(volumetric)

                // Chargeable Weight 
                if (gross_weight > volumetric) {
                    $('.chargeable_weight').val(gross_weight);
                } else if (volumetric > gross_weight) {
                    $('.chargeable_weight').val(volumetric);
                }
            });


            // Send Mail
            $('.send_mail_btn').click(function(e) {
                e.preventDefault();
                    swal({
                        title: "Are you sure?",
                        text: "You Want to Send Quotation Mail To Customer!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        $('.send_mail_btn').prop('disabled', true);
                        $('.send_mail_btn').html('Loading...');

                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            type: "POST",
                            url: `{{ url('quote-send-mail') }}`,
                            data: {
                                dimention_id: $(this).val(),
                            },
                            dataType: "JSON",
                            success: function(response) {
                                if (response.Status === 200) {
                                    swal("Mail Send Successfully", {
                                        icon: "success",
                                    })
                                    $('.send_mail_btn').html('Send Mail To Customer');
                                    $('.send_mail_btn').prop('disabled', false);
                                    // .then(function() {
                                    //     location.reload();
                                    // });
                                }
                            }
                        });
                    } else {
                        swal("Mail is not send!");
                    }
                });
            });
        });
   </script>

@endsection
