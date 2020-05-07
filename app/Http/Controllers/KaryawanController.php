<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $karyawan = Karyawan::all();
        return view('pages.karyawan.home',compact('karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.karyawan.formCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nik' => 'required|unique:karyawans|numeric',
            'nama' =>'required|string|min:3',
            'alamat' =>'required',
            'no_hp' =>'required|max:12',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|max:1'
        ]);
        Karyawan::create($validatedData);
        $request->session()->flash('tambah',"Data {$validatedData['nama']} Berhasil Disimpan");
        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        $karyawan->find($karyawan->id);
        return view('pages.karyawan.karyawanDetail',compact('karyawan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit(Karyawan $karyawan)
    {
        $karyawan->find($karyawan->id);
        return view('pages.karyawan.formEdit',['karyawan'=>$karyawan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Karyawan $karyawan)
    {
        $validatedData = $request->validate([
            'nik' => 'required|numeric|unique:karyawans,nik,'. $karyawan->id,
            'nama' =>'required|string|min:3',
            'alamat' =>'required',
            'no_hp' =>'required|max:12',
            'umur' => 'required|numeric',
            'jenis_kelamin' => 'required|max:1'
        ]);
        $karyawan->find($karyawan->id)->update($validatedData);
        $request->session()->flash('edit',"Data {$validatedData['nama']} Berhasil Diedit");
        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Karyawan $karyawan)
    {
        $karyawan->find($karyawan->id)->delete();
        // $karyawan->session()->flash('hapus',"Data {$karyawan['nama']} Berhasil Dihapus");
        return redirect()->route('karyawan.index')->with(['hapus' => "Data {$karyawan['nama']} Berhasil Dihapus"]);
    }
}
