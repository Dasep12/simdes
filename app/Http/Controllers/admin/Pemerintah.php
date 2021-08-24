<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\M_visimisi;
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
            'misi'      => 'required'
        ];
        $messages  = [
            'visi.required'  => 'visi harus di isi',
            'misi.required'  => 'misi harus di isi'
        ];

        $validator = Validator::make($request->all(),  $rules, $messages);
        if ($validator->fails()) {
            Session::flash('errors', ['' => '']);
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        } else {
            $data = M_visimisi::find($request->id);
            $data->visi = $request->visi;
            $data->misi = $request->misi;
            $data->save();
            Session::flash('info', 'Berhasil update');
            return redirect()->route('dataVisiMisi');
        }
    }
}