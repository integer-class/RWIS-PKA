<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RtController;
use App\Http\Controllers\RwController;
use App\Http\Controllers\WargaController;

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
    return view('landingpage.index');
});


Route::get('login', [AuthController::class, 'index'])->name('login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('proses_login', [AuthController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('proses_register', [AuthController::class, 'proses_register'])->name('proses_register');

Route::group(['middleware' => ['auth']], function () {

    Route::group(['middleware' => ['cek_login:1']], function () {
        Route::resource('rw', RwController::class);
        Route::get('/data_warga', [RwController::class, 'DataWarga'])->name('data_warga');
        Route::post('/prosesTambahWarga', [RwController::class, 'TambahDataWarga'])->name('prosesTambahWarga');
        Route::post('/prosesEditWarga', [RwController::class, 'EditDataWarga'])->name('prosesEditWarga');
        Route::get('/data_keluarga', [RwController::class, 'Datakeluarga'])->name('data_keluarga');
        Route::post('/prosesTambahKk', [RwController::class, 'TambahDataKK'])->name('prosesTambahKK');



    });

    Route::group(['middleware' => ['cek_login:2']], function () {
        Route::resource('rt', RtController::class);
    });

    Route::group(['middleware' => ['cek_login:3']], function () {
        Route::resource('warga', WargaController::class);
    });
});

