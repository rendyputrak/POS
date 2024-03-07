<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Halaman Home
Route::get('/home', function () {
    return view('home');
});

// Halaman Product
Route::prefix('category')->group(function() {
    Route::get('/foodbeverage', [ProductController::class,'foodbeverage']);
    Route::get('/beautyhealth', [ProductController::class,'beautyhealth']);
    Route::get('/homecare', [ProductController::class,'homecare']);
    Route::get('/babykid', [ProductController::class,'babykid']);
});

Route::get('/category', function () {
    return 'Isi Kategori di URL (foodbeverage, beautyhealth, homecare, baby)';
});

// Halaman User
// Route::get('user/{id?}/name/{name?}', function($id = null, $name = null) {
//     return 'ID = ' . $id . ' Nama = ' . $name;
// });

// Halaman Penjualan
Route::get('/penjualan', [PenjualanController::class,'penjualan']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/level', [LevelController::class,'index']);
Route::get('/kategori', [KategoriController::class,'index']);
Route::get('/user', [UserController::class, 'index']);
