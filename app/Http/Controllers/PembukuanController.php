<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Pembukuan;
use Alert;

class PembukuanController extends Controller
{
    public function index(){
        return view('main.pembukuan.index');
    }

    public function show(Request $request){
        $pembukuans = Pembukuan::latest();

        if($request->tahun && $request->bulan){
            $pembukuans->whereMonth('tgl_transaksi', $request->bulan)
                ->whereYear('tgl_transaksi', $request->tahun);
        } else if($request->tahun){
            $pembukuans->whereYear('tgl_transaksi', $request->tahun);
        } else if($request->bulan){
            $pembukuans->whereMonth('tgl_transaksi', $request->bulan);
        }

        $kredit = clone $pembukuans;
        $debit = clone $pembukuans;

        $pembukuans = $pembukuans->paginate(7);

        $debit = $debit->where('tipe', 0)->get();
        $kredit = $kredit->where('tipe', 1)->get();

        // dd($debit->sum('nominal'), $kredit->sum('nominal'));
        // dd($debit, $kredit);

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

    public function store(Request $request){
        $rules = [
            'tipe' => 'required',
            'tgl_transaksi' => 'required|date',
            'nominal' => 'required|numeric',
            'keterangan' => 'required',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
            return back()->withErrors($validator)->withInput();

        try {         
            $pembukuan = new Pembukuan;
            $pembukuan->tipe = $request->tipe;
            $pembukuan->tgl_transaksi = $request->tgl_transaksi;
            $pembukuan->nominal = $request->tipe ? -($request->nominal) : $request->nominal;
            $pembukuan->keterangan = $request->keterangan;
            $pembukuan->save();

            Alert::success('Berhasil', 'Pembukuan berhasil ditambahkan!');
            return redirect(route('pembukuan.index'));
            
        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());
            return redirect(route('pembukuan.create'));
        }
    }
}
