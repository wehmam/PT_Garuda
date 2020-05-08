<?php

namespace App\Http\Controllers;

use App\Gaji;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;
class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gaji = Gaji::all();
        return view('pages.gaji.index', ['gaji'=> $gaji]);
        // return "data berhasil di input";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.gaji.form-gaji');
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
            "gaji"=>'required',
        ]);
        Gaji::create($validatedData);
        $request->session()->flash("pesan", "Data{$validatedData['gaji']} Berhasil disimpan");
        return redirect('/gajis');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function show(Gaji $gaji)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function edit(Gaji $gaji)
    {
        // $gaji = Gaji::find($gaji);
        return view('pages.gaji.edit', ['gaji'=>$gaji]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Gaji $gaji)
     {
         $validatedData = $request->validate([
             'gaji' => 'required',
         ]);
         $gaji->find($gaji->id)->update($validatedData);
         return redirect('/gajis');
     
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gaji  $gaji
     * @return \Illuminate\Http\Response
     */
    public function destroy($gaji)
    {
        $gaji = Gaji::findorFail($gaji)->delete();
        return redirect('/gajis');
    }
}
