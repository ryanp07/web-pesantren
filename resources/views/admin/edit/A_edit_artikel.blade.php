@extends('Layout.A_master')

@section('edit')

      <div class="card-body">
        <h4 class="card-title">Edit Artikel</h4>
        <p class="card-description">
          Tempat merubah data yang sudah dimasukan sebelumnya.

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
        <form  method="POST" class="forms-sample" action="/admin_artikel/{{$artikel->id}}/update" enctype="multipart/form-data">
          @method('patch')
          @csrf

          <div class="form-group">
            <label for="id">Nomer</label>
            <input type="number" class="form-control" id="id" placeholder="id" name="id" value="{{$artikel->id}}">
          </div>

          <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="judul" name="judul" value="{{$artikel->judul}}">
          </div>
    
          <div class="form-group">
            <label for="isi">Isi</label>
            <textarea class="form-control" id="isi" name="isi" rows="4">{{$artikel->isi}}</textarea>
          </div>

          <div class="form-group">
            <label for="biaya_adopsi">Tanggal</label>
            <input type="date" class="form-control" id="tanggal" placeholder="tanggal" name="tanggal" value="{{$artikel->tanggal}}">
          </div>

          <div class="form-group">
            <label for="gambar">Masukkan gambar</label>
            <input type="file" class="form-control" id="gambar" placeholder="gambar" name="gambar">
            <img src="{{ url('img/poto/artikel')}}/{{ $artikel->gambar }}" width="250px">
            <a><br>{{$artikel->gambar}}</a>
          </div>

          <button type="submit" class="btn btn-primary mr-2">Simpan!</button>
          <a href="/admin_artikel" type="button" class="btn btn-warning">Kembali!</a>
        </form>
      </div>

@endsection