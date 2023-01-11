<?php

namespace App\Http\Controllers;
use App\Models\Tagihan;
use Carbon\Carbon;
Use Alert;

use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function index(){
        $tagihans = Tagihan::with(['penghuni.kamar'])->where('status', 0)->latest()->paginate(7);
        
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

        $new_tagihan = new Tagihan;
        $new_tagihan->id_penghuni = $tagihan->id_penghuni;
        $new_tagihan->tagihan = $tagihan->tagihan;
        $new_tagihan->status = false;
        $new_tagihan->deadline = $deadline->addMonth($tagihan->penghuni->durasi);
        $new_tagihan->save();

        Alert::success('Berhasil', 'Tagihan berhasil dibayar! Tagihan selanjutnya sudah ditambahkan!');
        return redirect(route('tagihan.index'));
    }

    public function lunas(){
        $tagihans = Tagihan::with(['penghuni.kamar'])->where('status', 1)->latest()->paginate(7);
        
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
