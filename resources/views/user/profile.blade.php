@extends('user/template')

@section('content')

<div class="row mb-3">
    <!-- colom kiri  -->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <p>Administrator <i class="fa fa-user"></i> </p>
                <h2 class="">
                    PEMERINTAH DESA
                </h2>
                <div class="form-group text-center">
                    <img height="300px" width="600px" src="lampiran/geografis.png" class="img-fluid">
                </div>
                <h2 class="">
                    Berikut ini Profil Wilayah Desa Gunung Halu
                </h2>
                <p>1. Luas Wilayah</p>
                <table>
                    <tbody>
                        <tr>
                            <td width="293">
                                <p>Luas pemukiman</p>
                            </td>
                            <td width="281">
                                <p>47,5&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.ha/m2</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="293">
                                <p>Luas persawahan</p>
                            </td>
                            <td width="281">
                                <p>&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.ha/m2</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="293">
                                <p>Luas perkebunan</p>
                            </td>
                            <td width="281">
                                <p>200,5&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.ha/m2</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="293">
                                <p>Luas kuburan</p>
                            </td>
                            <td width="281">
                                <p>6,5&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.ha/m2</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="293">
                                <p>Luas pekarangan</p>
                            </td>
                            <td width="281">
                                <p>&nbsp;&nbsp; 16,04&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.ha/m2</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="293">
                                <p>Luas tanaman</p>
                            </td>
                            <td width="281">
                                <p>&nbsp; 110&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.ha/m2</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="293">
                                <p>Perkantoran</p>
                            </td>
                            <td width="281">
                                <p>0,5&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.ha/m2</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="293">
                                <p>Luas prasarana umum lainnya</p>
                            </td>
                            <td width="281">
                                <p>9&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.ha/m2</p>
                            </td>
                        </tr>
                        <tr>
                            <td width="293">
                                <p><strong>Total luas</strong></p>
                            </td>
                            <td width="281">
                                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 390,04&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;&hellip;.ha/m2</p>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p>2. Batas-batas</p>
                <ul>
                    <li>
                        <table width="640">
                            <tbody>
                                <tr>
                                    <td colspan="3" width="576">
                                        <p><strong>&nbsp;Batas </strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="217">
                                        <p><strong>Batas</strong></p>
                                    </td>
                                    <td width="161">
                                        <p><strong>Desa/Kelurahan</strong></p>
                                    </td>
                                    <td width="199">
                                        <p><strong>Kecamatan</strong></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="217">
                                        <p>Sebelah utara</p>
                                    </td>
                                    <td width="161">
                                        <p>Desa Tanglad</p>
                                    </td>
                                    <td width="199">
                                        <p>Nusa Penida</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="217">
                                        <p>Sebelah selatan</p>
                                    </td>
                                    <td width="161">
                                        <p>Samudra Indonesia</p>
                                    </td>
                                    <td width="199">
                                        <p>-</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="217">
                                        <p>Sebelah timur</p>
                                    </td>
                                    <td width="161">
                                        <p>Desa Tanglad</p>
                                    </td>
                                    <td width="199">
                                        <p>Nusa Penida</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="217">
                                        <p>Sebelah barat</p>
                                    </td>
                                    <td width="161">
                                        <p>Desa Batukandik</p>
                                    </td>
                                    <td width="199">
                                        <p>Nusa Penida</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </li>
                </ul>

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