<?php

use App\Http\Controllers\AdminController;
use \App\Http\Controllers\LoginController;
<<<<<<< HEAD
use App\Http\Controllers\UndanganController;
=======
// <<<<<<< HEAD
use App\Http\Controllers\PesanController;

use App\Http\Controllers\PaketController;
use App\Http\Controllers\UndanganController;
// >>>>>>> 30e98294f9dfb8a236f1139f1817ee4d94c67c09
>>>>>>> 5ef6fd0cf43c95f8b1443cb7cb1a04193ed030f3
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
<<<<<<< HEAD
Route::get('/login',[LoginController::class,'FormLogin'])->name('login.form');

Route::get('/Undangan',[UndanganController::class,'index'])->name('ProjectPkk.Undangan');
=======

Route::get('/login', [LoginController::class, 'FormLogin'])->name('login.form');


Route::prefix('/pemesanan')->group(function () {
    Route::get('/', [PesanController::class,'index'])->name('pesan,index');
    Route::post('/simpan', [PesanController::class,'simpan'])->name('pesan.simpan');
});

Route::prefix('/admin')->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::prefix('paket')->group(function () {
    Route::get('/', [PaketController::class, 'index'])->name('admin.paket.index');
    Route::get('/tambah', [PaketController::class, 'tambah'])->name('admin.paket.tambah');
    });

Route::get('/undangan', [UndanganController::class, 'index'])->name('ProjectPkk.index');
>>>>>>> 5ef6fd0cf43c95f8b1443cb7cb1a04193ed030f3
