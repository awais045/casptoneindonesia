@extends('layouts.industry')

@section('content')

<?php
$profile = \App\Profile::where('id',1)->first();
?>
<style>
.bulat{
opacity:1;
width:200px;
height:200px;
}
</style>
<!-- start banner Area -->
<section class="banner-area relative" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-center">
            <div class="banner-content col-lg-12 col-md-12">
                <h6 class="text-uppercase">{{$profile->pengantar1}}</h6>
                <h1>
                    {{$profile->pengantar2}}            
                </h1>
                <p class="text-white">
                    {{$profile->pengantar3}}
                </p>
                <a href="#" class="primary-btn header-btn text-uppercase">Get Started</a>
            </div>                                              
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start cat Area -->
<section class="cat-area section-gap" id="feature">
    <div class="container">     
        <div class="row justify-content-center">
            <div class="col-md-12 pb-30 header-text text-center">
                <h1 class="mb-10">Kelebihan Kami</h1>
                <p>
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>
        <?php  
        $kelebihan = \App\Kelebihan::all();
        ?>             
        <div class="row">
            @foreach ($kelebihan as $q)
            <div class="col-lg-4">
                <div class="single-cat d-flex flex-column" id="backgroud">
                    <!-- <a href="#" class="hb-sm-margin mx-auto d-block"><span class="hb hb-sm inv hb-facebook-inv"><span class="lnr lnr-magic-wand"></span></span></a> -->
                    <img class="bulat hb-sm-margin mx-auto d-block" src="{{url('images/'.$q->gambar)}}" style="width: 350px;height: 300px;">
                    <h4 class="mb-20" style="margin-top: 23px;">{{$q->judul}}</h4>
                    <p>
                        {{$q->keterangan}}
                    </p>
                </div>                                                       
            </div>
            @endforeach
        </div>
    </div>  
</section>
<!-- End cat Area -->       



<!-- Start service Area -->
<!-- End service Area -->



<!-- Start project Area -->
<!-- End project Area -->



@endsection