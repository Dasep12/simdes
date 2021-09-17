<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\M_berita;

class M_comment extends Model
{
    //
    protected $fillable = [
        'comment', 'name', 'm_berita_id'
    ];

    protected $table = "tbl_comment";

    public function berita()
    {
        return $this->belongsTo(M_berita::class);
    }
}
