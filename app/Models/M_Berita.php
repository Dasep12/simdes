<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\M_comment;
use App\Models\Count;

class M_berita extends Model
{
    //

    protected $fillable = [
        'excerpt', 'title', 'slug', 'author', 'cover', 'date_post', 'content', 'category', 'viewer'
    ];

    protected $table = "Beritas";

    public function comment()
    {
        return $this->hasMany(M_comment::class);
    }

    public function views()
    {
        return $this->hasMany(Count::class);
    }
}
