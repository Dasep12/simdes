@extends('admin/template')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Profile Desa</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/profile">This is</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Profile Desa</strong>
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
            <form action="/admin/updateprofile" method="post" enctype="multipart/form-data">
                @csrf
                <label>Judul</label>
                <input type="text" class="form-control" name="title" value="{{ $data->title }}">
                <div class="ibox ">
                    <hr>
                    <label>Content</label>
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="ibox-content no-padding">
                        <textarea name="profile" rows="40" class="summernote">
                        {{ $data->profile }}
                        </textarea>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-info">Simpan Data</button>
                    </div>
            </form>
        </div>
    </div>
    @endsection