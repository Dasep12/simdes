<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pendidikan extends Model
{
    use HasFactory;
    //
    protected $fillable  = [
        'author', 'kelompok', 'laki_laki', 'perempuan', 'jumlah'
    ];

    protected $table = "tbl_pendidikans";
}
