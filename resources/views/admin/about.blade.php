@extends('layouts.app')
@section('title')
About
@endsection
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">About</div>
        <div class="card-body">
         <form action="{{url('admin/about/save')}}" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="formGroupExampleInput">Pengantar 1</label>
            <input type="text" class="form-control" name="pengantar1" id="formGroupExampleInput" 
            placeholder="Judul" required value="{{$data->pengantar1}}">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Pengantar 2</label>
            <input type="text" class="form-control" name="pengantar2" id="formGroupExampleInput" 
            placeholder="Keterangan" required value="{{$data->pengantar2}}">
          </div>
          <div class="form-group">
            <label for="formGroupExampleInput">Pengantar 3</label>
            <input type="text" class="form-control" name="pengantar3" id="formGroupExampleInput" 
            placeholder="Pengarang" required value="{{$data->pengantar3}}">
          </div>
          @csrf
          <button class="btn btn-outline-success float-right" type="submit">Edit Data</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection