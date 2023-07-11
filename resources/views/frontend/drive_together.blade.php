@extends('frontend.includes.layout')
@section('page_title', 'Gofreight -Home')
    @section('container')
        
	<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="{{asset('frontend_assets/img/bg/bread-bg.jpg')}}">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="{{asset('frontend_assets/img/shape/tmd-sh.png')}}" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Drive Together</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="{{url('/')}}">Home</a></li>
						<li>Drive Together</li>
					</ul>
				</div>
			</div>
		</div>
	</section>	
	<section id="ft-contact-page" class="ft-contact-page-section page-padding">
		<div class="container">
			<div class="ft-contact-page-content">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="ft-contact-page-form-wrapper headline">
							<h3 class="text-center">Drive Together</h3>
							<form id="drive_frm" method="POST" action="{{url('admin/drive/save')}}" enctype="multipart/form-data" autocomplete="off">
								@csrf
								<input type="hidden" name="source" value="front">
								<div class="row">
									<div class="col-lg-12">
										<div class="my-3">
											<input type="text" name="name" placeholder="Your Name" class="mb-0">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="my-3">
											<input type="email" name="email" placeholder="Your Email" class="mb-0">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="my-3">
											<input type="text" name="mobile" placeholder="Number" class="mb-0">
										</div>
									</div>
									<div class="col-lg-12">
										<div class="my-3">
											<input type="file" name="doc" placeholder="Upload Document" accept="doc/pdf" class="mb-0">
											<p class="text-muted my-2">*Upload Document & PDF Only</p>
										</div>
									</div>
									<div class="col-lg-12">
										<button type="submit" id="submit">Submit</button>
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
@section('custom_script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@if (session('success_msg'))
	<script>
		swal({
			title: "Form Submitted Successfully",
			icon: "success",
		});
	</script>
@endif
<script>
    jQuery(document).ready(function () {
        if (jQuery("#drive_frm").length > 0) {
            $.validator.addMethod(
                "lettersonly",
                function(value, element) {
                    return this.optional(element) || /^[a-z\s]+$/i.test(value);
                },
                "Only alphabetical characters"
            );
            jQuery("#drive_frm").validate({
                rules: {
					name: {
						required: true,
						maxlength: 50
					},
					email: {
						required: true,
						maxlength: 50,
						email: true,
					}, 
					mobile: {
						required: true,
						number: true,
						minlength: 10,
						maxlength: 10,
					},
                    doc: {
                        required: true,
                    }, 
                },
                messages: {
                    name: {
						required: "Please enter name",
						maxlength: "Your name maxlength should be 50 characters long."
					},
					email: {
						required: "Please enter valid email",
						email: "Please enter valid email",
						maxlength: "The email name should less than or equal to 50 characters",
					},   
					mobile: {
						required: 'Please Enter Mobile Number',
						number: 'Please Enter Only Digits',
						minlength: "Please Enter 10 Digits Mobile No",
						maxlength: "Please Enter Valid Mobile",
					},
					doc: {
						required: "Please Upload Document (doc, pdf)",
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
@endsection