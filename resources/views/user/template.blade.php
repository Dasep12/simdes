<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SIMDES</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/plugins/slick/slick.css" rel="stylesheet">
    <link href="/css/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="/css/plugins/iCheck/custom.css" rel="stylesheet">
</head>

<body class="top-navigation">

    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom white-bg">
                <nav class="navbar navbar-expand-lg navbar-static-top" role="navigation">
                    <!--<div class="navbar-header">-->
                    <!--<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">-->
                    <!--<i class="fa fa-reorder"></i>-->
                    <!--</button>-->

                    <a href="#" class="navbar-brand">Informasi Desa Puncak Sari</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-reorder"></i>
                    </button>

                    <!--</div>-->
                    <div class="navbar-collapse collapse" id="navbar">
                        <ul class="nav navbar-nav mr-auto">
                            <li class="active">
                                <a aria-expanded="false" role="button" href="/"> Beranda</a>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Profile Desa</a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="/profile">Profile Wilayah Desa</a></li>
                                    <li><a href="/sejarah">Sejarah Desa</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown">Pemerintahan Desa</a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="/visimisi">Visi dan Misi</a></li>
                                    <li><a href="/pemerintah">Pemerintah Desa</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Lembaga Masyarakat</a>
                                <ul role="menu" class="dropdown-menu">
                                    @foreach($gamas as $gam)
                                    <li><a href="/gamas/detail/{{ $gam->id }}">{{ $gam->namaLembaga }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Produk Desa</a>
                                <ul role="menu" class="dropdown-menu">
                                    @foreach($produk as $prd)
                                    <li><a href="/produk/info/{{ $prd->id }}">{{ $prd->namaProduk }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a aria-expanded="false" role="button" href="#" class="dropdown-toggle" data-toggle="dropdown"> Data Desa</a>
                                <ul role="menu" class="dropdown-menu">
                                    <li><a href="/wilayah">Data Wilayah Administratif</a></li>
                                    <li><a href="/pendidikan">Data Pendidikan Dalam KK</a></li>
                                    <li><a href="/jk">Data Jenis Kelamin</a></li>
                                    <li><a href="/kelumur">Kelompok Umur</a></li>
                                </ul>
                            </li>

                        </ul>
                        <ul class="nav navbar-top-links navbar-right">
                            <li>
                                <a href="login.html">
                                    <i class="fa fa-sign-out"></i> Log out
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="wrapper wrapper-content">
                <!-- content website -->
                @yield('content')
                <!-- end content -->
            </div>
            <div class="footer">
                <div class="float-right">
                    <strong>Your IP <?= $_SERVER['REMOTE_ADDR'] ?></strong>
                </div>
                <div>
                    <strong>Copyright</strong> Desa Gunung Halu &copy; 2014-2018
                </div>
            </div>




            <!-- Mainly scripts -->
            <script src="/js/jquery-3.1.1.min.js"></script>
            <script src="/js/popper.min.js"></script>
            <script src="/js/bootstrap.js"></script>
            <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
            <script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

            <!-- Custom and plugin javascript -->
            <script src="/js/inspinia.js"></script>
            <script src="/js/plugins/pace/pace.min.js"></script>

            <!-- Flot -->
            <script src="/js/plugins/flot/jquery.flot.js"></script>
            <script src="/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
            <script src="/js/plugins/flot/jquery.flot.resize.js"></script>

            <!-- ChartJS-->
            <script src="/js/plugins/chartJs/Chart.min.js"></script>

            <!-- Peity -->
            <script src="/js/plugins/peity/jquery.peity.min.js"></script>
            <!-- Peity demo -->
            <script src="/js/demo/peity-demo.js"></script>
            <!-- slick carousel-->
            <script src="/js/plugins/slick/slick.min.js"></script>
            <!-- iCheck -->
            <script src="/js/plugins/iCheck/icheck.min.js"></script>
            <script>
                $(document).ready(function() {
                    $('.i-checks').iCheck({
                        checkboxClass: 'icheckbox_square-green',
                        radioClass: 'iradio_square-green',
                    });
                    $('.slick_demo_1').slick({
                        dots: true
                    });

                    $('.slick_demo_2').slick({
                        infinite: true,
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        centerMode: true,
                        responsive: [{
                                breakpoint: 1024,
                                settings: {
                                    slidesToShow: 3,
                                    slidesToScroll: 3,
                                    infinite: true,
                                    dots: true
                                }
                            },
                            {
                                breakpoint: 600,
                                settings: {
                                    slidesToShow: 2,
                                    slidesToScroll: 2
                                }
                            },
                            {
                                breakpoint: 480,
                                settings: {
                                    slidesToShow: 1,
                                    slidesToScroll: 1
                                }
                            }
                        ]
                    });

                    $('.slick_demo_3').slick({
                        infinite: true,
                        speed: 500,
                        fade: true,
                        cssEase: 'linear',
                        adaptiveHeight: true
                    });

                    var d1 = [
                        [1262304000000, 6],
                        [1264982400000, 3057],
                        [1267401600000, 20434],
                        [1270080000000, 31982],
                        [1272672000000, 26602],
                        [1275350400000, 27826],
                        [1277942400000, 24302],
                        [1280620800000, 24237],
                        [1283299200000, 21004],
                        [1285891200000, 12144],
                        [1288569600000, 10577],
                        [1291161600000, 10295]
                    ];
                    var d2 = [
                        [1262304000000, 5],
                        [1264982400000, 200],
                        [1267401600000, 1605],
                        [1270080000000, 6129],
                        [1272672000000, 11643],
                        [1275350400000, 19055],
                        [1277942400000, 30062],
                        [1280620800000, 39197],
                        [1283299200000, 37000],
                        [1285891200000, 27000],
                        [1288569600000, 21000],
                        [1291161600000, 17000]
                    ];

                    var data1 = [{
                            label: "Data 1",
                            data: d1,
                            color: '#17a084'
                        },
                        {
                            label: "Data 2",
                            data: d2,
                            color: '#127e68'
                        }
                    ];
                    $.plot($("#flot-chart1"), data1, {
                        xaxis: {
                            tickDecimals: 0
                        },
                        series: {
                            lines: {
                                show: true,
                                fill: true,
                                fillColor: {
                                    colors: [{
                                        opacity: 1
                                    }, {
                                        opacity: 1
                                    }]
                                },
                            },
                            points: {
                                width: 0.1,
                                show: false
                            },
                        },
                        grid: {
                            show: false,
                            borderWidth: 0
                        },
                        legend: {
                            show: false,
                        }
                    });

                    var lineData = {
                        labels: ["January", "February", "March", "April", "May", "June", "July"],
                        datasets: [{
                                label: "Example dataset",
                                backgroundColor: "rgba(26,179,148,0.5)",
                                borderColor: "rgba(26,179,148,0.7)",
                                pointBackgroundColor: "rgba(26,179,148,1)",
                                pointBorderColor: "#fff",
                                data: [48, 48, 60, 39, 56, 37, 30]
                            },
                            {
                                label: "Example dataset",
                                backgroundColor: "rgba(220,220,220,0.5)",
                                borderColor: "rgba(220,220,220,1)",
                                pointBackgroundColor: "rgba(220,220,220,1)",
                                pointBorderColor: "#fff",
                                data: [65, 59, 40, 51, 36, 25, 40]
                            }
                        ]
                    };

                    var lineOptions = {
                        responsive: true
                    };


                    var ctx = document.getElementById("lineChart").getContext("2d");
                    new Chart(ctx, {
                        type: 'line',
                        data: lineData,
                        options: lineOptions
                    });

                });
            </script>

</body>

</html>