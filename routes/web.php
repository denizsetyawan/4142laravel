<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

//PRODUK
Route::get('/', 'ProdukController@index');
//Route::post('/simpan-produk', 'ProdukController@simpanproduk');

Route::get('/list-product', 'ProdukController@index');
Route::post('/store-product', 'ProdukController@store');
Route::get('/create-product', 'ProdukController@create');
Route::get('/show-product/{product}', 'ProdukController@show');
Route::get('/edit-product/{product}', 'ProdukController@edit');
Route::get('/delete-product/{product}', 'ProdukController@delete');
Route::post('/update-product/', 'ProdukController@update');

Route::get('/bs', function () {
    $datakategori = ['Dewasa','Anak-anak'];
    return view('bs',['kategori'=> $datakategori]);
});

Route::get('/blade1', function () {
    return view('blade1',['kategori'=> 'Perempuan']);
});

Route::get('/blade2', function () {
    return view('blade2',['nilai'=> 81]);
});

Route::get('/blade3', function () {
    $dataSiswa = ['Andi','Budi','Catur'];
    return view('blade3',['siswa'=> $dataSiswa]);
});

//Route::get('/home', function () {
//    return view('home');
//});
//
//Route::get('/about', function () {
//    return view('about');
//});
//
//Route::get('/contact', function () {
//    return view('contact');
//});

Route::get('/home', 'PageController@home');

Route::get('/about', 'PageController@about');

Route::get('/contact', 'PageController@contact');

Route::get('/insertpost', 'PostController@insertpost');
Route::get('/listpost', 'PostController@listpost');
Route::get('/tampilpost', 'PostController@tampilpost');
Route::get('/editpost', 'PostController@editpost');
Route::get('/deletepost', 'PostController@deletepost');
Route::get('/getpost', 'PostController@getpost');
Route::get('/insert', 'PostController@insert');