<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PenyediaSwab;
use App\Models\Jenis_swab;
use App\Models\Jenis_penyedia;
use App\Models\Kecamatan;
use DB;

class FrontController extends Controller
{
    public function index()
    {
    	return view('front.home');
    }

    public function daftar_penyedia()
    {    
        $data   = PenyediaSwab::join('jenis_swab as js','js.id','=','penyedia_swab.id_jenis_swab')
        ->join('jenis_penyedia as jp','jp.id','=','penyedia_swab.id_jenis_penyedia')
        ->select('penyedia_swab.*','js.nama_layanan','js.harga','jp.jenis_penyedia')
        ->get()->all();
        return view('front.daftar_penyedia',compact('data'));
    }

    public function detail_penyedia($id)
    {    
        $data   = PenyediaSwab::where('id',$id)->first();
        return view('front.detail',compact('data'));
    }

}
