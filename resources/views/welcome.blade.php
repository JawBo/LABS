<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title>Labs - Design Studio</title>
        <meta charset="UTF-8">
        <meta name="description" content="Labs - Design Studio">
        <meta name="keywords" content="lab, onepage, creative, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="shortcut icon"/>
    
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,700|Roboto:300,400,700" rel="stylesheet">
    
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/font-awesome.min.css"/>
        <link rel="stylesheet" href="css/flaticon.css"/>
        <link rel="stylesheet" href="css/magnific-popup.css"/>
        <link rel="stylesheet" href="css/owl.carousel.css"/>
        <link rel="stylesheet" href="css/style.css"/>
    
       
    </head>
    <body>
      	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="img/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li class="active"><a href="/">Home</a></li>
				<li><a href="/services">Services</a></li>
				<li><a href="/blog">Blog</a></li>
				<li><a href="/contact">Contact</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->


	<!-- Intro Section -->
	<div class="hero-section">
		<div class="hero-content">
			<div class="hero-center">
				<img src="img/big-logo.png" alt="">
				<p>Get your freebie template now!</p>
			</div>
		</div>
		<!-- slider -->
		<div id="hero-slider" class="owl-carousel">
			@foreach ($contenuImage as $item)

			<div class="item  hero-item" data-bg="{{Storage::url('public/img/carousel/resized/'.$item->image)}}"></div>

			@endforeach
		</div>
	</div>
	<!-- Intro Section -->


	<!-- About section -->
	<div class="about-section">
		<div class="overlay"></div>
		<!-- card section -->
		<div class="card-section">
			<div class="container">
				<div class="row">
					<!-- single card -->
					@foreach ($services3 as $item)
					<div class="col-md-4 col-sm-6">
							<div class="lab-card">
								<div class="icon">
									<i class="{{$item->icone->class}}"></i>
								</div>
								<h2>{{$item->service}}</h2>
								<p>{{$item->text}}</p>
							</div>
						</div>			
					@endforeach
					
				</div>
			</div>
		</div>
		<!-- card section end-->


		<!-- About contant -->
		<div class="about-contant">
			<div class="container">
				<div class="section-title">
					<h2>Get in <span>the Lab</span> and discover the world</h2>
				</div>
				<div class="row">
					<div class="col-md-6">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor porttitor tempus. Donec maximus ipsum non ornare vporttitor porttitorestibulum. Sed libero nibh, feugiat at enim id, bibendum sollicitudin arcu.</p>
					</div>
					<div class="col-md-6">
						<p>Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum. Nam convallis vel erat id dictum. Sed ut risus in orci convallis viverra a eget nisi. Aenean pellentesque elit vitae eros dignissim ultrices. Quisque porttitor porttitorlaoreet vel risus et luctus.</p>
					</div>
				</div>
				<div class="text-center mt60">
					<a href="/services" class="site-btn">Browse</a>
				</div>
				<!-- popup video -->
				<div class="intro-video">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<img src="img/video.jpg" alt="">
						<a href="{{$contenuVideo[0]->url}}" class="video-popup">
								<i class="fa fa-play"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- About section end -->

	
	<!-- Testimonial section -->
	<div class="testimonial-section pb100">
		<div class="test-overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-4">
					<div class="section-title left">
						<h2>What our clients say</h2>
					</div>
					<div class="owl-carousel" id="testimonial-slide">
						<!-- single testimonial -->
						@foreach ($contenuTestimonials as $item)
								
						<div class="testimonial">
							<span>‘​‌‘​‌</span>
						<p>{{$item->testimonial}}</p>
							<div class="client-info">
								<div class="avatar">
								<img src="{{$item->image}}" alt="">
								</div>
								<div class="client-name">
								<h2> {{$item->name}}</h2>
								<p>{{$item->job}}</p>
								</div>
							</div>
						</div>
						@endforeach			
					
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Testimonial section end-->


	<!-- Services section -->
	<div class="services-section spad">
		<div class="container">
			<div class="section-title dark">
				<h2>Get in <span>the Lab</span> and see the services</h2>
			</div>
			<div class="row">
				<!-- single service -->
				@foreach ($contenuService as $item)
						
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="{{$item->icone->class}}"></i>
						</div>
						<div class="service-text">
							<h2>{{$item->service}}</h2>
							<p>{{$item->text}}</p>
						</div>
					</div>
				</div>
				@endforeach
				
				{{-- <!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-011-compass"></i>
						</div>
						<div class="service-text">
							<h2>Projects online</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-037-idea"></i>
						</div>
						<div class="service-text">
							<h2>SMART MARKETING</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-039-vector"></i>
						</div>
						<div class="service-text">
							<h2>Social Media</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-036-brainstorming"></i>
						</div>
						<div class="service-text">
							<h2>Brainstorming</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-026-search"></i>
						</div>
						<div class="service-text">
							<h2>Documented</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-018-laptop-1"></i>
						</div>
						<div class="service-text">
							<h2>Responsive</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-043-sketch"></i>
						</div>
						<div class="service-text">
							<h2>Retina ready</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div>
				<!-- single service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<div class="icon">
							<i class="flaticon-012-cube"></i>
						</div>
						<div class="service-text">
							<h2>Ultra modern</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..</p>
						</div>
					</div>
				</div> --}}
			</div>
			<div class="text-center">
				<a href="/services" class="site-btn">Browse</a>
			</div>
		</div>
	</div>
	<!-- services section end -->


	<!-- Team Section -->
	<div class="team-section spad">
		<div class="overlay"></div>
		<div class="container">
			<div class="section-title">
				<h2>Get in <span>the Lab</span> and  meet the team</h2>
			</div>
			<div class="row">
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
					<img src="{{$contenuTeam[0]->image}}" alt="">
					<h2>{{$contenuTeam[0]->name}}</h2>
					<h3>{{$contenuTeam[0]->job}}</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="img/team/2.jpg" alt="">
						<h2>Sami Hajji</h2>
						<h3>Junior developer</h3>
					</div>
				</div>
				<!-- single member -->
				<div class="col-sm-4">
					<div class="member">
						<img src="{{$contenuTeam[1]->image}}" alt="">
						<h2>{{$contenuTeam[1]->name}}</h2>
						<h3>{{$contenuTeam[1]->job}}</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Team Section end-->


	<!-- Promotion section -->
	<div class="promotion-section">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>Are you ready to stand out?</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.</p>
				</div>
				<div class="col-md-3">
					<div class="promo-btn-area">
						<a href="/services" class="site-btn btn-2">Browse</a>
						</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Promotion section end-->


	<!-- Contact section -->
	@include('partials/contactsection')
	<!-- Contact section end-->


	<!-- Footer section -->
	<footer class="footer-section">
		<h2>2017 All rights reserved. Designed by <a href="https://colorlib.com" target="_blank">Colorlib</a></h2>
	</footer>
	<!-- Footer section end -->




	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/magnific-popup.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>
