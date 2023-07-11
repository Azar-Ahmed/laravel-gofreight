@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Profile')
    @section('container')
    		         <!-- Start of Breadcrumb section
	    ============================================= -->
        {{-- <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}">
            <span class="background_overlay"></span>
            <span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh1.png')}}" alt=""></span>
            <div class="container">
                <div class="ft-breadcrumb-content headline text-center position-relative">
                    <h2>Profile</h2>
                    <div class="ft-breadcrumb-list ul-li">
                        <ul>
                            <li><a href="/">Home</a></li>
                            <li>Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- End of Breadcrumb section
	    ============================================= -->

        <!-- Start of About section
    	============================================= -->
        <section id="ft-thx-about" class="ft-thx-about-section pt-50 my-5">
            <div class="container-fluid my-5">
                <div class="pr-cor-about-content">
                    <div class="row justify-content-between">
                      <div class="col-md-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="pr-cor-about-text-wrap">
                                    <div class="pr-cor-section-title headline pera-content wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                                        @foreach ($user as $userData)
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <img src="{{asset('uploads/users/'.$userData->image)}}" class="rounded-circle border border-dark" style="width: 200px; height:180px" alt="">
                                            </div>
                                        </div>
                                       
                                        <div class="row">
                                            <div class="col-md-12 my-2">
                                                <h4 class="fw-bold">{{$userData->name}} 
                                                    <span> 
                                                        @if ($userData->status == 1)
                                                            <i class="far fa-check-circle text-success" style='font-size:18px'></i>
                                                        @else
                                                                <i class="far fa-times-circle text-danger" style='font-size:18px'></i>
                                                        @endif
                                                    </span>
                                                    <button class="btn btn-primary float-end edit_profile btn-sm" title="Edit Profile" value="{{$userData->id}}"  data-bs-toggle="modal" data-bs-target="#profileModal"><i class='far fa-edit'></i></button>
                                                </h4>
                                            </div>
                                            <div class="col-md-12 my-2">
                                                <p class="m-0">Email Address</p>
                                                <h6>{{$userData->email}}</h6>
                                            </div>
                                            <div class="col-md-12  my-2">
                                                <p class="m-0">Phone Number</p>
                                                 <h6>{{$userData->mobile}}</h6>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 my-2">
                                                <p class="m-0">Address</p>
                                                <h6>{{$userData->address}}</h6>
                                            </div>
                                            
                                            <div class="col-md-6 my-2">
                                                <p class="m-0">City</p>
                                                <h6>{{$userData->city}}</h6>
                                            </div>
                                            <div class="col-md-6 my-2">
                                                <p class="m-0">State</p>
                                                 <h6>{{$userData->state}}</h6>
                                            </div>
                                            <div class="col-md-12 my-2">
                                                <p class="m-0">Pincode</p>
                                                <h6>{{$userData->pincode}}</h6>
                                           </div>
                                        </div>
                                        @if ($userData->select_type == 'Company')
                                        <hr>
                                            <div class="row">
                                                <div class="col-md-12 my-2">
                                                    <p class="m-0">Company Name	</p>
                                                    <h6>{{$userData->company_name}}</h6>
                                                </div>
                                                
                                                <div class="col-md-6 my-2">
                                                    <p class="m-0">GST No</p>
                                                    <h6>{{$userData->gst_no}}</h6>
                                                </div>
                                                <div class="col-md-6 my-2">
                                                    <p class="m-0">PAN No</p>
                                                    <h6>{{$userData->pan_no}}</h6>
                                                </div>
                                                <div class="col-md-6 my-2 text-end">
                                                    <p class="m-0">Designation</p>
                                                    <h6>{{$userData->designation}}</h6>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach   
                                        <div class="row mt-4">
                                            <div class="col-md-12">
                                                <a href="{{url('user/logout')}}" class="btn btn-outline-danger w-100">Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                      </div>
                      <div class="col-md-9">
                        <div class="card">
                            <div class="card-body">
                                <h4 style="color: #f3961e; font-weight: 700">My Quotation Request</h4>
                                    @if ($quotation_count > 0)
                                    <div class="table-responsive mt-4 " style="overflow-x:auto;">
                                        <table class="table table-hover  table-bordered border-warning">
                                            <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Pickup Date</th>
                                                <th scope="col">Pickup City</th>
                                                <th scope="col">Deliverd City</th>
                                                <th scope="col">Nature Of Goods</th>
                                                <th scope="col">No of Pcs</th>
                                                <th scope="col">Gross Weight</th>
                                                <th scope="col">Chargable Weight</th>
                                                <th scope="col">Charges Per K.g</th>
                                                <th scope="col">Total Cost</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Tracking</th>
                                                <th scope="col" class="text-center">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 0; ?>
                                                @foreach ($quotation as $item)
                                    {{-- {{dd($item->gross_weight)}} --}}

                                                    <?php $i++; ?>
                                                        <tr>
                                                            <td>{{ $i }}</td>
                                                            <td>{{ date('d M Y', strtotime($item->pickup_date)) }}</td>
                                                            <td>{{ $item->pickup_city }}</td>
                                                            <td>{{ $item->delivery_city }}</td>
                                                            <td>{{ $item->goods_nature }}</td>
                                                            <td>
                                                                {{
                                                                   $no_pcs =  \App\Models\QuoteDimention::where('quote_id', $item->id)->sum('total_box');
                                                                }}
                                                            </td>
                                                            <td>
                                                                @if ($item->gross_weight == null)
                                                                Pending
                                                                @else
                                                                {{ number_format((float)$item->gross_weight, 2, '.', '') }}</td>
                                                                @endif
                                                            
                                                            <td>
                                                                @if ($item->chargeable_weight == null)
                                                                Pending
                                                                @else
                                                                {{ number_format((float)$item->chargeable_weight, 2, '.', '')}}</td>
                                                                @endif
                                                            <td>
                                                               {{-- @if ($item->rate_45kg == 0 || $item->rate_100kg == 0 || $item->rate_250kg == 0 || $item->rate_500kg == 0 || $item->rate_other == 0)
                                                                   Pending
                                                               @else --}}
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

                                                                    
                                                               {{-- @endif --}}
                                                               
                                                            </td>
                                                          
                                                            <td>
                                                                <?php $total_cost =  \App\Models\EwbBill::select('grand_total')->where('quote_id', $item->id)->get();  ?>
                                                                @foreach ($total_cost as $grand)
                                                               {{ number_format((float)$grand->grand_total, 2, '.', '')}}
                                                                @endforeach
                                                            </td>
                                                            @if ($item->progress == 'quotation-request')
                                                                <td>Processing</td>
                                                            @elseif($item->progress == 'send-quote')
                                                                <td>Quotation Recived</td>
                                                            @elseif($item->progress == 'customer-approved')
                                                                <td>Quotation Accept</td>
                                                            @elseif($item->progress == 'customer-unapproved')
                                                                <td>Quotation Canceled</td>
                                                            @elseif($item->progress == 'cargo-on-hand')
                                                                <td>Cargo On Hand</td>
                                                            @else
                                                                <td>On The Way</td>
                                                            @endif
                                                          
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
                                                                <a href="{{ url('user-quotation-detail/'.$item->id) }}" target="_blank" class="badge rounded-pill bg-warning text-light" title="View Quotation"><i class='fas fa-eye' style='font-size:15px'></i></a>
                                                                
                                                                @if ($item->progress == 'send-quote')
                                                                    <button type="submit" id="submit" class="badge rounded-pill bg-success confirm_btn border-0" value="{{$item->id}}" data="Approved" title="Send Quotation"><i class="fas fa-check" style='font-size:15px'></i></button>
                                                                    <button type="submit" id="submit" class="badge rounded-pill bg-danger confirm_btn border-0" value="{{$item->id}}" data="UnApproved" title="Cancel Quotation"><i class="fas fa-times" style='font-size:15px'></i></button> 
                                                                @else
                                                                    <button type="submit" id="submit" class="badge rounded-pill bg-secondary confirm_btn border-0" value="{{$item->id}}" data="Approved" title="Send Quotation" disabled><i class="fas fa-check" style='font-size:15px'></i></button>
                                                                    <button type="submit" id="submit" class="badge rounded-pill bg-secondary confirm_btn border-0" value="{{$item->id}}" data="UnApproved" title="Cancel Quotation" disabled><i class="fas fa-times" style='font-size:15px'></i></button>
                                                                @endif
                                                                
                                                            </td>
                                                        </tr>  
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    @else
                                    <div class="row justify-content-center mt-5">
                                        <div class="col-md-12 text-center">
                                            <div class="">
                                               <a href="{{url('quotation')}}">
                                                <img src="{{asset('frontend_assets/img/add_quote.png')}}" style="width: 400px" alt="">
                                                </a> 
                                            </div>
                                        </div>
                                        <div class="col-md-12 text-center mt-3">
                                            <a href="{{url('quotation')}}" class="text-muted fs-4 fw-bold">*Add Your First Quotation Request</a>
                                        </div>
                                        </div>
                                    @endif
                            </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </section>


  
  <!-- Modal -->
  <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="profileModalLabel">Edit Profile</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{url('update-profile')}}" method="POST" enctype="multipart/form-data" autocomplete="off">
                @csrf
                <input type="hidden" name="id" class="id">
                <div class="row">
                    <div class="col-md-6 text-center">
                        <div class="profile_img mb-4"></div>
                        <div class="latest_img_div" style="display: none">
                            <img id="blah" src="http://placehold.it/180"  class="latest_img rounded-circle border border-dark" style="width: 200px; height:180px"  alt="your image" />
                        </div>
                    </div>
                   
                    <div class="col-md-6 text-center mt-5">
                        <label class="form-label text-start">Upload Profile Image</label>
                        <input type="file" class="form-control" name="image" accept="image/jpg, image/jpeg, image/png" onchange="readURL(this);" >
                        <p class="text-danger" style="margin-left: 10px">@error('image'){{$message}} @enderror</p>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control name" name="name" placeholder="Enter Name">
                      </div> 
                    <div class="mb-3 col-md-6">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control email" name="email" placeholder="name@example.com">
                      </div>
                      <div class="mb-3 col-md-12">
                        <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                        <textarea class="form-control address" name="address"  rows="3"></textarea>
                      </div>
                      <div class="mb-3 col-md-4">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control city" name="city" placeholder="Enter City">
                      </div>
                      <div class="mb-3 col-md-4">
                        <label class="form-label">State</label>
                        <input type="text" class="form-control state" name="state" placeholder="Enter State">
                      </div>
                      <div class="mb-3 col-md-4">
                        <label class="form-label">Pincode</label>
                        <input type="text" class="form-control pincode" name="pincode" placeholder="Enter Pincode">
                      </div>
                      {{-- <div class="mb-3 col-md-4">
                        <label class="form-label">User Type</label>
                        <select class=" form-select select_type"  name="select_type">
                            <option selected disabled>Select Type</option>
                            <option value="Individual">Individual</option>
                            <option value="Company">Company</option>
                        </select>
                      </div> --}}
                    </div>
                    <div class="row extra_div" style="display: none">
                        <hr>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Company Name</label>
                            <input type="text" class="form-control company_name" name="company_name" placeholder="Enter Company Name">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Gst No</label>
                            <input type="text" class="form-control gst_no" name="gst_no" placeholder="Enter Gst No">
                        </div>
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Designation</label>
                            <input type="text" class="form-control designation" name="designation" placeholder="Enter designation">
                        </div>
                      </div>
                      <div class="row">
                        <div class="mb-3 col-md-12 text-center">
                            <button type="submit" class="btn btn-warning">Update Profile</button>
                        </div>
                      </div>
            </form>
        </div>
      </div>
    </div>
  </div>

    @endsection
@section('custom_script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.latest_img_div').show();
                $('#blah').attr('src', e.target.result);
                $('.profile_img').hide()
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script>
    $(document).ready(function () {
        // Edit Profile
        $('.edit_profile').click(function(e) {
                e.preventDefault();
                
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            type: "POST",
                            url: `{{ url('edit-profile') }}`,
                            data: {
                                user_id: $(this).val(),
                            },
                            dataType: "JSON",
                            success: function(response) {
                                if (response.Status === 200) {
                                    console.log(response)
                                    var avatar = response.data.user.image

                                    $('.id').val(response.data.user.id)
                                    $(".profile_img").html(`<img src="{{asset('uploads/users/${avatar}')}}"  class="rounded-circle border border-dark" style="width: 200px; height:180px" />`);
                                    $('.name').val(response.data.user.name)
                                    $('.email').val(response.data.user.email)
                                    $('.address').val(response.data.user.address)
                                    $('.city').val(response.data.user.city)
                                    $('.state').val(response.data.user.state)
                                    $('.pincode').val(response.data.user.pincode)
                                    $('.company_name').val(response.data.user.company_name)
                                    $('.gst_no').val(response.data.user.gst_no)
                                    $('.pan_no').val(response.data.user.pan_no)
                                    $('.designation').val(response.data.user.designation)
                                    console.log(response.data.user.select_type)
                                    var select_type = response.data.user.select_type

                                    if(select_type === 'Company'){
                                        $('.extra_div').show();
                                    }else{
                                        $('.extra_div').hide();
                                    }

                                    // $('.select_type')
                                    // $('#aioConceptName').find(":selected").val();

                                      
                                   
                                   
                                    
                                }
                            }
                        });
                      
                });

        $('.confirm_btn').click(function(e) {
                e.preventDefault();
                var confirm_btn;
                var text;
                if($(this).attr("data") == 'Approved'){
                     confirm_btn = 'Approved'
                     text = 'Do you want to accept the quotation'
                }else if($(this).attr("data") == 'UnApproved'){
                     confirm_btn = 'UnApproved'
                     text = 'Do you want to decline the quotation'
                }

                swal({
                        title: "Are you sure?",
                        text: text,
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                    if (willDelete) {
                        $.ajaxSetup({
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            }
                        });
                        $.ajax({
                            type: "POST",
                            url: `{{ url('customer-quote-confirmation') }}`,
                            data: {
                                quote_id: $(this).val(),
                                select: confirm_btn,
                            },
                            dataType: "JSON",
                            success: function(response) {
                                if (response.Status === 200) {
                                    swal(`${response.message}`, {
                                        icon: "success",
                                    })
                                    .then(function() {
                                        location.reload();
                                    });
                                }
                            }
                        });
                    } else {
                        swal("Change are not made!");
                    }
                });
            });
    });
      
</script>
@endsection