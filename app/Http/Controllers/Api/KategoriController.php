<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriModel;

class KategoriController extends Controller
{
    public function index() {
        return KategoriModel::all();
    }

    public function store(Request $request) {
        $category = KategoriModel::create($request->all());
        return response()->json($category, 201);
    }

    public function show(KategoriModel $category) {
        return KategoriModel::find($category);
    }

    public function update(Request $request, KategoriModel $category) {
        $category->update($request->all());
        return KategoriModel::find($category);
    }

    public function destroy(KategoriModel $category) {
        $category->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Data terhapus'
        ]);
    }
}
