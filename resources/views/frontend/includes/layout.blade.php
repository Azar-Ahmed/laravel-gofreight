<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from html.themexriver.com/fastrans/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Sep 2022 09:29:09 GMT -->
<head>
		<meta charset="UTF-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('page_title')</title>
        
		<link rel="shortcut icon" href="{{asset('frontend_assets/images/favicon.png')}}" type="image/x-icon">
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--Css Fils -->
		<link rel="stylesheet" href="{{asset('frontend_assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend_assets/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend_assets/css/fontawesome-all.css')}}">
		<link rel="stylesheet" href="{{asset('frontend_assets/css/flaticon.css')}}">
		<link rel="stylesheet" href="{{asset('frontend_assets/css/animate.css')}}">
		<link rel="stylesheet" href="{{asset('frontend_assets/css/nice-select.css')}}">
		<link rel="stylesheet" href="{{asset('frontend_assets/css/video.min.css')}}">
		{{-- <link rel="stylesheet" href="{{asset('frontend_assets/css/animated-slider.css')}}"> --}}
		<link rel="stylesheet" href="{{asset('frontend_assets/css/jquery.mCustomScrollbar.min.css')}}">
		<link rel="stylesheet" href="{{asset('frontend_assets/css/slick.css')}}">
		<link rel="stylesheet" href="{{asset('frontend_assets/css/rs6.css')}}">
		<link rel="stylesheet" href="{{asset('frontend_assets/css/slick-theme.css')}}">
		<link rel="stylesheet" href="{{asset('frontend_assets/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('frontend_assets/css/mycss.css')}}">

		<link href="{{asset('frontend_assets/plugins/revolution/css/settings.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
		<link href="{{asset('frontend_assets/plugins/revolution/css/layers.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
		<link href="{{asset('frontend_assets/plugins/revolution/css/navigation.css')}}" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
    
	</head>

	<body class="nlhu-body">
		<div id="preloader"></div>
		<div class="up">
			<a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
		</div>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&amp;family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
		
		<div class="nlhu-body-overlay"></div>

		<!-- Preloader-->
		<div class="loading-preloader">
			<div id="loading-preloader">
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
				<div class="line_shape"></div>
			</div>
		</div>
		<!-- Preloader End -->

		{{-- @if (url()->current() === 'http://127.0.0.1:8000/admin/ewb-bill/'.$id)
			@yield('container')
			@else
			@endif --}}
			@include('frontend/includes/header')

			@yield('container')
			
			@include('frontend/includes/footer')

	
        <!-- For Js Library -->
		<!-- <script src="assets/js/appilo-js-plugin.js"></script> -->
		<script src="{{asset('frontend_assets/js/jquery.js')}}"></script>
		<script src="{{asset('frontend_assets/js/popper.min.js')}}"></script>
		<script src="{{asset('frontend_assets/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('frontend_assets/js/appear.js')}}"></script>
		<script src="{{asset('frontend_assets/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('frontend_assets/js/isotope.pkgd.js')}}"></script>
		<script src="{{asset('frontend_assets/js/progress-bar.js')}}"></script>
		<script src="{{asset('frontend_assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('frontend_assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('frontend_assets/js/slick.js')}}"></script>
        
		
		<!-- Revolution Slider -->
		<script src="{{asset('frontend_assets/plugins/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script src="{{asset('frontend_assets/plugins/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{asset('frontend_assets/plugins/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
		<script src="{{asset('frontend_assets/plugins/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
		<script src="{{asset('frontend_assets/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
		<script src="{{asset('frontend_assets/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
		<script src="{{asset('frontend_assets/plugins/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
		<script src="{{asset('frontend_assets/plugins/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
		<script src="{{asset('frontend_assets/plugins/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
		<script src="{{asset('frontend_assets/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
		<script src="{{asset('frontend_assets/plugins/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
		<script src="{{asset('frontend_assets/plugins/revolution/js/main-slider-script.js')}}"></script>
		
		<!-- For Js Library -->
		<script src="{{asset('frontend_assets/js/jquery.fancybox.js')}}"></script>
		<script src="{{asset('frontend_assets/js/wow.js')}}"></script>
		<script src="{{asset('frontend_assets/js/jquery-ui.js')}}"></script>
		<script src="{{asset('frontend_assets/js/knob.js')}}"></script>
		
		<script src="{{asset('frontend_assets/js/tilt.jquery.min.js')}}"></script>
		<script src="{{asset('frontend_assets/js/script.js')}}"></script>
		<script src="{{asset('frontend_assets/js/script-two.js')}}"></script>
		@yield('custom_script')
	</body>

<!-- Mirrored from html.themexriver.com/fastrans/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 30 Sep 2022 09:29:22 GMT -->
</html>