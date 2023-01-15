<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Pembukuan;
use Carbon\Carbon;
use Alert;

class PembukuanController extends Controller
{
    public function index(){
        return view('main.pembukuan.index');
    }

    public function show(Request $request){
        $pembukuans = Pembukuan::latest();

        $from = Carbon::parse($request->tahun_awal . '-' . $request->bulan_awal . '-01')->format('Y-m-d');
        $to = Carbon::parse($request->tahun_akhir . '-' . $request->bulan_akhir . '-01')->endOfMonth()->format('Y-m-d');

        $pembukuans->whereBetween('tgl_transaksi', [$from, $to]);
        
        $kredit = clone $pembukuans;
        $debit = clone $pembukuans;
        
        $pembukuans = $pembukuans->get();

        $debit = $debit->where('tipe', 0)->get();
        $kredit = $kredit->where('tipe', 1)->get();

        if($request->print){
            return view('main.pembukuan.print', [
                'pembukuans' => $pembukuans,
                'saldo' => $debit->sum('nominal') + $kredit->sum('nominal'),
                'total_debit' => $debit->sum('nominal'),
                'total_kredit' => $kredit->sum('nominal'),
                'bulan_awal' => $request->bulan_awal,
                'bulan_akhir' => $request->bulan_awal,
                'tahun_awal' => $request->tahun_awal,
                'tahun_akhir' => $request->tahun_akhir,
            ]);
        }

        return view('main.pembukuan.show', [
            'pembukuans' => $pembukuans,
            'saldo' => $debit->sum('nominal') + $kredit->sum('nominal'),
            'total_debit' => $debit->sum('nominal'),
            'total_kredit' => $kredit->sum('nominal'),
            'bulan_awal' => $request->bulan_awal,
            'bulan_akhir' => $request->bulan_awal,
            'tahun_awal' => $request->tahun_awal,
            'tahun_akhir' => $request->tahun_akhir,
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
