<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\POSController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Halaman Home
// Route::get('/home', function () {
//     return view('home');
// });

// Halaman Product
// Route::prefix('category')->group(function() {
//     Route::get('/foodbeverage', [ProductController::class,'foodbeverage']);
//     Route::get('/beautyhealth', [ProductController::class,'beautyhealth']);
//     Route::get('/homecare', [ProductController::class,'homecare']);
//     Route::get('/babykid', [ProductController::class,'babykid']);
// });

// Route::get('/category', function () {
//     return 'Isi Kategori di URL (foodbeverage, beautyhealth, homecare, baby)';
// });

// Halaman Penjualan
// Route::get('/penjualan', [PenjualanController::class,'penjualan']);

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/level', [LevelController::class,'index']);
// Route::get('/kategori', [KategoriController::class,'index']);
// Route::get('/user', [UserController::class, 'index']);
Auth::routes();

//Routing untuk tambah user
// Route::get('/user/tambah', [UserController::class, 'tambah']);
// Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
//Routing untuk ubah user
// Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
// Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
//Routing untuk hapus kategori
// Route::get('/user/hapus/{id}', [UserController::class,'hapus']); 

// Route::get('/kategori', [KategoriController::class, 'index']);
//Routing untuk tambah kategori
// Route::get('/kategori/create', [KategoriController::class, 'create']);
// Route::post('/kategori', [KategoriController::class, 'store']);
//Routing untuk edit kategori
// Route::get('/kategori/edit/{id}', [KategoriController::class, 'edit']);
// Route::post('/kategori/storeedit', [KategoriController::class, 'storeEdit']);
//Routing untuk hapus kategori
// Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete']);

//Routing form level
// Route::get('/level', [LevelController::class, 'index']);
// Route::get('/level/create', [LevelController::class, 'create']);

Route::resource('m_user', POSController::class);

//PWL Starter Code
Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function() {
    Route::get('/', [UserController::class, 'index']);              //menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']);          //menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']);       //menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']);             //menyimpan data user baru
    Route::get('/{id}', [UserController::class, 'show']);           //menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']);      //menampilkan halaman form edit user
    Route::put('/{id}', [UserController::class, 'update']);         //menyimpan perubahan data user
    Route::delete('/{id}', [UserController::class, 'destroy']);     //menghapus data user
});

Route::group(['prefix' => 'level'], function() {
    Route::get('/', [LevelController::class, 'index']);              //menampilkan halaman awal Level
    Route::post('/list', [LevelController::class, 'list']);          //menampilkan data Level dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']);       //menampilkan halaman form tambah Level
    Route::post('/', [LevelController::class, 'store']);             //menyimpan data Level baru
    Route::get('/{id}', [LevelController::class, 'show']);           //menampilkan detail Level
    Route::get('/{id}/edit', [LevelController::class, 'edit']);      //menampilkan halaman form edit Level
    Route::put('/{id}', [LevelController::class, 'update']);         //menyimpan perubahan data Level
    Route::delete('/{id}', [LevelController::class, 'destroy']);     //menghapus data Level
});

Route::group(['prefix' => 'kategori'], function() {
    Route::get('/', [KategoriController::class, 'index']);              //menampilkan halaman awal Kategori
    Route::post('/list', [KategoriController::class, 'list']);          //menampilkan data Kategori dalam bentuk json untuk datatables
    Route::get('/create', [KategoriController::class, 'create']);       //menampilkan halaman form tambah Kategori
    Route::post('/', [KategoriController::class, 'store']);             //menyimpan data Kategori baru
    Route::get('/{id}', [KategoriController::class, 'show']);           //menampilkan detail Kategori
    Route::get('/{id}/edit', [KategoriController::class, 'edit']);      //menampilkan halaman form edit Kategori
    Route::put('/{id}', [KategoriController::class, 'update']);         //menyimpan perubahan data Kategori
    Route::delete('/{id}', [KategoriController::class, 'destroy']);     //menghapus data Kategori
});
Route::group(['prefix' => 'barang'], function() {
    Route::get('/', [BarangController::class, 'index']);              //menampilkan halaman awal Barang
    Route::post('/list', [BarangController::class, 'list']);          //menampilkan data Barang dalam bentuk json untuk datatables
    Route::get('/create', [BarangController::class, 'create']);       //menampilkan halaman form tambah Barang
    Route::post('/', [BarangController::class, 'store']);             //menyimpan data Barang baru
    Route::get('/{id}', [BarangController::class, 'show']);           //menampilkan detail Barang
    Route::get('/{id}/edit', [BarangController::class, 'edit']);      //menampilkan halaman form edit Barang
    Route::put('/{id}', [BarangController::class, 'update']);         //menyimpan perubahan data Barang
    Route::delete('/{id}', [BarangController::class, 'destroy']);     //menghapus data Barang
});
Route::group(['prefix' => 'stok'], function() {
    Route::get('/', [StokController::class, 'index']);              //menampilkan halaman awal Stok
    Route::post('/list', [StokController::class, 'list']);          //menampilkan data Stok dalam bentuk json untuk datatables
    Route::get('/create', [StokController::class, 'create']);       //menampilkan halaman form tambah Stok
    Route::post('/', [StokController::class, 'store']);             //menyimpan data Stok baru
    Route::get('/{id}', [StokController::class, 'show']);           //menampilkan detail Stok
    Route::get('/{id}/edit', [StokController::class, 'edit']);      //menampilkan halaman form edit Stok
    Route::put('/{id}', [StokController::class, 'update']);         //menyimpan perubahan data Stok
    Route::delete('/{id}', [StokController::class, 'destroy']);     //menghapus data Stok
});
Route::group(['prefix' => 'penjualan'], function() {
    Route::get('/', [PenjualanController::class, 'index']);              //menampilkan halaman awal Penjualan
    Route::post('/list', [PenjualanController::class, 'list']);          //menampilkan data Penjualan dalam bentuk json untuk datatables
    Route::get('/create', [PenjualanController::class, 'create']);       //menampilkan halaman form tambah Penjualan
    Route::post('/', [PenjualanController::class, 'store']);             //menyimpan data Penjualan baru
    Route::get('/{id}', [PenjualanController::class, 'show']);           //menampilkan detail Penjualan
    Route::get('/{id}/edit', [PenjualanController::class, 'edit']);      //menampilkan halaman form edit Penjualan
    Route::put('/{id}', [PenjualanController::class, 'update']);         //menyimpan perubahan data Penjualan
    Route::delete('/{id}', [PenjualanController::class, 'destroy']);     //menghapus data Penjualan
});