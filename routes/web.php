<?php

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

Route::get('/', function () {
    return view('main.login');
});

Route::get('dashboard', function () {
    return view('main.dashboard');
});

Route::get('dashboard/penghuni', function () {
    return view('main.dataPenghuni');
});

Route::get('dashboard/tagihan', function () {
    return view('main.dataTagihan');
});

Route::get('dashboard/lunas', function () {
    return view('main.pembayaranLunas');
});