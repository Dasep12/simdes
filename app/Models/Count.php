<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\M_berita;

class Count extends Model
{
    use HasFactory;


    public function berita()
    {
        return $this->belongsTo(M_berita::class);
    }
}
