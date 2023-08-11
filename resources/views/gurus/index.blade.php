@extends('gurus.layout')
 
@section('content')
    <div class="row mt-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-start">
                <h2>Laravel 9 CRUD School Application</h2>
            </div>
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('gurus.create') }}"> Buat Guru Baru</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Pendidikan</th>
            <th>No telepon</th>
            <th>Alamat</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($gurus as $guru)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $guru->nama }}</td>
            <td>{{ $guru->pendidikan }}</td>
            <td>{{ $guru->no_telepon }}</td>
            <td>{{ $guru->alamat }}</td>
            <td>
                <form action="{{ route('gurus.destroy',$guru->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('gurus.show',$guru->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('gurus.edit',$guru->id) }}">Edit</a>
                    <a href="{{ route('export.gurus') }}" class="btn btn-success">Export Gurus to Excel</a>

   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    <div class="row text-center">
        {!! $gurus->links() !!}
    </div>
      
@endsection