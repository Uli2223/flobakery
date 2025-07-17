<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('produk', ProdukController::class);
Route::resource('karyawan', KaryawanController::class);
Route::resource('pelanggan', PelangganController::class);
Route::resource('pembelian', PembelianController::class);
Route::resource('transaksi', TransaksiController::class);

