@extends('user/template')

@section('content')

<div class="row mb-3">
    <!-- colom kiri  -->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <p>Administrator <i class="fa fa-user"></i> </p>
                <h2 class="">
                    WILAYAH ADMINISTRATIF
                </h2>
                <h2 class='text-title mt0'><strong>Demografi Berdasar Pendidikan Dalam KK</strong></h2>
                <div class='mt20'>
                    <h3 class='text-title mt0'><strong>Tabel Data</strong></h3>
                </div>
                <div>
                    <div class='table-responsive'>
                        <table class='table table-bordered table-striped'>
                            <thead>
                                <tr>
                                    <th rowspan=2>No</th>
                                    <th rowspan=2 class='text-left'>Kelompok</th>
                                    <th colspan=2>Jumlah</th>
                                    <th colspan=2>Laki-laki</th>
                                    <th colspan=2>Perempuan</th>
                                </tr>
                                <tr>
                                    <th class='text-right'>n</th>
                                    <th class='text-right'>%</th>
                                    <th class='text-right'>n</th>
                                    <th class='text-right'>%</th>
                                    <th class='text-right'>n</th>
                                    <th class='text-right'>%</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class=''>
                                    <td class='text-right'>1</td>
                                    <td>TIDAK / BELUM SEKOLAH</td>
                                    <td class='text-right'>0</td>
                                    <td class='text-right'>0.00%</td>
                                    <td class='text-right'>0</td>
                                    <td class='text-right'>0.00%</td>
                                    <td class='text-right'>0</td>
                                    <td class='text-right'>0.00%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>2</td>
                                    <td>BELUM TAMAT SD/SEDERAJAT</td>
                                    <td class='text-right'>1522</td>
                                    <td class='text-right'>76.33%</td>
                                    <td class='text-right'>741</td>
                                    <td class='text-right'>37.16%</td>
                                    <td class='text-right'>781</td>
                                    <td class='text-right'>39.17%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>3</td>
                                    <td>TAMAT SD / SEDERAJAT</td>
                                    <td class='text-right'>0</td>
                                    <td class='text-right'>0.00%</td>
                                    <td class='text-right'>0</td>
                                    <td class='text-right'>0.00%</td>
                                    <td class='text-right'>0</td>
                                    <td class='text-right'>0.00%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>4</td>
                                    <td>SLTP/SEDERAJAT</td>
                                    <td class='text-right'>192</td>
                                    <td class='text-right'>9.63%</td>
                                    <td class='text-right'>116</td>
                                    <td class='text-right'>5.82%</td>
                                    <td class='text-right'>76</td>
                                    <td class='text-right'>3.81%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>5</td>
                                    <td>SLTA / SEDERAJAT</td>
                                    <td class='text-right'>198</td>
                                    <td class='text-right'>9.93%</td>
                                    <td class='text-right'>133</td>
                                    <td class='text-right'>6.67%</td>
                                    <td class='text-right'>65</td>
                                    <td class='text-right'>3.26%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>6</td>
                                    <td>DIPLOMA I / II</td>
                                    <td class='text-right'>24</td>
                                    <td class='text-right'>1.20%</td>
                                    <td class='text-right'>17</td>
                                    <td class='text-right'>0.85%</td>
                                    <td class='text-right'>7</td>
                                    <td class='text-right'>0.35%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>7</td>
                                    <td>AKADEMI/ DIPLOMA III/S. MUDA</td>
                                    <td class='text-right'>11</td>
                                    <td class='text-right'>0.55%</td>
                                    <td class='text-right'>5</td>
                                    <td class='text-right'>0.25%</td>
                                    <td class='text-right'>6</td>
                                    <td class='text-right'>0.30%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>8</td>
                                    <td>DIPLOMA IV/ STRATA I</td>
                                    <td class='text-right'>46</td>
                                    <td class='text-right'>2.31%</td>
                                    <td class='text-right'>34</td>
                                    <td class='text-right'>1.71%</td>
                                    <td class='text-right'>12</td>
                                    <td class='text-right'>0.60%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>9</td>
                                    <td>STRATA II</td>
                                    <td class='text-right'>1</td>
                                    <td class='text-right'>0.05%</td>
                                    <td class='text-right'>0</td>
                                    <td class='text-right'>0.00%</td>
                                    <td class='text-right'>1</td>
                                    <td class='text-right'>0.05%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>10</td>
                                    <td>STRATA III</td>
                                    <td class='text-right'>0</td>
                                    <td class='text-right'>0.00%</td>
                                    <td class='text-right'>0</td>
                                    <td class='text-right'>0.00%</td>
                                    <td class='text-right'>0</td>
                                    <td class='text-right'>0.00%</td>
                                </tr>
                                <tr class='tr-lebih hide'>
                                    <td class='text-right'></td>
                                    <td>JUMLAH</td>
                                    <td class='text-right'>1994</td>
                                    <td class='text-right'>100.00%</td>
                                    <td class='text-right'>1046</td>
                                    <td class='text-right'>52.46%</td>
                                    <td class='text-right'>948</td>
                                    <td class='text-right'>47.54%</td>
                                </tr>
                                <tr class='tr-lebih hide'>
                                    <td class='text-right'></td>
                                    <td>BELUM MENGISI</td>
                                    <td class='text-right'>0</td>
                                    <td class='text-right'>0.00%</td>
                                    <td class='text-right'>0</td>
                                    <td class='text-right'>0.00%</td>
                                    <td class='text-right'>0</td>
                                    <td class='text-right'>0.00%</td>
                                </tr>
                                <tr class='tr-lebih hide'>
                                    <td class='text-right'></td>
                                    <td>TOTAL</td>
                                    <td class='text-right'>1994</td>
                                    <td class='text-right'>100%</td>
                                    <td class='text-right'>1046</td>
                                    <td class='text-right'>52.46%</td>
                                    <td class='text-right'>948</td>
                                    <td class='text-right'>47.54%</td>
                                </tr>
                            </tbody>
                        </table><button class='btn btn-xs btn-success' id='showData'>Selengkapnya...</button>
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