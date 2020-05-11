<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PageController extends Controller{
    
    public function home(){
        $judul = ['Judul 1','Judul 2','Judul 3'];
        return view('home',['judul' => $judul]);
//        Memanggil file home.blade.php
    }
    
    public function about(){
        return view('about');
    }
    
    public function contact(){
        return view('contact');
    }
}

?>