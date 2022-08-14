<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataProfileController;
use App\Http\Controllers\DataKaryawanController;
use App\Http\Controllers\PresensiController;

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
    return view('Login.index');
});

Route::get('/login', [LoginController::class,'loginpage'])->name('login');
Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::post('/postregister', [LoginController::class,'postregister'])->name('postregister');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/register', [LoginController::class,'register'])->name('register');

//ROUTE UNTUK DATA PROFILE
Route::get('/dataprofile', [DataProfileController::class,'index'])->name('dataprofile');
Route::get('/editdataprofile/{id}', [DataProfileController::class,'edit'])->name('editdataprofile');
Route::post('/updatedataprofile/{id}', [DataProfileController::class,'update'])->name('updatedataprofile');

//ROUTE UNTUK DATA KARYAWAN
Route::get('/datakaryawan', [DataKaryawanController::class,'index'])->name('datakaryawan');
Route::get('/createdatakaryawan', [DataKaryawanController::class,'create'])->name('createdatakaryawan');
Route::post('/postdatakaryawan', [DataKaryawanController::class,'store'])->name('postdatakaryawan');

//ROUTE UNTUK PRESENSI KEHADIRAN
Route::group(['middleware' => ['auth','ceklevel:karyawan']], function () {
    Route::post('/simpanpresensimasuk', [PresensiController::class,'store'])->name('simpanpresensimasuk');
    Route::get('/presensimasuk', [PresensiController::class,'index'])->name('presensimasuk');
    Route::get('/presensikeluar', [PresensiController::class,'keluar'])->name('presensikeluar');
    Route::post('/ubahpresensi', [PresensiController::class,'presensipulang'])->name('ubahpresensi');
});

Route::group(['middleware' => ['auth','ceklevel:admin,karyawan']], function () {
    Route::get('/home', [HomeController::class,'index'])->name('home');
});