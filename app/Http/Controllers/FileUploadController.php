<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function fileUpload(){
        return view('file-upload');
    }

    public function prosesFileUpload(Request $request){
        $request->validate([
            'berkas'=>'required|file|image|max:500',
        ]);
        $ext = $request->berkas->getClientOriginalExtension();
        $namaInput = $request->namagambar;

        $path = $request->berkas->move('gambar', $namaInput, $ext);
        
        echo "Gambar berhasil di upload ke <a href='$path'>$namaInput.$ext</a>";
        echo "<img src=$path>";
    }
}
