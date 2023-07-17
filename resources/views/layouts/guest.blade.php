<!doctype html>
<html lang="en" dir="ltr">

<head>

	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
	<meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

	<!-- Title -->
	<title>{{env('APP_NAME')}}{{ ' | Dashbord' }}</title>

	<!-- Favicon -->
	<link rel="icon" href="{{asset('assets/images/logo/jadwa.png')}}" type="image/x-icon" />

	<!-- Icons css -->
	<link href="{{asset('assets2/css/icons.css')}}" rel="stylesheet">

	<!-- Bootstrap css -->
	<link href="{{asset('assets2/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

	<!-- style css -->
	<link href="{{asset('assets2/css/style.css')}}" rel="stylesheet">

	<!--- Animations css-->
	<link href="{{asset('assets2/css/animate.css')}}" rel="stylesheet">

	<!---Switcher css-->
	<link href="{{asset('assets2/switcher/css/switcher.css')}}" rel="stylesheet">
	<link href="{{asset('assets2/switcher/demo.css')}}" rel="stylesheet">

    @yield('styles')
</head>

<body class="ltr main-body app sidebar-mini">

	<!-- Loader -->
	<div id="global-loader">
		<img src="{{asset('assets2/img/loader.svg')}}" class="loader-img" alt="Loader">
	</div>
	<!-- /Loader -->



    @yield('content')
	<!-- JQuery min js -->
	<script src="{{asset('assets2/plugins/jquery/jquery.min.js')}}"></script>

	<!-- Bootstrap Bundle js -->
	<script src="{{asset('assets2/plugins/bootstrap/js/popper.min.js')}}"></script>
	<script src="{{asset('assets2/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

	<!-- Moment js -->
	<script src="{{asset('assets2/plugins/moment/moment.js')}}"></script>

	<!-- P-scroll js -->
	<script src="{{asset('assets2/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
	<script src="{{asset('assets2/plugins/perfect-scrollbar/p-scroll.js')}}"></script>

	<!-- Sticky js -->
	<script src="{{asset('assets2/js/sticky.js')}}"></script>

	<!-- eva-icons js -->
	<script src="{{asset('assets2/js/eva-icons.min.js')}}"></script>

	<!-- Rating js-->
	<script src="{{asset('assets2/plugins/ratings-2/jquery.star-rating.js')}}"></script>
	<script src="{{asset('assets2/plugins/ratings-2/star-rating.js')}}"></script>

	<!-- Sidebar js -->
	<script src="{{asset('assets2/plugins/side-menu/sidemenu.js')}}"></script>

	<!-- Right-sidebar js -->
	<script src="{{asset('assets2/plugins/sidebar/sidebar.js')}}"></script>
	<script src="{{asset('assets2/plugins/sidebar/sidebar-custom.js')}}"></script>

	<!-- Switcher js -->
	<script src="{{asset('assets2/switcher/js/switcher.js')}}"></script>

	<!--themecolor js-->
	<script src="{{asset('assets2/js/themecolor.js')}}"></script>

	<!-- custom js -->
	<script src="{{asset('assets2/js/custom-1.js')}}"></script>
@yield('scripts')
</body>

</html>
