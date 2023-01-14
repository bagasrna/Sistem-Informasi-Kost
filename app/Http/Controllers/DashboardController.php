<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penghuni;
use App\Models\Tagihan;
use App\Models\Kamar;

class DashboardController extends Controller
{
    public function index(){
        $jumlah_kamar = Kamar::where('status', 1)->count();
        $jumlah_penghuni = Penghuni::where('status', 1)->count();
        $belum_bayar = Tagihan::where('status', 0)->count();
        $lunas = Tagihan::where('status', 1)->count();

        return view('main.dashboard', [
            'jumlah_kamar' => $jumlah_kamar,
            'jumlah_penghuni' => $jumlah_penghuni,
            'belum_bayar' => $belum_bayar,
            'lunas' => $lunas,
        ]);
    }
}
