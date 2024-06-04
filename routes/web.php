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
        Route::get('/dashboard',[RwController::class,'index'])->name('dashboard');
        Route::get('/data_warga', [RwController::class, 'DataWarga'])->name('data_warga');
        Route::post('/prosesTambahWarga', [RwController::class, 'TambahDataWarga'])->name('prosesTambahWarga');
        Route::post('/prosesEditWarga', [RwController::class, 'EditDataWarga'])->name('prosesEditWarga');
        Route::get('/data_keluarga', [RwController::class, 'Datakeluarga'])->name('data_keluarga');
        Route::post('/prosesTambahKk', [RwController::class, 'TambahDataKK'])->name('prosesTambahKK');
        Route::post('/prosesEditKk', [RwController::class, 'EditDataKK'])->name('prosesEditKK');
        Route::get('/data_keuangan',[RwController::class,'DataKeuangan'])->name('data_keuangan');
        Route::post('/prosesTambahKeuangan',[RwController::class,'TambahDataKeuangan'])->name('prosesTambahKeuangan');
        Route::post('/prosesEditKeuangan', [RwController::class, 'EditDataKeuangan'])->name('prosesEditKeuangan');
        Route::get('/data_kegiatan',[RwController::class,'DataKegiatan'])->name('data_kegiatan');
        Route::post('/prosesTambahKegiatan', [RwController::class, 'TambahKegiatan'])->name('prosesTambahKegiatan');
        Route::post('/prosesEditKegiatan', [RwController::class, 'EditDatakegiatan'])->name('prosesEditkegiatan');
        Route::post('/prosesHapuskegiatan', [RwController::class, 'HapusKegiatan'])->name('prosesHapuskegiatan');
        Route::get('/data_umkm',[RwController::class,'DataUmkm'])->name('data_umkm');
        Route::post('/prosesTambahUmkm', [RwController::class, 'TambahUmkm'])->name('prosesTambahumkm');
        Route::post('/prosesEditUmkm', [RwController::class, 'EditDataUmkm'])->name('prosesEditumkm');
        Route::post('/prosesHapusUmkm', [RwController::class, 'HapusUmkm'])->name('prosesHapusumkm');
        Route::get('/templatesurat',[RwController::class,'templatesurat'])->name('templatesurat');
        Route::post('/prosesTambahSurat', [RwController::class, 'TambahSurat'])->name('prosesTambahsurat');
        Route::post('/prosesHapusSurat', [RwController::class, 'HapusSurat'])->name('prosesHapussurat');
        Route::get('/downloadsurat/{id}', [RwController::class, 'DownloadSurat'])->name('downloadsurat');

    });

    Route::group(['middleware' => ['cek_login:2']], function () {
        Route::resource('rt', RtController::class);
        Route::get('/rt_dashboard',[RtController::class,'index'])->name('rt_dashboard');
        Route::get('/rt_data_warga', [RtController::class, 'DataWarga'])->name('rt_data_warga');
        Route::post('/rt_prosesTambahWarga', [RtController::class, 'TambahDataWarga'])->name('rt_prosesTambahWarga');
        Route::post('/rt_prosesEditWarga', [RtController::class, 'EditDataWarga'])->name('rt_prosesEditWarga');
        Route::get('/rt_data_keluarga', [RtController::class, 'Datakeluarga'])->name('rt_data_keluarga');
        Route::post('/rt_prosesTambahKk', [RtController::class, 'TambahDataKK'])->name('rt_prosesTambahKK');
        Route::post('/rt_prosesEditKk', [RtController::class, 'EditDataKK'])->name('rt_prosesEditKK');
        Route::get('/rt_data_keuangan',[RtController::class,'DataKeuangan'])->name('rt_data_keuangan');
        Route::post('/rt_prosesTambahKeuangan',[RtController::class,'TambahDataKeuangan'])->name('rt_prosesTambahKeuangan');
        Route::post('/rt_prosesEditKeuangan', [RtController::class, 'EditDataKeuangan'])->name('rt_prosesEditKeuangan');
        Route::get('/rt_data_kegiatan',[RtController::class,'DataKegiatan'])->name('rt_data_kegiatan');
        Route::post('/rt_prosesTambahKegiatan', [RtController::class, 'TambahKegiatan'])->name('rt_prosesTambahKegiatan');
        Route::post('/rt_prosesEditKegiatan', [RtController::class, 'EditDatakegiatan'])->name('rt_prosesEditkegiatan');
        Route::post('/rt_prosesHapuskegiatan', [RtController::class, 'HapusKegiatan'])->name('rt_prosesHapuskegiatan');
        Route::get('/rt_data_umkm',[RtController::class,'DataUmkm'])->name('rt_data_umkm');
        Route::post('/rt_prosesTambahUmkm', [RtController::class, 'TambahUmkm'])->name('rt_prosesTambahumkm');
        Route::post('/rt_prosesEditUmkm', [RtController::class, 'EditDataUmkm'])->name('rt_prosesEditumkm');
        Route::post('/rt_prosesHapusUmkm', [RtController::class, 'HapusUmkm'])->name('rt_prosesHapusumkm');
        Route::get('/rt_templatesurat',[RwController::class,'templatesurat'])->name('rt_templatesurat');
        Route::post('/rt_prosesTambahSurat', [RwController::class, 'TambahSurat'])->name('rt_prosesTambahsurat');
        Route::post('/rt_prosesHapusSurat', [RwController::class, 'HapusSurat'])->name('rt_prosesHapussurat');
        Route::get('/rt_downloadsurat/{id}', [RwController::class, 'DownloadSurat'])->name('rt_downloadsurat');

    });

    Route::group(['middleware' => ['cek_login:3']], function () {
        // Route::resource('warga', WargaController::class);
        // // Route::get('/data_warga', [WargaController::class, 'datawarga'])->name('data_warga');//datawarga untuk view warga
        // Route::get('/warga/datawarga', [WargaController::class, 'datawarga']);//datawarga untuk view warga
        // Route::get('/data_keluarga', [WargaController::class, 'data_keluarga'])->name('data_keluarga');//data keluarga untuk view warga 
        // // Route::get('/warga/datakeluarga', [WargaController::class, 'datakeluarga']);
        // //Route::get('/warga/datakeuangan', [WargaController::class, 'datakeuangan']);//datakeuanganuntuk view warga
        // Route::get('/data_keuangan',[WargaController::class,'data_keuangan'])->name('data_keuangan');
       

    });
});

