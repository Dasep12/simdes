<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Administratif;

class DataDesa extends Controller
{
    //


    public function administratif()
    {
        $data = [
            'title'  => 'Data Administratif ',
            'data'   => Administratif::all()
        ];
        return view('admin.administratif', $data);
    }

    public function add_administratif()
    {
        $data = [
            'title'  => 'Data Administratif'
        ];
        return view('admin.administratif_add', $data);
    }

    public function edit_administratif($id)
    {
        $data = [
            'title'  => 'Data Administratif',
            'data'   => Administratif::find($id)
        ];
        return view('admin.edit_administratif', $data);
    }
}
