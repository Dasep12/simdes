<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_gamas extends Model
{
    //

    protected $fillable = [
        'namaLembaga', 'author', 'keterangan'
    ];

    protected $table = "tbl_gamas";
}
