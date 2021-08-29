<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Administratif extends Model
{
    //
    protected $fillable = [
        'daerah', 'jumlah_rt', 'jumlah_kk',
        'jumlah_jiwa', 'laki_laki', 'perempuan',
    ];
}
