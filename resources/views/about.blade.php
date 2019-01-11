@extends('layouts.industry')
@section('title')
About Us
@endsection
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
							<?php
		                    $i= 1;
		                    $data = \App\About::all();
		                    ?>
		                    @foreach($data as $q)
							<h6>{{$q->pengantar1}}</h6>
							<h1>{{$q->pengantar2}}</h1>
							<p class="pb-20">{{$q->pengantar3}}</p>
							<a class="primary-btn" href="#">Get Started Now</a>
							@endforeach
						</div>
						<div class="col-lg-4 col-md-12 about-right relative">
							<img src="{{ asset('/images/capstone.jpeg')}}" class="img-fluid" alt="Responsive image">
						</div>
					</div>
				</div>	
			</section>
			@endsection


