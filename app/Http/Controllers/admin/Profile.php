<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_profile;
use App\Models\M_sejarah;
use Session;
use Validator;

class Profile extends Controller
{
    //

    public function profile()
    {
        $data  = [
            'title'  => 'Profile Desa',
            'data'   => M_profile::all()
        ];
        return view('admin.profile', $data);
    }

    public function form_edit_profile($id)
    {
        $data  = [
            'title'  => 'Profile Desa',
            'data'   => M_profile::find($id)
        ];
        return view('admin.edit_profile_desa', $data);
    }

    public function updateProfile(Request $request)
    {
        $this->validate($request, [
            'profile' => 'required',
        ]);

        $fileUpload = M_profile::find($request->id);
        $fileUpload->profile = $request->profile;
        $fileUpload->title = $request->title;
        $fileUpload->author = "Administrator";
        $update = $fileUpload->update();
        if ($update) {
            Session::flash('info', 'data update');
            return redirect()->route('daftarPro');
        }
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('upload'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('upload/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }




    public function sejarah()
    {
        $data  = [
            'title'     => 'Sejarah Desa',
            'sejarah'   => M_sejarah::all()
        ];
        return view('admin.sejarahdesa', $data);
    }

    public function form_edit_sejarah($id)
    {
        $data  = [
            'title'  => 'Sejarah Desa',
            'data'   => M_sejarah::find($id)
        ];
        return view('admin.edit_sejarah_desa', $data);
    }

    public function updateSejarah(Request $request)
    {
        $rules  = [
            'title'      => 'required',
            'sejarah'    => 'required'
        ];

        $messages = [
            'title.required'  => 'title harus di isi ',
            'sejarah'         => 'isi content harus di isi '
        ];

        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            Session::flash('errors', ['' => ""]);
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        } else {
            $data = M_sejarah::find($request->id);
        }
    }
}
