<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KamarController;
// use App\Http\Controllers\PenghuniController;
use Illuminate\Support\Facades\Route;

//Authentication
Route::get('/', [AuthController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.attempt')->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::group(['middleware' => 'auth'],function (){
    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Kamar
    Route::group(['prefix' => 'kamar', 'name' => 'kamar',],function (){
        Route::get('/', [KamarController::class, 'index'])->name('index');
        Route::get('/{id}', [KamarController::class, 'show'])->name('show');
        Route::get('/create', [KamarController::class, 'create'])->name('create');
        Route::post('/create', [KamarController::class, 'store'])->name('store');
        Route::get('/update', [KamarController::class, 'edit'])->name('edit');
        Route::put('/update', [KamarController::class, 'store'])->name('update');
        Route::delete('/delete', [KamarController::class, 'delete'])->name('delete');
    });

    //Penghuni
    // Route::group(['prefix' => 'penghuni', 'name' => 'penghuni',],function (){
    //     Route::get('/', [PenghuniController::class, 'index'])->name('index');
    //     Route::get('/{id}', [PenghuniController::class, 'show'])->name('show');
    //     Route::get('/create', [PenghuniController::class, 'create'])->name('create');
    //     Route::post('/create', [PenghuniController::class, 'store'])->name('store');
    //     Route::get('/update', [PenghuniController::class, 'edit'])->name('edit');
    //     Route::put('/update', [PenghuniController::class, 'update'])->name('update');
    //     Route::delete('/delete', [PenghuniController::class, 'delete'])->name('delete');
    // });
});

Route::get('dashboard/penghuni', function () {
    return view('main.dataPenghuni');
});

Route::get('dashboard/kamar', function () {
    return view('main.dataKamar');
});

Route::get('dashboard/tagihan', function () {
    return view('main.dataTagihan');
});

Route::get('dashboard/lunas', function () {
    return view('main.pembayaranLunas');
});