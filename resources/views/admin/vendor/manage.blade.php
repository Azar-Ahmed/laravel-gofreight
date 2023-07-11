@extends('admin.includes.layout')
@section('page_title', 'Vendor Payment')
    @section('container')
    <style>
        .latest_img{
            max-width:180px;
          }
          input[type=file]{
          padding:10px;
        }

</style>
<div class="page-content">
    <!--breadcrumb-->
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
       <div class="breadcrumb-title pe-3">Vendors</div>
       <div class="ps-3">
           <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-0 p-0">
                   <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                   </li>
                   <li class="breadcrumb-item active" aria-current="page"> @if ($id >  0)
                       Update Vendor Payment
                   @else
                       Add Vendor Payment
                   @endif</li>
               </ol>
           </nav>
       </div>
       <div class="ms-auto">
           <a href="{{url('admin/vendor')}}" class="btn btn-primary float-end">Vendors List</a>
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
                    <form id="quote_form"  method="POST" action="{{url('admin/vendor/save')}}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <input type="hidden" name="id" value="{{$id}}">
                     
                            <div class="row">
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Date</label>
                                        <input type="date" name="date" value="{{$date}}" class="form-control border border-dark border-1" placeholder="Date">
                                         <p class="text-danger" style="margin-left: 10px">@error('date'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Select Vendor Name</label>
                                        <select class="form-select border border-dark border-1 vendor_name"
                                        name="vendor_name" aria-label="Default select example">
                                        <option selected disabled>Select Vendor</option>
                                        @foreach ($charges as $item)
                                            @if ($item->company == $vendor_name)
                                                <option value="{{ $item->company }}" selected>{{ $item->company }}</option>
                                            @else
                                                <option value="{{ $item->company }}">{{ $item->company }}
                                                </option>
                                            @endif
                                        @endforeach
                                    </select>
                                     <p class="text-danger" style="margin-left: 10px">@error('vendor_name'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Amount</label>
                                        <input type="text" name="amount" value="{{$amount}}" class="form-control border border-dark border-1" placeholder="Amount">
                                         <p class="text-danger" style="margin-left: 10px">@error('amount'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-6 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Reason</label>
                                         <textarea class="form-control border border-dark border-1" name="reason">{{ $reason }}</textarea>
                                         <p class="text-danger" style="margin-left: 10px">@error('reason'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-6 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Remark</label>
                                        <textarea class="form-control border border-dark border-1" name="remark">{{ $remark }}</textarea>
                                         <p class="text-danger" style="margin-left: 10px">@error('remark'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-md-12 text-center">
                                @if ($id > 0)
                                     <button id="submit" type="submit" class="btn btn-primary" onclick="return checkDelete()"> Update Vendor</button>
                                @else
                                     <button id="submit" type="submit" class="btn btn-primary" onclick="return checkDelete()"> Add Vendor</button>
                                @endif
                            </div>
                    </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
   

    @endsection
@section('custom_script')
   
@endsection