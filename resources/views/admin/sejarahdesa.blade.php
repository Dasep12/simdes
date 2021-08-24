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
            @if(Session('info'))
            <div class="alert alert-danger">
                <p>{{ Session('info') }}}</p>
            </div>
            @endif
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Profile Desa</h5>
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
                                    <th>Profile</th>
                                    <th>Opsi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                @foreach($data as $p)
                                <tr class="gradeX">
                                    <td><?= $no++ ?></td>
                                    <td><?= 'Profile Desa' ?></td>
                                    <td>
                                        <a href="/admin/editprofile/{{ $p->id }}" class="btn btn-info btn-sm btn-xs">edit</a>
                                        <a target="_blank" href="/profile" class="btn btn-success btn-sm btn-xs">lihat</a>
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