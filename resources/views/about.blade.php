@extends('layouts.industry')

@section('content')

<section class="banner-area relative" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								About Us				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about.html"> About Us</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap aboutus-about" id="about">
				<div class="container">
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-8 col-md-12 home-about-left">
							<h6>Brand new app to blow your mind</h6>
							<h1>
								We’ve made a life <br>
								that will change you
							</h1>
							<p class="sub">We are here to listen from you deliver exellence</p>
							<p class="pb-20">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temp or incididunt ut labore et dolore magna aliqua. Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim.
							</p>
							<a class="primary-btn" href="#">Get Started Now</a>
						</div>
						<div class="col-lg-4 col-md-12 home-about-right relative">
							<form class="form-wrap" action="#">
								<h4 class="text-white pb-20">Request a Quote</h4>
								<div class="form-select" id="service-select"">
									<select>
										<option value="1">Select Service</option>
										<option value="2">Service One</option>
										<option value="3">Service Two</option>
										<option value="4">Service Three</option>
										<option value="5">Service Four</option>
									</select>
								</div>								
								<input type="text" class="form-control" placeholder="name">
								<input type="phone" class="form-control" placeholder="Phone Number">
								<input type="email" class="form-control" placeholder="Email Address">
								<textarea name="message" id="" cols="30" rows="5" placeholder="Message" class="form-control"></textarea>
								<button class="primary-btn">Request Free Quote</button>
							</form>
						</div>
					</div>
				</div>	
			</section>
			@endsection


