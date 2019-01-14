@extends('layouts.app')
@section('title')
Edit Client
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <hr>
      <form action="{{url('admin/client/update')}}" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="judul"></label>
      <input type="hidden" name="id" value="{{$client->id}}">
      <input type="text" class="form-control" name="nama" id="inputEmail4" value="{{$client->nama}}" placeholder="Judul">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress"></label>
    <input type="file" class="form-control" name="gambar[]" id="upload" value="{{$client->gambar}}" multiple>
  </div>
  <br>
  <hr>
  <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-pen"></i></button>
  @csrf
</form>
</div>
</div>
</div>
@endsection