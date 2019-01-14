@extends('layouts.industry')
@section('content')
<section class="project-area section-gap" id="project">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-30 header-text text-center">
                <h1 class="mb-10">Portofolio</h1>
                <p>
                    Who are in extremely love with eco friendly system..
                </p>
            </div>
        </div>    
              
        <div class="row">
             <?php
              $portofolio = \App\Portofolio::all(); 
               ?>
               @foreach($portofolio as $q)
            <div class="col-md-4">
                <a href="#{{$q->id}}" data-toggle="modal" data-traget="#{{$q->id}}">
                    <img class="img-fluid" src="{{ url('images/'.$q->gambar)}}" alt="" style="width: 350px; height: 350px; padding-top: 40px;">    
                    <div class="modal fade" id="{{$q->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <img  class="img-fluid" src="{{url('images/'.$q->gambar)}}" style="widows: 250px; height: 280px;">
      <div class="modal-body"  >
        <br>    
        <h1 style="color: black;">{{$q->judul}}</h1>
        <br>
        <p style="font-size: 15px; color: black;"><i class="fa fa-star" style="color: red;"></i>  {{$q->keterangan}}</p>
   
        <button type="button" class="btn btn-danger" data-dismiss="modal" style="float: right;"><i class="fa fa-close"></i></button>
    </div>
  </div>  
  </div>  
             
            </div>
        
            </div>   
            <!-- Batas Foreach --> 

             
             @endforeach
            </div> 
</section>
@endsection