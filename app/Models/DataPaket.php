<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPaket extends Model
{
    use HasFactory;
    protected $table = 'pakets';

	protected $fillable = ['id', 'nama_paket', 'img_paket', 'deskripsi_paket'];
}
