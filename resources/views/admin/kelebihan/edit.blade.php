@extends('layouts.app')
@section('title')
Edit Kelebihan
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-white">Edit Kelebihan</div>
        <div class="card-body">
         <form action="{{url('admin/kelebihan/update')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="formGroupExampleInput">Judul</label>
            <input type="text" class="form-control" name="judul" id="formGroupExampleInput" 
            placeholder="Judul" value="{{$kelebihan->judul}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" id="formGroupExampleInput" 
            placeholder="Keterangan" value="{{$kelebihan->keterangan}}" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="formGroupExampleInput" value="{{$kelebihan->gambar}}" required>
          </div>
          @csrf
          <input type="hidden" name="id" value="{{$kelebihan->id}}">
          <button class="btn btn-outline-success float-right" type="submit">Update Data</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection