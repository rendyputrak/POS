<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;
use Yajra\DataTables\DataTables;


class KategoriController extends Controller
{
    public function index()
    {
        $breadcrumb = (object) [
            'title' => 'Daftar kategori',
            'list' => ['Home', 'kategori']
        ];

        $page = (object) [
            'title' => 'Daftar kategori yang terdaftar dalam sistem'
        ];

        $activeMenu = 'kategori'; //set menu yang sedang aktif

        // $kategori = KategoriModel::all(); //ambil data kategori untuk filter kategori

        return view('kategori.index', ['breadcrumb' => $breadcrumb, 'page' => $page, 'activeMenu' => $activeMenu]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $breadcrumb = (object) [
            'title' => 'Tambah kategori',
            'list' => ['Home', 'kategori', 'Tambah']
        ];

        $page = (object) [
            'title' => 'Tambah kategori baru'
        ];
        
        $kategori = KategoriModel::all(); //ambil data kategori untuk ditampilkan di form
        $activeMenu = 'kategori'; //set menu yang sedang aktif

        return view('kategori.create', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kategori' => $kategori,'activeMenu' => $activeMenu]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //melakukan validasi data
        $request->validate([
            'kategori_kode' => 'required',
            'kategori_nama' => 'required',
        ]);


        KategoriModel::create([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama,
        ]);

        return redirect('/kategori')->with('success', 'Data kategori berhasil disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategori = KategoriModel::find($id);

        $breadcrumb = (object) [
            'title' => 'Detail kategori',
            'list' => ['Home', 'kategori', 'Detail']
        ];

        $page = (object) [
            'title' => 'Detail kategori'
        ];

        $activeMenu = 'kategori'; //set menu yang sedang aktif

        return view('kategori.show', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kategori' => $kategori, 'activeMenu' => $activeMenu]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori = KategoriModel::find($id);
        $kat = KategoriModel::all();

        $breadcrumb = (object) [
            'title' => 'Edit kategori',
            'list' => ['Home', 'kategori', 'Edit']
        ];

        $page = (object) [
            'title' => 'Edit kategori'
        ];

        $activeMenu = 'kategori'; //set menu yang sedang aktif

        return view('kategori.edit', ['breadcrumb' => $breadcrumb, 'page' => $page, 'kategori' => $kategori, 'kat' => $kat, 'activeMenu' => $activeMenu]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'kategori_kode' => 'nullable',
            'kategori_nama' => 'nullable',
        ]);


        KategoriModel::find($id)->update([
            'kategori_kode' => $request->kategori_kode,
            'kategori_nama' => $request->kategori_nama,
        ]);

        return redirect('/kategori')->with('success', 'Data kategori berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = KategoriModel::find($id);
        if (!$check) {
            return redirect('/kategori')->with('error', 'Data kategori tidak ditemukan');
        }

        try {
            KategoriModel::destroy($id);
            return redirect('/kategori')->with('success', 'Data kategori berhasil dihapus');
        }catch (\Illuminate\Database\QueryException $e){
            return redirect('/kategori')->with('error', 'Data kategori gagal dihapus karena masih terdapat tabel lain yang terkait dengan data ini');
        }
    }

    // Ambil data user dalam bentuk json untuk datatables
    public function list(Request $request)
    {
        $ktg = KategoriModel::select('kategori_id', 'kategori_kode', 'kategori_nama');
                    // ->with('level');

        // if ($request->kategori_id) {
        //     $ktg->where('kategori_id', $request->kategori_id);
        // }
        
        return DataTables::of($ktg)
            ->addIndexColumn() // menambahkan kolom index / no urut (default nama kolom: DT_RowIndex)
            ->addColumn('aksi', function ($kategori) { // menambahkan kolom aksi
                $btn = '<a href="'.url('/kategori/' . $kategori->kategori_id).'" class="btn btn-info btn-sm">Detail</a> ';
                $btn .= '<a href="'.url('/kategori/' . $kategori->kategori_id . '/edit').'"class="btn btn-warning btn-sm">Edit</a> ';
                $btn .= '<form class="d-inline-block" method="POST" action="'. url('/kategori/'.$kategori->kategori_id).'">'
                    . csrf_field() . method_field('DELETE') .
                    '<button type="submit" class="btn btn-danger btn-sm"
                    onclick="return confirm(\'Apakah Anda yakit menghapus data
                    ini?\');">Hapus</button></form>';
                return $btn;
            })
            ->rawColumns(['aksi']) // memberitahu bahwa kolom aksi adalah html
            ->make(true);
    }
}
