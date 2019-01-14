	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{ asset ('industry/img/logoo.png')}}">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>@yield('title')</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{ asset ('industry/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{ asset ('industry/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{ asset ('industry/css/bootstrap.css')}}">
			
			<link rel="stylesheet" href="{{ asset ('industry/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{ asset ('industry/css/nice-select.css')}}">	
			<link rel="stylesheet" href="{{ asset ('industry/css/hexagons.min.css')}}">							
			<link rel="stylesheet" href="{{ asset ('industry/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{ asset ('industry/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{ asset ('industry/css/main.css')}}">
			<link rel="stylesheet" href="{{ asset ('industry/css/pelayanan.css')}}">
		</head>
		<body>	
			<header id="header" id="home">
				<div class="header-top">
					<div class="container">
						<div class="row">
							<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
								<ul>
									<li><a href="https://id-id.facebook.com/capstoneindonesia/" target="_blank"><i class="fa fa-facebook"></i></a></li>
									<li><a href="https://twitter.com/capstoneindonesia" target="_blank"><i class="fa fa-twitter"></i></a></li>
									<li><a href="http://capstoneindonesia.net/" target="_blank"><i class="fa fa-chrome"></i></a></li>
									<li><a href="https://instagram.com/capstoneindonesia?utm_source=ig_profile_share&igshid=ujupo9hirzy5" target="_blank"><i class="fa fa-instagram"></i></a></li>
								</ul>
							</div>
							<?php
							$profile = \App\Profile::where('id',1)->first();
							?>
							<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
								<a href="tel:+880 012 3654 896">+ {{$profile->telp}}</a>
								<a href="mailto:support@colorlib.com">{{$profile->email}}</a>				
							</div>
						</div>			  					
					</div>
				</div>
				<div class="container main-menu">
					<div class="row align-items-center justify-content-between d-flex">
						<div id="logo">
							<a href="{{url ('/')}}" style="font-size: 25px;"><b>{{$profile->name}}</b></a>
						</div>
						<nav id="nav-menu-container">
							<ul class="nav-menu">
								<li class="menu-active"><a href="{{url('/')}}">Home</a></li>
								<li><a href="{{url('/about')}}">About</a></li>
								<li><a href="{{url('/service')}}">Service</a></li>
								<li><a href="{{url('/portofolio')}}">Portofolio</a></li>
								<li><a href="{{ url('contact')}}">Contact</a></li>
							</ul>
						</nav><!-- #nav-menu-container -->		    		
					</div>
				</div>
			</header><!-- #header -->

			@yield('content')

			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<?php
								$about2 = \App\About2::where('id',1)->first();
								?>
								<h6>About Us</h6>
								<p>
									<h1 style="color: white;">{{$about2->pengantar1}}</h1>
									<br>
									<p style="color: white;">{{$about2->pengantar2}}
									<br>
									{{$about2->pengantar3}}</p>
								</p>
								<p class="footer-text">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</p>								
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
									<form  action="{{url('admin/newsletter/save')}}" method="post" 
									class="form-inline">
										@csrf
										<input class="form-control" name="email" placeholder="Enter Email" required="" type="email">
										<button class="click-btn btn btn-default" type="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>

										<div class="info"></div>
									</form>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="https://id-id.facebook.com/capstoneindonesia/" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="https://twitter.com/capstoneindonesia" target="_blank"><i class="fa fa-twitter"></i></a>
									<a href="http://capstoneindonesia.net/" target="_blank"><i class="fa fa-chrome"></i></a>
									<a href="https://instagram.com/capstoneindonesia?utm_source=ig_profile_share&igshid=ujupo9hirzy5" target="_blank"><i class="fa fa-instagram"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="{{ asset ('industry/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{ asset ('industry/js/vendor/bootstrap.min.js')}}"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="{{ asset ('industry/js/easing.min.js')}}"></script>			
			<script src="{{ asset ('industry/js/hoverIntent.js')}}"></script>
			<script src="{{ asset ('industry/js/superfish.min.js')}}"></script>	
			<script src="{{ asset ('industry/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{ asset ('industry/js/jquery.magnific-popup.min.js')}}"></script>	
			<script src="{{ asset ('industry/js/owl.carousel.min.js')}}"></script>	
			<script src="{{ asset ('industry/js/hexagons.min.js')}}"></script>							
			<script src="{{ asset ('industry/js/jquery.nice-select.min.js')}}"></script>	
			<script src="{{ asset ('industry/js/jquery.counterup.min.js')}}"></script>
			<script src="{{ asset ('industry/js/waypoints.min.js')}}"></script>							
			<script src="{{ asset ('industry/js/mail-script.js')}}"></script>	
			<script src="{{ asset ('industry/js/main.js')}}"></script>	
		</body>
		</html>



