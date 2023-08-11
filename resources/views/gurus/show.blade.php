@extends('students.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div>
                <h2> Tampilkan guru</h2>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route('students.index') }}"> kembali</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $guru->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pendidikan:</strong>
                {{ $guru->pendidikan }}
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>No_telepon:</strong>
                {{ $guru->no_telepon }}
            </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                {{ $guru->alamat }}
            </div>
        </div>
    </div>
@endsection