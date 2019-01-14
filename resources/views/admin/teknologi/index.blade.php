@extends('layouts.app')
@section('title')
Teknologi
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col md-8">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>#</th>
              <th>Nama</th>
              <th>Gambar</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $i= 1;
              $teknologi = \App\Teknologi::all();
              ?>
              @foreach($teknologi as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$q->nama}}</td>
              <td><img src="{{ url('images/'.$q->gambar) }}" style="width: 50px; height: 50px"></td>
              <td>
                 <a href="{{url('admin/teknologi/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <hr>
          <a href="{{url('admin/teknologi/add')}}" class="btn btn-outline-primary btn-lg"><i class="fas fa-plus-square"></i></a>
      </div>
    </div>
@endsection