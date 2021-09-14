<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_produk extends Model
{
    //
    protected $fillable = [
        'namaProduk', 'idProduk', 'deskripsi'
    ];

    protected $table = "tbl_produks";

    public function gallery()
    {
        return $this->hasMany(M_gallery::class, 'm_produk_id');
    }
}
