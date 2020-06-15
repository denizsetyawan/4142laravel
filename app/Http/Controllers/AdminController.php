<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function dataProduk()
    {
        echo '<button type="button"><a href="/logout">Logout</button>';
        dd ('Data Produk');
    }
    
    public function dataKategori()
    {
        dd ('Data Kategori');
    }
    
    public function login(Request $request)
    {
        return view('form-login');
    }
    
    public function prosesLogin(Request $request)
    {
        $dataValid = $request->validate([
            'username' => 'required'
        ]);
            
        $userAdmin = ['admin','deniz'];
            
        if(in_array($request->username, $userAdmin)){
            session(['username' => $request->username]);
            return redirect('/data-produk');
        }else{
            return back()->withInput->with('pesan','Username tidak terdaftar!');
        }
    }
    
    public function logout()
    {
        session()->forget('username');
        return redirect('/')->with('pesan','Berhasil Logout!');
    }
}
