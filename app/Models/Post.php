<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';

	protected $fillable = ['id', 'judul_post', 'isi_post', 'img_post','kategori'];

}
