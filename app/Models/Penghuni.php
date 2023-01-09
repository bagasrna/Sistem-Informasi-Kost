<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kamar;

class Penghuni extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode',
        'nama',
        'alamat',
        'hp',
        'tgl_registrasi',
        'id_kamar',
        'ktp',
    ];

    public function kamar() 
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }
}
