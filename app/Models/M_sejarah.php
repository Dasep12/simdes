<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_sejarah extends Model
{
    //

    protected $fillable = [
        'sejarah', 'author'
    ];

    protected $table = 'tbl_sejarahs';
}
