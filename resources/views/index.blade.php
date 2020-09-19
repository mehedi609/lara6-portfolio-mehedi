<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Portfolio - Mehedi</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="icon" type="image/jpg" href="{{asset('portfolio.jpg')}}">

		<link rel="stylesheet" href="{{asset('css/open-iconic-bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/animate.css')}}">

		<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

		<link rel="stylesheet" href="{{asset('vendors/linericon/style.css')}}">
		<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

		<link rel="stylesheet" href="{{asset('css/aos.css')}}">

		<link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">

		<link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
		<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
		<link rel="stylesheet" href="{{asset('css/style.css')}}">
		<link rel="stylesheet" href="{{asset('css/scroll_top.css')}}">

		{{--Meet CSS--}}
		<link rel="stylesheet" href="{{asset('meetme/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('meetme/css/responsive.css')}}">
	</head>

	<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

		@include('include.nav')

		@include('include.top-slider')

		@include('include.about')

		@include('include.skills')

		@include('include.education_employment')

		@include('include.projects')

		@include('include.certificates')

		@include('include.footer')

		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen">
			<svg class="circular" width="48px" height="48px">
				<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
				<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				        stroke="#F96D00"/>
			</svg>
		</div>

		<a id="button"></a>

		<script src="{{asset('js/jquery.min.js')}}"></script>
		<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
		<script src="{{asset('js/popper.min.js')}}"></script>
		<script src="{{asset('js/bootstrap.min.js')}}"></script>
		<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
		<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
		<script src="{{asset('vendors/counter-up/jquery.counterup.min.js')}}"></script>
		<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
		<script src="{{asset('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('js/aos.js')}}"></script>
		<script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
		<script src="{{asset('js/scrollax.min.js')}}"></script>

		<script src="{{asset('js/main.js')}}"></script>

		<script src="{{asset('js/custom.js')}}"></script>
	</body>
</html>
