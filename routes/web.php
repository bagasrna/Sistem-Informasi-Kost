<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\PenghuniController;
use App\Http\Controllers\TagihanController;
use App\Http\Controllers\ArtisanController;
use Illuminate\Support\Facades\Route;

#Authentication
Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.attempt')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::group(['middleware' => 'auth'],function (){
    #Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    #Kamar
    Route::prefix('kamar')->name('kamar.')->group(function(){
        Route::get('/', [KamarController::class, 'index'])->name('index');
        Route::get('/create', [KamarController::class, 'create'])->name('create');
        Route::post('/create', [KamarController::class, 'store'])->name('store');
        Route::get('/update/{id}', [KamarController::class, 'edit'])->name('edit');
        Route::put('/update', [KamarController::class, 'store'])->name('update');
        Route::delete('/delete', [KamarController::class, 'delete'])->name('delete');
        Route::get('/{id}', [KamarController::class, 'show'])->name('show');
    });

    #Penghuni
    Route::prefix('penghuni')->name('penghuni.')->group(function(){
        Route::get('/', [PenghuniController::class, 'index'])->name('index');
        Route::get('/create', [PenghuniController::class, 'create'])->name('create');
        Route::post('/create', [PenghuniController::class, 'store'])->name('store');
        Route::get('/update/{id}', [PenghuniController::class, 'edit'])->name('edit');
        Route::put('/update', [PenghuniController::class, 'store'])->name('update');
        Route::delete('/delete', [PenghuniController::class, 'delete'])->name('delete');
        Route::get('/{id}', [PenghuniController::class, 'show'])->name('show');
    });

    #Tagihan
    Route::get('/tagihan', [TagihanController::class, 'index'])->name('tagihan.index');
    Route::get('/pelunasan/{id}', [TagihanController::class, 'pelunasan'])->name('tagihan.pelunasan');
    Route::get('/lunas', [TagihanController::class, 'lunas'])->name('lunas.index');
    Route::get('/struk/{id}', [TagihanController::class, 'struk'])->name('lunas.struk');
});

Route::get('/pembukuan', function () {
    return view('main.pembukuan.index');
});

Route::get('/pembukuan/show', function () {
    return view('main.pembukuan.show');
});

Route::get('/pembukuan/create', function () {
    return view('main.pembukuan.create');
});

# Artisan Call
Route::get('/optimize', [ArtisanController::class, 'optimize']);
Route::get('/migrate', [ArtisanController::class, 'migrate']);
Route::get('/fresh', [ArtisanController::class, 'fresh']);
Route::get('/seed', [ArtisanController::class, 'seed']);
Route::get('/key', [ArtisanController::class, 'key']);
