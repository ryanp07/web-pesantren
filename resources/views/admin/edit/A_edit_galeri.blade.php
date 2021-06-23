@extends('Layout.A_master')

@section('edit')

      <div class="card-body">
        <h4 class="card-title">Edit Galeri</h4>
        <p class="card-description">
          Tempat merubah data.

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
        <form  method="POST" class="forms-sample" action="/admin_galeri/{{$galeri->id}}/update" enctype="multipart/form-data">
          @method('patch')
          @csrf

          <div class="form-group">
            <label for="id">Nomer</label>
            <input type="text" class="form-control" id="id" placeholder="id" name="id" value="{{$galeri->id}}">
          </div>

          <div class="form-group">
            <label for="deskripsi">Deskripsi Foto</label>
            <input type="text" class="form-control" id="deskripsi" placeholder="deskripsi" name="deskripsi" value="{{$galeri->deskripsi}}">
          </div>
          
          <div class="form-group">
            <label for="gambar">Masukkan Foto</label>
            <input type="file" class="form-control" id="gambar" placeholder="gambar" name="gambar">
            <img src="{{ url('img/poto/galeri')}}/{{ $galeri->gambar }}" width="250px">
            <a><br>{{$galeri->gambar}}</a>
          </div>
          
          <button type="submit" class="btn btn-primary mr-2">Simpan</button>
          <a href="/admin_galeri" type="button" class="btn btn-warning">Kembali!</a>
        </form>
      </div>

@endsection