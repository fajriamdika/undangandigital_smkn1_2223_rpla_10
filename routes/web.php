<?php
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

Route::prefix('/paket')->group(function(){
    Route::get('/',[PaketController::class,'index'])->name('paket.index');
    Route::get('/tambah',[PaketController::class,'tambah'])->name('paket.tambah');
});