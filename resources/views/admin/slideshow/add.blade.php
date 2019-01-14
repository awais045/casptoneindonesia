@extends('layouts.app')
@section('title')
Add Portofolio
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <hr>
      <form action="{{url('admin/slideshow/save')}}" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="inputAddress"></label>
    <input type="file" class="form-control" name="gambar_slideshow[]" id="upload" multiple>
  </div>
  <br>
  <hr>
  <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-plus-circle"></i></button>
  @csrf
</form>
</div>
</div>
</div>
@endsection