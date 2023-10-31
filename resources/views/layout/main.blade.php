<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Safety Drive | PGNCOM</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css') }}">
    <!--Iconify-->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/iconify/2.0.0/iconify.min.js') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.min.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('lte/plugins/MDB5/mdb.min.css') }}"> -->
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .leaflet-container {
            color: 212B36;
            height: 400px;
            width: 600px;
            max-width: 100%;
            max-height: 100%;
        }

        .sidebar-dark-primary {
            background-color: #212B36;
        }

        .sidebar-dark-primary .nav-sidebar .nav-item .nav-link.active {
            background-color: #1A232A;
        }

        .sidebar-dark-primary .nav-sidebar .nav-item .nav-link.active:hover {
            background-color: #1A232A;
        }

        .sidebar-dark-primary .nav-sidebar .nav-item .nav-link:hover {
            background-color: #1A232A;
        }

        .sidebar-dark-primary .brand-link {
            background-color: #212B36;
            border-bottom: 0;
        }

        .sidebar-dark-primary .brand-link:hover {
            background-color: #212B36;
        }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ URL('lte/dist/img/pgncomlogo.png') }}" alt="PGNCOM_Logo" width="100" width="60">
        </div>


        <!-- /.navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto ">
                <!-- Notif -->
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link rounded-circle" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header disabled ">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <!-- /Notif -->

                <!-- Profile -->
                <li class="nav-item dropdown">
                    <a data-toggle="dropdown" href="#">
                        <img src="{{ URL('img/photoprofil.png') }}" class="img-circle elevation-2" alt="User Image">
                    </a>

                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <p class="dropdown-item dropdown-footer disabled ">Nama Admin</p>
                        <div class="dropdown-divider"></div>
                        <a href="profil.html" class="dropdown-item dropdown-footer"><i class="far fa-user mx-2"></i>Lihat Profil</a>
                        <div class="dropdown-divider"></div>
                        <a href="/" class="dropdown-item dropdown-footer"><i class="fas fa-sign-out-alt mx-2"></i>Logout</a>
                    </div>
                </li>

                <!-- /Profile -->
            </ul>
        </nav>
        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ asset('lte/dist/img/pgncomlogo.png') }}" style="opacity: .8" alt="User Image">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">


                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                            <li class="nav-item menu-open active">
                                <a href="/beranda" class="nav-link ">
                                    <i class="iconify nav-icon" data-icon="tabler:home"></i>
                                    <p>
                                        Beranda
                                    </p>
                                </a>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="iconify nav-icon ml-1" data-icon="pajamas:account"></i>
                                    <p>
                                        Kelola Akun
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="padding-left: 20px;">
                                    <li class="nav-item">
                                        <a href="/tambahakun" class="nav-link">
                                            <!-- Tambahkan URL yang sesuai di sini -->
                                            <i class="iconify nav-icon" data-icon="line-md:account-add"></i>
                                            <p>Tambahkan Akun</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/dataakun" class="nav-link">
                                            <!-- Tambahkan URL yang sesuai di sini -->
                                            <i class="iconify nav-icon" data-icon="gg:list"></i>
                                            <p>Data Akun</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="iconify nav-icon" data-icon="tdesign:data"></i>
                                    <p>
                                        Perjalanan
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="padding-left: 20px;">
                                    <li class="nav-item">
                                        <a href="/dataperjalanan" class="nav-link">
                                            <i class="iconify nav-icon" data-icon="carbon:data-table"></i>
                                            <p>Data Perjalanan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/statusperjalanan" class="nav-link">
                                            <i class="far fa-calendar-check nav-icon"></i>
                                            <p>Status Perjalanan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="/pelacakperjalanan" class="nav-link">
                                    <i class="iconify nav-icon" data-icon="arcticons:vtracking"></i>
                                    <p>
                                        Pelacak Perjalanan
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="iconify nav-icon" data-icon="tabler:checkup-list"></i>
                                    <p>
                                        Kondisi Kendaraan
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview" style="padding-left: 20px;">
                                    <li class="nav-item">
                                        <a href="/datakondisikendaraan" class="nav-link">
                                            <i class="iconify nav-icon" data-icon="carbon:vehicle-services"></i>
                                            <p>Data Kondisi Kendaraan</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="/tipekendaraan" class="nav-link">
                                            <i class="iconify nav-icon" data-icon="mdi:car"></i>
                                            <p>Tipe Kendaraan</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="/notifikasi" class="nav-link">
                                    <i class="iconify nav-icon" data-icon="mdi:bell-warning"></i>
                                    <p>
                                        Notifikasi
                                    </p>
                                </a>
                            </li>

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->
        {{-- <footer class="main-footer">
            <strong>Copyright &copy; 2023-2027 <a href="instagram.com/zointarasbangun_">zointarasbangun</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer> --}}

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script src="{{ asset('js/admintable.js') }}"></script>
    <!-- jQuery -->
    <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('lte/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- <script src="{{ asset('lte/plugins/MDB5/mdb.min.js') }}"></script> -->
    <!-- ChartJS -->
    <script src="{{ asset('lte/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('lte/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('lte/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('lte/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('lte/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('lte/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('lte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
    <!-- Summernote -->
    <script src="{{ asset('lte/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('lte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('lte/dist/js/adminlte.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('lte/dist/js/demo.js') }}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ asset('lte/dist/js/pages/dashboard.js') }}"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    @yield('js')
</body>

</html>
