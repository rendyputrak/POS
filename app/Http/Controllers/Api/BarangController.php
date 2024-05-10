<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BarangModel;
use App\Models\KategoriModel;
use Illuminate\Support\Facades\Validator;


class BarangController extends Controller
{
    public function __invoke(Request $request){
        //set validation
        $validator = Validator::make($request->all(), [
            'kategori_id' => 'required|exists:m_kategori,kategori_id',
            // 'kategori_nama' => 'required',
            'barang_kode' => 'required',
            'barang_nama' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //if validation fails
        if($validator->fails()){
            return response()->json($validator->errors(), 422);
        }

        //create barang
        $barang = BarangModel::create([
            'kategori_id' => $request->kategori_id,
            'kategori_nama' => KategoriModel::where('kategori_id', $request->kategori_id)->value('kategori_nama'),
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'image' => $request->image->hashName()
        ]);

        //return response JSON barang is created
        if($barang){
            return response()->json([
                'success' => true,
                'barang' => $barang,
            ], 201);
        }

        return response()->json([
            'success' => false,
        ], 409);
    }
    public function index() {
        return BarangModel::all();
    }

    public function store(Request $request) {
        $item = BarangModel::create($request->all());
        return response()->json($item, 201);
    }

    public function show(BarangModel $item) {
        return response()->json($item, 200);
    }

    public function update(Request $request, BarangModel $item) {
        $item->update($request->all());
        return BarangModel::find($item);
    }

    public function destroy(BarangModel $item) {
        $item->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Data terhapus'
        ]);
    }
}
