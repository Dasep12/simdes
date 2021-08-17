<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('user.home');
    }



    //fungsi detail berita
    public function detailBerita()
    {
        # code...
        return view('user.detail_berita');
    }



    //fungsi sejarah desa
    public function sejarah()
    {
    }

    public function visimisi()
    {
    }
}
