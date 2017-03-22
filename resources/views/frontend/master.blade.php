<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<!-- for-mobile-apps -->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Smart Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //for-mobile-apps -->
		<link href="{{asset('public/frontend/')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<!-- pignose css -->
		<link href="{{asset('public/frontend/')}}/css/pignose.layerslider.css" rel="stylesheet" type="text/css" media="all" />
		<!-- //pignose css -->
		<link href="{{asset('public/frontend/')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
		<!-- js -->
		<script type="text/javascript" src="{{asset('public/frontend/')}}/js/jquery-2.1.4.min.js"></script>
		<!-- //js -->
		<!-- cart -->
		<script src="{{asset('public/frontend/')}}/js/simpleCart.min.js"></script>
		<!-- cart -->
		<!-- for bootstrap working -->
		<script type="text/javascript" src="{{asset('public/frontend/')}}/js/bootstrap-3.1.1.min.js"></script>
		<!-- //for bootstrap working -->
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
		<script src="{{asset('public/frontend/')}}/js/jquery.easing.min.js"></script>
	</head>
	<body>
		<!-- header -->
		
		@include('frontend.includes.header')
		<!-- //header-bot -->
		<!-- banner -->
		<div class="ban-top">
		@include('frontend.includes.menu')
		</div>

		@yield('body')
		<!-- //banner-top -->
		<!-- banner -->
		
		<!-- //product-nav -->
		
		@include('frontend.includes.cupon')
		<!-- footer -->
		@include('frontend.includes.footer')
		
		<!-- //login -->
	</body>
</html>