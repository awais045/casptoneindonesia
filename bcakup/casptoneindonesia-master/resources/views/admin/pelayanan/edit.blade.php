@extends('layouts.app')
@section('title')
Edit Pelayanan
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header text-white" style="background-color: #F26E00">Edit Pelayanan</div>
        <div class="card-body">
         <form action="{{url('admin/pelayanan/update')}}" method="POST" enctype="multipart/form-data">
          <input type="hidden" name="id" value="{{$pelayanan->id}}">
          <div class="form-group">
            <label for="formGroupExampleInput">Judul</label>
            <input type="text" class="form-control" name="judul" id="formGroupExampleInput" 
            placeholder="Judul" required value="{{$pelayanan->judul}}">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Keterangan</label>
            <textarea type="text" class="form-control" name="keterangan" id="formGroupExampleInput" 
            placeholder="Keterangan" required>{{$pelayanan->keterangan}}</textarea>
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Gambar</label>
            <input type="file" class="form-control" name="gambar" id="formGroupExampleInput" 
            placeholder="Pengarang">
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