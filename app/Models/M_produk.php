<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class M_produk extends Model
{
    //
    protected $filleable = [
        'namaProduk', 'idProduk', 'deskripsi'
    ];

    protected $table = "tbl_produks";
}