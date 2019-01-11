@extends('layouts.industry')

@section('content')
	<section class="service-area section-gap" id="service">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 pb-30 header-text text-center">
                <h1 class="mb-10">Pelayanan Kami</h1>
                <p>
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>     
        <?php
        	$pelayanan = \App\Pelayanan::all(); 
        ?>   
        <div class="row">
        @foreach($pelayanan as $q)           
            <div class="col-lg-4">
                <div class="single-service">
                    <div class="thumb">
                        <img src="{{ url('images/'.$q->gambar)}}" alt=""><!--src="{{ url('gambar/',$q->gambar)}}" -->                                
                    </div>
                    <h4>{{$q->judul}}</h4>
                    <p>
                        {{$q->keterangan}}}
                    </p>
                </div>
            </div>                                            
        @endforeach
        </div>
    </div>  
</section>


@endsection