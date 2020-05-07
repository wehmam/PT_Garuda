@extends('layout.master')
@section('title','Edit Data')
@section('content')

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-12 text-center">
                <h1 class="font-weight-bold">Form Update Data Karyawan</h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-8 offset-2">
                <form action="{{ route('karyawan.update',$karyawan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col">
                          <label for="nik">Nik</label>
                          <input type="text" id="nik" name="nik" class="form-control @error('nik') is-invalid @enderror" value="{{  $karyawan->nik }}">
                          @error('nik')
                                <div class="alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="nama">Nama</label>
                            <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $karyawan->nama }}">
                            @error('nama')
                                <div class="alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                      </div>
                      <div class="form-group mt-3">
                          <label for="alamat">Alamat</label>
                          <textarea name="alamat" id="alamat" class="form-control" cols="30" rows="5">{{ $karyawan->alamat }}</textarea>
                          @error('alamat')
                                <div class="alert-danger">{{ $message }}</div>
                            @enderror
                      </div>
                      <div class="row">
                          <div class="col">
                              <label for="no_hp">No Handphone</label>
                              <input type="text" class="form-control @error('no_hp') is-invalid @enderror" value="{{ $karyawan->no_hp }}" name="no_hp" id="no_hp">
                              @error('no_hp')
                                <div class="alert-danger">{{ $message }}</div>
                              @enderror
                          </div>
                          <div class="col">
                              <label for="umur">Umur</label>
                              <input type="text" class="form-control @error('umur') is-invalid @enderror" value="{{ $karyawan->umur }}" name="umur" id="umur">
                              @error('umur')
                                <div class="alert-danger">{{ $message }}</div>
                            @enderror
                          </div>
                      </div>

                      <div class="form-group mt-4">
                          <label for="jenis_kelamin">Jenis Kelamin</label>
                      </div>
                      <div class="custom-control custom-radio mb-3">
                        <input type="radio" class="custom-control-input" id="laki-laki" name="jenis_kelamin" value="L" {{ $karyawan->jenis_kelamin == 'L' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="laki-laki">Laki Laki</label>
                      </div>
                      <div class="custom-control custom-radio mb-3">
                        <input type="radio" class="custom-control-input" id="perempuan" name="jenis_kelamin" value="P" {{ $karyawan->jenis_kelamin == 'P' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="perempuan">Perempuan</label>
                      </div>
                      @error('jenis_kelamin')
                        <div class="alert-danger">{{ $message }}</div>
                      @enderror

                      <button type="submit" name="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>

@endsection