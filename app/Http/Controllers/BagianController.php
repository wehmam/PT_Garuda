<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bagian;

class BagianController extends Controller
{
    public function index(){
        $bagian = Bagian::all();
        return view('data.bagian', ['bagian' => $bagian]);
    }


    public function create(){
        return view('data.form-bagian');
    }


    public function store(Request $request){
        $validateData = $request->validate([
            'bagian' => 'required',
        ]);
        Bagian::create($validateData);
        return redirect("/bagians");
    }


    public function edit(Bagian $bagian){
        return view('data.edit', ['bagian' => $bagian]);
    }

    public function update(Request $request, Bagian $bagian){
        $validateData = $request->validate([
            'bagian' => 'required',
        ]);
        $bagian->update($validateData);
        // $bagian = Bagian::findOrFail($bagian);
        // $bagian->bagian = $request->bagian;
        // $bagian->save();
        // $request->session()->flash('pesan', "Data {$validateData['$bagian']} berhasil di update");
        return redirect("/bagians");
    }


    public function destroy(Bagian $bagian){
        $bagian->delete();
        return redirect("/bagians");
    }
}
