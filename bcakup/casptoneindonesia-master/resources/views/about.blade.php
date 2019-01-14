@extends('layouts.industry')
@section('title')
About Us
@endsection
@section('content')
			<section class="home-about-area section-gap aboutus-about" id="about">
				 <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text text-center">
                <h1 class="mb-10">About Us</h1>
                <p>
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>   
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


