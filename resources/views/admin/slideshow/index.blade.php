@extends('layouts.app')
@section('title')
Portofolio
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
              <th>Gambar</th>
              <th colspan="2">Action</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $i= 1;
              $slideshow = \App\Slideshow::all();
              ?>
              @foreach($slideshow as $q)
            <tr>
              <th scope="row">{{$i++}}</th>
              <td><img src="{{ url('images/'.$q->gambar_slideshow) }}" style="width: 50px; height: 50px"></td>
              <td>
                 <a href="{{url('admin/slideshow/delete/'.$q->id)}}" onclick="return confirm('anda yakin untuk menghapusnya ?')" 
                 class="btn btn-outline-danger btn-sm"><i class="fas fa-trash"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        </div>
        <hr>
          <a href="{{url('admin/slideshow/add')}}" class="btn btn-outline-primary btn-lg"><i class="fas fa-plus-square"></i></a>
      </div>
    </div>
 </div>
@endsection