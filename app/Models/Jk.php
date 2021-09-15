<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jk extends Model
{
    //
    protected $fillable = [
        'jumlah', 'kelompok', 'author'
    ];

    protected $table = 'jenis_kelamin';
}
