<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MainInfo extends Model
{
    protected $fillable = [
        'judul',
        'tujuan',
        'foto_pria',
        'nama_pria',
        'ortu_pria',
        'foto_wanita',
        'nama_wanita',
        'ortu_wanita'
    ];
}
