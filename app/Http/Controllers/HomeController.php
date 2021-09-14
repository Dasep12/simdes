<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\M_profile;
use App\Models\M_sejarah;
use App\Models\M_visimisi;
use App\Models\M_pemerintah;
use App\Models\M_Berita;
use App\Models\M_comment;
use App\Models\M_gamas;
use App\Models\M_produk;

class HomeController extends Controller
{
    //
    public function index()
    {
        $data  = [
            'data'      => M_berita::orderBy('updated_at', 'desc')->get(),
            'gamas'     => M_gamas::all(),
            'produk'    => M_produk::all()
        ];
        return view('user.home', $data);
    }

    //lembaga masyarakat
    public function gamas_detail($id)
    {
        $data =  [
            'data'      => M_gamas::find($id),
            'gamas'     => M_gamas::all(),
            'post'      => M_Berita::all(),
            'produk'    => M_produk::all()
        ];
        return view('user.detail_gamas', $data);
    }
    //end

    //produk desa
    public function produk_detail($id)
    {
        $data =  [
            'data'      => M_produk::find($id),
            'gamas'     => M_gamas::all(),
            'post'      => M_Berita::all(),
            'produk'    => M_produk::all()
        ];
        return view('user.produk_detail', $data);
    }

    //fungsi detail berita
    public function detailBerita($id, $slug)
    {
        $data  = [
            'data'      => M_berita::where('slug', $slug)->first(),
            'comment'   => M_comment::where('id_post', $id)->orderBy('id', 'desc')->get(),
            'gamas'     => M_gamas::all(),
            'produk'    => M_produk::all()
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
            'data'  => M_profile::first(),
            'gamas'     => M_gamas::all(),
            'produk'    => M_produk::all()
        ];
        return view('user.profile', $data);
    }

    //fungsi sejarah desa
    public function sejarah()
    {
        $data = [
            'data'  => M_sejarah::first(),
            'gamas'     => M_gamas::all(),
            'produk'    => M_produk::all()
        ];
        return view('user.sejarah', $data);
    }
    //end 

    //pemerintahan  desa
    //halaman visi misi
    public function visimisi()
    {
        $data = [
            'data'  => M_visimisi::first(),
            'gamas'     => M_gamas::all(),
            'produk'    => M_produk::all()
        ];
        return view('user.visimisi', $data);
    }

    //halaman pemerintah
    public function pemerintah()
    {
        $data =  [
            'data' => M_pemerintah::first(),
            'gamas'     => M_gamas::all(),
            'produk'    => M_produk::all()
        ];
        return view('user.pemerintah', $data);
    }
    //end 



    //Data desa
    //halaman data wilayah administratif 
    public function wilayah()
    {
        $data =  [
            'data' => M_pemerintah::first(),
            'gamas'     => M_gamas::all(),
            'produk'    => M_produk::all()
        ];
        return view('user.wilayah', $data);
    }

    //halaman pendidikan
    public function pendidikan()
    {
        $data = [
            'gamas'     => M_gamas::all(),
            'produk'    => M_produk::all()
        ];
        return view('user.pendidikan', $data);
    }

    //halaman jenis kelamin
    public function jk()
    {
        $data = [
            'gamas'     => M_gamas::all(),
            'produk'    => M_produk::all()
        ];
        return view('user.jk', $data);
    }

    //halaman kelompok umur
    public function kelumur()
    {
        $data = [
            'gamas'     => M_gamas::all(),
            'produk'    => M_produk::all()
        ];
        return view('user.kelumur', $data);
    }
}
