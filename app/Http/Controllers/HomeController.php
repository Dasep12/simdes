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

    // profile desa
    //halaman profile desa
    public function profile()
    {
        return view('user.profile');
    }

    //fungsi sejarah desa
    public function sejarah()
    {
        return view('user.sejarah');
    }
    //end 

    //pemerintahan  desa
    //halaman visi misi
    public function visimisi()
    {
        return view('user.visimisi');
    }

    //halaman pemerintah
    public function pemerintah()
    {
        return view('user.pemerintah');
    }
    //end 


    //Lembaga masyarakat
    //halaman PKK
    public function pkk()
    {
        return view('user.pkk');
    }

    //halaman karang taruna
    public function karangtaruna()
    {
        return view('user.karang_taruna');
    }
    //end


    //Data desa
    //halaman data wilayah administratif 
    public function wilayah()
    {
        return view('user.wilayah');
    }

    //halaman pendidikan
    public function pendidikan()
    {
        return view('user.pendidikan');
    }

    //halaman jenis kelamin
    public function jk()
    {
        return view('user.jk');
    }

    //halaman kelompok umur
    public function kelumur()
    {
        return view('user.kelumur');
    }
}
