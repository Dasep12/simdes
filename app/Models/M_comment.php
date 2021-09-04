<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_comment extends Model
{
    //
    protected $fillable = [
        'comment', 'name', 'id_post'
    ];

    protected $table = "tbl_comment";
}
