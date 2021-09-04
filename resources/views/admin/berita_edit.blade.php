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
            <form action="/admin/update_berita" method="post" enctype="multipart/form-data">
                @csrf
                <label>Judul</label>
                <input type="hidden" name="id" value="{{ $data->id }}">
                <input onkeyup="buat()" id="judul" type="text" value="{{ $data->title }}" class="form-control @error('title') is-invalid  @enderror" name="title">
                @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <label>Slug</label>
                <input type="text" id="slug" value="{{ $data->slug }}" class="form-control @error('slug') is-invalid  @enderror" name="slug">
                @error('slug')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <label class="mt-1">Cover Berita</label>
                <input type="file" class="form-control" name="file">

                <div class="form-group">
                    @error('berita')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                    <hr>
                    <label>Content</label>
                    <textarea name="content">{{ $data->content }}</textarea>
                </div>
                <div class="form-group">
                    <button class="btn btn-danger">Simpan</button>
                </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function buat() {
        var title = $('#judul').val();
        $('#slug').val(slugify(title));
    }

    function slugify(text) {
        return text.toString().toLowerCase().replace(/\s+/g, '-') // Ganti spasi dengan -
            .replace(/[^\w\-]+/g, '') // Hapus semua karakter non-word
            .replace(/\-\-+/g, '-') // Ganti multiple - atau single -
            .replace(/^-+/, '')
            .replace(/-+$/, '');
    }
</script>
@endsection