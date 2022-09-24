<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Detail_TransaksiController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/about', function () {
    return view('user.about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('admin-home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin')->middleware('is_admin');

route::resource('barang', BarangController::class);
route::resource('user', PembeliController::class);
route::resource('transaksi', TransaksiController::class);

Route::get('/laporan_pdf',[TransaksiController::class, 'laporan_pdf'])->name('laporan_pdf');

Route::get('/pesanan',[TransaksiController::class, 'pesanan'])->name('pesanan');

Route::get('/profil',[PembeliController::class, 'profil'])->name('profil');

Route::get('/daftar_barang',[BarangController::class, 'daftar_barang'])->name('daftar_barang');
