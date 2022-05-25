<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_penyedia;
use Hash;

class JenisPenyediaController extends Controller
{
    //
    public function index(){
    	$data 	= Jenis_penyedia::get()->all();
    	return view('jenis_penyedia.index', compact('data'));
    }

    public function create()
    {
        return view('jenis_penyedia.create');
    }

    public function store(Request $request)
    {
       
        $us = new Jenis_penyedia;

        $us->jenis_penyedia = $request->jenis_penyedia;
        $us->save();
       
        if ($us->save()) {
            return redirect('jenis-penyedia')->with('success', 'Tambah Jenis penyedia berhasil!');
        }
        else {
            return redirect()->back()->with('erros', 'Tambah Jenis penyedia gagal!');
        }
        
    }

    public function show($id)
    {
        $data = Jenis_penyedia::where('id', $id)->first();
        return view('jenis_penyedia.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $us = Jenis_penyedia::where('id', $id)->first();
        $us->jenis_penyedia = $request->jenis_penyedia;
        $us->save();
       
        if ($us->save()) {
            return redirect('jenis-penyedia')->with('success', 'Edit Jenis penyedia berhasil.!');
        }
        else {
            return redirect()->back()->with('error', 'Edit Jenis penyedia gagal.!');
        }
         
    }

    public function destroy($id)
    {
        $data = Jenis_penyedia::where('id', $id)->delete();
        return redirect('jenis-penyedia')->with('success', 'Hapus Jenis penyedia berhasil.!');
    }
}
