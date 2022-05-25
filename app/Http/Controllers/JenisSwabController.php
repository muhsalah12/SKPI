<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_swab;
use Hash;

class JenisSwabController extends Controller
{
    //
    public function index(){
    	$data 	= Jenis_swab::get()->all();
    	return view('jenis_swab.index', compact('data'));
    }

    public function create()
    {
        return view('jenis_swab.create');
    }

    public function store(Request $request)
    {
       
        $us = new Jenis_swab;

        $us->nama_layanan = $request->nama_layanan;
        $us->harga = $request->harga;
        $us->info_swab = $request->info_swab;
        $us->save();
       
        if ($us->save()) {
            return redirect('jenis-swab')->with('success', 'Tambah Jenis Swab berhasil!');
        }
        else {
            return redirect()->back()->with('erros', 'Tambah Jenis Swab gagal!');
        }
        
    }

    public function show($id)
    {
        $data = Jenis_swab::where('id', $id)->first();
        return view('jenis_swab.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $us = Jenis_swab::where('id', $id)->first();
        $us->nama_layanan = $request->nama_layanan;
        $us->harga = $request->harga;
        $us->info_swab = $request->info_swab;
        $us->save();
       
        if ($us->save()) {
            return redirect('jenis-swab')->with('success', 'Edit Jenis Swab berhasil.!');
        }
        else {
            return redirect()->back()->with('error', 'Edit Jenis Swab gagal.!');
        }
         
    }

    public function destroy($id)
    {
        $data = Jenis_swab::where('id', $id)->delete();
        return redirect('jenis-swab')->with('success', 'Hapus Jenis Swab berhasil.!');
    }
}
