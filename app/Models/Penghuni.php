<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kamar;

class Penghuni extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'alamat',
        'hp',
        'tgl_registrasi',
        'kamar',
        'ktp',
    ];

    public function kamar() 
    {
        return $this->belongsTo(Kamar::class, 'id_kamar');
    }
}
