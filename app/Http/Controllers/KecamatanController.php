<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kecamatan;
use Hash;

class KecamatanController extends Controller
{
    //
    public function index(){
    	$data 	= Kecamatan::get()->all();
    	return view('kecamatan.index', compact('data'));
    }

    public function create()
    {
        return view('kecamatan.create');
    }

    public function store(Request $request)
    {
       
        $us = new Kecamatan;

        $us->nama_kecamatan = $request->nama_kecamatan;
        $us->save();
       
        if ($us->save()) {
            return redirect('kecamatan')->with('success', 'Tambah Kecamatan berhasil!');
        }
        else {
            return redirect()->back()->with('erros', 'Tambah Kecamatan gagal!');
        }
        
    }

    public function show($id)
    {
        $data = Kecamatan::where('id', $id)->first();
        return view('kecamatan.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $us = Kecamatan::where('id', $id)->first();
        $us->nama_kecamatan = $request->nama_kecamatan;
        $us->save();
       
        if ($us->save()) {
            return redirect('kecamatan')->with('success', 'Edit Kecamatan berhasil.!');
        }
        else {
            return redirect()->back()->with('error', 'Edit Kecamatan gagal.!');
        }
         
    }

    public function destroy($id)
    {
        $data = Kecamatan::where('id', $id)->delete();
        return redirect('kecamatan')->with('success', 'Hapus Kecamatan berhasil.!');
    }
}
