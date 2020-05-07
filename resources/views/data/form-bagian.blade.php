@extends('layout.master')
@section('title', 'halaman bagian')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <hr>
                <form action="{{ route('bagians.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="bagian">Bagian</label>
                        <select name="bagian" id="bagian" class="form-control">
                            <option value="Teknisi" {{ old('bagian') == 'Teknisi' ? 'selected' : '' }}>
                                Teknisi
                            </option>
                            <option value="Operasi Bandar Udara" {{ old('bagian') == 'Operasi Bandar Udara' ? 'selected' : '' }}>
                                Operasi Bandar Udara
                            </option>
                            <option value="Administrasi" {{ old('bagian') == 'Administrasi' ? 'selected' : '' }}>
                                Administrasi
                            </option>
                            <option value="Web Developer" {{ old('bagian') == 'Web Developer' ? 'selected' : '' }}>
                                Web Developer
                            </option>
                            <option value="Maintenance Server" {{ old('bagian') == 'Maintenance Server' ? 'selected' : '' }}>
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