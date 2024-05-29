<?php

use App\Http\Controllers\AdminController;
use \App\Http\Controllers\LoginController;
use App\Http\Controllers\PaketController;
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
Route::get('/login',[LoginController::class,'FormLogin'])->name('login.form');

Route::prefix('/admin')->group(function(){
    Route::get('/',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::prefix('paket')->group(function(){
        Route::get('/',[PaketController::class,'index'])->name('admin.paket.index');
        Route::get('/tambah',[PaketController::class,'tambah'])->name('admin.paket.tambah');
    });
});