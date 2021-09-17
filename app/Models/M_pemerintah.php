<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class M_pemerintah extends Model
{
    use HasFactory;
    //
    protected $fillable = ['judul', 'pemerintah', 'cover', 'author'];

    protected $table = "tbl_pemerintahs";
}
