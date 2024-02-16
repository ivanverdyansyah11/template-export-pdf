<?php

use App\Http\Controllers\HomeController;
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

Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('index');
    Route::get('/exportSkLahir', 'exportSkLahir')->name('exportSkLahir');
    Route::get('/exportSkKawin', 'exportSkKawin')->name('exportSkKawin');
    Route::get('/exportSkBelumKawin', 'exportSkBelumKawin')->name('exportSkBelumKawin');
    Route::get('/exportSkDuda', 'exportSkDuda')->name('exportSkDuda');
    Route::get('/exportSkJanda', 'exportSkJanda')->name('exportSkJanda');
    Route::get('/exportSkCerai', 'exportSkCerai')->name('exportSkCerai');
    Route::get('/exportSKTU', 'exportSKTU')->name('exportSKTU');
    Route::get('/exportSKTMBayarCerai', 'exportSKTMBayarCerai')->name('exportSKTMBayarCerai');
    Route::get('/exportSKTMBedahRumah', 'exportSKTMBedahRumah')->name('exportSKTMBedahRumah');
    Route::get('/exportSKTMDisabilitas', 'exportSKTMDisabilitas')->name('exportSKTMDisabilitas');
    Route::get('/exportSKTMJKNKIS', 'exportSKTMJKNKIS')->name('exportSKTMJKNKIS');
    Route::get('/exportSKTMLansia', 'exportSKTMLansia')->name('exportSKTMLansia');
    Route::get('/exportSKTMSekolah', 'exportSKTMSekolah')->name('exportSKTMSekolah');
    Route::get('/exportSKBedaNama', 'exportSKBedaNama')->name('exportSKBedaNama');
    Route::get('/exportSuratKeterangan', 'exportSuratKeterangan')->name('exportSuratKeterangan');
    Route::get('/exportSKPindahLingkungan', 'exportSKPindahLingkungan')->name('exportSKPindahLingkungan');
    Route::get('/exportSKPindahDesa', 'exportSKPindahDesa')->name('exportSKPindahDesa');
    Route::get('/exportSKPindahKecamatan', 'exportSKPindahKecamatan')->name('exportSKPindahKecamatan');
    Route::get('/exportSKPindahProvinsi', 'exportSKPindahProvinsi')->name('exportSKPindahProvinsi');
    Route::get('/exportSKBepergian', 'exportSKBepergian')->name('exportSKBepergian');
    Route::get('/exportSKTempatTinggal', 'exportSKTempatTinggal')->name('exportSKTempatTinggal');
    Route::get('/exportSKHargaTanah', 'exportSKHargaTanah')->name('exportSKHargaTanah');
    Route::get('/exportSKPenghasilanOrtu', 'exportSKPenghasilanOrtu')->name('exportSKPenghasilanOrtu');
    Route::get('/exportSilsilah', 'exportSilsilah')->name('exportSilsilah');
    Route::get('/exportSKMeninggal', 'exportSKMeninggal')->name('exportSKMeninggal');
    Route::get('/exportSuratIzinOrangTua', 'exportSuratIzinOrangTua')->name('exportSuratIzinOrangTua');
    Route::get('/exportHibahSamsat', 'exportHibahSamsat')->name('exportHibahSamsat');
    Route::get('/exportSuratPembelianSolar', 'exportSuratPembelianSolar')->name('exportSuratPembelianSolar');
    Route::get('/exportSuratKeteranganDomisili', 'exportSuratKeteranganDomisili')->name('exportSuratKeteranganDomisili');
    Route::get('/exportPendaftaran', 'exportPendaftaran')->name('exportPendaftaran');
    Route::get('/exportKeteranganAhliWaris', 'exportKeteranganAhliWaris')->name('exportKeteranganAhliWaris');
    Route::get('/exportSuratKuasa', 'exportSuratKuasa')->name('exportSuratKuasa');
});
