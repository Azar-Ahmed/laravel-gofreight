@extends('admin.includes.layout')
@section('page_title', 'Customer Detail')
    @section('container')
    <style>
        p{
            font-size: 15px;
        }
    </style>

<div class="page-content">

    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Customer</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Customer Detail</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <a href="{{url('admin/users')}}" class="btn btn-primary float-end">Customers List</a>
        </div>
    </div>
    <!--end breadcrumb-->

     <div class="card">
        <div class="row g-0">
        @foreach ($data as $item)
        @if ($item->image == 'default.png')
          <div class="col-md-4 border-end">
            <img src="{{asset('uploads/users/default.png')}}" class="img-fluid" alt="">
          </div>
        @else
            <div class="col-md-4 border-end">
                <img src="{{asset('uploads/users/'.$item->image)}}" class="img-fluid" alt="">
            </div>
        @endif
          
          <div class="col-md-8">
            <div class="card-body">
              {{-- <h4 class="card-title">Off-White Odsy-1000 Men Half T-Shirt</h4> --}}
                <h4  class="card-title">{{$item->name}}
                    @if ($item->status == 1)
                        <small class="text-success fs-5" title="Status"><i class="fa-solid fa-circle-check"></i></small>
                    @elseif ($item->status == 0)
                        <small class="text-danger fs-5" title="Status"><i class="fa-solid fa-circle-xmark"></i></small>
                    @endif
                </h4>
            @endforeach
            @foreach ($data as $user)
             
              <dl class="row mt-3">
                <dt class="col-sm-3">Email Id</dt>
                <dd class="col-sm-9 fs-6">{{$user->email}}</dd>
            
                <dt class="col-sm-3">Phone Number</dt>
                <dd class="col-sm-9 fs-6">{{$user->mobile}}</dd>

                <dt class="col-sm-3">Address</dt>
                <dd class="col-sm-9 fs-6">{{$user->address}}</dd>

                <dt class="col-sm-3">City</dt>
                <dd class="col-sm-9 fs-6">{{$user->city}}</dd>
              
                <dt class="col-sm-3">State</dt>
                <dd class="col-sm-9 fs-6">{{$user->state}}</dd>
              
                <dt class="col-sm-3">Pincode</dt>
                <dd class="col-sm-9 fs-6">{{$user->pincode}}</dd>
              </dl>
              @if ($user->select_type == 'Company')

              <hr>
              <div class="row row-cols-auto row-cols-1 row-cols-md-3 align-items-center">
                <div class="col">
                    <label class="form-label">Company Name</label>
                         <input type="text" class="form-control" value="{{$user->company_name}}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">GST NO</label>
                    <input type="text" class="form-control" value="{{$user->gst_no}}" readonly>
                </div>
                <div class="col">
                    <label class="form-label">PAN No</label>
                    <input type="text" class="form-control" value="{{$user->pan_no}}" readonly>
                </div> 
                <div class="col">
                    <label class="form-label">Designation</label>
                    <input type="text" class="form-control" value="{{$user->designation}}" readonly>
                </div> 
            </div>
            @endif

            </div>
          </div>
        </div>
        @endforeach
      </div>
    @endsection
@section('custom_script')
@endsection