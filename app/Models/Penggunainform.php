<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggunainform extends Model
{
    use HasFactory;
    protected $table = 'penggunas';

	protected $fillable = ['id', 'nama_pengguna', 'email_pengguna', 'nomor_pengguna', 'kritik_pengguna'];
}
