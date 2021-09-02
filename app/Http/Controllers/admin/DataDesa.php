<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administratif;
use App\Models\M_pemerintah;
use App\Models\M_pendidikan;

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
        $data->daerah = $request->daerah;
        $data->update();
        dd($request->all());
        // return redirect('/admin/administratif/')->with('success', 'Data Berhasil di update');
    }

    public function del_administratif($id)
    {
        $data = Administratif::find($id);
        $data->delete();
        return redirect('/admin/administratif')->with('success', 'Data Berhasil di Hapus');
    }



    public function pendidikan()
    {
        $data = [
            'title'   => 'Pendidikan',
            'data'    => M_pendidikan::all()
        ];
        return view('admin.pendidikan', $data);
    }
}
