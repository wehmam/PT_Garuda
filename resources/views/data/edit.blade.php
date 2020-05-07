@extends('layout.master')
@section('title', 'halaman bagian')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <hr>
                <form action="{{ route('bagians.update', $bagian) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="bagian">Bagian</label>
                        <select name="bagian" id="bagian" class="form-control">
                            <option value="Teknisi" {{ $bagian->bagian }}>
                                Teknisi
                            </option>
                            <option value="Operasi Bandar Udara" {{ $bagian->bagian }}>
                                Operasi Bandar Udara
                            </option>
                            <option value="Administrasi" {{ $bagian->bagian }}>
                                Administrasi
                            </option>
                            <option value="Web Developer" {{ $bagian->bagian }}>
                                Web Developer
                            </option>
                            <option value="Maintenance Server" {{ $bagian->bagian }}>
                                Maintenance Server
                            </option>
                        </select>
                        @error('bagian')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <br>
                    <br>
                    <button type="submit"  class="btn-btn-primary mb-2">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection