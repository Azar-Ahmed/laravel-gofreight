@extends('frontend.includes.layout')
@section('page_title', 'Gofreight - Login')
    @section('container')
<style>
	.toggle-password {
    float: right;
    cursor: pointer;
    margin-right: 10px;
    margin-top: -25px;
}
</style>
        
<!-- Start of Breadcrumb section -->
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh.png')}}" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Login</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li>Login</li>
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
							<h3 class="text-center">Login</h3>
							<div class="text-center my-4">
								<div class="alert alert-danger alert-dismissible fade show message" role="alert" style="display: none"></div>
							</div>
							<form id="user_login_frm" method="POST" autocomplete="off">
								@csrf
								<div class="row">
									<div class="col-lg-12 my-2">
										{{-- <label class="control-label" for="Mobile Number">Mobile Number</label> --}}
										<input type="text" name="mobile" placeholder="Mobile Number">
									</div>
									<div class="col-lg-12 my-2 mb-3">
										<div class="form-group">
											{{-- <label class="control-label" for="password">Password</label> --}}
											<input type="password" name="password" id="password" class="form-control" placeholder="Password" style="margin-bottom:0px">
											<i class="toggle-password fa fa-fw fa-eye-slash" style="font-size: 20px;line-height:0px"></i>
										</div>
										
									</div>
									<div class="col-lg-12 my-3">
										<button id="submit"> Login</button>

										<div class="d-flex bd-highlight my-2">
											<div class="p-2 flex-fill bd-highlight">
												<p class="fs-5">Create an account <a href="{{url('register')}}" class="text-primary">Sign up</a></p>
											</div>
											<div class="p-2 flex-fill bd-highlight text-end">
												<p class="fs-5"> <a href="{{url('forgot-password')}}" class="text-primary">Forgot Password?</a></p>
											</div>
										</div>


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
		
			setTimeout(function() {
                $('.message').fadeOut('fast');
            }, 3000);


			$(".toggle-password").click(function() {
				$(this).toggleClass("fa-eye fa-eye-slash");
				input = $(this).parent().find("input");
				if (input.attr("type") == "password") {
					input.attr("type", "text");
				} else {
					input.attr("type", "password");
				}
			});

			if (jQuery("#user_login_frm").length > 0) {
				jQuery("#user_login_frm").validate({
					rules: {
						mobile: {
							required: true,
							number: true,
							minlength: 10,
							maxlength: 10,
						},
						password: {
							required: true,
						}, 
					},
					messages: {
						mobile: {
							required: 'Please Enter Mobile Number',
							number: 'Please Enter Only Digits',
							minlength: "Please Enter 10 Digits Mobile No",
							maxlength: "Please Enter Valid Mobile",
						},
						password: {
							required: "Please Enter Password",
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
						url: "{{url('user-login-submit')}}",
						type: "POST",
						data: $('#user_login_frm').serialize(),
						success: function( response ) {
							$('#submit').html('Login');
							$("#submit").attr("disabled", false);
							document.getElementById("user_login_frm").reset(); 
							console.log(response)
							if(response.error_msg){
								$('.message').html(response.error_msg).show()

								setTimeout(function() {
									$('.message').fadeOut('fast');
								}, 3000);
							}else if(response.success_msg){
								swal({
									title: "Successfully Logged In",
									icon: "success",
								});

								swal({
									title: "Successfully Logged In",
									icon: "success",
									type: "success"
								}).then(function() {
									window.location = "{{url('/profile')}}";
								});
							}
						}
					});
				 }
				})
			 }
		});
	</script>
@endsection