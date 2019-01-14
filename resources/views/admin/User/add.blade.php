@extends('layouts.app')
@section('title')
Add User
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <hr>
      <form action="{{url('admin/datauser/save')}}" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="judul"></label>
      <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Nama" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"></label>
      <input type="email" class="form-control" name="email" id="inputPassword4" placeholder="Email" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"></label>
      <input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"></label>
      <input type="password" class="form-control" name="confirmation_password" id="inputPassword4" placeholder="Confirmation Password" required>
    </div>
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