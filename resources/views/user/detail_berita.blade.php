@extends('user/template')

@section('content')

<div class="row  mt-2">
    <!-- colom kiri  -->
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header bg-white">
                <span class="">Posted on {{ $data->created_at }} | <i class="fa fa-user"></i> {{$data->author}}</span><br>
                <span>dibaca {{$data->viewer}}x <i class="fa fa-book"></i> </span>
            </div>
            <div class="card-body">
                <h2>{{ $data->title }}</h2>
                <div class="form-group text-center">
                    <img height="300px" width="300px" src="/upload/{{ $data->cover }}" class="img-fluid">
                </div>
                <div class="form-group table-responsive">
                    <p class="text-left">
                        {!! $data->content !!}
                    </p>

                </div>
                <div class="btn-group">
                    <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!</button>
                    <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
                    <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
                </div>
            </div>
        </div>

        <div class="ibox mt-3">
            <form action="/komentar" name="komentar" method="post">
                <div class="ibox-content">
                    <h3>Tinggalkan Komentar</h3>

                    <div class="form-group">
                        <label>Name</label>
                        @csrf
                        <input type="hidden" name="m_berita_id" value="{{ $data->id }}">
                        <input type="hidden" name="slug" value="{{ $data->slug }}">
                        <input type="text" required name="name" class="form-control" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="comment" required class="form-control" placeholder="Your message" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send</button>
                </div>
            </form>

            <div class="social-footer">
                <h4>Komentar <i class="fa fa-comment"></i> </h4>
                @foreach($data->comment as $com)
                <div class="social-comment">
                    <a href="" class="float-left">
                        <img alt="image" class="img-rounded" src="/img/user3.png">
                    </a>
                    <div class="media-body">
                        <a href="#">
                            {{ $com->name }}
                        </a>
                        {{ $com->comment }}
                        <br />
                        <small class="text-muted">{{ $com->created_at }}</small>
                    </div>
                </div>
                @endforeach
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


<!-- artikel lainnya -->
<div class="row justify-content-md-center">
    <div class="col-lg-12">
        <h2 class="text-center m">
            Artikel Lainnya
        </h2>

        <div class="slick_demo_2">
            @foreach($berita as $brt)
            <div>
                <div class="ibox">
                    <div class="ibox-content">
                        <a href="/detail/{{ $brt->m_berita_id }}/{{ $data->slug }}" class="btn-link">
                            <h2>
                                {{$brt->title}}
                            </h2>
                        </a>
                        <div class="small m-b-xs">
                            <strong>{{$brt->author}}</strong> <span class="text-muted"><i class="fa fa-clock-o"></i> {{$brt->date_post}}</span>
                        </div>
                        <p>
                            {!! $brt->excerpt !!}
                        </p>
                        <div class="row">
                            <div class="col-md-6">
                                <h5>Tags:</h5>
                                <button class="btn btn-primary btn-xs" type="button">Model</button>
                                <button class="btn btn-white btn-xs" type="button">Publishing</button>
                            </div>
                            <div class="col-md-6">
                                <div class="small text-right">
                                    <h5>Stats:</h5>
                                    <div> <i class="fa fa-comments-o"> </i> {{ $brt->comment->count() }} comments </div>
                                    <i class="fa fa-eye"> </i> 144 views
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- end of artikel lainnya -->
@endsection