@extends('user/template')

@section('content')

<div class="row mb-3">
    <!-- colom kiri  -->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <p>Administrator <i class="fa fa-user"></i> </p>
                <h2 class="">
                    DATA JENIS KELAMIN
                </h2>
                <h2 class='text-title mt0'><strong>Demografi Berdasar Jenis Kelamin</strong></h2>
                <div class='mt20'>
                    <h3 class='text-title mt0'><strong>Tabel Data</strong></h3>
                </div>
                <div>
                    <div class='table-responsive'>
                        <table class='table table-bordered table-striped'>
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kelompok</th>
                                    <th>Jumlah</th>
                                    <th>%</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php($no=0)
                                @foreach($data as $p)
                                @php($no++)
                                <tr class=''>
                                    <td class='text-right'>{{$no}}</td>
                                    <td>{{$p->kelompok}}</td>
                                    <td class='text-right'>{{ $p->jumlah }}</td>
                                    <td class='text-right'>{{ $p->jumlah . " %" }}</td>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of colom kiri -->

    <!-- colom kanan -->
    <div class="col-lg-4">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Kategori</h5>
            </div>
            <div class="ibox-content no-padding">
                <ul class="list-group">
                    <?php for ($s = 0; $s < 6; $s++) { ?>
                        <li class="list-group-item">
                            <a href="#"><i class="fa fa-angle-right"></i>
                                Berita Desa
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <!-- kolom voting -->
        <div class="ibox">
            <div class="ibox-title">
                <h5>Polling</h5>
            </div>
            <div class="ibox-content">
                <p>
                    Bagaimana Pelayanan dari Pemerintah Desa ?
                </p>
                <form action="">
                    <div class="i-checks"><label> <input type="radio" value="Tidak Puas" name="a"> <i></i> Tidak Puas </label></div>
                    <div class="i-checks"><label> <input type="radio" value="Puas" name="a"> <i></i> Puas </label></div>
                    <div class="i-checks"><label> <input type="radio" value="Sangat Puas" name="a"> <i></i> Sangat Puas </label></div>

                    <textarea placeholder="isi alasan disini" class="form-control"></textarea>
                </form>

                <hr />
                <span class="text-muted small">
                    *data diri anda terlindungi ketika melakukan penilaian*
                </span>
                <div class="m-t-sm">
                    <div class="btn-group">
                        <button class="btn btn-primary btn-sm"><i class="fa fa-send"></i> Sampaikan</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of coloom voting -->

        <!-- Statistik pengunjung-->
        <div class="ibox">
            <div class="ibox-title">
                <h5>Statistik Pengunjung</h5>
            </div>
            <div class="ibox-content">
                <ul>
                    <li>Browser : Mozzila Firefox</li>
                    <li>Pengunjung Hari ini: 1</li>
                    <li>Total Pengunjung: 1</li>
                </ul>
            </div>
        </div>
        <!-- end of statistik -->
    </div>
</div>
<!-- end of colom kanan -->

@endsection