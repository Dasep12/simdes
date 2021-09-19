@extends('user/template')

@section('content')

<div class="row  mb-5">
    <!-- colom kiri  -->
    <div class="col-lg-8  mb-4">
        <div class="card mb-3">
            <div class="card-body">
                <p>Administrator <i class="fa fa-user"></i> </p>
                <h2 class="">
                    {{ $data->namaProduk }}
                </h2>
                <div class="form-group text-left">
                    {!! $data->deskripsi !!}
                </div>
            </div>
        </div>

        @if($data->gallery->count() > 0)
        <div class="card">
            <h2 class="text-center">Gambar Produk</h2>
            <div class="card-body">
                <div class="row">
                    @foreach($data->gallery as $glr)
                    <div class="col-lg-5  mb-4 mb-lg-0">
                        <img src="/img/produk/{{ $glr->image }}" class="w-100 shadow-1-strong rounded mb-4" alt="" />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
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