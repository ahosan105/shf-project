<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/owl.theme.default.min.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/flexslider.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('frontend')}}/assets/css/style.css">

	<!-- Modernizr JS -->
	<script src="{{asset('frontend')}}/assets/js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{asset('frontend')}}/assets/js/respond.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-2">
						<div id="fh5co-logo"><a href="{{route('index')}}">Law<span>.</span></a></div>
					</div>
					<div class="col-xs-10 text-right menu-1">
						<ul>
							<li class=""><a href="{{route('home')}}">Home</a></li>
							<li><a href="{{route('catagory')}}">Practice Areas</a></li>
							<li><a href="{{route('case')}}">Won Cases</a></li>
							<li><a href="{{route('blog')}}">blog</a></li>
						
						</ul>
					</div>
				</div>
				
			</div>
		</div>
	</nav>

@yield('contant')


	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{asset('frontend')}}/assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('frontend')}}/assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="{{asset('frontend')}}/assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="{{asset('frontend')}}/assets/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('frontend')}}/assets/js/jquery.stellar.min.js"></script>
	<!-- Carousel -->
	<script src="{{asset('frontend')}}/assets/js/owl.carousel.min.js"></script>
	<!-- Flexslider -->
	<script src="{{asset('frontend')}}/assets/js/jquery.flexslider-min.js"></script>
	<!-- countTo -->
	<script src="{{asset('frontend')}}/assets/js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('frontend')}}/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="{{asset('frontend')}}/assets/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="{{asset('frontend')}}/assets/js/main.js"></script>

	</body>
</html>

