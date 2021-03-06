<?php

namespace App\Http\Controllers;

use App\Models\Administratif;
use App\Models\Jk;
use Illuminate\Http\Request;
use App\Models\M_profile;
use App\Models\M_sejarah;
use App\Models\M_visimisi;
use App\Models\M_pemerintah;
use App\Models\M_Berita;
use App\Models\M_comment;
use App\Models\M_gamas;
use App\Models\Pendidikan;
use App\Models\M_produk;
use App\Models\Umur;
use App\Models\Count;
use App\Models\Voting;

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

        $ip = $_SERVER['REMOTE_ADDR'];
        $cekIP = Count::where('ip', $ip)->where('m_berita_id', $id)->count();
        if ($cekIP > 0) {
            $d = Count::where('ip', $ip)->where('m_berita_id', $id)->first();
            $d->view = $d->view + 1;
            $d->update();
        } else {
            $inf = new Count();

            $inf->ip = $ip;
            $inf->m_berita_id = $id;
            $inf->tanggal = date('y-m-d');
            $inf->view = 1;
            $inf->save();
        }

        $data  = [
            'data'      => M_Berita::find($id),
            'gamas'     => M_gamas::all(),
            'berita'    => M_Berita::all(),
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
            'm_berita_id'   => 'required'
        ]);

        $validate['m_berita_id'] = $request->m_berita_id;

        $id = $request->m_berita_id;
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
            'produk'    => M_produk::all(),
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
            'data'      => Administratif::all(),
            'gamas'     => M_gamas::all(),
            'produk'    => M_produk::all(),
        ];
        return view('user.wilayah', $data);
    }

    //halaman pendidikan
    public function pendidikan()
    {
        $data = [
            'gamas'     => M_gamas::all(),
            'produk'    => M_produk::all(),
            'data'      => Pendidikan::all()
        ];
        return view('user.pendidikan', $data);
    }

    //halaman jenis kelamin
    public function jk()
    {
        $data = [
            'gamas'     => M_gamas::all(),
            'produk'    => M_produk::all(),
            'data'      => Jk::all()
        ];
        return view('user.jk', $data);
    }

    //halaman kelompok umur
    public function kelumur()
    {
        $data = [
            'gamas'     => M_gamas::all(),
            'produk'    => M_produk::all(),
            'data'      => Umur::all()
        ];
        return view('user.kelumur', $data);
    }


    //kirim voting 
    public function sendVote(Request  $req)
    {
        $ip = $_SERVER['REMOTE_ADDR'];
        $validate = $req->validate([
            'vote'      => 'required',
            'alasan'    => 'required'
        ]);

        $validate['ip']  = $ip;

        $cek = Voting::where('ip', $ip);
        if ($cek->count() > 0) {
            $data  = $cek->first();
            $data->vote = $req->vote;
            $data->alasan = $req->alasan;
            $data->update();
            return redirect()->back()->with('info', 'penilaian di kirim');
        } else {
            Voting::create($validate);
        }
    }
}
