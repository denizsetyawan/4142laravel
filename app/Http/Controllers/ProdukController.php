<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProdukController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('index',['products' => $products]);
    }
    
    public function create()
    {
        return view('form_produk');
    }
    
    public function show($product)
    {
        $result = Product::find($product);
        
        return view('detail-product', ['product'=>$result]);
    }
    
    public function edit($product)
    {
        $result = Product::find($product);
        
        return view('edit-product', ['product'=>$result]);
    }
    
    public function update($product)
    {
        $result = Product::find($product);
        
        return view('edit-product', ['product'=>$result]);
    }
    
    public function store(Request $request)
    {
        $dataValid = $request->validate([
            'nama_produk' => 'required',
            'kategori_produk' => 'required',
            'harga_produk' => 'required|numeric',
            'stok_produk' => 'required|numeric',
            'kondisi_produk' => 'required|in:Baru,Bekas',
            'deskripsi_produk' => 'required'
        ]);
        Product::create($dataValid);
        
        $request->session()->flash('pesan', 'Produk Berhasil ditambahkan!');
        return redirect ('/');
    }
    
//    public function simpanproduk(Request $request)
//    {
//        $dataValid = $request->validate([
//            'nama_produk' => 'required',
//            'kategori_produk' => 'required',
//            'harga_produk' => 'required|numeric',
//            'stok_produk' => 'required|numeric',
//            'kondisi_produk' => 'required|in:Baru,Bekas',
//            'deskripsi_produk' => 'required'
//        ],
//        [
//            'nama_produk.required' => 'Nama Produk harus di isi',
//            'kategori_produk.required' => 'Kategori Produk harus di isi',
//            'harga_produk.required' => 'Harga Produk harus di isi',
//            'harga_produk.numeric' => 'Harga Produk harus di isi Berupa angka',
//            'stok_produk.required' => 'Stok Produk harus di isi',
//            'stok_produk.numeric' => 'Stok Produk harus di isi Berupa angka',
//            'kondisi_produk.required' => 'Kondisi Produk harus di isi',
//            'kondisi_produk.in' => 'Kondisi Produk hanya Baru dan Bekas',
//            'deskripsi_produk.required' => 'Deskripsi Produk harus di isi'
//        ]);
//        
//        dd($dataValid);
//        
////        echo $request->nama_produk;
////        echo "<hr>";
////        echo $request->kategori_produk;
////        echo "<hr>";
////        echo $request->harga_produk;
////        echo "<hr>";
////        echo $request->stok_produk;
////        echo "<hr>";
////        echo $request->kondisi_produk;
////        echo "<hr>";
////        echo $request->deskripsi_produk;
////        echo "<hr>";
//    }
}
