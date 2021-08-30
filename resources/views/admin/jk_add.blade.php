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
            <form action="/admin/jk/add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card ">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="hidden" name="author" value="Administrator">
                            <label>Kelompok</label>
                            <select name="kelompok" class="form-control @error('kelompok') is-invalid @enderror">
                                <option value="">Pilih</option>
                                <option>Perempuan</option>    
                                <option>Laki-Laki</option>    
                            </select>
                            @error('kelompok')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input value="{{ old('jumlah') }}" type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah">
                            @error('jumlah')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger">Simpan</button>
                            <a href="/admin/jk" class="btn btn-success">Kembali</a>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
</div>

@endsection