@extends('admin/template')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Berita Desa</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/profile">This is</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Berita Desa</strong>
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
            <form action="/admin/berita/add" method="post" enctype="multipart/form-data">
                @csrf
                <label>Judul</label>
                <input type="text" class="form-control @error('title') is-invalid  @enderror" name="title">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <label>Slug</label>
                <input type="text" class="form-control" name="slug"><br>

                <label>Cover Berita</label>
                <input type="file" class="form-control" name="file">

                <div class="ibox ">
                    <hr>
                    <label>Content</label>
                    <div class="ibox-content no-padding">
                        <textarea name="berita"></textarea>
                    </div>

                </div>
                <div class="form-group">
                    <button class="btn btn-danger">Simpan</button>
                </div>
        </div>
    </div>
</div>

@endsection