@extends('admin/template')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Pemerintahan Desa</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/profile">This is</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Pemerintah Desa</strong>
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
            <form action="/admin/pemerintah" method="post" enctype="multipart/form-data">
                @csrf
                <label>Judul</label>
                <input type="hidden" value="Administrator" name="author">
                <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ $data->judul }} ">
                @error('judul')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <div class="ibox">
                    <hr>
                    <label>Content</label>
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="ibox-content no-padding">
                        <textarea class="is-invalid" name="pemerintah">{{ $data->pemerintah }}</textarea>
                    </div>
                    @error('pemerintah')
                    <div class="text-danger">
                        <p>{{ $message }}</p>
                    </div>
                    @enderror
                </div>
                <div class="ibox">
                    <hr>
                    <label>Cover Image</label>
                    <input type="file" name="file" class="form-control">
                </div>
                <button class="btn btn-danger">Simpan</button>
        </div>
    </div>
</div>

@endsection