<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\GaleriController;

use RealRashid\SweetAlert\Facades\Alert;

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

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('wisata/{wisatum}/galeri', [App\Http\Controllers\WisataController::class, 'galeri'])->name('wisata.galeri');

Route::resource('wisata', WisataController::class);
Route::resource('galeri', GaleriController::class);
