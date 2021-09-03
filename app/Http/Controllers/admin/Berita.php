<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Berita extends Controller
{
    //
    public function add()
    {
        $data = [
            'title'  => 'Data Berita'
        ];
        return view('admin.berita_add', $data);
    }

    public function store_berita(Request $request)
    {

        $validate = $request->validate([
            'title'   => 'required|max:100',
            'slug'    => 'required',
            'berita'  => 'required'
        ], [
            'title.required'   => 'harus di isi ',
            'title.max'        => 'maksimal 100 karakter',
            'slug.required'    => 'harus di isi',
            'berita'           => 'harus di isi'
        ]);

        $file = $request->file;
        if ($file == null || $file == "") {
            dd($request->all());
        } else {
            dd($request->all());
        }
    }
}
