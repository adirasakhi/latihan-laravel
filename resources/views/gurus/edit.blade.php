@extends('gurus.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2>Edit Guru</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('gurus.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('gurus.update',$guru->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $guru->nama }}" class="form-control" placeholder="Nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pendidikan:</strong>
                    <input class="form-control" name="pendidikan" placeholder="Pendidikan" value="{{ $guru->pendidikan }}">
                </div>
            </div>
                <div class="form-group">
                    <strong>No_telepon:</strong>
                    <input class="form-control" name="no_telepon" placeholder="No_telepon" value="{{ $guru->no_telepon }}">
                </div>
            </div>
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <input class="form-control" name="alamat" placeholder="Alamat" value="{{ $guru->alamat }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-3">
              <button type="submit" class="btn btn-success">Kirim</button>
            </div>
        </div>
   
    </form>
@endsection