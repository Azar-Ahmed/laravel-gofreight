@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Quotation Detail')
    @section('container')
        <section id="ft-goodness-feature" class="ft-goodness-feature-section my-5">
            <div class="container my-5">
                <div class="ft-section-title-2 headline pera-content text-center">
                    <span class="sub-title">Quotation</span>
                    {{-- <h2>Quotation Detail</h2> --}}
                    
                </div>
                <div class="ft-goodness-featured-content my-5">
                    <div class="row">
                        <div class="col">
                            @if (session('success_msg'))
                                <div class="text-center my-4">
                                    <div class="alert alert-success alert-dismissible message" role="alert">{{ session('success_msg') }}</div>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-header">
                                    <div class="d-flex">
                                        <div class="p-2 flex-grow-1">
                                                <h3 >Quotation Detail</h3>
                                        </div>
                                        <div class="p-2">
                                            <a href="{{url('profile')}}"  class="btn btn-warning text-dark"><i class="fa fa-angle-left"></i> Go Back</a>
                                        </div>
                                    </div>
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
                                                <h4 class="my-3 fw-bold">Dimentions :</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <h6 class="my-3 fw-bold">No of Pcs:</h6>
                                                        <p>{{ $quotation_detail->ref_pcs}}</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <h6 class="my-3 fw-bold">Gross Wegiht:</h6>
                                                        <p>{{$quotation_detail->ref_grossweight}}</p>
                                                    </div>  
                                                </div>
                                            </div>

                                            {{-- <div class="col-md-12">
                                                <div class="d-flex bd-highlight">
                                                    <div class="p-2 flex-grow-1 bd-highlight">
                                                        <h5 class="fw-bold">Dimentions</h5>
                                                    </div>
                                                    <div class="p-2 bd-highlight">
                                                          @if($quotation_detail->progress == 'quotation-request')
                                                                <button type="button" class="add_dimention btn btn-primary btn-sm"  data-bs-toggle="modal" data-bs-target="#addDimentionModal">
                                                                    Add Dimentions
                                                                </button>
                                                          @endif
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
                                                         @if($quotation_detail->progress == 'quotation-request')
                                                            <th scope="col">Action</th>
                                                          @endif

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
                                                         @if($quotation_detail->progress == 'quotation-request')
                                                            
                                                            <td >
                                                                <button type="button" class="edit_dimention btn btn-primary btn-sm" value="{{$item->id}}" data-bs-toggle="modal" data-bs-target="#editDimentionModal">
                                                                    Edit
                                                                </button>
                                                                  <button class="delete_dimention btn btn-danger btn-sm" value="{{$item->id}}">Delete</button>
                                                            </td>
                                                            @endif
                                                        </tr>
                                                          
                                                        @endforeach
                                                        </tbody>
                                                      </table>
                                                </div>
                                               
                                            </div> --}}


                                            <hr class="my-3">
                                            <div class="col-md-12">
                                                <h4 class="my-3 fw-bold">Weight Calculations :</h4>
                                                <div class="row justify-content-center">
                                                    <div class="col-md-4">
                                                        <h6 class="my-3 fw-bold">Gross Weight:</h6>
                                                        <p> {{ number_format((float)$quotation_detail->gross_weight, 2, '.', '')}}</p>
                                                       

                                                    </div>
                                                    <div class="col-md-4">
                                                        <h6 class="my-3 fw-bold">Volumetric Weight:</h6>
                                                        <p>{{ number_format((float)$quotation_detail->volumetric_weight, 2, '.', '')}}
                                                        </p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <h6 class="my-3 fw-bold">Chargeable Weight:</h6>
                                                        <p> {{ number_format((float)$quotation_detail->chargeable_weight, 2, '.', '')}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr class="my-3">
                                            <div class="col-md-6">
                                                <h4 class="my-3 fw-bold">Value of Product :</h4>
                                                 <p>
                                                    {{ number_format((float)$quotation_detail->product_value, 2, '.', '')}}</p>
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
                                            <div class="col-md-12 text-center my-5">
                                                @if($quotation_detail->progress == 'send-quote')
                                                    <button type="submit" id="submit" class="btn btn-primary confirm_btn" value="{{$quotation_detail->id}}" data="Approved" style="width: 20%">Approved</button>
                                                    <button type="submit" id="submit" class="btn btn-warning confirm_btn" value="{{$quotation_detail->id}}" data="UnApproved" style="width: 20%">Unapproved</button>
                                                @endif

                                                {{-- @if ($quotation_detail->progress == 'ewb-bill')
                                                    <button type="submit" id="submit" class="btn btn-secondary confirm_btn" value="{{$quotation_detail->id}}" data="Approved" style="width: 20%" disabled>Approved</button>
                                                    <button type="submit" id="submit" class="btn btn-secondary confirm_btn" value="{{$quotation_detail->id}}" data="UnApproved" style="width: 20%" disabled>Unapproved</button>
                                                @else
                                                    <button type="submit" id="submit" class="btn btn-primary confirm_btn" value="{{$quotation_detail->id}}" data="Approved" style="width: 20%">Approved</button>
                                                    <button type="submit" id="submit" class="btn btn-warning confirm_btn" value="{{$quotation_detail->id}}" data="UnApproved" style="width: 20%">Unapproved</button>
                                                @endif --}}
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of goodness feature section
    	============================================= -->


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

    $(document).ready(function () {


        
			setTimeout(function() {
                $('.message').fadeOut('fast');
            }, 3000);

        // confirm_btn
        $('.confirm_btn').click(function(e) {
                e.preventDefault();
                var confirm_btn;

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
                                        window.location.href = "{{url('profile')}}";
                                    });
                                }
                            }
                        });
                    } else {
                        swal("Change are not made!");
                    }
                });
        });

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
    });
      

        
</script>
@endsection