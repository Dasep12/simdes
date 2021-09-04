<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\M_profile;
use App\Models\M_sejarah;
use App\Models\M_visimisi;
use App\Models\M_pemerintah;
use App\Models\M_Berita;
use App\Models\M_comment;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data  = [
            'data'      => M_berita::orderBy('created_at', 'desc')->get(),
        ];
        return view('user.home', $data);
    }

    //fungsi detail berita
    public function detailBerita($id, $slug)
    {
        $data  = [
            'data'      => M_berita::where('slug', $slug)->first(),
            'comment'   => M_comment::where('id_post', $id)->orderBy('id', 'desc')->get()
        ];
        return view('user.detail_berita', $data);
    }

    //kirim komentar
    public function store_comment(Request $request)
    {
        $validate = $request->validate([
            'name'          => 'required',
            'comment'       => 'required',
            'id_post'       => 'required'
        ]);

        $validate['id_post'] = $request->id_post;
        $id = $request->id_post;
        $slug = $request->slug;
        M_comment::create($validate);
        return redirect("/detail" . "/" . $id . '/' . $slug);
    }

    // profile desa
    //halaman profile desa
    public function profile()
    {
        $id = 1;
        $data = [
            'data'  => M_profile::first()
        ];
        return view('user.profile', $data);
    }

    //fungsi sejarah desa
    public function sejarah()
    {
        $data = [
            'data'  => M_sejarah::first()
        ];
        return view('user.sejarah', $data);
    }
    //end 

    //pemerintahan  desa
    //halaman visi misi
    public function visimisi()
    {
        $data = [
            'data'  => M_visimisi::first()
        ];
        return view('user.visimisi', $data);
    }

    //halaman pemerintah
    public function pemerintah()
    {
        $data =  [
            'data' => M_pemerintah::first()
        ];
        return view('user.pemerintah', $data);
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
