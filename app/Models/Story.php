<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'judul',
        'sub_judul',
        'konten',
        'foto'
    ];
}
