<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Shihab's demo site</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CMuli:400,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{asset('frontEndAssets')}}/css/bootstrap.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{asset('frontEndAssets')}}/css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{asset('frontEndAssets')}}/css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header id="header">
		@include('frontEnd.includes.header')

		@yield('headerBottom')

	</header>
	<!-- /HEADER -->
@yield('pageTopSection')

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-8">

				@yield('pageBottomSection')

				</div>
				<div class="col-md-4">

				@include('frontEnd.includes.sidebar')

				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /SECTION -->

@include('frontEnd.includes.footer')

	<!-- jQuery Plugins -->
	<script src="{{asset('frontEndAssets')}}/js/jquery.min.js"></script>
	<script src="{{asset('frontEndAssets')}}/js/bootstrap.min.js"></script>
	<script src="{{asset('frontEndAssets')}}/js/jquery.stellar.min.js"></script>
	<script src="{{asset('frontEndAssets')}}/js/main.js"></script>

</body>

</html>
