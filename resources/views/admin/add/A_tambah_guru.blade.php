@extends('Layout.A_master')

@section('edit')

  
<div class="card-body">
  <h4 class="card-title">Tambah Guru</h4>
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
  <form  method="POST" class="forms-sample" action="/admin_guru/tambahkan" enctype="multipart/form-data">
    
    @csrf

    <div class="form-group">
      <label for="id">Nomer</label>
      <input type="number" class="form-control" id="id" placeholder="Masukkan Nomer" name="id" value="{{old('id')}}">
    </div>

    <div class="form-group">
        <label for="nama">Nama</label>
        <input type="text" class="form-control" id="nama" placeholder="Masukkan Nama" name="nama" value="{{old('nama')}}">
      </div>


    <div class="form-group">
      <label for="jabatan">Jabatan</label>
      <input type="text" class="form-control" id="jabatan" placeholder="Masukkan Jabatan" name="jabatan" value="{{old('jabatan')}}">
    </div>

    <div class="form-group">
      <label for="foto">File Foto</label>
      <input type="file" class="form-control" id="foto" placeholder="foto" name="foto">
    </div>


          <button type="submit" class="btn btn-primary mr-2">Tambah Data</button>
          <a href="/admin_guru" type="button" class="btn btn-success">Kembali!</a>
        </form>
      </div>

@endsection