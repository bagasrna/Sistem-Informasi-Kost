<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembukuan;

class PembukuanController extends Controller
{
    public function index(){
        return view('main.pembukuan.index');
    }

    public function show(Request $request){
        $pembukuans = Pembukuan::latest();

        if($request->tahun && $request->bulan){
            $pembukuans->whereMonth('created_at', $request->bulan)
                ->whereYear('created_at', $request->tahun);
        } else if($request->tahun){
            $pembukuans->whereYear('created_at', $request->tahun);
        } else if($request->bulan){
            $pembukuans->whereMonth('created_at', $request->bulan);
        }

        $kredit = clone $pembukuans;
        $debit = clone $pembukuans;

        $pembukuans = $pembukuans->paginate(7);

        $debit = $debit->where('tipe', 0)->get();
        $kredit = $kredit->where('tipe', 1)->get();

        return view('main.pembukuan.show', [
            'pembukuans' => $pembukuans,
            'saldo' => $pembukuans->sum('nominal'),
            'total_debit' => $debit->sum('nominal'),
            'total_kredit' => $kredit->sum('nominal'),
        ]);
    }

    public function create(){
        return view('main.pembukuan.create');
    }

    public function store(){
        return view('main.pembukuan.index');
    }
}
