<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bannerslide extends Model
{
    use HasFactory;
    protected $table = 'banner_headers';

	protected $fillable = ['id', 'img_banner'];
}
