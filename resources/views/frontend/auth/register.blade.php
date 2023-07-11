@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Register')
    @section('container')

        
<!-- Start of Breadcrumb section -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh.png')}}" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Register</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li>Register</li>
					</ul>
				</div>
			</div>
		</div>
	</section>	
<!-- End of Breadcrumb section -->
	<section id="ft-contact-page" class="ft-contact-page-section page-padding mb-5">
		<div class="container mb-5">
			<div class="ft-contact-page-content">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="ft-contact-page-form-wrapper headline">
							<h3 class="text-center">Register</h3>
							<div class="text-center my-4">
								<div class="alert alert-danger alert-dismissible fade show message" role="alert" style="display: none"></div>
							</div>
							<form id="user_signup_frm" method="POST" autocomplete="off">
								@csrf
								<div class="row">
									<div class="col-lg-12 mobile_div">
										<input type="text" class="my-3" name="mobile"  placeholder="Enter Mobile Number">
										<p class="text-danger" style="margin-left: 10px">@error('mobile'){{$message}} @enderror</p>
									</div>
									<div class="col-lg-12 otp_div" style="display:none">
										<input type="text" name="otp" placeholder="Enter 4 Digit OTP">
									</div>
									<div class="col-lg-12 last_div" style="display:none">
										<input type="text" class="my-3" name="name" placeholder="Enter Name">
										<input type="email" name="email" placeholder="Enter Email ID">
										<input type="password" class="my-3" id="password" name="password"  placeholder="Enter Password">
										<input type="text" name="cpassword"  class="form-control cpassword" placeholder="Confirm Password">
										<textarea name="address" class="my-3" cols="30" rows="10" placeholder="Enter Address"></textarea>
										<input type="text" class="my-3" name="city"  placeholder="Enter City">
										<input type="text" class="my-3" name="state"  placeholder="Enter State">
										<input type="text" class="my-3" name="pincode"  placeholder="Enter Pincode">
										<div class="mb-3">
											{{-- <label  class="form-label text-dark">Select Type</label> --}}
											<select class=" form-select form-select-lg select_type"  name="select_type">
												<option selected disabled>Select Type</option>
												<option value="Individual">Individual</option>
												<option value="Company">Company</option>
											</select>
										</div>
										<div class="row extra_div" style="display: none">
                                            <hr class="my-5">
                                            <div class="col-md-12">
                                                    <h5 class="fw-bold mb-4">Professional Details</h5>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <input type="text" name="company_name" class="form-control company_name" placeholder="Enter Company Name">
                                                                 <p class="text-danger" style="margin-left: 10px">@error('company_name'){{$message}} @enderror</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <input type="text" name="gst_no"  class="form-control gst_no" placeholder="Enter GST Number">
                                                                 <p class="text-danger" style="margin-left: 10px">@error('gst_no'){{$message}} @enderror</p>
                                                            </div>
                                                        </div>
														<div class="col-md-12">
                                                            <div class="mb-3">
                                                                <input type="text" name="pan_no"  class="form-control pan_no" placeholder="Enter PAN Number">
                                                                 <p class="text-danger" style="margin-left: 10px">@error('pan_no'){{$message}} @enderror</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="mb-3">
                                                                <input type="text" name="designation" class="form-control designation" placeholder="Enter Designation">
                                                                 <p class="text-danger" style="margin-left: 10px">@error('designation'){{$message}} @enderror</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
									</div>
									<div class="col-lg-12">
										<button id="submit"> Submit</button>
										<p class="my-4 fs-5">Already have an account <a href="{{url('login')}}" class="text-primary">Login</a></p>
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
	<script>
		jQuery(document).ready(function () {

			// Select Type
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

			// Validations
			if (jQuery("#user_signup_frm").length > 0) {
				jQuery("#user_signup_frm").validate({
					rules: {
						mobile: {
							required: true,
							number: true,
							minlength: 10,
							maxlength: 10,
						},
						otp: {
							required: true,
							number: true,
							minlength: 4,
							maxlength: 4,
						},
						name: {
							required: true,
							maxlength: 50
						},
						email: {
							required: true,
							maxlength: 50,
							email: true,
						},
						password: {
							required: true,
						},
						cpassword: {
							required: true,
							equalTo: "#password",
						},
						address: {
							required: true,
						},  
						city: {
							required: true,
						},
						state: {
							required: true,
						},
						pincode: {
							required: true,
							number: true,
							minlength: 6,
							maxlength: 6,
						},
						company_name: {
							required: true,
						},
						gst_no: {
							required: true,
							minlength: 15,
							maxlength: 15,
						},
						pan_no: {
							required: true,
							minlength: 10,
							maxlength: 10,
						},
						designation: {
							required: true,
						},
					},
					messages: {
							
						mobile: {
							required: 'Please enter mobile number',
							number: 'Please enter only digits',
							minlength: "Please enter 10 digits mobile number",
							maxlength: "Please enter valid mobile",
						},
						otp: {
							required: 'Please enter otp number',
							number: 'Please enter only digits',
							minlength: "Please enter 4 digits otp number",
							maxlength: "Please enter valid mobile",
						},
						name: {
							required: "Please enter name",
							maxlength: "Your name maxlength should be 50 characters long."
						},
						email: {
							required: "Please enter valid email",
							email: "Please enter valid email",
							maxlength: "The email name should less than or equal to 50 characters",
						},
						password: {
							required: "Please enter Password",
						},
						cpassword: {
							required : 'Confirm Password is required',
			   				equalTo : 'Password not matching',
						},
						address: {
							required: "Please enter address",
						},
						city: {
							required: "Please enter city",
						},
						pincode: {
							required: "Please enter pincode",
							number: 'Please enter only digits',
							minlength: "Please enter 6 digits pincode number",
							maxlength: "Please enter valid pincode",
						},
						company_name: {
							required: "Please enter company name",
						},
						gst_no: {
							required: "Please enter GST number",
							maxlength: "The GST number should equal to 15 characters/digits",
						},
						pan_no: {
							required: "Please enter PAN number",
							maxlength: "The PAN number should equal to 10 characters/digits",
						},
						designation: {
							required: "Please enter Designation",
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
					jQuery('#submit').html('Please Wait...');
					jQuery("#submit"). attr("disabled", true);
					jQuery.ajax({
						url: "{{url('user-signup-submit')}}",
						type: "POST",
						data: $('#user_signup_frm').serialize(),
						success: function(response) {
							$('#submit').html('Submit');
							$("#submit"). attr("disabled", false);
							// document.getElementById("user_signup_frm").reset(); 
							
							console.log(response)

							if(response.step == 2){
								$('.mobile_div').hide();
								$('.otp_div').show();

							}else if(response.step == 3){
								$('.mobile_div').hide();
								$('.otp_div').hide();
								$('.last_div').show();
							}else if(response.step == 4){
								swal({
									title: "SignUp Success!",
									icon: "success",
									type: "success"
								}).then(function() {
									window.location = "{{url('/login')}}";
								});
							}else if(response.error){
								$('.message').html(response.error).show()
								setTimeout(function() {
									$('.message').fadeOut('fast');
									// window.location = "{{url('/register')}}";
								}, 5000);
							}
						}
					});
				 }
				})
			 }
		});
	</script>
@endsection