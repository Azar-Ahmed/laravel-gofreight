@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Quotation')
@section('container')

        
<!-- Start of Breadcrumb section -->
	{{-- <section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}"> --}}
		{{-- <span class="background_overlay"></span> --}}
		{{-- <span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh.png')}}" alt=""></span> --}}
			{{-- <div class="container">
				<div class="ft-breadcrumb-content headline text-center position-relative">
					<h2>Quotation</h2>
					<div class="ft-breadcrumb-list ul-li">
						<ul>
							<li><a href="{{url('/')}}">Home</a></li>
							<li>Quotation</li>
						</ul>
					</div>
				</div>
			</div> --}}
	{{-- </section>	 --}}
<!-- End of Breadcrumb section -->
	<section id="ft-contact-page" class="ft-contact-page-section page-padding my-5">
		<div class="container my-5">
			<div class="ft-contact-page-content">
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="ft-contact-page-form-wrapper headline">
							<h3 class="text-center">Get A Quote</h3>
							

							@if (session('success_msg'))
								<div class="text-center my-4">
									<div class="alert alert-success alert-dismissible message" role="alert">{{ session('success_msg') }}</div>
								</div>
							@endif
					
							<form id="quote_form"  method="POST" action="{{url('quotation-submit')}}" enctype="multipart/form-data" autocomplete="off">
								@csrf
								<input type="hidden" name="user_id" value="{{session('UserData.id')}}">
								<div class="row justify-content-center">
									<div class="col-md-6">
										<h5 class="fw-bold mb-4">PickUp Details</h5>
										<div class="row mb-3">
											<div class="col-md-6">
												<label class="form-label text-dark">Name</label>
												<input type="text" class="form-control border border-dark border-1" name="pickup_name" value="{{ Session::get('UserData')->name}}" placeholder="Name">
											</div>
											<div class="col-md-6">
												<label class="form-label text-dark">Phone Number</label>
												<input type="number" class="form-control border border-dark border-1" name="pickup_mobile" value="{{ Session::get('UserData')->mobile}}" placeholder="Phone Number">
											</div>

										</div>
										{{-- Address --}}
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label text-dark">Address 1:</label>
											<textarea class="form-control border border-dark border-1" name="pickup_address_one" style="height: 50px"></textarea>
										</div>
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label text-dark">Address 2:</label>
											<textarea class="form-control border border-dark border-1" name="pickup_address_two" style="height: 50px"></textarea>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="mb-3">
													<label for="exampleFormControlInput1" class="form-label text-dark">City</label>
													<input type="text" class="form-control border border-dark border-1" name="pickup_city" placeholder="City">
												</div>
											</div>
											<div class="col-md-4">
												<div class="mb-3">
													<label for="exampleFormControlInput1" class="form-label text-dark">State</label>
													<input type="text" class="form-control border border-dark border-1" name="pickup_state" placeholder="State">
												</div>
											</div>
											<div class="col-md-4">
												<div class="mb-3">
													<label for="exampleFormControlInput1" class="form-label text-dark">Pincode</label>
													<input type="text" class="form-control border border-dark border-1" name="pickup_pincode" placeholder="Pincode">
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-6">
										<h5 class="fw-bold mb-4">Delivery Details</h5>
										<div class="row mb-3">
											<div class="col-md-6">
												<label class="form-label text-dark">Name</label>
												<input type="text" class="form-control border border-dark border-1" name="delivery_name" placeholder="Name">
											</div>
											<div class="col-md-6">
												<label class="form-label text-dark">Phone Number</label>
												<input type="number" class="form-control border border-dark border-1" name="delivery_mobile" placeholder="Phone Number">
											</div>

										</div>
										{{-- Address --}}
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label text-dark">Address 1:</label>
											<textarea class="form-control border border-dark border-1" name="delivery_address_one" style="height: 50px"></textarea>
										</div>
										<div class="mb-3">
											<label for="exampleFormControlInput1" class="form-label text-dark">Address 2:</label>
											<textarea class="form-control border border-dark border-1" name="delivery_address_two" style="height: 50px"></textarea>
										</div>
										<div class="row">
											<div class="col-md-4">
												<div class="mb-3">
													<label for="exampleFormControlInput1" class="form-label text-dark">City</label>
													<input type="text" class="form-control border border-dark border-1" name="delivery_city" placeholder="City">
												</div>
											</div>
											<div class="col-md-4">
												<div class="mb-3">
													<label for="exampleFormControlInput1" class="form-label text-dark">State</label>
													<input type="text" class="form-control border border-dark border-1" name="delivery_state" placeholder="State">
												</div>
											</div>
											<div class="col-md-4">
												<div class="mb-3">
													<label for="exampleFormControlInput1" class="form-label text-dark">Pincode</label>
													<input type="text" class="form-control border border-dark border-1" name="delivery_pincode" placeholder="Pincode">
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
											<label for="exampleFormControlInput1" class="form-label text-dark">Pickup Date:</label>
											<input type="date" class="form-control border border-dark border-1" name="pickup_date" placeholder="Pickup Date:">
										</div>
									</div>
									{{-- Service Mode --}}
									<div class="col-md-4">
										<div class="mb-3">
											<label  class="form-label text-dark">Service Mode</label>
											<select class=" form-select form-select-lg border border-dark border-1"  name="service_mode" aria-label="Default select example">
												<option value="">Select Service</option>
												<option value="door-to-door">Door to Door</option>
												<option value="door-to-ort">Door to Port</option>
												<option value="Port to Port">Port to Port</option>
												<option value="port-to-port">Port to Port</option>
											  </select>
										</div>
									</div>
									{{-- Nature of Goods --}}
									<div class="col-md-4">
										<div class="mb-3">
											<label  class="form-label text-dark">Nature of Goods</label>
											<input type="text" class="form-control border border-dark border-1" name="goods_nature" placeholder="Nature of Goods">
										</div>
									</div>
								</div>
									<hr class="my-5">


									<div class="row justify-content-center">
										<h5 class="fw-bold mb-4">Dimentions</h5>
										<div class="col-md-6">
											<div class="mb-3">
												<label  class="form-label text-dark">No of pcs</label>
												<input type="number" class="form-control border border-dark border-1" name="ref_pcs" placeholder="No of Pcs">
											</div>
										</div>
										<div class="col-md-6">
											<div class="mb-3">
												<label  class="form-label text-dark">Gross Weight</label>
												<input type="number" class="form-control border border-dark border-1" name="ref_grossweight" placeholder="Gross Weight">
											</div>
										</div>
									</div>

									<hr class="my-5">

								{{-- <div class="row justify-content-center">

							
									<div class="d-flex bd-highlight">
										<div class="p-2 flex-grow-1 bd-highlight"><h5 class="fw-bold">Dimentions</h5></div>
										<div class="p-2 bd-highlight"><button class="btn btn-primary btn-sm">ADD VARIENT </button> </div>
									</div>
									<div class="col-md-2">
										<div class="mb-3">
											<label  class="form-label text-dark">No of Box</label>
											<input type="number" class="form-control border border-dark border-1" name="total_box" placeholder="No of Box">
										</div>
									</div>
									<div class="col-md-2">
										<div class="mb-3">
											<label  class="form-label text-dark">Length in cm</label>
											<input type="number" class="form-control border border-dark border-1" name="box_length" placeholder="Length in cm">
										</div>
									</div>
									<div class="col-md-2">
										<div class="mb-3">
											<label  class="form-label text-dark">Breath in cm</label>
											<input type="number" class="form-control border border-dark border-1" name="box_breath"  placeholder="Breath in cm">
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<label  class="form-label text-dark">Height in cm</label>
											<input type="number" class="form-control border border-dark border-1" name="box_height" placeholder="Height in cm">
										</div>
									</div>
									<div class="col-md-3">
										<div class="mb-3">
											<label  class="form-label text-dark">Weight in cm</label>
											<input type="number" class="form-control border border-dark border-1" name="box_weight"  placeholder="Height in cm">
										</div>
									</div>
								</div>

									<hr class="my-5">
								<div class="row justify-content-center">
								
									<h5 class="fw-bold mb-4">Weight Calculations</h5>
									  
									<div class="col-md-4">
										<div class="mb-3">
											<label  class="form-label text-dark">Gross Weight</label>
											<input type="number" class="form-control border border-dark border-1" name="gross_weight"  placeholder="Gross Weight">
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label  class="form-label text-dark">Volumetric Weight</label>
											<input type="number" class="form-control border border-dark border-1" name="volumetric_weight" placeholder="Volumetric Weight">
										</div>
									</div>
									<div class="col-md-4">
										<div class="mb-3">
											<label  class="form-label text-dark">Chargeable Weight</label>
											<input type="number" class="form-control border border-dark border-1" name="chargeable_weight"  placeholder="Chargeable Weight">
										</div>
									</div>
								</div>
									<hr class="my-5"> --}}

									<div class="row justify-content-center">
										<div class="col-md-6">
											<h5 class="fw-bold mb-4">Value of Product</h5>
											<div class="mb-3">
												<label  class="form-label text-dark">Value of Product</label>
												<input type="text" name="product_value" class="form-control border border-dark border-1" value="0">
											</div>
										</div>

										{{-- Note* : --}}
										<div class="col-md-6">
											<h5 class="fw-bold mb-4">Note</h5>
											<div class="mb-3">
												<label  class="form-label text-dark">Note</label>
												<textarea class="form-control border border-dark border-1" name="notes" style="height: 50px"></textarea>
											</div>
										</div>

									</div>
									<hr class="my-5">

								<div class="row justify-content-center">
									{{-- Upload Images/Files : --}}
									<div class="col-md-12">
										<h5 class="fw-bold mb-4">Upload Multiple Images/Files </h5>
										<div class="mb-3">
											<label  class="form-label text-dark">Upload Images/Files :</label>
											<input type="file" name="multiple_images[]" class="form-control border border-dark border-1" accept="image/jpg, image/jpeg, image/png" multiple="multiple">
											{{-- <p class="text-danger" style="margin-left: 10px">@error('multiple_images'){{$message}} @enderror</p> --}}
										</div>
									</div>
									<div class="col-md-5 my-3">
										<button id="submit" type="submit"> Submit Quotation</button>
									</div>
								</div>
									
									
							</form>
							
						
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>	
	
	
	

    @endsection
	@section('custom_script')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	@if (session('success') > 0)
		<script>
			swal({
				title: "Quotation Submitted Successfully",
				icon: "success",
			});
		</script>
	@endif

	<script>
		$(document).ready(function () {
		
			setTimeout(function() {
                $('.message').fadeOut('fast');
            }, 3000);


			if ($("#quote_form").length > 0) {
				$("#quote_form").validate({
					rules: {
						pickup_name: {
							required: true,
						},
						pickup_mobile:{
							required: true,
							number: true,
							minlength: 10,
							maxlength: 10,
						},
						pickup_address_one: {
							required: true,
						},
						pickup_city: {
							required: true,
						},
						pickup_state: {
							required: true,
						},
						pickup_pincode: {
							// required: true,
							number: true,
							minlength: 6,
							maxlength: 6,
						},
						delivery_name: {
							required: true,
						},
						delivery_mobile:{
							required: true,
							number: true,
							minlength: 10,
							maxlength: 10,
						},
						delivery_address_one: {
							required: true,
						},
						delivery_city: {
							required: true,
						},
						delivery_state: {
							required: true,
						},
						delivery_pincode: {
							// required: true,
							number: true,
							minlength: 6,
							maxlength: 6,
						},
						pickup_date: {
							required: true,
						},
						service_mode: {
							required: true,
						},
						goods_nature: {
							required: true,
						},
						ref_pcs: {
							required: true,
						},
						ref_grossweight: {
							required: true,
						},
						// multiple_images[]: {
						// 	required: true,
						// },
						// total_box: {
						// 	required: true,
						// },
						// box_length: {
						// 	required: true,
						// },
						// box_breath: {
						// 	required: true,
						// },
						// box_height: {
						// 	required: true,
						// },
						// box_weight: {
						// 	required: true,
						// },
					},
					messages: {
						pickup_address_one: {
							required: "Please Enter Pickup Address",
						},
						pickup_city: {
							required: "Please Enter Pickup City",
						},
						pickup_state: {
							required: "Please Enter Pickup State",
						},
						pickup_pincode: {
							// required: 'Please Enter Pickup Pincode Number',
							number: 'Please Enter Only Digits',
							minlength: "Please Enter 6 Digits Pincode No",
							maxlength: "Please Enter Valid Pincode",
						},
						delivery_name: {
							required: "Please Enter Name",
						},
						delivery_mobile: {
							required: 'Please Enter Pickup Mobile Number',
							number: 'Please Enter Only Digits',
							minlength: "Please Enter 10 Digits Mobile No",
							maxlength: "Please Enter Valid Mobile",
						},
						delivery_address_one: {
							required: "Please Enter Delivery Address",
						},
						delivery_city: {
							required: "Please Enter Delivery City",
						},
						delivery_state: {
							required: "Please Enter Delivery State",
						},
						delivery_pincode: {
							// required: 'Please Enter Delivery Pincode Number',
							number: 'Please Enter Only Digits',
							minlength: "Please Enter 6 Digits Pincode No",
							maxlength: "Please Enter Valid Pincode",
						},
						pickup_date: {
							required: "Please Select Pickup Date",
						},
						service_mode: {
							required: "Please Enter Service Mode",
						},
						goods_nature: {
							required: "Please Enter Nature of Goods",
						},
						ref_pcs: {
							required: "Please Enter No of Pcs",
						},
						ref_grossweight: {
							required: "Please Enter Gross Weight",
						},
						// multiple_images[]: {
						// 	required: "Please Upload Images",
						// },
						// total_box: {
						// 	required: "Please Enter No of Box",
						// },
						// box_length: {
						// 	required: "Please Enter Length in CM",
						// },
						// box_breath: {
						// 	required: "Please Enter Breath in CM",
						// },
						// box_height: {
						// 	required: "Please Enter Height in CM",
						// },
						// box_weight: {
						// 	required: "Please Enter Weight in CM",
						// },

					},
					errorElement: "div",
					errorPlacement: function(error, element) {
						error.addClass("invalid-feedback");
						error.insertAfter(element);
					},
				});
				
				
			}

		
          

		});



	</script>
@endsection