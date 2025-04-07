<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventInfo extends Model
{
    protected $fillable = [
        'tanggal',
        'deskripsi',
        'lokasi',
        'kota',
        'alamat'
    ];
}
