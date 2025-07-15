<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $fillable = [
        'nama_kegiatan',
        'waktu',
        'tempat',
        'deskripsi',
        'penanggung_jawab',
    ];
    
}
