@extends('admin.includes.layout')
@section('page_title', 'Airport')
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
       <div class="breadcrumb-title pe-3">Airport</div>
       <div class="ps-3">
           <nav aria-label="breadcrumb">
               <ol class="breadcrumb mb-0 p-0">
                   <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                   </li>
                   <li class="breadcrumb-item active" aria-current="page"> @if ($id >  0)
                       Update Airport
                   @else
                       Add Airport
                   @endif</li>
               </ol>
           </nav>
       </div>
       <div class="ms-auto">
           <a href="{{url('admin/airport')}}" class="btn btn-primary float-end">Airport's List</a>
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
                    <form id="airport_frm"  method="POST" action="{{url('admin/airport/save')}}" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        <input type="hidden" name="id" value="{{$id}}">
                     
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Airport Code</label>
                                        <input type="text" name="airport_code" value="{{$airport_code}}" class="form-control border border-dark border-1" placeholder="Airport Code">
                                         <p class="text-danger" style="margin-left: 10px">@error('airport_code'){{$message}} @enderror</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label  class="form-label text-dark">Airport Name</label>
                                        <input type="text" name="airport_name" value="{{$airport_name}}" class="form-control border border-dark border-1" placeholder="Airport Name">
                                         <p class="text-danger" style="margin-left: 10px">@error('airport_name'){{$message}} @enderror</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 text-center my-2">
                                @if ($id > 0)
                                     <button id="submit" type="submit" class="btn btn-primary" onclick="return checkDelete()"> Update Airport</button>
                                @else
                                     <button id="submit" type="submit" class="btn btn-primary" onclick="return checkDelete()"> Add Airport</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script>
    jQuery(document).ready(function () {


        if (jQuery("#airport_frm").length > 0) {
            $.validator.addMethod(
                "lettersonly",
                function(value, element) {
                    return this.optional(element) || /^[a-z\s]+$/i.test(value);
                },
                "Only alphabetical characters"
            );
            jQuery("#airport_frm").validate({

                rules: {
                    airport_code: {
                        required: true,
                        lettersonly: true,
                        minlength: 3,
                        maxlength: 3,
                    },
                    airport_name: {
                        required: true,
                    }, 
                },
                messages: {
                    airport_code: {
                        required: 'Please Enter Airport Code',
                        lettersonly: "Only Letters Allowed",
                        minlength: "Please Enter 3 Character Code",
                        maxlength: "Please Enter Valid Code",
                    },
                    airport_name: {
                        required: "Please Enter Name of the Airport",
                    },
                },
                errorElement: "div",
                errorPlacement: function(error, element) {
                    error.addClass("invalid-feedback");
                    error.insertAfter(element);
                },
            })
            
         }
    });
</script>
@endsection