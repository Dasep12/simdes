<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\M_visimisi;
use App\Models\M_pemerintah;
use Illuminate\Http\Request;
use Session;
use Validator;

class Pemerintah extends Controller
{
    //

    public function visimisi()
    {
        $data = [
            'title'     => 'Visi Misi',
            'data'      =>  M_visimisi::all()
        ];
        return view('admin.visimisi', $data);
    }

    public function editVisiMisi()
    {
        $data = [
            'title'     => 'Visi Misi',
            'data'      =>  M_visimisi::first()
        ];
        return view('admin.editvisimisi', $data);
    }

    public function updateVisMisi(Request $request)
    {
        $rules = [
            'visi'      => 'required',
            'misi'      => 'required',
            'cover'     => 'required|mimes:jpg,jpeg,png|max:2064'
        ];
        $messages  = [
            'visi.required'      => 'visi harus di isi',
            'misi.required'      => 'misi harus di isi',
            'cover.mimes'        => 'ekstensi salah',
            'cover.max'          => 'file terlalu besar',
            'cover.required'     => 'file harus di isi'
        ];

        $validator = Validator::make($request->all(),  $rules, $messages);
        if ($validator->fails()) {
            Session::flash('errors', ['' => '']);
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        } else {
            $file        = $request->cover;
            $filename    = time() . "." .  $request->cover->extension();
            $request->cover->move(public_path('upload'), $filename);
            $data = M_visimisi::find($request->id);
            $data->visi = $request->visi;
            $data->misi = $request->misi;
            $data->cover =  $filename;
            $data->save();
            Session::flash('info', 'Berhasil update');
            return redirect()->route('dataVisiMisi');
        }
    }

    //
    public function pemerintah()
    {
        $data = [
            'title'   => 'Pemerintahan',
            'data'    => M_pemerintah::all()
        ];
        return view('admin.pemerintah', $data);
    }


    public function form_pemerintah($id)
    {
        $data = [
            'title'   => 'Pemerintahan',
            'data'    => M_pemerintah::find($id)
        ];
        return view('admin.edit_pemerintah', $data);
    }

    public function updatePemerintah(Request $request)
    {
        $request->validate([
            'judul'         => 'required|max:255',
            'pemerintah'    => 'min:255|required'
        ]);

        $data = M_pemerintah::find($request->id);

        if ($request->file == null) {
            $data->judul  = $request->judul;
            $data->pemerintah  = $request->pemerintah;
            $data->update();
            return redirect('/admin/pemerintah')->with('success', 'Berhasil update');
        } else {
            $filename    = time() . "." .  $request->file->extension();
            $request->file->move(public_path('upload'), $filename);
            $data->judul  = $request->judul;
            $data->pemerintah  = $request->pemerintah;
            $data->cover   = $filename;
            $data->update();
        }
    }
}
