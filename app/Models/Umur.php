<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Umur extends Model
{
    //
    protected $fillable = [
        'kelompok', 'laki_laki', 'perempuan'
    ];

    protected $table = "tbl_umurs";
}
