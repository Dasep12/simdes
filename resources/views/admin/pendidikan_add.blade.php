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
            <form action="/admin/pendidikan/add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="hidden" name="author" value="Administrator">
                            <input type="hidden" name="belum_isi" value="0">
                            <label>Kelompok</label>
                            <select name="kelompok" class="form-control @error('kelompok') is-invalid @enderror">
                                @if(old('kelompok') == "TIDAK / BELUM SEKOLAH"
                                || old('kelompok') == "BELUM TAMAT SD/SEDERAJAT"
                                || old('kelompok') == "TAMAT SD / SEDERAJAT"
                                || old('kelompok') == "SLTP/SEDERAJAT"
                                || old('kelompok') == "SLTA / SEDERAJAT"
                                || old('kelompok') == "DIPLOMA I / II"
                                || old('kelompok') == "DIPLOMA IV/ STRATA I"
                                || old('kelompok') == "STRATA II"
                                || old('kelompok') == "STRATA III")
                                <option>{{ old('kelompok') }}</option>
                                <option>TIDAK / BELUM SEKOLAH</option>
                                <option>BELUM TAMAT SD/SEDERAJAT</option>
                                <option>TAMAT SD / SEDERAJAT</option>
                                <option>SLTP/SEDERAJAT</option>
                                <option>SLTA / SEDERAJAT</option>
                                <option>DIPLOMA I / II</option>
                                <option>AKADEMI/ DIPLOMA III/S. MUDA</option>
                                <option>DIPLOMA IV/ STRATA I</option>
                                <option>STRATA II</option>
                                <option>STRATA III</option>
                                @else
                                <option value="">Pilih</option>
                                <option>TIDAK / BELUM SEKOLAH</option>
                                <option>BELUM TAMAT SD/SEDERAJAT</option>
                                <option>TAMAT SD / SEDERAJAT</option>
                                <option>SLTP/SEDERAJAT</option>
                                <option>SLTA / SEDERAJAT</option>
                                <option>DIPLOMA I / II</option>
                                <option>AKADEMI/ DIPLOMA III/S. MUDA</option>
                                <option>DIPLOMA IV/ STRATA I</option>
                                <option>STRATA II</option>
                                <option>STRATA III</option>
                                @endif
                            </select>
                            @error('kelompok')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jumlah Laki Laki</label>
                            <input value="{{ old('laki_laki') }}" type="text" class="form-control @error('laki_laki') is-invalid @enderror" name="laki_laki">
                            @error('laki_laki')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jumlah Perempuan</label>
                            <input value="{{ old('perempuan') }}" type="text" class="form-control @error('perempuan') is-invalid @enderror" name="perempuan">
                            @error('perempuan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger">Simpan</button>
                            <a href="/admin/pendidikan" class="btn btn-success">Kembali</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection