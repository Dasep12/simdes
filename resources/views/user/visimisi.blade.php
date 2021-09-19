@extends('user/template')

@section('content')

<div class="row  mb-5">
    <!-- colom kiri  -->
    <div class="col-lg-8 mb-4">
        <div class="card">
            <div class="card-body">
                <h2>Visi Misi Desa PuncakSari</h2>
                <p>{{ $data->author }} <i class="fa fa-user"></i> </p>
                <div class="form-group text-center">
                    <img height="300px" width="600px" src="upload/{{ $data->cover }}" class="img-fluid">

                </div>
                <h2 class="text-center">Visi</h2>
                <p>
                    {{ $data->visi }}
                </p>

                <h2 class="text-center">Misi</h2>
                <p>
                    {{ $data->misi }}
                </p>
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