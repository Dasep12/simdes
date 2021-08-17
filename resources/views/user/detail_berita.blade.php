@extends('user/template')

@section('content')

<div class="row">
    <!-- colom kiri  -->
    <div class="col-lg-8">
        <div class="ibox ">
            <div class="ibox-title">
                <h5 class="bg-info">Posted on 21 Januari 18:00 | <i class="fa fa-user"></i> Admin</h5><br>
                <span>dibaca 100x <i class="fa fa-book"></i> </span>
            </div>
            <div class="ibox-content">
                <h2>Pembagain Sembako</h2>
                <div class="form-group text-center">
                    <img height="300px" width="600px" src="lampiran/cover.jpg" class="img img-responsive">

                </div>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, commodi, odit laborum est quidem accusamus nihil voluptate doloribus quaerat molestias, reiciendis quod provident? Non suscipit harum voluptatum id cupiditate dolore?
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Modi nostrum, recusandae voluptatem deleniti dolorem tempora laboriosam nobis culpa debitis ut dicta consequuntur doloremque sit autem corrupti asperiores maiores ducimus delectus.
                </p>
                <div class="btn-group">
                    <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!</button>
                    <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
                    <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
                </div>
            </div>
        </div>
        <div class="ibox">
            <div class="ibox-content">
                <h3>Tinggalkan Komentar</h3>

                <div class="form-group">
                    <label>Subject</label>
                    <input type="email" class="form-control" placeholder="Message subject">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" placeholder="Your message" rows="3"></textarea>
                </div>
                <button class="btn btn-primary btn-block">Send</button>
            </div>

            <div class="social-footer">
                <h4>Komentar <i class="fa fa-comment"></i> </h4>
                <?php for ($a = 0; $a < 5; $a++) { ?>
                    <div class="social-comment">
                        <a href="" class="float-left">
                            <img alt="image" class="img-rounded" src="img/a1.png">
                        </a>
                        <div class="media-body">
                            <a href="#">
                                Andrew Williams
                            </a>
                            Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                            <br />
                            <small class="text-muted">12.06.2014</small>
                        </div>
                    </div>
                <?php } ?>
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
            <?php for ($c = 0; $c < 5; $c++) { ?>
                <div>
                    <div class="ibox">
                        <div class="ibox-content">
                            <a href="article.html" class="btn-link">
                                <h2>
                                    One morning, when Gregor Samsa
                                </h2>
                            </a>
                            <div class="small m-b-xs">
                                <strong>Adam Novak</strong> <span class="text-muted"><i class="fa fa-clock-o"></i> 28th Oct 2015</span>
                            </div>
                            <p>
                                English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web
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
                                        <div> <i class="fa fa-comments-o"> </i> 56 comments </div>
                                        <i class="fa fa-eye"> </i> 144 views
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php  } ?>
        </div>
    </div>
</div>
<!-- end of artikel lainnya -->
@endsection