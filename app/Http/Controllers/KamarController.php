<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Kamar;
use App\Models\Penghuni;

class KamarController extends Controller
{
    public function index(){
        $kamars = Kamar::all();
        
        return view('main.kamar.index', [
            'kamars' => $kamars
        ]);
    }

    public function show($id){
        $kamar = Kamar::find($id);

        return view('main.kamar.show');
    }

    public function create(){
        $kamars = Kamar::join('kamars', 'kamars.id', 'penghunis.id_kamar')
            ->select('kamars.id', 'penghunis.nama')
            ->get();
        
        return view('main.kamar.create', [
            'kamars' => $kamars
        ]);
    }

    public function store(Request $request){
        $rules = [
            'lantai' => 'required|numeric',
            'kapasitas' => 'required|numeric',
            'fasilitas' => 'required',
            'tarif' => 'required|numeric',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails())
            return redirect(route('kamar.create'))->with('message', $validator);

        try {
            if (!$request->id) {
                $kamar = new Kamar;
            } else {
                $kamar = Kamar::find($request->id);
                if (!$kamar)
                    return redirect(route('kamar.edit'))->with('message', 'Kamar tidak ditemukan!');
            }

            $kamar->lantai = $request->lantai;
            $kamar->kapasitas = $request->kapasitas;
            $kamar->fasilitas = $request->fasilitas;
            $kamar->tarif = $request->tarif;
            $kamar->save();

            if (!$request->id){
                return redirect(route('kamar.create'))->with('message', 'Kamar berhasil ditambahkan!');
            } else {
                return redirect(route('kamar.edit'))->with('message', 'Kamar berhasil diupdate!');
            }
            
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
            if (!$kamar)
                return redirect(route('kamar.index'))->with('message', 'Kamar tidak ditemukan!');

            $kamar->delete();
            return redirect(route('kamar.index'))->with('message', 'Kamar berhasil dihapus!');

        } catch (\Exception $e) {
            return redirect(route('kamar.index'))->with('message', $e->getMessage());
        }
    }
}
