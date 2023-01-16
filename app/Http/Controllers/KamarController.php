<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Penghuni;
use App\Models\Kamar;
Use Alert;

class KamarController extends Controller
{
    public function index(Request $request){
        $kamars = Kamar::orderBy('kode', 'asc')->where('status', 1);

        if($request->search){
            $kamars->where('kode', 'like', '%'. $request->search .'%');
        }

        $kamars = $kamars->paginate(7);
        
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

        if (!$request->id) {
            $rules['kode'] = 'required|unique:kamars';
        } else {
            $rules['kode'] = ['required', Rule::unique('kamars')->ignore($request->id)];
        }

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
            $kamar->status = 1;
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
            $kamar = Kamar::with(['penghunis'])->find($request->id);
            if (!$kamar) {
                Alert::error('Gagal', 'Kamar tidak ditemukan!');
                return redirect(route('kamar.index'));
            }

            if(count($kamar->penghunis) > 0){
                Alert::error('Gagal', 'Kamar tidak bisa dihapus karena masih ada penghuni! Hapus penghuni kamar ini dahulu');
                return redirect(route('kamar.index'));
            }
            
            $kamar->status = 0;
            $kamar->kode = "TRASH-" . $kamar->kode;
            $kamar->save();
            
            Alert::success('Berhasil', 'Kamar berhasil dihapus!');
            return redirect(route('kamar.index'));

        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());
            return redirect(route('kamar.index'));
        }
    }
}
