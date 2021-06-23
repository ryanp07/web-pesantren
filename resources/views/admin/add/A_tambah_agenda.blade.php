@extends('Layout.A_master')

@section('edit')

  
<div class="card-body">
  <h4 class="card-title">Tambah Agenda</h4>
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
  <form  method="POST" class="forms-sample" action="/admin_agenda/tambahkan" enctype="multipart/form-data">
    
    @csrf

    <div class="form-group">
      <label for="id">Nomer</label>
      <input type="number" class="form-control" id="id" placeholder="Masukkan Nomer" name="id" value="{{old('id')}}">
    </div>

    <div class="form-group">
      <label for="judul">Judul</label>
      <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul" name="judul" value="{{old('judul')}}">
    </div>

    <div class="form-group">
      <label for="biaya_adopsi">Tanggal</label>
      <input type="date" class="form-control" id="tanggal" placeholder="Masukkan Tanggal" name="tanggal" value="{{old('tanggal')}}">
    </div>

    <div class="form-group">
        <label for="biaya_adopsi">jam</label>
        <input type="text" class="form-control" id="jam" placeholder="Masukkan Jam" name="jam" value="{{old('jam')}}">
      </div> 

      <div class="form-group">
        <label for="biaya_adopsi">lokasi</label>
        <input type="text" class="form-control" id="lokasi" placeholder="Masukkan Lokasi" name="lokasi" value="{{old('lokasi')}}">
      </div> 

    <div class="form-group">
      <label for="gambar">File Foto</label>
      <input type="file" class="form-control" id="gambar" placeholder="gambar" name="gambar">
    </div>

          <button type="submit" class="btn btn-primary mr-2">Tambah Data</button>
          <a href="/admin_agenda" type="button" class="btn btn-success">Kembali!</a>
        </form>
      </div>

@endsection