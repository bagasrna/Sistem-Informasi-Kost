<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penghuni;

class Kamar extends Model
{
    use HasFactory;

    protected $fillable = [
        'lantai',
        'kapasitas',
        'fasilitas',
        'tarif',
    ];

    public function penghunis()
    {
        return $this->hasMany(Penghuni::class);
    }
}
