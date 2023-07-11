@extends('admin.includes.layout')
@section('page_title', 'Rate Manager')
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
       <div class="breadcrumb-title pe-3">Rate Manager</div>
       <div class="ps-3">
           <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-0 p-0">
                   <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                   </li>
                   <li class="breadcrumb-item active" aria-current="page"> @if ($id >  0)
                       Update Rate Manager
                   @else
                       Add Rate Manager
                   @endif</li>
               </ol>
           </nav>
       </div>
       <div class="ms-auto">
           <a href="{{url('admin/charges')}}" class="btn btn-primary float-end">Rate Manager List</a>
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
                    <form id="quote_form"  method="POST" action="{{url('admin/charges/save')}}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <input type="hidden" name="id" value="{{$id}}">
                     
                            <div class="row">
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Company Name</label>
                                        <input type="text" name="company" value="{{$company}}" class="form-control border border-dark border-1" placeholder="Company Name">
                                         <p class="text-danger" style="margin-left: 10px">@error('company'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Origin</label>
                                        <input type="text" name="source" value="{{$source}}" class="form-control border border-dark border-1" placeholder="Source">
                                         <p class="text-danger" style="margin-left: 10px">@error('source'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Destination</label>
                                        <input type="text" name="destination" value="{{$destination}}" class="form-control border border-dark border-1" placeholder="Destination">
                                         <p class="text-danger" style="margin-left: 10px">@error('destination'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Code</label>
                                        <input type="text" name="code" value="{{$code}}" class="form-control border border-dark border-1" placeholder="Code">
                                         <p class="text-danger" style="margin-left: 10px">@error('code'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Rate</label>
                                        <input type="text" name="rate" value="{{$rate}}" class="form-control border border-dark border-1" placeholder="Rate">
                                         <p class="text-danger" style="margin-left: 10px">@error('rate'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">XBC</label>
                                        <input type="text" name="xbc" value="{{$xbc}}" class="form-control border border-dark border-1" placeholder="XBC">
                                         <p class="text-danger" style="margin-left: 10px">@error('xbc'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">CHC</label>
                                        <input type="text" name="chc" value="{{$chc}}" class="form-control border border-dark border-1" placeholder="CHC">
                                         <p class="text-danger" style="margin-left: 10px">@error('chc'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">MBC</label>
                                        <input type="text" name="mbc" value="{{$mbc}}" class="form-control border border-dark border-1" placeholder="MBC">
                                         <p class="text-danger" style="margin-left: 10px">@error('mbc'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-4 my-3">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">CDC</label>
                                        <input type="text" name="cdc" value="{{$cdc}}" class="form-control border border-dark border-1" placeholder="CDC">
                                         <p class="text-danger" style="margin-left: 10px">@error('cdc'){{$message}} @enderror</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                @if ($id > 0)
                                     <button id="submit" type="submit" class="btn btn-primary" onclick="return checkDelete()"> Update Rate Manager</button>
                                @else
                                     <button id="submit" type="submit" class="btn btn-primary" onclick="return checkDelete()"> Add Rate Manager</button>
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