@extends('Layout.A_master')

@section('edit')

  
<div class="card-body">
  <h4 class="card-title">Tambah Galeri</h4>
  <p class="card-description">
    Tempat menambah data.

    @if(count($errors->all()))
      @foreach ($errors->all() as $error)
          <div class="alert alert-danger">
              <Strong>Oops!</Strong> {{$error}}
          </div>
      @endforeach
    @endif

    @if(Session::has('success'))
      <div class="alert alert-success text-center">
          <strong>Success!</strong> {{Session::get('success')}}
      </div>
    @endif
  </p>
  <form  method="POST" class="forms-sample" action="/admin_galeri/tambahkan" enctype="multipart/form-data">
    
    @csrf

    <div class="form-group">
      <label for="id">Nomer</label>
      <input type="number" class="form-control" id="id" placeholder="masukkan id" name="id" value="{{old('id')}}">
    </div>

    <div class="form-group">
      <label for="deskripsi">Deskripsi</label>
      <input type="text" class="form-control" id="deskripsi" placeholder="masukkan deskripsi" name="deskripsi" value="{{old('deskripsi')}}">
    </div>
    
    <div class="form-group">
      <label for="gambar">File Foto</label>
      <input type="file" class="form-control" id="gambar" placeholder="gambar" name="gambar">
    </div>

          <button type="submit" class="btn btn-primary mr-2">Tambah Data</button>
          <a href="/admin_galeri" type="button" class="btn btn-success">Kembali!</a>
        </form>
      </div>

@endsection