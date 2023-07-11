@extends('admin.includes.layout')
@section('page_title', 'User')
    @section('container')
    <style>
        .latest_img{
            max-width:180px;
          }
          input[type=file]{
          padding:10px;
        }
  /*  */
    /* .class-link{
    color:#6cc417;
         text-decoration:none;
    }

    .class-link:hover{
        color:#ffbb00; 
    } */
</style>
<div class="page-content">
     <!--breadcrumb-->
     <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Customers</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"> @if ($id >  0)
                        Update Customer
                    @else
                        Add Customer
                    @endif</li>
                </ol>
            </nav>
        </div>
        <div class="ms-auto">
            <a href="{{url('admin/users')}}" class="btn btn-primary float-end">Customers List</a>
        </div>
    </div>
    <!--end breadcrumb-->
    {{-- form --}}
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <h6 class="mb-0 text-uppercase">Personal Details</h6>
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="p-4 border rounded">
                        <form method="POST" action="{{url('admin/user/save')}}">
                            @csrf
                            <input type="hidden" name="id" value="{{$id}}">
                         
                                <div class="row">
                                    <h5 class="fw-bold mb-4">Personal Details</h5>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label  class="form-label ">Full Name</label>
                                            <input type="text" name="name" value="{{$name}}" class="form-control " placeholder="Full Name" required> 
                                             <p class="text-danger" style="margin-left: 10px">@error('name'){{$message}} @enderror</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label  class="form-label ">Email ID</label>
                                           <div class="input-group has-validation">
                                               <span class="input-group-text" id="inputGroupPrepend">@</span>
                                               <input type="email" name="email" value="{{$email}}" class="form-control " placeholder="Email ID " required>

                                           </div>
                                             <p class="text-danger" style="margin-left: 10px">@error('email'){{$message}} @enderror</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label  class="form-label ">Phone Number</label>
                                            <input type="number" name="mobile" value="{{$mobile}}" class="form-control " placeholder="Phone Number" required>
                                             <p class="text-danger" style="margin-left: 10px">@error('mobile'){{$message}} @enderror</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label  class="form-label ">Password</label>
                                            <input type="password" name="password" value="{{$password}}" class="form-control  password" placeholder="Make A Strong Password" required>
                                             <p class="text-danger" style="margin-left: 10px">@error('password'){{$message}} @enderror</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label  class="form-label ">Confirm Password</label>
                                            <input type="text" name="cpassword" value="{{$password}}" class="form-control  cpassword" placeholder="Enter The Same Password" required>
                                             <p class="text-danger" style="margin-left: 10px">@error('cpassword'){{$message}} @enderror</p>
                                            <p class="pwdError text-danger" style="display: none"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label  class="form-label ">Address </label>
                                            <textarea class="form-control " name="address" style="height: 100px" required>{{$address}}</textarea>
                                            <p class="text-danger" style="margin-left: 10px">@error('address'){{$message}} @enderror</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label  class="form-label ">City</label>
                                            <input type="text" name="city" value="{{$city}}" class="form-control " placeholder="Enter City" required>
                                             <p class="text-danger" style="margin-left: 10px">@error('city'){{$message}} @enderror</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label  class="form-label ">State</label>
                                            <input type="text" name="state" value="{{$state}}" class="form-control " placeholder="Enter State" required>
                                             <p class="text-danger" style="margin-left: 10px">@error('state'){{$message}} @enderror</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label  class="form-label ">Pincode</label>
                                            <input type="number" name="pincode" value="{{$pincode}}" class="form-control " placeholder="Enter Pincode" required>
                                             <p class="text-danger" style="margin-left: 10px">@error('pincode'){{$message}} @enderror</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 my-3">
                                        <div class="mb-3">
                                            <label  class="form-label ">Select Type</label>
                                            <select class=" form-select   select_type"  name="select_type" aria-label="Default select example" required>
                                               @if ($select_type == 'Individual')
                                                    <option  disabled>Select Type</option>
                                                    <option value="Individual" selected>Individual</option>
                                                    <option value="Company">Company</option>
                                               @elseif($select_type == 'Company')
                                                    <option  disabled>Select Type</option>
                                                    <option value="Individual" >Individual</option>
                                                    <option value="Company" selected>Company</option>
                                                @else
                                                    <option selected disabled>Select Type</option>
                                                    <option value="Individual" >Individual</option>
                                                    <option value="Company">Company</option> 
                                               @endif
                                            </select>
                                            <p class="text-danger" style="margin-left: 10px">@error('select_type'){{$message}} @enderror</p>

                                        </div>
                                    </div>
                                </div>
                                <div class="row extra_div" style="display: none">
                                    <hr class="my-5">
                                    <div class="col-md-12">
                                            <h5 class="fw-bold mb-4">Professional Details</h5>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label  class="form-label ">Company Name</label>
                                                        <input type="text" name="company_name" value="{{$company_name}}" class="form-control  company_name" placeholder="Enter Company Name">
                                                         <p class="text-danger" style="margin-left: 10px">@error('company_name'){{$message}} @enderror</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label  class="form-label ">GST Number</label>
                                                        <input type="text" name="gst_no" value="{{$gst_no}}" class="form-control  gst_no" placeholder="Enter GST Number" minlength="15" maxlength="15">
                                                        <p class="text-danger" style="margin-left: 10px">@error('gst_no'){{$message}} @enderror</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label  class="form-label ">PAN Number</label>
                                                        <input type="text" name="pan_no" value="{{$pan_no}}" class="form-control  pan_no" placeholder="Enter PAN Number" minlength="10" maxlength="10">
                                                        <p class="text-danger" style="margin-left: 10px">@error('pan_no'){{$message}} @enderror</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-3">
                                                        <label  class="form-label ">Designation</label>
                                                        <input type="text" name="designation" value="{{$designation}}" class="form-control  designation" placeholder="Enter Designation">
                                                         <p class="text-danger" style="margin-left: 10px">@error('designation'){{$message}} @enderror</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-12 text-center">
                                    @if ($id > 0)
                                         <button id="submit" type="submit" class="btn btn-primary"  onclick="return checkDelete()"> Update Customer</button>
                                    @else
                                         <button id="submit" type="submit" class="btn btn-primary" onclick="return checkDelete()"> Create Customer</button>
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
    <script>
        $(document).ready(function () {

            $('.cpassword').keyup(function (e) { 
              var cpassword =  $(this).val();
              var password =  $('.password').val();

            
              if(cpassword != password){
                    $('.pwdError').html('Password is not matched').show();
                    return false
              }else if(cpassword == password){
                     $('.pwdError').hide();
              }
            });

        //    $('#submit').click(function (e) { 
        //          e.preventDefault();
        //         if($('.cpassword').val() == ''){
        //             $('.pwdError').html('Confirm password is required').show();
                   
        //         }else{
        //             $('.pwdError').hide();
        //         }
        //         return confirm('Are you sure?');

        //    });
            
            $('.select_type').change(function (e) { 
                e.preventDefault();
               var select_type =  $(this).val();
               if(select_type === 'Individual'){
                    $('.extra_div').hide();
                    $('.company_name').val('');
                    $('.gst_no').val('');
                    $('.pan_no').val('');
                    $('.designation').val('');

               }else if(select_type === 'Company'){
                     $('.extra_div').show().slow();
               }
            });

            var select_type =  $('.select_type').val();
            if(select_type === 'Individual'){
                $('.extra_div').hide();
                $('.company_name').val('');
                $('.gst_no').val('');
                $('.pan_no').val('');
                $('.designation').val('');

            }else if(select_type === 'Company'){
                $('.extra_div').show().slow();
            }
        });

    </script>
@endsection