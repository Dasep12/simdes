@extends('user/template')

@section('content')

<div class="row  mb-5">
    <!-- colom kiri  -->
    <div class="col-lg-8 mb-4">
        <div class="card">
            <div class="card-body">
                <h2>Visi Misi Desa GunungHalu</h2>
                <p>Administrator <i class="fa fa-user"></i> </p>
                <div class="form-group text-center">
                    <img height="300px" width="600px" src="img/kecamatan-gunung-halu.jpg" class="img-fluid">

                </div>
                <h2 class="text-center">Visi</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet autem dolorem tempore alias minima, earum nisi expedita at nostrum quidem quod consectetur repellat maiores. Nobis soluta nihil sit deserunt saepe?
                </p>

                <h2 class="text-center">Misi</h2>
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi consequuntur facere nostrum iure earum. Repellat doloribus natus eum assumenda. Quo nulla possimus nam odio soluta ipsam quisquam recusandae ratione unde nesciunt magnam molestias dolorem sunt sit incidunt voluptatum deleniti, reprehenderit fugiat commodi culpa!
                </p>
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