<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_produk;

class Produk extends Controller
{
    //

    public function index()
    {
        $data  = [
            'title'  => 'Lembaga Masyarakat',
            'data'   => M_produk::all()
        ];
        // return view('admin.produk', $data);

        dd($data);
    }

    public function add()
    {
        $data = [
            'title'  => 'Tambah Lembaga Masyarakat'
        ];
        return view('admin.produk_add', $data);
    }

    // public function store(Request $request)
    // {
    //     $validate = $request->validate([
    //         'namaLembaga'    => 'required|unique:tbl_produk',
    //         'keterangan'     => 'required'
    //     ], [
    //         'namaLembaga.required'  => '*harus di isi*',
    //         'namaLembaga.unique'  => '*lembaga sudah ada*',
    //     ]);

    //     $validate['author'] = 'Administrator';
    //     M_produk::create($validate);
    //     return redirect('admin/produk')->with('success', 'data berhasil tersimpan');
    // }

    // public function edit($id)
    // {
    //     $data = [
    //         'title'   => "Edit Data",
    //         'data'     => M_produk::find($id)
    //     ];
    //     return view('admin.produk_edit', $data);
    // }

    // public function update(Request $request)
    // {
    //     $validate = $request->validate([
    //         'namaLembaga'   => 'required',
    //         'keterangan'    => 'required'
    //     ]);

    //     $data = M_produk::find($request->id);
    //     $data->namaLembaga = $request->namaLembaga;
    //     $data->keterangan  = $request->keterangan;
    //     $data->update();
    //     return redirect('admin/produk')->with('success', 'data di update');
    // }


    // public function del($id)
    // {
    //     $data = M_produk::find($id);
    //     $data->delete();
    //     return redirect('admin/produk')->with('success', 'data berhasil terhapus');
    // }
}
