<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataProfileController;
use App\Http\Controllers\DataKaryawanController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\IuranController;
use App\Http\Controllers\PedagangController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\WilayahController;
use App\Http\Controllers\AlunalunController;
use App\Http\Controllers\KeratonController;
use App\Http\Controllers\KategoriIuranController;
use App\Http\Controllers\PegawaiController;

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

//ROUTE UNTUK UMUM
Route::get('/beranda', [BerandaController::class,'index'])->name('beranda');


Route::get('/login', [LoginController::class,'loginpage'])->name('login');
Route::post('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::post('/postregister', [LoginController::class,'postregister'])->name('postregister');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::get('/register', [LoginController::class,'register'])->name('register');

//ROUTE UNTUK DATA PROFILE
Route::get('/dataprofile', [DataProfileController::class,'index'])->name('dataprofile');
Route::get('/editdataprofile/{id}', [DataProfileController::class,'edit'])->name('editdataprofile');
Route::post('/updatedataprofile/{id}', [DataProfileController::class,'update'])->name('updatedataprofile');
Route::post('/deletedataprofile/{id}', [DataProfileController::class,'destroy'])->name('deletedataprofile');

//ROUTE UNTUK DATA KARYAWAN
Route::get('/datakaryawan', [DataKaryawanController::class,'index'])->name('datakaryawan');
Route::get('/createdatakaryawan', [DataKaryawanController::class,'create'])->name('createdatakaryawan');
Route::post('/postdatakaryawan', [DataKaryawanController::class,'store'])->name('postdatakaryawan');
Route::get('/editdatakaryawan/{id}', [DataKaryawanController::class,'edit'])->name('editdatakaryawan');
Route::post('/updatedatakaryawan/{id}', [DataKaryawanController::class,'update'])->name('updatedatakaryawan');
Route::post('/deletedatakaryawan/{id}', [DataKaryawanController::class,'destroy'])->name('deletedatakaryawan');

//ROUTE UNTUK PENGUMUMAN
Route::get('/pengumuman', [PengumumanController::class,'index'])->name('pengumuman');
Route::get('/editpengumuman/{id}', [PengumumanController::class,'edit'])->name('editpengumuman');
Route::post('/updatepengumuman/{id}', [PengumumanController::class,'update'])->name('updatepengumuman');


//ROUTE UNTUK PRESENSI KEHADIRAN
Route::group(['middleware' => ['auth','ceklevel:admin,bendahara,sekretaris']], function () {
    Route::post('/simpanpresensimasuk', [PresensiController::class,'store'])->name('simpanpresensimasuk');
    Route::get('/presensimasuk', [PresensiController::class,'index'])->name('presensimasuk');
    Route::get('/presensikeluar', [PresensiController::class,'keluar'])->name('presensikeluar');
    Route::post('/ubahpresensi', [PresensiController::class,'presensipulang'])->name('ubahpresensi');
    Route::get('filter-data',[PresensiController::class,'halamanrekap'])->name('filter-data');
    Route::get('filter-data/{tglawal}/{tglakhir}',[PresensiController::class,'tampildatakeseluruhan'])->name('filter-data-keseluruhan');
});

//ROUTE UNTUK OLAH DATA PEDAGANG
Route::get('/pedagang', [PedagangController::class,'index'])->name('pedagang');
Route::get('/createpedagang', [PedagangController::class,'create'])->name('createpedagang');
Route::post('/postpedagang', [PedagangController::class,'store'])->name('postpedagang');
Route::get('/editpedagang/{id}', [PedagangController::class,'edit'])->name('editpedagang');
Route::post('/updatepedagang/{id}', [PedagangController::class,'update'])->name('updatepedagang');
Route::post('/deletepedagang/{id}', [PedagangController::class,'destroy'])->name('deletepedagang');
Route::get('/showcategories/{id}', [PedagangController::class,'show'])->name('showcategories');
Route::get('/categories', [PedagangController::class,'categories'])->name('categories');

//ROUTE UNTUK DATA ALUNALUN
Route::get('/pedagangalunalun', [AlunalunController::class,'index'])->name('pedagangalunalun');
Route::get('/createpedagangalunalun', [AlunalunController::class,'create'])->name('createpedagangalunalun');
Route::post('/postpedagangalunalun', [AlunalunController::class,'store'])->name('postpedagangalunalun');

//ROUTE UNTUK DATA KERATON
Route::get('/pedagangkeraton', [KeratonController::class,'index'])->name('pedagangkeraton');
Route::get('/createpedagangkeraton', [KeratonController::class,'create'])->name('createpedagangkeraton');
Route::get('/editpedagangkeraton/{id}', [KeratonController::class,'edit'])->name('editpedagangkeraton');
Route::post('/postpedagangkeraton', [KeratonController::class,'store'])->name('postpedagangkeraton');
Route::post('/updatepedagangkeraton/{id}', [KeratonController::class,'update'])->name('updatepedagangkeraton');
Route::post('/deletepedagangkeraton/{id}', [KeratonController::class,'destroy'])->name('deletepedagangkeraton');


//ROUTE UNTUK DATA IURAN
Route::get('/iuran', [IuranController::class,'index'])->name('iuran');
Route::get('/createiuran', [IuranController::class,'create'])->name('createiuran');
Route::get('/editiuran/{id}', [IuranController::class,'edit'])->name('editiuran');
Route::get('/showiuran/{id}', [IuranController::class,'show'])->name('showiuran');
Route::post('/postiuran', [IuranController::class,'store'])->name('postiuran');
Route::get('/deleteiuran/{id}', [IuranController::class,'destroy'])->name('deleteiuran');

//ROUTE UNTUK CETAK
Route::get('/cetakiuran', [IuranController::class,'cetak'])->name('cetakiuran');

//ROUTE UNTUK DATA WILAYAH
Route::get('/wilayah', [WilayahController::class,'index'])->name('wilayah');

//ROUTE UNTUK DATA KATEGORI IURAN
Route::get('/adminkategoriiuran', [KategoriIuranController::class,'adminkategoriiuran'])->name('adminkategoriiuran');
Route::get('/kategoriiuran', [KategoriIuranController::class,'index'])->name('kategoriiuran');
Route::get('/editkategoriiuran/{id}', [KategoriIuranController::class,'edit'])->name('editkategoriiuran');
Route::post('/updatekategoriiuran/{id}', [KategoriIuranController::class,'update'])->name('updatekategoriiuran');

//ROUTE UNTUK DATA PEGAWAI
Route::get('/pegawai', [PegawaiController::class,'index'])->name('pegawai');
Route::get('/createpegawai', [PegawaiController::class,'create'])->name('createpegawai');
Route::post('/postpegawai', [PegawaiController::class,'store'])->name('postpegawai');



Route::group(['middleware' => ['auth','ceklevel:admin,bendahara,sekretaris']], function () {
    Route::get('/home', [HomeController::class,'index'])->name('home');
});