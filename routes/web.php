<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembeliController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

<<<<<<< HEAD
Route::get('admin', function() { return view('adminLayout'); })->middleware('checkRole:admin');
Route::get('pembeli', function() { return view('userLayout'); })->middleware('checkRole:pembeli,admin');

Route::get('/Detail_Transaksi/cetak_pdf',[Detail_TransaksiController::class,'cetak_pdf'])->name('cetak_pdf');
=======
Route::get('admin-home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin')->middleware('is_admin');
>>>>>>> 2e91102d294c48765330f96ea634955e20f94912
