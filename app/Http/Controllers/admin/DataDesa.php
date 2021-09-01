<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administratif;
use App\Models\M_pemerintah;
use App\Models\M_jk ;
use App\Models\M_umur;
class DataDesa extends Controller
{
    //
    public function administratif()
    {
        $data = [
            'title'  => 'Data Administratif ',
            'data'   => Administratif::all()
        ];
        return view('admin.administratif', $data);
    }

    public function add_administratif()
    {
        $data = [
            'title'  => 'Data Administratif'
        ];
        return view('admin.administratif_add', $data);
    }

    public function edit_administratif($id)
    {
        $data = [
            'title'  => 'Data Administratif',
            'data'   => Administratif::find($id)
        ];
        return view('admin.edit_administratif', $data);
    }

    public function store_administratif(Request $request)
    {
        $request->validate(
            [
                'daerah'            => 'required|unique:administratifs',
                'jumlah_rt'         => 'required',
                'jumlah_kk'         => 'required',
                'laki_laki'         => 'required',
                'perempuan'         => 'required',
                'jumlah_jiwa'       => 'required',
            ],
            [
                'daerah.required'           => '*harus di isi*',
                'jumlah_rt.required'        => '*harus di isi*',
                'jumlah_kk.required'        => '*harus di isi*',
                'laki_laki.required'        => '*harus di isi*',
                'perempuan.required'        => '*harus di isi*',
                'jumlah_jiwa.required'      => '*harus di isi*',
            ]
        );
        Administratif::create($request->all());
        return redirect('/admin/administratif/add')->with('info', 'Data Berhasil di tambah');
    }

    public function update_administratif(Request $request)
    {
        $request->validate(
            [
                'daerah'            => 'required',
                'jumlah_rt'         => 'required',
                'jumlah_kk'         => 'required',
                'laki_laki'         => 'required',
                'perempuan'         => 'required',
                'jumlah_jiwa'       => 'required',
            ],
            [
                'daerah.required'           => '*harus di isi*',
                'jumlah_rt.required'        => '*harus di isi*',
                'jumlah_kk.required'        => '*harus di isi*',
                'laki_laki.required'        => '*harus di isi*',
                'perempuan.required'        => '*harus di isi*',
                'jumlah_jiwa.required'      => '*harus di isi*',
            ]
        );
        $data = Administratif::find($request->id);
        $data->daerah       = $request->daerah;
        $data->jumlah_rt    = $request->jumlah_rt ;
        $data->jumlah_kk    = $request->jumlah_kk ;
        $data->laki_laki    = $request->laki_laki ;
        $data->perempuan    = $request->perempuan ;
        $data->jumlah_jiwa  = $request->jumlah_jiwa ;
        $data->update();
       // dd($request->all());
        return redirect('/admin/administratif/')->with('success', 'Data Berhasil di update');
    }


    public function del_administratif($id)
    {
        $data = Administratif::find($id);
        $data->delete();
        return redirect('/admin/administratif')->with('success', 'Data Berhasil di Hapus');
    }


    //jenis kelamin 
    public function jenis_kelamin()
    {
        $data = [
            'title' => 'Data Jenis Kelamin' ,
            'data' => M_jk::all()
        ];
        return view('admin.jk',$data);
    }

    public function add_jenis_kelamin()
    {
        $data = [
            'title'  => 'Tambah Data' ,
        ];
        return view('admin.jk_add',$data); 
    }

    public function store_jenis_kelamin(Request $request)
    {
        $request->validate([
            'kelompok'   => 'required' ,
            'jumlah'     => 'required'
        ], [
            'kelompok.required' => 'data harus di isi' ,
            'jumlah.required'   => 'data harus di isi'
        ]);

        M_jk::create($request->all());
        return redirect('/admin/jk/add')->with('info','Data di Tambah');

    }

    public function edit_jk($id)
    {
        $data = [
            'title'  => 'Edit Data' ,
            'data'   => M_jk::find($id)
        ];
        return view('admin.jk_edit',$data);
    }


    public function update_edit_jk(Request $request)
    {
        $request->validate([
            'kelompok'   => 'required' ,
            'jumlah'     => 'required'
        ], [
            'kelompok.required' => 'data harus di isi' ,
            'jumlah.required'   => 'data harus di isi'
        ]);

        $data = M_jk::find($request->id);
        $data->kelompok = $request->kelompok ;
        $data->jumlah   = $request->jumlah ;
        $data->update();
        return redirect('/admin/jk')->with('success','Data di Update');
    }

    public function del_jk($id)
    {
        $data = M_jk::find($id);
        $data->delete();
        return redirect('/admin/jk')->with('success', 'Data Berhasil di Hapus');
    }


    //kelompok umur
    public function umur()
    {
        $data = [
            'title'  => 'Data Kelompok Umur'  ,
            'data'   => M_umur::all()
        ];
        return view('admin.umur',$data);
    }

    public function add_umur()
    {
        $data = [
            'title' => 'Data Kelompok Umur'
        ];
        return view('admin.umur_add',$data);
    }
    public function store_umur(Request $request)
    {
        $validate = $request->validate([
            'kelompok'    => 'required|unique:m_umurs' ,
            'laki_laki'   => 'required' ,
            'perempuan'   => 'required'
        ],[
            'kelompok.required'   => 'harus di isi ' ,
            'laki_laki.required'  => 'harus di isi ' ,
            'perempuan.required'  => 'harus di isi ' ,
            'kelompok.unique'     => 'kelompok sudah terisi'
        ]);

        M_umur::create($validate);
        return redirect('/admin/umur')->with('success', 'Data Berhasil di tambah');
    }

    public function edit_umur($id)
    {
        $data = [
            'title'  => 'Edit Data' ,
            'data'   => M_umur::find($id)
        ];
        return view('admin.umur_edit',$data);
    }

    public function update_edit_umur(Request $request)
    {
        $validate = $request->validate([
            'kelompok'    => 'required' ,
            'laki_laki'   => 'required' ,
            'perempuan'   => 'required'
        ],[
            'kelompok.required'   => 'harus di isi ' ,
            'laki_laki.required'  => 'harus di isi ' ,
            'perempuan.required'  => 'harus di isi ' ,
        ]);

        $data = M_umur::find($request->id);
        $data->kelompok = $request->kelompok ;
        $data->laki_laki = $request->laki_laki ;
        $data->perempuan = $request->perempuan ;
        $data->update();
        return redirect('/admin/umur')->with('success', 'Data Berhasil di update');
    }
    public function del_umur($id)
    {
        $data = M_umur::find($id);
        $data->delete();
        return redirect('/admin/umur')->with('success', 'Data Berhasil di Hapus');
    }
}
