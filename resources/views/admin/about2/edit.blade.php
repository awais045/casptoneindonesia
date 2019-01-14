@extends('layouts.app')
@section('title')
About
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">About 2</div>
        <div class="card-body">
         <form action="{{url('admin/about2/update')}}" method="POST" enctype="multipart/form-data"><?php
              $i= 1;
              $about2 = \App\About2::all();
              ?>
              @foreach($about2 as $q)
          <div class="form-group">
            <label for="formGroupExampleInput">Judul</label>
            <input type="text" class="form-control" name="judul" id="formGroupExampleInput" 
            placeholder="Judul" required value="{{$q->judul}}">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" id="formGroupExampleInput" 
            placeholder="Keterangan" required value="{{$q->deskripsi}}">
          </div>
          @csrf
          <button class="btn btn-outline-success float-right" type="submit">Edit Data</button>
          </div>
          @endforeach
        </form>
      </div>
    </div>
  </div>
</div>
@endsection