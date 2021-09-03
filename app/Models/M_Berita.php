<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_berita extends Model
{
    //

    protected $fillable = [
        'title', 'slug', 'author', 'cover', 'date_post', 'content', 'category', 'viewer'
    ];

    protected $table = "Beritas";
}
