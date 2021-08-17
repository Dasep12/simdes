<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    //

    public function index()
    {
        return view('berita');
    }

    public function detail($id)
    {
        return view('detail_berita');
    }
}
