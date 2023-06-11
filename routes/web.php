<?php

use App\Http\Controllers\KabayanId\DashboardKabayanController;
use App\Http\Controllers\ProdukLayananController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [DashboardKabayanController::class, 'index'])->name("kabayan");

Route::get('/privacy', function () {
    return view('other-pages.privacy');
})->name("privacy");

Route::get('/term-cond', function () {
    return view('other-pages.term-cond');
})->name("term-cond");

Route::get('/profil', [ProfileController::class, 'index'])->name("profil");

// Group
Route::name('produk-layanan.')->group(function () {
    Route::prefix('produk-layanan')->group(function () {
        Route::get('/', [ProdukLayananController::class, 'index'])->name("index");
        Route::get('detail-elkpj', [ProdukLayananController::class, 'detailElkpj'])->name("detail-elkpj");
        Route::get('detail-monitoring', [ProdukLayananController::class, 'detailMonitoring'])->name("detail-monitoring");
        Route::get('detail-cantik', [ProdukLayananController::class, 'detailCantik'])->name("detail-cantik");
        Route::get('detail-sms', [ProdukLayananController::class, 'detailSms'])->name("detail-sms");
        Route::get('detail-tv', [ProdukLayananController::class, 'detailTv'])->name("detail-tv");
        Route::get('detail-contact', [ProdukLayananController::class, 'detailContact'])->name("detail-contact");
        Route::get('detail-pariwisata', [ProdukLayananController::class, 'detailPariwisata'])->name("detail-pariwisata");
    });
});

Route::get('/kontak-kami', function () {
    return view('kontak-kami.main-page');
})->name("kontak-kami");

Route::get('/xsample', function () {
    return view('xsample.main-page');
})->name("xsample");
