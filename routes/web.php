<?php
use App\http\Controllers\AdminController;
use App\http\controllers\DataSiswa;
use App\http\controllers\BookController;
use Illuminate\Support\Facades\Route;

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


Route::get('/ll', function(){
    return view('login');
});
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
Route::get('/datasiswa',[DataSiswa::class,'dataSiswa'])->name('admin.datasiswa');
Route::get('datasiswa/addsiswa',[DataSiswa::class,'add'])->name('admin.addsiswa');
Route::get('datasiswa/editsiswa/{id}',[DataSiswa::class,'edit'])->name('admin.editsiswa');
Route::post('/insertsiswa',[DataSiswa::class,'insert'])->name('admin.insertsiswa');
Route::post('/updatesiswa',[DataSiswa::class,'update'])->name('admin.updatesiswa');
Route::get('/datasiswa/delete/{id}',[DataSiswa::class,'delete'])->name('admin.deletesiswa');
//baru
Route::get('/test',[BookController::class,'databuku'])->name('admin.databuku');
Route::get('/test/tambah', [BookController::class,'addbuku'])->name('admin.addbuku');
Route::post('/tambahdata', [BookController::class,'buat'])->name('admin.buat');
Route::get('/test/mengubah/{id}', [BookController::class,'mengubah'])->name('admin.mengubah');
Route::post('/memperbarui', [BookController::class,'update'])->name('admin.update');
Route::get('/test/hapus{id}', [BookController::class,'hapus'])->name('admin.hapus');