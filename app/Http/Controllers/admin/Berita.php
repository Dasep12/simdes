<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_berita ;
class Berita extends Controller
{

    //
    public function index()
    {
        $data = [
            'title'   => 'Daftar Berita' ,
            'data'    => M_berita::all()
        ];
        return view('admin.berita',$data);
    }

    
}
