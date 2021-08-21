<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Profile extends Controller
{
    //

    public function profile()
    {
        $data  = [
            'title'  => 'Profile Desa'
        ];
        return view('admin.profile', $data);
    }

    public function form_edit_profile()
    {
        $data  = [
            'title'  => 'Profile Desa'
        ];
        return view('admin.edit_profile_desa', $data);
    }




    public function sejarah()
    {
        $data  = [
            'title'  => 'Sejarah Desa'
        ];
        return view('admin.sejarahdesa', $data);
    }
}
