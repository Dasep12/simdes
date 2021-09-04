<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_gamas;

class Gamas extends Controller
{
    //

    public function index()
    {
        $data  = [
            'title'  => 'Lembaga Masyarakat',
            'data'   => M_gamas::all()
        ];
        return view('admin.gamas', $data);
    }

    public function add()
    {
        $data = [
            'title'  => 'Tambah Lembaga Masyarakat'
        ];
        return view('admin.gamas_add', $data);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'namaLembaga'    => 'required|unique:tbl_gamas',
            'keterangan'     => 'required'
        ], [
            'namaLembaga.required'  => '*harus di isi*',
            'namaLembaga.unique'  => '*lembaga sudah ada*',
        ]);

        $validate['author'] = 'Administrator';
        M_gamas::create($validate);
        return redirect('admin/gamas')->with('success', 'data berhasil tersimpan');
    }

    public function edit($id)
    {
        $data = [
            'title'   => "Edit Data",
            'data'     => M_gamas::find($id)
        ];
        return view('admin.gamas_edit', $data);
    }

    public function update(Request $request)
    {
        $validate = $request->validate([
            'namaLembaga'   => 'required',
            'keterangan'    => 'required'
        ]);

        $data = M_gamas::find($request->id);
        $data->namaLembaga = $request->namaLembaga;
        $data->keterangan  = $request->keterangan;
        $data->update();
        return redirect('admin/gamas')->with('success', 'data di update');
    }


    public function del($id)
    {
        $data = M_gamas::find($id);
        $data->delete();
        return redirect('admin/gamas')->with('success', 'data berhasil terhapus');
    }
}
