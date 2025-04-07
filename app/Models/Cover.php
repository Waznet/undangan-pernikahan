<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cover extends Model
{
    protected $fillable = [
        'teks',
        'cover_desktop',
        'cover_mobile'
    ];
}
