@extends('layout.master')
@section('title', 'halaman bagian')
@section('content')


  <h1 class="text-center">Data Bagian Karyawan PT. Garuda</h1>
  <br>
  <hr>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card-body">
                    <a href="{{ route('bagians.create') }}" class="btn btn-primary">Input Bagian Karyawan Baru</a>
                    <br>
                    <br>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Bagian</th>
                          <th scope="col">Edit</th>
                          <th scope="col">Hapus</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($bagian as $tampil)
                        <tr>
                        <td>{{ $tampil->id }}</td>
                        <td>{{ $tampil->bagian }}</td>
                        <td><a href="{{ route('bagians.edit', ['bagian' => $tampil->id]) }}" class="btn btn-info">Edit</a></td>
                        <td><form action="{{ route('bagians.destroy', ['bagian' => $tampil->id]) }} " method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Hapus</button>
                          </form></td>
                        
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
        </div>
    </div>    
    

@endsection