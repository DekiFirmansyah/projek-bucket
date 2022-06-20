<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PembeliController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Http\Request;
=======
use App\Http\Controllers\PembeliController;
use Illuminate\Http\Request; 
>>>>>>> 0148ec447655715e8f351d47fa21e97c2a674543

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

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
Route::get('admin-home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin')->middleware('is_admin');

route::resource('barang', BarangController::class);
route::resource('user', PembeliController::class);
route::resource('transaksi', TransaksiController::class);
=======
<<<<<<< HEAD
Route::get('admin', function() { return view('adminLayout'); })->middleware('checkRole:admin');
Route::get('pembeli', function() { return view('userLayout'); })->middleware('checkRole:pembeli,admin');

Route::get('/Detail_Transaksi/cetak_pdf',[Detail_TransaksiController::class,'cetak_pdf'])->name('cetak_pdf');
=======
Route::get('admin-home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin')->middleware('is_admin');
>>>>>>> 2e91102d294c48765330f96ea634955e20f94912
>>>>>>> 0148ec447655715e8f351d47fa21e97c2a674543
