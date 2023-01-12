<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\Models\Penghuni;
use App\Models\Tagihan;
use App\Models\Kamar;
use Carbon\Carbon;
Use Alert;
use File;

class PenghuniController extends Controller
{
    public function index(Request $request){
        $penghunis = Penghuni::with(['kamar'])
            ->where('status', 1);

        if($request->search){
            $penghunis->where('nama', 'like', '%'. $request->search .'%')
                ->orWhere('kode', 'like', '%'. $request->search .'%');
        }

        $penghunis = $penghunis->latest()->paginate(7);
        
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
        $penghuni = Penghuni::with(['kamar'])->find($id);
        $kamars = Kamar::with(['penghunis'])
            ->get();
        
        return view('main.penghuni.edit', [
            'penghuni' => $penghuni,
            'kamars' => $kamars
        ]);
    }

    public function store(Request $request){
        $rules = [
            'nama' => 'required',
            'alamat' => 'required',
            'durasi' => 'required|numeric',
            'diskon' => 'required|numeric',
            'hp' => 'required|numeric|starts_with:62',
            'tgl_registrasi' => 'required|date',
            'id_kamar' => 'required',
        ];

        if (!$request->id) {
            $rules['kode'] = 'required|unique:penghunis';
            $rules['ktp'] = 'required|image';
        } else {
            $rules['kode'] = ['required', Rule::unique('penghunis')->ignore($request->id)];
            $rules['ktp'] = 'image';
        }

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

                if($request->file('ktp'))
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

            if($request->file('ktp'))
                $penghuni->ktp = $request->file('ktp')->store('ktp', 'public');

            $penghuni->nama = $request->nama;
            $penghuni->kode = $request->kode;
            $penghuni->alamat = $request->alamat;
            $penghuni->durasi = $request->durasi;
            $penghuni->diskon = $request->diskon;
            $penghuni->status = 1;
            $penghuni->hp = $request->hp;
            $penghuni->tgl_registrasi = $request->tgl_registrasi;
            $penghuni->id_kamar = $request->id_kamar;
            $penghuni->save();

            if(!$request->id){
                $tagihan = new Tagihan;
                $penghuni = Penghuni::with(['kamar'])->latest()->first();
                $tgl_registrasi = Carbon::parse($penghuni->tgl_registrasi);

                $tagihan->id_penghuni = $penghuni->id;
                $tagihan->tagihan = ((100 - $penghuni->diskon) / 100) * ($penghuni->durasi * $penghuni->kamar->tarif);
                $tagihan->status = false;
                $tagihan->deadline = $tgl_registrasi->addMonth($penghuni->durasi);
                $tagihan->save();
            } else {
                $tagihan = Tagihan::where('id_penghuni', $penghuni->id)->where('status', 1)->latest()->first();
                if($tagihan){
                    $deadline = Carbon::parse($tagihan->deadline);
                    $new_tagihan = Tagihan::where('id_penghuni', $penghuni->id)->where('status', 0)->latest()->first();
                    $new_tagihan->tagihan = ((100 - $penghuni->diskon) / 100) * ($penghuni->durasi * $penghuni->kamar->tarif);
                    $new_tagihan->deadline = $deadline->addMonth($penghuni->durasi);
                    $new_tagihan->save();
                } else {
                    $tagihan = Tagihan::where('id_penghuni', $penghuni->id)->where('status', 0)->latest()->first();
                    $deadline = Carbon::parse($penghuni->tgl_registrasi);
                    $tagihan->tagihan = ((100 - $penghuni->diskon) / 100) * ($penghuni->durasi * $penghuni->kamar->tarif);
                    $tagihan->deadline = $deadline->addMonth($penghuni->durasi);
                    $tagihan->save();
                }
            }

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
            Tagihan::where('id_penghuni', $penghuni->id)->where('status', 0)->delete();
            // $penghuni->delete();
            $penghuni->status = 0;
            $penghuni->kode = rand();
            $penghuni->save();
            
            Alert::success('Berhasil', 'Penghuni berhasil dihapus!');
            return redirect(route('penghuni.index'));

        } catch (\Exception $e) {
            Alert::error('Gagal', $e->getMessage());
            return redirect(route('Penghuni.index'));
        }
    }
}
