@extends('admin/template')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Produk Desa</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/profile">This is</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Produk Desa</strong>
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
            <form action="/admin/produk/add" method="post" enctype="multipart/form-data">
                @csrf
                <label>Nama Produk</label>
                <input type="text" class="form-control @error('namaProduk') is-invalid @enderror" name="namaProduk" value="{{ old('namaProduk') }}">
                @error('namaProduk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

                <label>ID Produk</label>
                <input type="text" class="form-control @error('idProduk') is-invalid @enderror" name="idProduk" value="{{ old('idProduk') }}">
                @error('idProduk')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror


                <div class="ibox ">
                    <hr>
                    <label>Content</label>
                    <div class="ibox-content no-padding">
                        <textarea name="deskripsi">{{ old('deskripsi') }}</textarea>
                    </div>
                </div>

                <label>Gallery Produk</label>
                <input type="file" accept="image/*" class="form-control" name="file[]" multiple>

                <div class="form-group">
                    <button class="btn btn-danger">Simpan</button>
                    <a href="/admin/produk" class="btn btn-info">Kembali</a>
                </div>
        </div>
    </div>
</div>

@endsection