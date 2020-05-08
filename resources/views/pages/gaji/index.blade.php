@extends('layout.master')
@section('tittle', 'halaman gaji')
@section('index-gaji','active')
@section('content')


<div class="container bg-white">
    <div class="row">
        <div class="col-md-12">
            <hr>
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th scope="col">Gaji</th>
                    <th scope="col">Option</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($gaji as $tampil)
                <tr>
                    <td>{{ $tampil->gaji }}</td>
                    <td>
                      <form action="{{ route('gaji.destroy', $tampil->id ) }}" class="d-inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary mb-2">Hapus</button>
                    </form>
                    <form action="{{ route('gaji.edit', $tampil->id ) }}" class="d-inline" method="POST">
                      @csrf
                      @method('GET')
                      <button type="submit" class="btn btn-primary mb-2">Edit</button>
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

