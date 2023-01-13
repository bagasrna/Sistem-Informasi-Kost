<?php

namespace App\Http\Controllers;
use App\Models\Pembukuan;
use App\Models\Penghuni;
use App\Models\Tagihan;
use App\Models\Kamar;
use Carbon\Carbon;
Use Alert;

use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function index(Request $request){
        $tagihans = Tagihan::with(['penghuni.kamar']);

        if($request->search){
            $kamars = Kamar::where('kode', $request->search)->get();
            $kamars_penghunis = Penghuni::where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('kode', 'like', '%'. $request->search .'%')
                ->orWhereIn('id_kamar', $kamars->pluck('id'))->get();

            $tagihans = $tagihans->whereIn('id_penghuni', $kamars_penghunis->pluck('id'));
        }

        $tagihans = $tagihans->where('status', 0)->latest()->paginate(7);
        
        return view('main.tagihan.index', [
            'tagihans' => $tagihans
        ]);
    }

    public function pelunasan($id){
        $tagihan = Tagihan::with(['penghuni'])->find($id);
        $deadline = Carbon::parse($tagihan->deadline);

        if(!$tagihan){
            return back();
        }
        
        $tagihan->status = true;
        $tagihan->save();

        $pembukuan = new Pembukuan;
        $pembukuan->tipe = 0;
        $pembukuan->tgl_transaksi = Carbon::now();
        $pembukuan->nominal = $tagihan->tagihan;
        $pembukuan->keterangan = "Pelunasan " . $tagihan->penghuni->nama;
        $pembukuan->save();

        $new_tagihan = new Tagihan;
        $new_tagihan->id_penghuni = $tagihan->id_penghuni;
        $new_tagihan->tagihan = $tagihan->tagihan;
        $new_tagihan->status = false;
        $new_tagihan->deadline = $deadline->addMonth($tagihan->penghuni->durasi);
        $new_tagihan->save();

        Alert::success('Berhasil', 'Tagihan berhasil dibayar! Tagihan selanjutnya sudah ditambahkan!');
        return redirect(route('tagihan.index'));
    }

    public function lunas(Request $request){
        $tagihans = Tagihan::with(['penghuni.kamar']);

        if($request->search){
            $kamars = Kamar::where('kode', $request->search)->get();
            $kamars_penghunis = Penghuni::where('nama', 'like', '%' . $request->search . '%')
                ->orWhere('kode', 'like', '%'. $request->search .'%')
                ->orWhereIn('id_kamar', $kamars->pluck('id'))->get();

            $tagihans = $tagihans->whereIn('id_penghuni', $kamars_penghunis->pluck('id'));
        }

        $tagihans = $tagihans->where('status', 1)->latest()->paginate(7);
        
        return view('main.pembayaran.index', [
            'tagihans' => $tagihans
        ]);
    }

    public function struk($id){
        $tagihan = Tagihan::with(['penghuni.kamar'])->find($id);
        $start = Carbon::parse($tagihan->deadline);
        $start->subMonths($tagihan->penghuni->durasi);
        
        return view('main.pembayaran.show', [
            'tagihan' => $tagihan,
            'start' => $start
        ]);
    }
}
