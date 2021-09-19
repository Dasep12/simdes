@extends('user/template')

@section('content')

<div class="row ">
    <!-- colom kiri  -->
    <div class="col-lg-8 mb-3">
        <div class="card">
            <div class="card-body">
                <p>Administrator <i class="fa fa-user"></i> </p>
                <h2 class="">
                    WILAYAH ADMINISTRATIF
                </h2>
                <h2 class='text-title mt0'><strong>Demografi Berdasar Populasi Per Wilayah</strong></h2>

                <div class='table-responsive'>
                    <table class='table table-bordered table-striped'>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Daerah</th>
                                <th>Jumlah RT</th>
                                <th>Jumlah KK</th>
                                <th>Jumlah Jiwa</th>
                                <th>Laki Laki</th>
                                <th>Perempuan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no =  1; ?>
                            @foreach($data as $w)
                            <tr>
                                <td><?= $no++ ?></td>
                                <td>{{ $w->daerah }}</td>
                                <td>{{ $w->jumlah_rt }}</td>
                                <td class='text-right'>{{ $w->jumlah_kk }}</td>
                                <td class='text-right'>{{ $w->jumlah_jiwa }}</td>
                                <td class='text-right'>{{ $w->laki_laki }}</td>
                                <td class='text-right'>{{ $w->perempuan }}</td>
                            </tr>
                            @endforeach
                    </table>
                </div>


            </div>
        </div>

    </div>
    <!-- end of colom kiri -->

    <!-- colom kanan -->
    <div class="col-lg-4">
        <!-- <div class="ibox ">
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
        </div> -->

        <!-- kolom voting -->
        <div class="ibox">
            <div class="ibox-title">
                <h5>Polling</h5>
            </div>
            <div class="ibox-content">
                <p>
                    Bagaimana Pelayanan dari Pemerintah Desa ?
                </p>
                <form action="/sendVote" method="post">
                    @csrf
                    <div class="i-checks"><label> <input type="radio" value="Tidak Puas" name="vote"> <i></i> Tidak Puas </label></div>
                    <div class="i-checks"><label> <input type="radio" value="Puas" name="vote"> <i></i> Puas </label></div>
                    <div class="i-checks"><label> <input type="radio" value="Sangat Puas" name="vote"> <i></i> Sangat Puas </label></div>

                    <textarea name="alasan" placeholder="isi alasan disini" class="form-control"></textarea>

                    <hr />
                    <span class="text-muted small">
                        *data diri anda terlindungi ketika melakukan penilaian*
                    </span>
                    <div class="m-t-sm">
                        <div class="btn-group">
                            <button class="btn btn-primary btn-sm"><i class="fa fa-send"></i> Sampaikan</button>
                        </div>
                </form>
            </div>
        </div>
        @if(Session('info'))
        <script>
            alert("Pesan di kirim");
        </script>
        @endif
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