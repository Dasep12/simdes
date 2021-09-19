<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_berita;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Support\Str;
use Storage;
use File;

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
            'slug'       => 'required|unique:beritas',
            'content'    => 'required'
        ], [
            'title.required'    => 'harus di isi',
            'title.unique'      => 'judul sudah ada',
            'title.max'         => 'maksimal 100 karakter',
            'slug.required'     => 'harus di isi',
            'slug.unique'       => 'slug sudah ada',
            'content.required'  => 'harus di isi',
        ]);
        $validate['date_post']  = date('Y-M-D H:i');
        $validate['category']  = "Berita Desa";
        $validate['author']  = "Administrator";
        $validate['viewer'] = 0;
        $validate['excerpt'] = Str::limit($request->content, 100);

        if ($file == null || $file == "") {
            $validate['cover'] = "null";
            M_berita::create($validate);
            return redirect('admin/berita')->with('success', 'Berita di Posting');
        } else {
            $fileName = time() . "." . $request->file->extension();
            $request->file->move(public_path('upload'), $fileName);
            $validate['cover'] = $fileName;
            M_berita::create($validate);
            return redirect('admin/berita')->with('success', 'Berita di Posting');
        }
    }

    public function del_berita($id)
    {
        $data = M_berita::find($id);
        $data->delete();
        return redirect('admin/berita')->with('success', 'Data Berhasil di hapus');
    }

    public function form_edit($id)
    {
        $data = [
            'data'     => M_berita::find($id),
            'title'    => "Edit Berita"
        ];
        return view('admin.berita_edit', $data);
    }

    public function update_berita(Request $request)
    {
        $file = $request->file;
        $id = $request->id;
        $validate = $request->validate([
            'title'      => 'required|max:100',
            'slug'       => 'required|',
            'content'    => 'required'
        ], [
            'title.required'    => 'harus di isi',
            'title.max'         => 'maksimal 100 karakter',
            'slug.required'     => 'harus di isi',
            'content.required'  => 'harus di isi',
        ]);

        if ($file == null || $file == "") {
            $validate['cover'] = "null";
            $data = M_berita::find($id);
            $data->title = $request->title;
            $data->slug  = $request->slug;
            $data->content = $request->content;
            $data->excerpt = Str::limit($request->content, 200);
            $data->save();
            return redirect('admin/berita')->with('success', 'Berita di Sunting');
        } else {

            //delete file jika ada
            if (File::exists("upload/" . $request->nameFile)) {
                File::delete('upload/' .  $request->nameFile);
            }

            $fileName = time() . "." . $request->file->extension();
            $request->file->move(public_path('upload'), $fileName);
            $data = M_berita::find($id);
            $data->title = $request->title;
            $data->slug  = $request->slug;
            $data->cover = $fileName;
            $data->content = $request->content;
            $data->excerpt = Str::limit($request->content, 200);
            $data->save();
            return redirect('admin/berita')->with('success', 'Berita di Sunting');
        }
    }
}
