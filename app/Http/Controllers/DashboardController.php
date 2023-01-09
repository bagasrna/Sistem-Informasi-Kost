<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kamar;
use App\Models\Penghuni;

class DashboardController extends Controller
{
    public function index(){
        $jumlah_kamar = Kamar::count();
        $jumlah_penghuni = Penghuni::count();

        return view('main.dashboard', [
            'jumlah_kamar' => $jumlah_kamar,
            'jumlah_penghuni' => $jumlah_penghuni
        ]);
    }
}
