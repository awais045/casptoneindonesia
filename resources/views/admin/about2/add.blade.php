@extends('layouts.app')
@section('title')
Add About 2
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-black">About 2</div>
        <div class="card-body">
         <form action="{{url('/admin/about2/save')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="formGroupExampleInput">Judul</label>
            <input type="text" class="form-control" name="judul" id="formGroupExampleInput" 
            placeholder="Judul" required>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Deskripsi</label>
            <input type="text" class="form-control" name="deskripsi" id="formGroupExampleInput" 
            placeholder="Keterangan" required>
          </div>
          @csrf
          <button class="btn btn-outline-success float-right" type="submit">Tambah Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection