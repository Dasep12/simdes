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

        return view('user.detail_berita');
    }



    //fungsi sejarah desa
    public function sejarah()
    {
        return view('user.sejarah');
    }

    public function visimisi()
    {
    }
}
