<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\PenjualanController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

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
Route::get('user/{id?}/name/{name?}', function($id = null, $name = null) {
    return 'ID = ' . $id . ' Nama = ' . $name;
});

// Halaman Penjualan
Route::get('/penjualan', [PenjualanController::class,'penjualan']);

