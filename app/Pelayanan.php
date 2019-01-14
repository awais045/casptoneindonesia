<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    protected $table ='pelayanans';
    protected $fillable = [
    'judul',
    'keterangan',
    'gambar',
    ];
}
