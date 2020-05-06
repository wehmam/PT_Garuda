@extends('layout.master')
@section('title','Home Karyawan')
@section('content')

    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <h1 class="font-weight-bold">Data Karyawan PT Garuda</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Nik</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Jenis-Kelamin</th>
                        <th scope="col">Gaji</th>
                        
                        
                        
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($karyawan as $item)
                        <tr>
                            <td>{{ $item->nik }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->umur }}</td>
                            <td>{{ $item->jenis_kelamin }}</td>
                            <td>{{ $item->gaji->gaji }}</td>
                 
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection 