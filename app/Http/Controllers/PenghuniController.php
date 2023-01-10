<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Models\Penghuni;
use App\Models\Kamar;
Use Alert;
use File;

class PenghuniController extends Controller
{
    public function index(){
        $penghunis = Penghuni::with(['kamar'])->latest()->paginate(7);
        
        return view('main.penghuni.index', [
            'penghunis' => $penghunis
        ]);
    }

    public function show($id){
        $penghuni = Penghuni::find($id);

        return view('main.penghuni.show', [
            'penghuni' => $penghuni
        ]);
    }

    public function create(){
        $kamars = Kamar::with(['penghunis'])
            ->get();
        
        return view('main.penghuni.create', [
            'kamars' => $kamars
        ]);
    }

    public function edit($id){
        $penghuni = Penghuni::find($id);
        
        return view('main.penghuni.edit', [
            'penghuni' => $penghuni
        ]);
    }

    public function store(Request $request){
        $rules = [
            'nama' => 'required',
            'kode' => 'required|unique:penghunis',
            'alamat' => 'required',
            'durasi' => 'required|numeric',
            'diskon' => 'required|numeric',
            'hp' => 'required|numeric|starts_with:62',
            'tgl_registrasi' => 'required|date',
            'id_kamar' => 'required',
            'ktp' => 'required|image',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
            return back()->withErrors($validator)->withInput();

        try {
            if (!$request->id) {
                $penghuni = new Penghuni;
                $kamar = Kamar::with(['penghunis'])
                    ->find($request->id_kamar);
                if(count($kamar->penghunis) == $kamar->kapasitas){
                    Alert::error('Gagal', 'Kapasitas kamar sudah penuh');
                    return redirect(route('penghuni.create'));
                }
            } else {
                $penghuni = Penghuni::find($request->id);
                if (!$penghuni)
                    return redirect(route('penghuni.edit'))->with('message', 'Penghuni tidak ditemukan!');

                File::delete('storage/' . $penghuni->ktp);
                $kamar = Kamar::with(['penghunis'])
                    ->find($request->id_kamar);

                if($penghuni->id_kamar != $request->id_kamar) {
                    if(count($kamar->penghunis) == $kamar->kapasitas){
                        Alert::error('Gagal', 'Kapasitas kamar sudah penuh');
                        return redirect(route('penghuni.create'));
                    }
                }
            }

            $penghuni->nama = $request->nama;
            $penghuni->kode = $request->kode;
            $penghuni->alamat = $request->alamat;
            $penghuni->durasi = $request->durasi;
            $penghuni->diskon = $request->diskon;
            $penghuni->hp = $request->hp;
            $penghuni->tgl_registrasi = $request->tgl_registrasi;
            $penghuni->id_kamar = $request->id_kamar;
            $penghuni->ktp = $request->file('ktp')->store('ktp', 'public');
            $penghuni->save();

            Alert::success('Berhasil', !$request->id ? 'Penghuni berhasil ditambahkan!' : 'Penghuni berhasil diubah!');
            return redirect(route('penghuni.index'));
            
        } catch (\Exception $e) {
            if (!$request->id){
                Alert::error('Gagal', $e->getMessage());
                return redirect(route('penghuni.create'))->with('message', $e->getMessage());
            } else {
                Alert::error('Gagal', $e->getMessage());
                return redirect(route('penghuni.edit'))->with('message', $e->getMessage());
            }
        }
    }

    public function delete(Request $request)
    {
        try {
            $penghuni = Penghuni::find($request->id);
            if (!$penghuni) {
                Alert::error('Gagal', 'Penghuni tidak ditemukan!');
                return redirect(route('penghuni.index'));
            }
            
            File::delete('storage/' . $penghuni->ktp);
            $penghuni->delete();
            
            Alert::success('Berhasil', 'Penghuni berhasil dihapus!');
            return redirect(route('penghuni.index'));

        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());
            return redirect(route('Penghuni.index'));
        }
    }
}
