@extends('user/template')

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
<div class="row">
    <!-- colom kiri  -->
    <div class="col-lg-8 mb-4">
        <div class="card">
            <div class="card-header">
                <h5>Berita Desa</h5>
            </div>
            <div class="card-body">
                <div class="list-group mb-1">
                    @foreach($data as $p)

                    @if($p->cover === "null")
                    @else
                    <img src="upload/{{$p->cover}}">
                    @endif
                    <span class="list-group-item " href="#">
                        <a href="#">{{ $p->created_at }} | {{$p->author}}</a>
                        <a href="/detail/{{ $p->id }}/{{ $p->slug }}">
                            <h3 class="list-group-item-heading">
                                {{$p->title}}
                            </h3>
                        </a>
                        <div class="form-group">
                            {!! $p->excerpt !!}
                            <a href="/detail/{{ $p->id }}/{{ $p->slug }}">Baca Selengkapnya</a>
                        </div>
                    </span>
                    <hr>
                    @endforeach
                </div>
                @if($data)
                <div class="row justify-content-center mb-3">
                    <button class="btn btn-info btn-lg">Tampilkan Semua Berita</button>
                </div>
                @else
                <h3 class="text-center">Tidak ada Berita</h3>
                @endif
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
<!-- end of colom kanan -->



<!-- perangakt desa  -->
<div class="row mb-5 mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="fw-bold text-center card-header">
                <h2>Perangkat Desa</h2>
            </div>
            <div class="card-body">
                <!-- Carousel items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <?php for ($e = 0; $e < 4; $e++) { ?>
                                <!-- profile -->
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="our-team">
                                        <div class="pic">
                                            <img src="img/dasep.png">
                                        </div>
                                        <div class="team-content">
                                            <h3 class="title">Dasep Depiyawan</h3>
                                            <span class="post">Kepala Desa</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of profile -->
                            <?php } ?>
                        </div>
                        <!--.row-->
                    </div>
                    <!--.item-->

                </div>
                <!--.carousel-inner-->
            </div>
            <!--.Carousel-->
        </div>
    </div>
</div>
<!-- end of perangkat desa -->

@endsection

<script>

</script>