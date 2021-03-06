<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ArticleController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('mahasiswa', MahasiswaController::class);
Route::get('search', [MahasiswaController::class, 'search'])->name('mahasiswa.search');
Route::get('mahasiswa/nilai/{Nim}', [MahasiswaController::class, 'nilai'])->name('mahasiswa.nilai');
Route::get('mahasiswa/cetak_pdf/{Nim}',[MahasiswaController::class,'cetak_pdf'])->name('mahasiswa.cetak_pdf');

Route::resource('article', ArticleController::class);
Route::get('articles/cetak_pdf', [ArticleController::class, 'cetak_pdf']);