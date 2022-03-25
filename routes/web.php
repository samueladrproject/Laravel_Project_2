<?php

use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\DataAturanController;
use App\Http\Controllers\backend\DataGejalaController;
use App\Http\Controllers\backend\DataPenyakitController;
use App\Http\Controllers\backend\DataRiwayatController;
use App\Http\Controllers\frontend\BantuanController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\InformasiPenyakitController;
use App\Http\Controllers\frontend\KonsultasiController;
use App\Http\Controllers\frontend\TentangController;
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


Route::middleware(['guest'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::get('konsultasi', [KonsultasiController::class, 'index']);
    Route::get('konsultasi/{id_pasien}', [KonsultasiController::class, 'showhasil']);
    Route::post('konsultasi', [KonsultasiController::class, 'hasilkonsultasi']);
    Route::get('informasi-penyakit', [InformasiPenyakitController::class, 'index']);
    Route::get('tentang', [TentangController::class, 'index']);
    Route::get('bantuan', [BantuanController::class, 'index']);
    Route::get('login', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'authenticate']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index']);
    Route::resource('data-penyakit', DataPenyakitController::class)->except('show');
    Route::resource('data-gejala', DataGejalaController::class)->except('show');
    Route::resource('data-aturan', DataAturanController::class)->except('show');
    Route::resource('data-riwayat', DataRiwayatController::class)->except([
        'create', 'store', 'edit', 'update'
    ]);
    Route::post('logout', [LoginController::class, 'logout']);
});
