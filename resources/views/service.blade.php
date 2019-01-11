@extends('layouts.industry')

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
                        <div class="col-lg-4">
                            <div class="single-service">
                                <div class="thumb">
                                    <img src="{{url('images/'.$key->gambar)}}" alt="" style="width: 350px; height: 200px;">                                   
                                </div>
                                <h4>{{$key->judul}}</h4>
                                <p>
                                    {{$key->keterangan}}
                                </p>
                            </div>
                        </div>
                        @endforeach                                         
                    </div>
                </div>  
            </section>
            <!-- End service Area -->   


@endsection