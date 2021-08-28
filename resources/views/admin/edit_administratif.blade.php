@extends('admin/template')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Data Desa</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">This is</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Data Administratif</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        <div class="title-action">
            <a href="" class="btn btn-primary">This is action area</a>
        </div>
    </div>
</div>

<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-12">
            <form action="/admin/administratif" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-body">
                        <input type="hidden" value="{{ $data->id }}">
                        <div class="form-group">
                            <label>Nama Daerah</label>
                            <input type="text" class="form-control" name="daerah" value="{{ $data->daerah }}">
                        </div>
                        <div class="form-group">
                            <label>Jumlah RT</label>
                            <input type="text" class="form-control" name="jumlah_rt" value="{{ $data->jumlah_rt }}">
                        </div>
                        <div class="form-group">
                            <label>Jumlah KK</label>
                            <input type="text" class="form-control" name="jumlah_kk" value="{{ $data->jumlah_kk }}">
                        </div>
                        <div class="form-group">
                            <label>Laki Laki</label>
                            <input type="text" class="form-control" name="laki_laki" value="{{ $data->laki_laki }}">
                        </div>
                        <div class="form-group">
                            <label>Perempuan</label>
                            <input type="text" class="form-control" name="perempuan" value="{{ $data->perempuan }}">
                        </div>
                        <div class="form-group">
                            <label>Jumlah Jiwa</label>
                            <input type="text" class="form-control" name="jumlah_jiwa" value="{{ $data->jumlah_jiwa }}">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger">Simpan</button>
                            <button class="btn btn-danger">Simpan</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection