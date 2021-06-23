@extends('Layout.A_master')

@section('edit')

      <div class="card-body">
        <h4 class="card-title">Edit Guru</h4>
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
        <form  method="POST" class="forms-sample" action="/admin_guru/{{$guru->id}}/update" enctype="multipart/form-data">
          @method('patch')
          @csrf

          <div class="form-group">
            <label for="id">Nomer</label>
            <input type="number" class="form-control" id="id" placeholder="id" name="id" value="{{$guru->id}}">
          </div>
          
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" placeholder="nama" name="nama" value="{{$guru->nama}}">
          </div>

          <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" placeholder="jabatan" name="jabatan" value="{{$guru->jabatan}}">
          </div>

          <div class="form-group">
            <label for="foto">Masukkan Foto</label>
            <input type="file" class="form-control" id="foto" placeholder="foto" name="foto">
            <img src="{{ url('img/poto/guru')}}/{{ $guru->foto }}" width="250px">
            <a><br>{{$guru->foto}}</a>
          </div>

          <button type="submit" class="btn btn-primary mr-2">Simpan!</button>
          <a href="/admin_guru" type="button" class="btn btn-warning">Kembali!</a>
        </form>
      </div>

@endsection