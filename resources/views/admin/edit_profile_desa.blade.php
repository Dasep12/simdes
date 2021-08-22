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
<<<<<<< HEAD
                </div>
                <div class="ibox-content no-padding">
                    <form method="post" action="" enctype="multipart/form-data">
                        @csrf
                        <div class="summernote">
                            <h3>Lorem Ipsum is simply</h3>
                            dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                            when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                            typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                            <br />
                            <br />
                            <ul>
                                <li>Remaining essentially unchanged</li>
                                <li>Make a type specimen book</li>
                                <li>Unknown printer</li>
                            </ul>
                        </div>
                </div>
                </form>
            </div>
=======
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-info">Simpan Data</button>
                    </div>
            </form>
>>>>>>> author
        </div>
    </div>
    @endsection