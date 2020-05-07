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
                <a href="{{ route('karyawan.create') }}" class="btn btn-primary mt-2 mb-4">Tambah Data</a>
                @if(Session()->has('tambah'))
                    <div class="alert alert-success">
                        {{ session()->get('tambah') }}
                    </div>
                @elseif(session()->has('edit'))
                <div class="alert alert-warning">
                    {{ session()->get('edit') }}
                </div>
                @elseif(session()->has('hapus'))
                <div class="alert alert-danger">
                    {{ session()->get('hapus') }}
                </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th scope="col">Nik</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">No Hp</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Jenis-Kelamin</th>
                        <th scope="col" colspan="2" class="text-center">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($karyawan as $item)
                        <tr>
                            <td><a href="{{ route('karyawan.show',$item->id) }}">{{ $item->nik }}</a></td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->umur }}</td>
                            <td>{{ $item->jenis_kelamin == 'L' ? 'Laki-Laki' : 'Perempuan' }}</td>
                            <td>
                                <a href="{{ route('karyawan.edit',$item->id,'edit') }}" class="badge badge-success">Edit</a>
                            </td>
                            <td>
                                <form action="{{ route('karyawan.destroy',$item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="badge badge-danger" onclick="return confirm('Yakin Ingin menghapus data {{ $item->nama }}')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection 