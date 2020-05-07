@extends('layout.master')
@section('title','Detail Karyawan')

@section('content')
    <div class="container">
        <div class="row mt-3">
            <div class="col-md-12 text-center">
                <h1>Data {{ $karyawan->nama }}</h1>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-8 offset-2 ">
                <ul class="list-group">
                    <li class="list-group-item">Nik : {{ $karyawan->nik }}</li>
                    <li class="list-group-item">Nama : {{ $karyawan->nama }}</li>
                    <li class="list-group-item">Alamat : {{ $karyawan->alamat }}</li>
                    <li class="list-group-item">No Handphone : {{ $karyawan->no_hp }}</li>
                    <li class="list-group-item">Umur : {{ $karyawan->umur }}</li>
                    <li class="list-group-item">Jenis Kelamin : {{ $karyawan->jenis_kelamin }}</li>
                </ul>
                <a href="{{ route('karyawan.index') }}" class="btn btn-primary mt-3">Home</a>
                <a href="{{ route('karyawan.edit',$karyawan->id,'edit') }}" class="btn btn-warning mt-3 float-right">Edit</a>
            </div>
        </div>
    </div>
@endsection