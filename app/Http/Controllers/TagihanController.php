<?php

namespace App\Http\Controllers;
use App\Models\Tagihan;
Use Alert;

use Illuminate\Http\Request;

class TagihanController extends Controller
{
    public function index(){
        $tagihans = Tagihan::with(['penghuni'])->latest()->get();
        
        return view('main.tagihan.index', [
            'tagihans' => $tagihans
        ]);
    }

    public function pelunasan($id){
        $tagihan = Tagihan::find($id);

        if(!$tagihan){
            return back();
        }
        
        $tagihan->status = 1;
        $tagihan->save();

        Alert::success('Berhasil', 'Tagihan berhasil dibayar!');
        return redirect(route('tagihan.index'));
    }
}
