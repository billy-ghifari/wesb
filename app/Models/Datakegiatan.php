<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datakegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatans';

	protected $fillable = ['id', 'img_kegiatan'];
}
