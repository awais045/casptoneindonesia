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
            <div class="col-lg-4 col-md-4">

                <a href="#{{$q->id}}" data-toggle="modal" data-traget="#{{$q->id}}" >
                    <img class="img-fluid" src="{{ url('images/'.$q->gambar)}}" alt="" style="width: 350px; height: 300px;">    
                    <div class="modal fade" id="{{$q->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deskripsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"  style="color: black; font-size: 15px;">
        <div class="text-center">
        <img src="{{url('images/'.$q->gambar)}}" class="img-fluid" style="width: 466px; height: 250px;">
        </div>
        <br>    
<div class="table-responsive"> 
<table id="" class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Judul</th>
      <th scope="col">Keterangan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>{{$q->judul}}</td>
      <td>{{$q->keterangan}}</td>
   
    </tr>
  </tbody>
</table>
      </div>
    </div>
  </div>  
  </div>  
                </a>    
            </div>
        
            </div>   
            <!-- Batas Foreach --> 

             
             @endforeach
            </div>
        
            </div>  
    </div>  
</section>
@endsection