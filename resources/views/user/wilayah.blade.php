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
                <h2 class='text-title mt0'><strong>Demografi Berdasar Populasi Per Wilayah</strong></h2>

                <div class='table-responsive'>
                    <table class='table table-bordered table-striped'>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Dusun</th>
                                <th>Nama Kepala Dusun</th>
                                <th>Jumlah RT</th>
                                <th>Jumlah KK</th>
                                <th>Jiwa</th>
                                <th>Lk</th>
                                <th>Pr</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>BUNGKIL</td>
                                <td>I WAYAN LINGGIH</td>
                                <td class='text-right'>0</td>
                                <td class='text-right'>89</td>
                                <td class='text-right'>316</td>
                                <td class='text-right'>172</td>
                                <td class='text-right'>144</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>DLUNDUNGAN</td>
                                <td>I KADEK YUDANA</td>
                                <td class='text-right'>0</td>
                                <td class='text-right'>100</td>
                                <td class='text-right'>332</td>
                                <td class='text-right'>181</td>
                                <td class='text-right'>151</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>RAMUAN</td>
                                <td>I NYOMAN MURDANA</td>
                                <td class='text-right'>0</td>
                                <td class='text-right'>66</td>
                                <td class='text-right'>214</td>
                                <td class='text-right'>113</td>
                                <td class='text-right'>101</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>SEDEHING</td>
                                <td>I MADE SUARTA</td>
                                <td class='text-right'>0</td>
                                <td class='text-right'>125</td>
                                <td class='text-right'>465</td>
                                <td class='text-right'>240</td>
                                <td class='text-right'>225</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>SEKARTAJI</td>
                                <td>I KOMANG SUKADANA</td>
                                <td class='text-right'>0</td>
                                <td class='text-right'>134</td>
                                <td class='text-right'>527</td>
                                <td class='text-right'>268</td>
                                <td class='text-right'>259</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>TABUANAN</td>
                                <td>I WAYAN GATA</td>
                                <td class='text-right'>0</td>
                                <td class='text-right'>47</td>
                                <td class='text-right'>140</td>
                                <td class='text-right'>72</td>
                                <td class='text-right'>68</td>
                            </tr>
                        </tbody>
                        <tfooter>
                            <tr>
                                <th colspan=3 class='text-right'>TOTAL</th>
                                <th class='text-right'>0</th>
                                <th class='text-right'>561</th>
                                <th class='text-right'>1994</th>
                                <th class='text-right'>1046</th>
                                <th class='text-right'>948</th>
                            </tr>
                        </tfooter>
                    </table>
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