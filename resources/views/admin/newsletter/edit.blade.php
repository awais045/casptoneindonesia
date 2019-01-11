@extends('layouts.app')
@section('title')
Edit Newsletter
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <hr>
      <form action="{{url('admin/newsletter/save')}}" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="email"></label>
      <input type="email" class="form-control" name="email" id="inputEmail4" value="{{$newsletter->email}}" placeholder="Judul">
    </div>
  <br>
  <hr>
  <button type="submit" class="btn btn-primary btn-sm" style="height: 40px; margin-top: 20 px;"><i class="fas fa-pen"></i></button>
  @csrf
</form>
</div>
</div>
</div>
@endsection