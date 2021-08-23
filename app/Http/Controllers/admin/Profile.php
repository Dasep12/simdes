<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_profile;
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

        $content = $request->profile;
        $dom = new \DomDocument();
        $dom->loadHtml($content, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        $imageFile = $dom->getElementsByTagName('img');

        foreach ($imageFile as $item => $image) {
            $data = $image->getAttribute('src');
            list($type, $data) = explode(';', $data);
            list(, $data)      = explode(',', $data);
            $imgeData = base64_decode($data);
            $image_name = "/upload/" . time() . $item . '.png';
            $path = public_path() . $image_name;
            file_put_contents($path, $imgeData);

            $image->removeAttribute('src');
            $image->setAttribute('src', $image_name);
        }

        $content = $dom->saveHTML();

        $fileUpload = M_profile::find($request->id);
        $fileUpload->profile = $content;
        $fileUpload->title = $request->title;
        $fileUpload->author = "Administrator";
        $update = $fileUpload->update();
        if ($update) {
            Session::flash('info', 'data update');
            return redirect()->route('daftarPro');
        }
    }




    public function sejarah()
    {
        $data  = [
            'title'  => 'Sejarah Desa'
        ];
        return view('admin.sejarahdesa', $data);
    }
}
