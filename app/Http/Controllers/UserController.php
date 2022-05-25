<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    //
    public function index(){
    	$data 	= User::get()->all();
    	return view('user.index', compact('data'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
       
        $us = new User;

        if($request->hasFile('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore= time().'.'.$extension;
            
            $path = public_path('images/admin/');
            $request->file('image')->move($path, $fileNameToStore);
            
            $us->foto = "images/admin/".$fileNameToStore;
        }

        $us->nama = $request->nama;
        $us->username = $request->username;
        $us->password = Hash::make($request->password);
        $us->jk = $request->jk;
        $us->save();
       
        if ($us->save()) {
            return redirect('user')->with('success', 'Tambah Admin berhasil!');
        }
        else {
            return redirect()->back()->with('erros', 'Tambah Admin gagal!');
        }
        
    }

    public function show($id)
    {
        $data = User::where('id', $id)->first();
        return view('user.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {

        $pass = $request->password;

        $us = User::where('id', $id)->first();

        if($request->hasFile('image')){


            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore= time().'.'.$extension;
            
            $path = public_path('images/admin/');
            $request->file('image')->move($path, $fileNameToStore);
            
            $us->foto = "images/admin/".$fileNameToStore;
        }

        $us->nama = $request->nama;
        $us->username = $request->username;
        $us->jk = $request->jk;
        if($pass != ''){
            $us->password = Hash::make($request->password);
        }
        $us->save();
       
        if ($us->save()) {
            return redirect('user')->with('success', 'Edit Admin berhasil.!');
        }
        else {
            return redirect()->back()->with('error', 'Edit Admin gagal.!');
        }
         
    }

    public function destroy($id)
    {
        $data = User::where('id', $id)->delete();
        return redirect('user')->with('success', 'Hapus Admin berhasil.!');
    }
}
