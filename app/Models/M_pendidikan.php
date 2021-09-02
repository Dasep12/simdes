<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_pendidikan extends Model
{
    //
    protected $fillable  = [
        'author', 'kelompok', 'laki_laki', 'perempuan', 'jumlah'
    ];
}
