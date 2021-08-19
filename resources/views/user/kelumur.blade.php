@extends('user/template')

@section('content')

<div class="row mb-3">
    <!-- colom kiri  -->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-body">
                <p>Administrator <i class="fa fa-user"></i> </p>
                <h2 class='text-title mt0'><strong>Demografi Berdasar Umur</strong></h2>
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
                                    <td>Di bawah 1 Tahun</td>
                                    <td class='text-right'>1</td>
                                    <td class='text-right'>0.05%</td>
                                    <td class='text-right'>1</td>
                                    <td class='text-right'>0.05%</td>
                                    <td class='text-right'>0</td>
                                    <td class='text-right'>0.00%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>2</td>
                                    <td>2 s/d 4 Tahun</td>
                                    <td class='text-right'>27</td>
                                    <td class='text-right'>1.35%</td>
                                    <td class='text-right'>16</td>
                                    <td class='text-right'>0.80%</td>
                                    <td class='text-right'>11</td>
                                    <td class='text-right'>0.55%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>3</td>
                                    <td>5 s/d 9 Tahun</td>
                                    <td class='text-right'>51</td>
                                    <td class='text-right'>2.56%</td>
                                    <td class='text-right'>33</td>
                                    <td class='text-right'>1.65%</td>
                                    <td class='text-right'>18</td>
                                    <td class='text-right'>0.90%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>4</td>
                                    <td>10 s/d 14 Tahun</td>
                                    <td class='text-right'>71</td>
                                    <td class='text-right'>3.56%</td>
                                    <td class='text-right'>41</td>
                                    <td class='text-right'>2.06%</td>
                                    <td class='text-right'>30</td>
                                    <td class='text-right'>1.50%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>5</td>
                                    <td>15 s/d 19 Tahun</td>
                                    <td class='text-right'>89</td>
                                    <td class='text-right'>4.46%</td>
                                    <td class='text-right'>46</td>
                                    <td class='text-right'>2.31%</td>
                                    <td class='text-right'>43</td>
                                    <td class='text-right'>2.16%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>6</td>
                                    <td>20 s/d 24 Tahun</td>
                                    <td class='text-right'>78</td>
                                    <td class='text-right'>3.91%</td>
                                    <td class='text-right'>35</td>
                                    <td class='text-right'>1.76%</td>
                                    <td class='text-right'>43</td>
                                    <td class='text-right'>2.16%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>7</td>
                                    <td>25 s/d 29 Tahun</td>
                                    <td class='text-right'>90</td>
                                    <td class='text-right'>4.51%</td>
                                    <td class='text-right'>49</td>
                                    <td class='text-right'>2.46%</td>
                                    <td class='text-right'>41</td>
                                    <td class='text-right'>2.06%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>8</td>
                                    <td>30 s/d 34 Tahun</td>
                                    <td class='text-right'>60</td>
                                    <td class='text-right'>3.01%</td>
                                    <td class='text-right'>39</td>
                                    <td class='text-right'>1.96%</td>
                                    <td class='text-right'>21</td>
                                    <td class='text-right'>1.05%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>9</td>
                                    <td>35 s/d 39 Tahun </td>
                                    <td class='text-right'>84</td>
                                    <td class='text-right'>4.21%</td>
                                    <td class='text-right'>45</td>
                                    <td class='text-right'>2.26%</td>
                                    <td class='text-right'>39</td>
                                    <td class='text-right'>1.96%</td>
                                </tr>
                                <tr class=''>
                                    <td class='text-right'>10</td>
                                    <td>40 s/d 44 Tahun</td>
                                    <td class='text-right'>51</td>
                                    <td class='text-right'>2.56%</td>
                                    <td class='text-right'>30</td>
                                    <td class='text-right'>1.50%</td>
                                    <td class='text-right'>21</td>
                                    <td class='text-right'>1.05%</td>
                                </tr>
                                <tr class='tr-lebih hide'>
                                    <td class='text-right'>11</td>
                                    <td>45 s/d 49 Tahun</td>
                                    <td class='text-right'>60</td>
                                    <td class='text-right'>3.01%</td>
                                    <td class='text-right'>29</td>
                                    <td class='text-right'>1.45%</td>
                                    <td class='text-right'>31</td>
                                    <td class='text-right'>1.55%</td>
                                </tr>
                                <tr class='tr-lebih hide'>
                                    <td class='text-right'>12</td>
                                    <td>50 s/d 54 Tahun</td>
                                    <td class='text-right'>1119</td>
                                    <td class='text-right'>56.12%</td>
                                    <td class='text-right'>576</td>
                                    <td class='text-right'>28.89%</td>
                                    <td class='text-right'>543</td>
                                    <td class='text-right'>27.23%</td>
                                </tr>
                                <tr class='tr-lebih hide'>
                                    <td class='text-right'>13</td>
                                    <td>55 s/d 59 Tahun</td>
                                    <td class='text-right'>45</td>
                                    <td class='text-right'>2.26%</td>
                                    <td class='text-right'>28</td>
                                    <td class='text-right'>1.40%</td>
                                    <td class='text-right'>17</td>
                                    <td class='text-right'>0.85%</td>
                                </tr>
                                <tr class='tr-lebih hide'>
                                    <td class='text-right'>14</td>
                                    <td>60 s/d 64 Tahun</td>
                                    <td class='text-right'>19</td>
                                    <td class='text-right'>0.95%</td>
                                    <td class='text-right'>7</td>
                                    <td class='text-right'>0.35%</td>
                                    <td class='text-right'>12</td>
                                    <td class='text-right'>0.60%</td>
                                </tr>
                                <tr class='tr-lebih hide'>
                                    <td class='text-right'>15</td>
                                    <td>65 s/d 69 Tahun</td>
                                    <td class='text-right'>25</td>
                                    <td class='text-right'>1.25%</td>
                                    <td class='text-right'>13</td>
                                    <td class='text-right'>0.65%</td>
                                    <td class='text-right'>12</td>
                                    <td class='text-right'>0.60%</td>
                                </tr>
                                <tr class='tr-lebih hide'>
                                    <td class='text-right'>16</td>
                                    <td>70 s/d 74 Tahun</td>
                                    <td class='text-right'>28</td>
                                    <td class='text-right'>1.40%</td>
                                    <td class='text-right'>13</td>
                                    <td class='text-right'>0.65%</td>
                                    <td class='text-right'>15</td>
                                    <td class='text-right'>0.75%</td>
                                </tr>
                                <tr class='tr-lebih hide'>
                                    <td class='text-right'>17</td>
                                    <td>Di atas 75 Tahun</td>
                                    <td class='text-right'>96</td>
                                    <td class='text-right'>4.81%</td>
                                    <td class='text-right'>45</td>
                                    <td class='text-right'>2.26%</td>
                                    <td class='text-right'>51</td>
                                    <td class='text-right'>2.56%</td>
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