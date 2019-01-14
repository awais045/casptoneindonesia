@extends('layouts.app')
@section('title')
Edit Pelayanan
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <hr>
      <form action="{{url('admin/pelayanan/update')}}" method="POST" enctype="multipart/form-data">


      <label for="judul">Judul</label>
      <input type="text" class="form-control" name="judul" id="inputEmail4" value="{{$pelayanan->judul}}" placeholder="Judul">

  <div class="form-group">
    <label for="inputAddress">Gambar</label>
    <input type="file" class="form-control" name="gambar[]" id="upload" value="{{$pelayanan->gambar}}" multiple>
  </div>

      <div class="form-group col-md-25">
      <label>Keterangan</label>
      <label for="ckeditor"></label>
      <textarea name="keterangan" id="ckeditor">{{$pelayanan->keterangan}}</textarea>
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