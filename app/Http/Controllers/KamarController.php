<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Kamar;
Use Alert;
use App\Models\Penghuni;
use Illuminate\Support\Facades\Route;

class KamarController extends Controller
{
    public function index(){
        $kamars = Kamar::all();
        
        return view('main.kamar.index', [
            'kamars' => $kamars
        ]);
    }

    public function create(){
        return view('main.kamar.create');
    }

    public function edit($id){
        $kamar = Kamar::find($id);
        
        return view('main.kamar.edit', [
            'kamar' => $kamar
        ]);
    }

    public function show($id){
        $kamar = Kamar::find($id);

        return view('main.kamar.show', [
            'kamar' => $kamar
        ]);
    }

    public function store(Request $request){
        $rules = [
            'kode' => 'required|unique:kamars',
            'lantai' => 'required|numeric',
            'kapasitas' => 'required|numeric',
            'fasilitas' => 'required',
            'tarif' => 'required|numeric',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
            return back()->withErrors($validator)->withInput();

        try {
            if (!$request->id) {
                $kamar = new Kamar;
            } else {
                $kamar = Kamar::find($request->id);
                if (!$kamar)
                    return redirect(route('kamar.edit'))->with('message', 'Kamar tidak ditemukan!');
            }

            $kamar->kode = $request->kode;
            $kamar->lantai = $request->lantai;
            $kamar->kapasitas = $request->kapasitas;
            $kamar->fasilitas = $request->fasilitas;
            $kamar->tarif = $request->tarif;
            $kamar->save();

            Alert::success('Berhasil', !$request->id ? 'Kamar berhasil ditambahkan!' : 'Kamar berhasil diubah!');
            return redirect(route('kamar.index'));
            
        } catch (\Exception $e) {
            if (!$request->id){
                return redirect(route('kamar.create'))->with('message', $e->getMessage());
            } else {
                return redirect(route('kamar.edit'))->with('message', $e->getMessage());
            }
        }
    }

    public function delete(Request $request)
    {
        try {
            $kamar = Kamar::find($request->id);
            if (!$kamar) {
                Alert::error('Gagal', 'Kamar tidak ditemukan!');
                return redirect(route('kamar.index'));
            }
            
            $kamar->delete();
            
            Alert::success('Berhasil', 'Kamar berhasil dihapus!');
            return redirect(route('kamar.index'));

        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());
            return redirect(route('kamar.index'));
        }
    }
}
