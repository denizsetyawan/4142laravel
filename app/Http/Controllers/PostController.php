<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function insertpost(){
        $result = DB::insert("INSERT INTO posts(judul, isi) VALUES ('testing judul','testing isi berita')");
    }
    
    public function listpost(){
        $result=DB::select('SELECT * FROM posts');
        echo 'Judul Berita : '.$result[0]->judul.'<br>';
        echo 'Isi Berita : '.$result[0]->isi;
    }
    
    public function tampilpost(){
        return view('table');
    }
    
    public function editpost(){
        $result = DB::update("UPDATE posts SET judul='Contoh judul baru' WHERE id=1");
        dump($result);
    }
    
    public function deletepost(){
        $result = DB::delete("DELETE FROM posts WHERE id=1");
        dump($result);
    }
    
    public function getpost(){
        $result = DB::table('posts')->get();
        return view('viewpost',['posts' => $result]);
    }
    
    public function insert(){
        $result = DB::table('posts')->insert(
        [
            'judul' => 'testing judul',
            'isi' => 'testing isi',
        ]
        );
        dd($result);
    }
}
