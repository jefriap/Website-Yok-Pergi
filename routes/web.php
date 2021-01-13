<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\BlogController;

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

Route::get('/', [BlogController::class, 'index'])->name('blog.index');
Route::get('detail/{slug}/wisata/{id}', [BlogController::class, 'wisata'])->name('blog.detail');

Route::get('/admin', [WisataController::class, 'index'])->name('dashboard');

Route::get('wisata/{wisatum}/galeri', [WisataController::class, 'galeri'])->name('wisata.galeri');

Route::resource('wisata', WisataController::class);
Route::resource('galeri', GaleriController::class);
