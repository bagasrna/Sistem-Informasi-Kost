<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penghuni;

class Tagihan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_penghuni',
        'tagihan',
        'status',
        'deadline',
    ];

    public function penghuni() 
    {
        return $this->belongsTo(Penghuni::class, 'id_penghuni');
    }
}
