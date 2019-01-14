<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teknologi extends Model
{
	protected $table = 'teknologis';
	protected $fillable = [
	'nama',
	'gambar',
	];
}
