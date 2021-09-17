<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_visimisi extends Model
{
    //

    protected $fillable = [
        'visi', 'misi', 'author'
    ];

    protected $table = 'tbl_visimisis';
}
