@extends('layouts.app')
@section('title')
Edit Portofolio
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <hr>
      <form action="{{url('admin/portofolio/update')}}" method="POST" enctype="multipart/form-data">
  
  <label for="judul">Judul</label>
      <input type="text" class="form-control" name="judul" id="inputEmail4" value="{{$portofolio->judul}}" placeholder="Judul">

  <div class="form-group">
    <label for="inputAddress">Gambar</label>
    <input type="file" class="form-control" name="gambar[]" id="upload" value="{{$portofolio->gambar}}" multiple>
  </div>

      <div class="form-group col-md-25">
      <label>Keterangan</label>
      <label for="ckeditor"></label>
      <textarea name="keterangan" id="ckeditor">{{$portofolio->keterangan}}</textarea>
    </div> 

      <!-- <label for="judul"></label>
      <input type="text" class="form-control" name="judul" id="inputEmail4" value="{{$portofolio->judul}}" placeholder="Judul">
  
    <div class="form-group col-md-6">
      <label for="inputPassword4"></label>
      <input type="text" class="form-control" name="keterangan" id="inputPassword4" value="{{$portofolio->keterangan}}" placeholder="Keterangan">
    </div>

  <div class="form-group">
    <label for="inputAddress"></label>
    <input type="file" class="form-control" name="gambar[]" id="upload" value="{{$portofolio->gambar}}" multiple>
  </div> -->
  <br>
  <hr>
  <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-pen"></i></button>
  @csrf
</form>
</div>
</div>
</div>
@endsection