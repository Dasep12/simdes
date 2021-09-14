<?php

namespace App\Models;

use App\Models\M_produk;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'm_produk_id', 'image'
    ];

    public function produk()
    {
        return $this->belongsTo(M_produk::class);
    }

    protected $table = "tbl_galleries";
}
