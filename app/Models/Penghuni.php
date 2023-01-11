<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kamar;
use App\Models\Tagihan;

class Penghuni extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'nama',
        'alamat',
        'durasi',
        'diskon',
        'status',
        'hp',
        'tgl_registrasi',
        'id_kamar',
        'ktp',
    ];

    public function kamar() 
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }

    public function tagihans()
    {
        return $this->hasMany(Tagihan::class, 'id_penghuni');
    }
}
