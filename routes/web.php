<?php
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\homController;
use App\Http\Controllers\penjualanController;
use App\Http\Controllers\data_penjualanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\update_produkController;
use App\Http\Controllers\tambah_produkController;
use App\Http\Controllers\tambah_pelangganController;
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

Route::get('/login',[LoginController::class, 'log'])->name('log');
Route::post('login', [loginController::class, 'logPost'])->name('log');
Route::get('register', [loginController::class, 'register'])->name('register');
Route::post('register', [loginController::class, 'registerPost'])->name('register');

Route::get('logout', [loginController::class, 'logout']);
Route::delete('/logout', [loginController::class, 'logout'])->name('logout');


Route::group(['middleware' => 'auth', 'ceklevel:admin,petugas'], function () {
    Route::get('/hom',[homController::class, 'hom']);


    //Barang
    Route::get('/Barang',[BarangController::class, 'Barang']);
    Route::get('/updatestok/{id}', [BarangController::class, 'update']);
    Route::put('/updatestok/{id}', [BarangController::class, 'perbarui']);
    Route::put('/update/{id}', [BarangController::class, 'edit'])->name('edit');
    Route::get('/tambah_produk',[tambah_produkController::class, 'dataproduk']);
    Route::post('/tambah_produk',[tambah_produkController::class, 'tambahproduk']);
    Route::get('/Barang/{id}',[BarangController::class, 'hapus']);

    //pelanggan
    Route::get('/pelanggan',[pelangganController::class, 'pelanggan']);
    Route::post('/updatepelanggan/{id}', [pelangganController::class, 'updatepelanggan'])->name('pelanggan.edit');
    Route::get('/updatepelanggan/{id}', [pelangganController::class, 'update']);
    Route::put('/update/{id}', [pelangganController::class, 'edit'])->name('edit');
    Route::get('/tambah_pelanggan',[pelangganController::class, 'datapelanggan']);
    Route::post('/tambah_pelanggan',[pelangganController::class, 'tambahpelanggan']);
    Route::get('/pelanggan/{id}',[pelangganController::class, 'hapus']);

    //penjualan
    Route::get('/penjualan',[penjualanController::class, 'penjualan']);
    Route::get('/detail/{id}', [data_penjualanController::class, 'detailpenjualan']);
    Route::get('/data_penjualan',[data_penjualanController::class, 'data_penjualan']);
    Route::get('/penjualan/{id}',[penjualanController::class, 'hapus']);
    Route::post('penjualan', [penjualanController::class, 'store']);
    Route::post('checkout', [penjualanController::class, 'checkout']);
});


