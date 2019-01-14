@extends('layouts.industry')
@section('title')
About
@endsection
@section('content')
<style>
.bulat{
border-radius:100em;
opacity:1;
width:200px;
height:200px;

}
</style>
<section class="project-area section-gap" id="project">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text text-center">
                <h1 class="mb-10">Klient Kami</h1>
                <p>
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>    
              
        <div class="row">
             <?php
              $client = \App\Client::all(); 
               ?>
               @foreach($client as $q)
            <div class="col-md-3">
                <a href="#{{$q->nama}}" data-toggle="modal" data-target="#{{$q->nama}}">
                    <img class="bulat hb-sm-margin mx-auto d-block" src="{{ url('images/'.$q->gambar)}}" >    
                    <div class="modal fade" id="{{$q->nama}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{$q->nama}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: black;">
 <img class="img-fluid" src="{{url('images/'.$q->gambar)}}" style="widows: 450px; height: 450px;">
    </div>
  </div>  
  </div>  
             
            </div>
        
            </div>   
            <!-- Batas Foreach --> 

                   </a>

             @endforeach
            </div>
            		</div>
            	</div>

<br>	
<br>	
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text text-center">
                <h1 class="mb-10">Teknologi Kami</h1>
                <p>
                    Who WHOO whooo are .... system ...
                </p>
            </div>
        </div>    
        <div class="row">
             <?php
              $tekno = \App\Teknologi::all(); 
               ?>
               @foreach($tekno as $z)
            <div class="col-md-3">
                <a href="#{{$z->id}}" data-toggle="modal" data-target="#{{$z->id}}">
                    <img class="bulat hb-sm-margin mx-auto d-block" src="{{ url('images/'.$z->gambar)}}">    
                    <div class="modal fade" id="{{$z->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
       <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">{{$z->nama}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="color: black;">
 <img class="img-fluid" src="{{url('images/'.$z->gambar)}}" style="width: 450px; height: 450px">
    </div>
  </div>  
  </div>  
             
            </div>
        </div>
    </a>
        @endforeach
            </div>   

</section>
@endsection