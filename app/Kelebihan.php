<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelebihan extends Model
{
    protected $table ='kelebihans';
    protected $fillable = [
    'judul',
    'keterangan',
    'gambar',
    ];
}
