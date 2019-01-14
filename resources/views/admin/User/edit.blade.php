@extends('layouts.app')
@section('title')
Edit User
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <hr>
      <form action="{{url('admin/datauser/update')}}" method="POST" enctype="multipart/form-data">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputnama"></label>
      <input type="text" class="form-control" name="name" id="inputEmail4" placeholder="Nama" value="{{$user->name}}" required>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4"></label>
      <input type="email" class="form-control" name="email" id="inputPassword4" placeholder="Email" value="{{$user->email}}" required>
    </div>
    <div class="form-group col-md-6">
      <label for="oldpw"></label>
      <input type="password" class="form-control" name="oldpw" id="oldpw" placeholder="Old Password" required>
    </div>
     <div class="form-group col-md-6">
      <label for="newpw"></label>
      <input type="password" class="form-control" name="newpw" id="newpw" placeholder="New Password" required>
    </div>
    <div class="form-group col-md-6">
      <label for="confnewpw"></label>
      <input type="password" class="form-control" name="confnewpw" id="confnewpw" placeholder="Confirm New Password" required>
    </div>
  </div>
  <br>
  <hr>
  <input type="hidden" name="id" value="{{$user->id}}">
  <button type="submit" class="btn btn-primary btn-lg"><i class="fas fa-pen"></i></button>
  @csrf
</form>
    </div>
  </div>
</div>
@endsection