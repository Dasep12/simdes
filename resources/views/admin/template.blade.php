<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title }}</title>

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <script src="/js/jquery-3.1.1.min.js"></script>
</head>

<body class="">

    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" width="90" class="rounded-circle" src="/img/user1.png" />
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">Dasep Depiyawan</span>
                                <span class="text-muted text-xs block">Administrator<b class="caret"></b></span>
                            </a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li>
                                    <a class="dropdown-item" href="profile.html">Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="contacts.html">Ganti Password </a>
                                </li>
                            </ul>
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li>
                        <a href=""><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span>
                        </a>

                    </li>
                    <li class="
                    @if(request()->is('admin/berita') || request()->is('admin/create_berita') )
                        {{ 'active' }}
                     @endif">
                        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Berita</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{ (request()->is('admin/create_berita')) ? 'active' : '' }}"><a href="/admin/create_berita">Buat</a></li>
                            <li class="{{ (request()->is('admin/berita')) ? 'active' : '' }}"><a href="/admin/berita">Daftar Berita</a></li>
                        </ul>
                    </li>
                    <li class="
                     @if(request()->is('admin/profile') || request()->is('admin/sejarah') )
                        {{ 'active' }}
                     @endif
                     ">
                        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Profile Desa</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{ (request()->is('admin/profile')) ? 'active' : '' }}"><a href="/admin/profile">Profile Desa</a></li>
                            <li class="{{ (request()->is('admin/sejarah')) ? 'active' : '' }}"><a href="/admin/sejarah">Sejarah Desa</a></li>
                        </ul>
                    </li>
                    <li class="
                     @if(request()->is('admin/visimisi') || request()->is('admin/pemerintah')  )
                        {{ 'active' }}
                     @endif
                     ">
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Pemerintahan Desa</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{ (request()->is('admin/visimisi')) ? 'active' : '' }}"><a href="/admin/visimisi">Visi & Misi</a></li>
                            <li class="{{ (request()->is('admin/pemerintah')) ? 'active' : '' }}"><a href="/admin/pemerintah">Pemerintah Desa</a></li>
                        </ul>
                    </li>
                    <li class="
                     @if(request()->is('admin/administratif') || request()->is('admin/pendidikan') || request()->is('admin/jk') || request()->is('admin/jk/add') || request()->is('admin/umur') || request()->is('admin/warga_negara') || request()->is('admin/administratif/add') || request()->is('admin/umur/add') || request()->is('admin/pendidikan/add') )
                        {{ 'active' }}
                     @endif
                     ">
                        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Data Desa</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="{{ (request()->is('admin/administratif')) ? 'active' : '' }}"><a href="/admin/administratif">Data Administratif</a></li>
                            <li class="{{ (request()->is('admin/pendidikan')) ? 'active' : '' }}"><a href="/admin/pendidikan">Pendidikan</a></li>
                            <li class="{{ (request()->is('admin/jk')) ? 'active' : '' }}"><a href="/admin/jk">Jenis Kelamin</a></li>
                            <li class="{{ (request()->is('admin/umur')) ? 'active' : '' }}"><a href="/admin/umur">Kelompok Umur</a></li>
                        </ul>
                    </li>
                    <li class="
                     @if(request()->is('admin/produk') || request()->is('admin/produk/add') )
                        {{ 'active' }}
                     @endif
                     ">
                        <a href="/admin/produk"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Produk Desa</span></a>
                    </li>
                    <li class="
                     @if(request()->is('admin/gamas') || request()->is('admin/gamas/add') )
                        {{ 'active' }}
                     @endif
                     ">
                        <a href="/admin/gamas"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Lembaga Masyarakat</span></a>
                    </li>
                    <li>
                        <a href="widgets.html"><i class="fa fa-flask"></i> <span class="nav-label">Widgets</span></a>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Welcome to INSPINIA+ Admin Theme.</span>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a class="dropdown-item float-left" href="profile.html">
                                            <img alt="image" class="rounded-circle" src="img/a7.jpg">
                                        </a>
                                        <div class="media-body">
                                            <small class="float-right">46h ago</small>
                                            <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a class="dropdown-item float-left" href="profile.html">
                                            <img alt="image" class="rounded-circle" src="img/a4.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right text-navy">5h ago</small>
                                            <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                            <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a class="dropdown-item float-left" href="profile.html">
                                            <img alt="image" class="rounded-circle" src="img/profile.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="float-right">23h ago</small>
                                            <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                            <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="mailbox.html" class="dropdown-item">
                                            <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html" class="dropdown-item">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                            <span class="float-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a href="profile.html" class="dropdown-item">
                                        <div>
                                            <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                            <span class="float-right text-muted small">12 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <a href="grid_options.html" class="dropdown-item">
                                        <div>
                                            <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                            <span class="float-right text-muted small">4 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="dropdown-divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a href="notifications.html" class="dropdown-item">
                                            <strong>See All Alerts</strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="login.html">
                                <i class="fa fa-sign-out"></i> Log out
                            </a>
                        </li>
                    </ul>

                </nav>
            </div>

            <!-- content -->
            @yield('content')
            <!-- content -->
            <div class="footer">
                <div class="float-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2018
                </div>
            </div>

        </div>
    </div>

    <!-- Mainly scripts -->

    <script src="/js/popper.min.js"></script>
    <!-- <script src="/js/ckeditor.js"></script> -->
    <script src="/js/bootstrap.js"></script>
    <script src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/js/inspinia.js"></script>
    <script src="/js/plugins/pace/pace.min.js"></script>
    <!-- datatables -->
    <script src="/js/plugins/dataTables/datatables.min.js"></script>
    <script src="/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.12.1/standard/ckeditor.js"></script>
    <!-- Page-Level Scripts -->
    <script>
        $(document).ready(function() {

            CKEDITOR.replace('profile', {
                filebrowserUploadUrl: "{{route('admin.update', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });

            CKEDITOR.replace('sejarah', {
                filebrowserUploadUrl: "{{route('admin.update', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });

            CKEDITOR.replace('pemerintah', {
                filebrowserUploadUrl: "{{route('admin.update', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });
            CKEDITOR.replace('content', {
                filebrowserUploadUrl: "{{route('admin.update', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });

            CKEDITOR.replace('keterangan', {
                filebrowserUploadUrl: "{{route('admin.update', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });

            CKEDITOR.replace('deskripsi', {
                filebrowserUploadUrl: "{{route('admin.update', ['_token' => csrf_token() ])}}",
                filebrowserUploadMethod: 'form'
            });

            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [{
                        extend: 'copy'
                    },
                    {
                        extend: 'csv'
                    },
                    {
                        extend: 'excel',
                        title: 'ExampleFile'
                    },
                    {
                        extend: 'pdf',
                        title: 'ExampleFile'
                    },

                    {
                        extend: 'print',
                        customize: function(win) {
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });
    </script>
</body>

</html>