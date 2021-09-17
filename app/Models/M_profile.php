<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_profile extends Model
{
    //

    protected $fillable = [
        'profile', 'author'
    ];

    protected $table = "tbl_profiles";
}
