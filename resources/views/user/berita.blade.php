@extends('template')

@section('content')
<div class="row mb-2">
    <div class="col-lg-12">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/cover.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/cover.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/cover2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div class="row mb-3">
    <!-- colom kiri  -->
    <div class="col-lg-8">
        <div class="ibox ">
            <div class="ibox-title">
                <h5>Berita Desa</h5>
            </div>
            <div class="ibox-content">
                <div class="list-group mb-1">
                    <?php for ($i = 0; $i < 3; $i++) { ?>
                        <img src="lampiran/cover.jpg">
                        <span class="list-group-item " href="#">
                            <a href="#">11 Juni 2020 11:22:04 | SID Gunung Halu</a>
                            <a href="">
                                <h3 class="list-group-item-heading">
                                    Pembagian Sembako Paket 1 JPS Gemilang
                                </h3>
                            </a>
                            <p class="">I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. </p>
                        </span>
                        <hr>
                    <?php  } ?>
                </div>
                <div class="row justify-content-center mb-3">
                    <button class="btn btn-info btn-lg">Tampilkan Semua Berita</button>
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

        <!-- kolom populer -->
        <strong>Berita Populer</strong>
        <div id="vertical-timeline" class="vertical-container light-timeline no-margins">
            <?php for ($j = 0; $j < 4; $j++) { ?>
                <div class="vertical-timeline-block">
                    <div class="vertical-timeline-icon navy-bg">
                        <i class="fa fa-book"></i>
                    </div>
                    <div class="vertical-timeline-content">
                        <a href="">
                            <h5>Pembagian Sembako Paket 1 JPS Gemilang</h5>
                        </a>
                        <span class="text-small">
                            Dibaca 806 Kali | Transparansi Dana Desa
                        </span>
                    </div>
                </div>
            <?php } ?>
        </div>
        <!-- end of kolom populer -->
    </div>
</div>
<!-- end of kolom populer -->
<!-- end of colom kanan -->


<!-- perangakt desa  -->

<!-- end of perangkat desa -->
@endsection

<script>

</script>