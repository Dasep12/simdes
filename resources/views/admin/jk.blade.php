@extends('admin/template')

@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Data Desa</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/profile">This is</a>
            </li>
            <li class="breadcrumb-item active">
                <strong>Data Jenis Kelamin Berdasarkan KK</strong>
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
            @if(Session('success'))
            <div class="alert alert-success">
                <p>{{ Session('success') }}</p>
            </div>
            @endif
                 <a href="/admin/jk/add" class="btn btn-info mb-2">Tambah Data</a>
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Data Jenis Kelamin Berdasarkan KK</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kelompok</th>
                                    <th>Jumlah</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($data as $p)
                                <tr class="gradeX">
                                    <td><?= $no++ ?></td>
                                    <td>{{ $p->kelompok }}</td>
                                    <td>{{ $p->jumlah }}</td>
                                    <td>
                                        <a onclick="return confirm('Yakin Hapus')" href="/admin/jk/del/{{ $p->id }}" class="btn btn-danger btn-sm btn-xs">delete</a>
                                        <a href="/admin/jk/edit/{{ $p->id }}" class="btn btn-info btn-sm btn-xs">edit</a>
                                        <a target="_blank" href="/jk" class="btn btn-success btn-sm btn-xs">lihat</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @endsection