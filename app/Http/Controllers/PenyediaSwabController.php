<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenyediaSwab;
use App\Models\Jenis_swab;
use App\Models\Jenis_penyedia;
use App\Models\Kecamatan;
use Hash;

class PenyediaSwabController extends Controller
{
    //
    public function index(){
        $data   = PenyediaSwab::join('jenis_swab as js','js.id','=','penyedia_swab.id_jenis_swab')->join('jenis_penyedia as jp','jp.id','=','penyedia_swab.id_jenis_penyedia')->select('penyedia_swab.*','js.nama_layanan','jp.jenis_penyedia')->get()->all();
        return view('penyedia_swab.index', compact('data'));
    }

    public function create()
    {   
        $dataSwab = Jenis_swab::get()->all();
        $dataPenyedia = Jenis_penyedia::get()->all();
        $dataKecamatan = Kecamatan::get()->all();
        return view('penyedia_swab.create',compact('dataSwab','dataPenyedia','dataKecamatan'));
    }

    public function store(Request $request)
    {
        $us = new PenyediaSwab;
        $us->id_jenis_swab      = $request->id_jenis_swab;
        $us->id_jenis_penyedia  = $request->id_jenis_penyedia;
        $us->nama_penyedia      = $request->nama_penyedia;
        $us->alamat             = $request->alamat;
        $us->id_kecamatan       = $request->id_kecamatan;
        $us->info_penyedia      = $request->info_penyedia;
        $us->save();
        
        
        if ($us->save()) {
            return redirect('penyedia-swab')->with('success', 'Tambah Penyedia Swab Test berhasil!');
        }
        else {
            return redirect()->back()->with('erros', 'Tambah Penyedia Swab Test gagal!');
        }
        
    }

    public function show($id)
    {
        $data = PenyediaSwab::where('id', $id)->first();
        $dataSwab = Jenis_swab::get()->all();
        $dataPenyedia = Jenis_penyedia::get()->all();
        $dataKecamatan = Kecamatan::get()->all();
        return view('penyedia_swab.edit', compact('data','dataSwab','dataPenyedia','dataKecamatan'));
    }

    public function update(Request $request, $id)
    {

        $us = PenyediaSwab::where('id', $id)->first();
        $us->id_jenis_swab      = $request->id_jenis_swab;
        $us->id_jenis_penyedia  = $request->id_jenis_penyedia;
        $us->nama_penyedia      = $request->nama_penyedia;
        $us->alamat             = $request->alamat;
        $us->id_kecamatan       = $request->id_kecamatan;
        $us->info_penyedia      = $request->info_penyedia;
        $us->save();
       
        if ($us->save()) {
            return redirect('penyedia-swab')->with('success', 'Edit Penyedia Swab Test berhasil.!');
        }
        else {
            return redirect()->back()->with('error', 'Edit Penyedia Swab Test gagal.!');
        }
         
    }

    public function destroy($id)
    {
        $data = PenyediaSwab::where('id', $id)->delete();
        return redirect('penyedia-swab')->with('success', 'Hapus Penyedia Swab Test berhasil.!');
    }
}
