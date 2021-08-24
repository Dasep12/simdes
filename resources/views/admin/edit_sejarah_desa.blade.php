@extends('admin/template')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Sejarah Desa</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">This is</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Sejarah Desa</strong>
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
            @if(Session('errors'))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $p)
                    <li>{{ $p }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            <form action="/admin/updateSejarah" method="post" enctype="multipart/form-data">
                @csrf
                <label>Judul</label>
                <input type="text" class="form-control" name="title" value="{{ $data->title }}">
                <div class="ibox ">
                    <hr>
                    <label>Content</label>
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="ibox-content no-padding">
                        <textarea name="sejarah">{{ $data->sejarah }}</textarea>
                    </div>
                </div>
                <button class="btn btn-danger">Simpan</button>
        </div>
    </div>
</div>

@endsection