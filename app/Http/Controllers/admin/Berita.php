<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_berita;

date_default_timezone_set('Asia/Jakarta');

class Berita extends Controller
{

    //
    public function index()
    {
        $data = [
            'title'   => 'Daftar Berita',
            'data'    => M_berita::all()
        ];
        return view('admin.berita', $data);
    }


    public function create_berita()
    {
        $data = [
            'title'   => 'Create Berita',
        ];
        return view('admin.berita_add', $data);
    }

    public function store_berita(Request $request)
    {
        $file = $request->file;
        $validate = $request->validate([
            'title'      => 'required|max:100|unique:beritas',
            'slug'       => 'required',
            'content'    => 'required'
        ], [
            'title.required'    => 'harus di isi',
            'title.unique'      => 'judul sudah ada',
            'title.max'         => 'maksimal 100 karakter',
            'slug.required'     => 'harus di isi',
            'content.required'  => 'harus di isi',
        ]);
        $validate['date_post']  = date('Y-M-D H:i');
        $validate['category']  = "Berita Desa";
        $validate['author']  = "Administrator";
        $validate['viewer'] = 0;

        if ($file == null || $file == "") {
            $validate['cover'] = "null";
            M_berita::create($validate);
            return redirect('admin/berita')->with('success', 'Berita di Posting');
        } else {
            $fileName = time() . "." . $request->file->extension();
            $request->file->move(public_path('upload'), $fileName);
            $validate['cover'] = $fileName;
            M_berita::create($validate);
            dd($request->file);
        }
    }

    public function del_berita($id)
    {
        $data = M_berita::find($id);
        $data->delete();
        return redirect('admin/berita')->with('success', 'Data Berhasil di hapus');
    }
}
