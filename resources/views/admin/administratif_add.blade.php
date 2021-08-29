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
            @if(Session('info'))
            <div class="alert alert-danger">
                <p>{{ Session('info') }}</p>
            </div>
            @endif
            <form action="/admin/administratif/add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Daerah</label>
                            <input value="{{ old('daerah') }}" type="text" class="form-control @error('daerah') is-invalid @enderror" name="daerah">
                            @error('daerah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jumlah RT</label>
                            <input value="{{ old('jumlah_rt') }}" type="text" class="form-control @error('jumlah_rt') is-invalid @enderror" name="jumlah_rt">
                            @error('jumlah_rt')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jumlah KK</label>
                            <input type="text" value="{{ old('jumlah_kk') }}" class="form-control @error('jumlah_kk') is-invalid @enderror" name="jumlah_kk">
                            @error('jumlah_kk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Laki Laki</label>
                            <input type="text" value="{{ old('laki_laki') }}" class="form-control @error('laki_laki') is-invalid @enderror" name="laki_laki">
                            @error('laki_laki')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Perempuan</label>
                            <input type="text" value="{{ old('perempuan') }}" class="form-control @error('perempuan') is-invalid @enderror" name="perempuan">
                            @error('perempuan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jumlah Jiwa</label>
                            <input type="text" value="{{ old('jumlah_jiwa') }}" class="form-control @error('jumlah_jiwa') is-invalid @enderror" name="jumlah_jiwa">
                            @error('jumlah_jiwa')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger">Simpan</button>
                            <a href="/admin/administratif" class="btn btn-success">Kembali</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection