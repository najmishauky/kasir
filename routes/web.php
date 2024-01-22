<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\homController;
use App\Http\Controllers\penjualanController;
use App\Http\Controllers\data_penjualanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\update_produkController;
use App\Http\Controllers\tambah_produkController;
use App\Http\Controllers\pelangganController;
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

Route::get('/login',[LoginController::class, 'login']);

Route::get('/register',[registerController::class, 'register']);

Route::get('/hom',[homController::class, 'hom']);

Route::get('/penjualan',[penjualanController::class, 'penjualan']);
Route::get('/data_penjualan',[data_penjualanController::class, 'data_penjualan']);

Route::get('/Barang',[BarangController::class, 'Barang']);

Route::get('/update_produk',[update_produkController::class, 'update_produk']);

Route::get('/tambah_produk',[tambah_produkController::class, 'tambah_produk']);

Route::get('/pelanggan',[pelangganController::class, 'pelanggan']);

Route::get('/Barang/{id}',[BarangController::class, 'hapus']);
Route::get('/pelanggan/{id}',[pelangganController::class, 'hapus']);

Route::post('penjualan', [penjualanController::class, 'store']);

