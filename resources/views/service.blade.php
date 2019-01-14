@extends('layouts.industry')
@section('title')
Service
@endsection
@section('content')

<?php

$pelayanan = \App\Pelayanan::all();
?>
            <!-- Start service Area -->
            <section class="service-area section-gap" id="service">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12 pb-30 header-text text-center">
                            <h1 class="mb-10">Our Offered Services to you</h1>
                            <p>
                                Who are in extremely love with eco friendly system..
                            </p>
                        </div>
                    </div>                      
                    <div class="row">
                        @foreach($pelayanan as $key)

<div class="columns">
    <div class="row-fluid-wrapper">
  <ul class="price">
    <li class="header">{{$key->judul}}</li>
    <div class="thumb">
    <li class="grey"><img src="{{url('images/'.$key->gambar)}}" class="img-fluid"></li>
    </div>
    <li>{!!$key->keterangan!!}</li>
  </ul>
  </div>
</div>                  @endforeach                                         
                    </div>
                </div>  
            </section>
            <!-- End service Area -->   


@endsection