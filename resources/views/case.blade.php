@extends('master')

@section('title')
HOme-Law &mdash; Free Website Template, Free HTML5 Template by freehtml5.co
@endsection

@section('contant')

<aside id="fh5co-hero" class="js-fullheight">

		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url({{asset('frontend')}}/assets/images/project-6.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
		   				<div class="slider-text-inner desc">
		   					<h2 class="heading-section">Practicing Area</h2>
		   					<p class="fh5co-lead">Designed with <i class="icon-heart3"></i> by the fine folks at <a href="http://freehtml5.co" target="_blank">FreeHTML5.co</a></p>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		  	</ul>
	  	</div>
	</aside>

    
	
	<div id="fh5co-project">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Case Study</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="{{asset('frontend')}}/assets/images/project-1.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Business</h3>
						<span>CEO. Hon Doe</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="{{asset('frontend')}}/assets/images/project-2.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Legal Advice</h3>
						<span>Atty. John Doe</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="{{asset('frontend')}}/assets/images/project-3.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Read Bible</h3>
						<span>Ptr. Jhon Doe</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="{{asset('frontend')}}/assets/images/project-4.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Affidavit</h3>
						<span>Atty. Boo Doe</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="{{asset('frontend')}}/assets/images/project-5.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Sports</h3>
						<span>Atty. Smith D</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 text-center fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="{{asset('frontend')}}/assets/images/project-6.jpg" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>Photography</h3>
						<span>Phtr. Arnt Tee</span>
					</a>
				</div>
			</div>
		</div>
	</div>






    <div id="fh5co-started" style="background-image:url({{asset('frontend')}}/assets/images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Legal Advice</h2>
					<p>We help people effectively fight their offenders back and successfully defend their own stand!</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="#" class="btn btn-default btn-lg">Consultation</a></p>
				</div>
			</div>
		</div>
	</div>


@endsection