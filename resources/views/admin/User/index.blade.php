@extends('layouts.app')
@section('title')
User
@endsection
@section('content')
<div class="container">
	@if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
@endif
  <div class="row justify-content-center">
    <div class="col md-8">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Email</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $i= 1;
              $user = \App\User::all();
              ?>
              @foreach($user as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$q->name}}</td>
              <td>{{$q->email}}</td>
              <td>
                <a href="{{url('admin/datauser/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i></a>
                 <a href="{{url('admin/datauser/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <hr>
          <a href="{{url('admin/datauser/add')}}" class="btn btn-outline-primary btn-lg"><i class="fas fa-plus-square"></i></a>
      </div>
    </div>
 </div>
@endsection