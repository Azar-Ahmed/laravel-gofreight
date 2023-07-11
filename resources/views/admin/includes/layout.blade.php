
<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{asset('admin_assets/images/favicon-32x32.png')}}" type="image/png')}}"/>
	<!--plugins-->
	<link href="{{asset('admin_assets/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet"/>
	<link href="{{asset('admin_assets/plugins/simplebar/css/simplebar.css')}}" rel="stylesheet" />
	<link href="{{asset('admin_assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet" />
	<link href="{{asset('admin_assets/plugins/metismenu/css/metisMenu.min.css')}}" rel="stylesheet"/>
	<link href="{{asset('admin_assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
	
	<!-- loader-->
	<link href="{{asset('admin_assets/css/pace.min.css')}}" rel="stylesheet"/>
	<script src="{{asset('admin_assets/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link href="{{asset('admin_assets/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin_assets/css/bootstrap-extended.css')}}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{asset('admin_assets/css/app.css')}}" rel="stylesheet">
	<link href="{{asset('admin_assets/css/icons.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{asset('admin_assets/css/dark-theme.css')}}"/>
	<link rel="stylesheet" href="{{asset('admin_assets/css/semi-dark.css')}}"/>
	<link rel="stylesheet" href="{{asset('admin_assets/css/header-colors.css')}}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page_title')</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
        @include('admin/includes/sidebar')
		
        @include('admin/includes/header')

		<div class="page-wrapper">
            @yield('container')
		</div>
		

		<div class="overlay toggle-icon"></div>
		
    	<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<footer class="page-footer">
			<p class="mb-0">Copyright © 2022. All right reserved.</p>
		</footer>
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	
	<!--end switcher-->
	<!-- Bootstrap JS -->
	<script src="{{asset('admin_assets/js/bootstrap.bundle.min.js')}}"></script>
	<!--plugins-->
	<script src="{{asset('admin_assets/js/jquery.min.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/simplebar/js/simplebar.min.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/metismenu/js/metisMenu.min.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
    <script src="{{asset('admin_assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/chartjs/js/Chart.min.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/chartjs/js/Chart.extension.js')}}"></script>
	<script src="{{asset('admin_assets/js/index.js')}}"></script>
	<!--app JS-->
	<script src="{{asset('admin_assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('admin_assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
	
	{{-- <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script> --}}
    
	
    <script>
        $(document).ready( function () {
         $('#example').DataTable();
			 setTimeout(function() {
                $('.message').fadeOut('fast');
            }, 3000);
        });
    </script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				// buttons: [ 'copy', 'excel', 'pdf', 'print']
				buttons: [ 'copy', 'excel']

			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	<script src="{{asset('admin_assets/js/app.js')}}"></script>

    <script>
        function checkDelete(){
            return confirm('Are you sure?');
        }
    </script>
    @yield('custom_script')
</body>

</html>