<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $produk = Gallery::get();
        return view('/upload-file', compact('produk'));
    }
    
    public function prosesUpload(Request $request)
    {

//		// menyimpan data file yang diupload ke variabel $file
//		$file = $request->file('berkas');
// 
//      	// nama file
//		echo 'File Name: '.$file->getClientOriginalName();
//		echo '<br>';
// 
//      	// ekstensi file
//		echo 'File Extension: '.$file->getClientOriginalExtension();
//		echo '<br>';
// 
//      	// real path
//		echo 'File Real Path: '.$file->getRealPath();
//		echo '<br>';
// 
//      	// ukuran file
//		echo 'File Size: '.$file->getSize();
//		echo '<br>';
// 
//      	// tipe mime
//		echo 'File Mime Type: '.$file->getMimeType();
// 
//      	// isi dengan nama folder tempat kemana file diupload
//		$tujuan_upload = 'foto';
// 
//        // upload file
//		$file->move($tujuan_upload,$file->getClientOriginalName());        
	
		$this->validate($request, [
			'berkas' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
			'caption' => 'required',
		]);
 
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('berkas');
 
		$nama_file = time()."_".$file->getClientOriginalName();
 
        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'foto';
		$file->move($tujuan_upload,$nama_file);
 
		Gallery::create([
			'berkas' => $nama_file,
			'caption' => $request->caption,
		]);
 
		return redirect()->back()->with('status','Gambar Berhasil Di upload!');
	}

}
