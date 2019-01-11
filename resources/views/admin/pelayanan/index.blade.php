@extends('layouts.app')
@section('title')
Pelayanan
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-white" style="background-color: #F26E00">Daftar Pelayanan</div>
        <div class="card-body">
          <div class="table-responsive">
          <table class="table" id="example">
          <thead>
            <tr>
              <th>#</th>
              <th>Judul</th>
              <th>Keterangan</th>
              <th>Gambar</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $i= 1;
              $pelayanan = \App\Pelayanan::all();
              ?>
              @foreach($pelayanan as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td>{{$q->judul}}</td>
              <td>{{$q->keterangan}}</td>
              <td><img src="{{ url('images/'.$q->gambar) }}" style="width: 50px; height: 50px"></td>
              <td>
                <a href="{{url('admin/pelayanan/edit/'.$q->id)}}" class="btn btn-outline-warning btn-sm">Edit</a>
                 <a href="{{url('admin/pelayanan/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm">Delete</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <hr>
        <li class="list-group-item float-left">
          <a href="{{url('admin/pelayanan/add')}}" class="btn btn-outline-primary">Tambah</a>
        </li>
      </div>
    </div>
  </div>
</div>
</div>
@endsection