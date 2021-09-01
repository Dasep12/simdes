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
            <form action="/admin/umur/update" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{ $data->id }}">
                            <input type="hidden" name="author" value="Administrator">
                            <label>Kelompok</label>
                            <select name="kelompok" class="form-control @error('kelompok') is-invalid @enderror">
                                <option selected="">{{ $data->kelompok }}</option>
                                <option value="">Pilih</option>
                                <option>Di bawah 1 Tahun</option>
                                <option>2 s/d 4 Tahun</option>
                                <option>5 s/d 9 Tahun</option>
                                <option>10 s/d 14 Tahun</option>
                                <option>15 s/d 19 Tahun</option>
                                <option>20 s/d 24 Tahun</option>
                                <option>25 s/d 29 Tahun</option>
                                <option>30 s/d 34 Tahun</option>
                                <option>35 s/d 39 Tahun</option>
                                <option>40 s/d 44 Tahun</option>
                                <option>45 s/d 49 Tahun</option>
                                <option>50 s/d 54 Tahun</option>
                                <option>55 s/d 59 Tahun</option>
                                <option>60 s/d 64 Tahun</option>
                                <option>65 s/d 69 Tahun</option>
                                <option>70 s/d 74 Tahun</option>
                                <option>Di atas 75 Tahun</option>
   
                            </select>
                            @error('kelompok')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jumlah Laki Laki</label>
                            <input value="{{ $data->laki_laki }}" type="text" class="form-control @error('laki_laki') is-invalid @enderror" name="laki_laki">
                            @error('laki_laki')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jumlah Perempuan</label>
                            <input value="{{ $data->perempuan }}" type="text" class="form-control @error('perempuan') is-invalid @enderror" name="perempuan">
                            @error('perempuan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger">Simpan</button>
                            <a href="/admin/umur" class="btn btn-success">Kembali</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection