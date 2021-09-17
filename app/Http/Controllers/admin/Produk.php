<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\M_produk;
use App\Models\M_gallery;
use App\Models\M_gamas;
use Exception;
use File;

class Produk extends Controller
{
    //

    public function index()
    {
        $data  = [
            'title'  => 'Produk Desa',
            'data'   => M_produk::all()
        ];
        return view('admin.produk', $data);
    }

    public function add()
    {
        $data = [
            'title'  => 'Tambah Produk Desa'
        ];
        return view('admin.produk_add', $data);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'namaProduk'        => 'required|unique:tbl_produks',
            'idProduk'          => 'required|unique:tbl_produks',
            'deskripsi'         => 'required'
        ], [
            'namaProduk.required'   => '*harus di isi*',
            'namaProduk.unique'     => '*nama produk sudah ada*',
            'idProduk.required'     => '*harus di isi*',
            'idProduk.unique'       => '*id produk sudah ada*',
            'deskripsi.required'    => '*harus di isi*',
        ]);

        $ImgFile = $request->file('file');
        if ($ImgFile == null || $ImgFile == "") {
            //$count = 0;
            $save = M_produk::create($validate);
        } else {
            $save = M_produk::create($validate);
            foreach ($ImgFile as $file) {
                $nameFile = $file->getClientOriginalName();
                $ext      = $file->extension();
                $fileUpload = md5($nameFile) . "." . $ext;
                $file->move(public_path('/img/produk/'), $fileUpload);
                M_gallery::create([
                    'image'             => $fileUpload,
                    'm_produk_id'       =>  $save->id
                ]);
            }
        }

        return redirect('admin/produk')->with('success', 'data berhasil tersimpan');
    }

    public function edit($id)
    {

        $data = [
            'title'   => "Edit Data",
            'data'     => M_produk::find($id)
        ];
        return view('admin.produk_edit', $data);
    }

    public function update(Request $request)
    {
        $validate = $request->validate([
            'namaProduk'   => 'required',
            'deskripsi'    => 'required'
        ], [
            'namaProduk.required'   => '*harus di isi*',
            'deskripsi.required'    => '*harus di isi*'
        ]);

        $data = M_produk::find($request->id);
        $data->namaProduk = $request->namaProduk;
        $data->deskripsi  = $request->deskripsi;
        $data->update();
        return redirect('admin/produk')->with('success', 'data di update');
    }


    public function del($id)
    {
        // $data = Mahasiswa::find($id);
        // File::delete('images/' . $data->photo);
        // $data->delete();

        $data = M_produk::find($id);
        $galerry = M_gallery::where('m_produk_id', $id)->get();
        if ($galerry->count() > 0) {
            foreach ($galerry as $p) {
                File::delete('img/produk/' . $p->image);
                M_gallery::where('m_produk_id', $id)->delete();
            }
        }
        $data->delete();
        return redirect('admin/produk')->with('success', 'data berhasil terhapus');
    }

    public function del_gallery($id)
    {
        # code...
        $data = M_gallery::find($id);
        echo $data;
    }
}
