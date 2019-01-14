@extends('layouts.app')
@section('title')
Add Portofolio
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <hr>
      <form action="{{url('admin/portofolio/save')}}" method="POST" enctype="multipart/form-data">
        <label>Judul</label>
    <input type="text" class="form-control" name="judul" id="inputEmail4" placeholder="Judul">

  <div class="form-group">
    <label>Gambar</label>
    <label for="inputAddress"></label>
    <input type="file" class="form-control" name="gambar[]" id="upload" multiple>
  </div>


    <div class="form-group col-md-25">
      <label>Keterangan</label>
      <label for="ckeditor"></label>
      <textarea name="keterangan" id="ckeditor"></textarea>
    </div>
  <br>
  <br>
  <hr>
  <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-plus-circle"></i></button>
  @csrf
</form>
</div>
</div>
</div>
@endsection