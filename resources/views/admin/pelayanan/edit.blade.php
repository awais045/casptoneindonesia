@extends('layouts.app')
@section('title')
Edit Pelayanan
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
<<<<<<< HEAD
      <hr>
      <form action="{{url('admin/kelebihan/save')}}" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="judul"></label>
      <input type="text" class="form-control" name="judul" id="inputEmail4" value="{{$kelebihan->judul}}" placeholder="Judul">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"></label>
      <input type="text" class="form-control" name="keterangan" id="inputPassword4" value="{{$kelebihan->keterangan}}" placeholder="Keterangan">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress"></label>
    <input type="file" class="form-control" name="gambar" id="inputAddress" value="{{$kelebihan->gambar}}" placeholder="">
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