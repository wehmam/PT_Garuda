@extends('layout.master')
@section('tittle', 'halaman gaji')
@section('gaji','active')
@section('content')


<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <hr>
            <form action="{{ route('gaji.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="gaji">Gaji</label>
                    {{-- untuk name disesuaikan dengan field database --}}
                    <input type="text" class="form-control @error('gaji') is-invalid @enderror" id="gaji" name="gaji" value="{{ old('gaji') }}">
                    @error('gaji')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <button type="submit" class="btn btn-primary mb-2">Simpan</button>
            </form>
        </div>
    </div>
</div>
@endsection

