<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <title>Safety Drive| PGNCOM</title>

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
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('lte/plugins/summernote/summernote-bs4.min.css') }}">
    <link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

    @yield('styles')

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

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <nav class="container-fluid navbar navbar-expand navbar-white navbar-light">
        <ul class="ml-4 navbar-nav">
            <li class="nav-item">
                <a class="nav-link hBack" data-widget="pushmenu" href="#" role="button">
                    <i class="iconify nav-icon fs-4" data-icon="icon-park-outline:back"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto mr-4">
            <li class="nav-item">
                <div class="dropdown">
                    <a id="dLabel" role="button" data-toggle="dropdown" data-target="dropdown-menu" href="#">
                        <i class="iconify fs-4" data-icon="mdi:bell"></i>
                    </a>

                    <ul class="dropdown-menu notifications" role="menu" aria-labelledby="dLabel">

                        <div class="notification-heading">
                            <h4 class="menu-title">Notifications</h4>
                            <h4 class="menu-title pull-right">View all<i class="glyphicon glyphicon-circle-arrow-right"></i></h4>
                        </div>
                        <li class="divider"></li>
                        <div class="notifications-wrapper">
                            <a class="content" href="#">

                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 · day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>

                            </a>
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 · day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>

                            </a>
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>
                            </a>
                            <a class="content" href="#">
                                <div class="notification-item">
                                    <h4 class="item-title">Evaluation Deadline 1 • day ago</h4>
                                    <p class="item-info">Marketing 101, Video Assignment</p>
                                </div>
                            </a>

                        </div>
                        <li class="divider"></li>
                        <div class="notification-footer">
                            <h4 class="menu-title">View all<i class="glyphicon glyphicon-circle-arrow-right"></i></h4>
                        </div>
                    </ul>

                </div>
            </li>
        </ul>
    </nav>

    <section class="container mt-3 mb-2">
        <div class="card">
            <div class="rounded-top text-white d-flex flex-row" style="background-color: #000; height:200px;">
                <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                    <img src="{{ URL('img/photoprofil.png') }}" alt="Generic placeholder image" class="img-fluid rounded-circle  mt-5 mb-2" style="z-index: 1">
                </div>
                <div class="ms-3" style="margin-top: 130px;">
                    <h5>Anna Elsa</h5>
                    <p>@annaelsa</p>
                </div>
            </div>
            <div class="p-4 text-primary rounded-bottom" style="background-color: #f8f9fa;">
                <div class="d-flex justify-content-end text-center py-1">
                    <div>
                        <a href="/editprofil" class="btn btn-outline-primary" role="button" style="z-index: 1;">Edit Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mb-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">
                                    Bio
                                </p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rerum deleniti velit perspiciatis dicta eum officiis.
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">
                                    Role
                                </p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    Admin
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">
                                    Phone
                                </p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    (+62)85833334444
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">
                                    Email
                                </p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    example@example.com
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">
                                    Lokasi
                                </p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">
                                    PGNCOM
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.querySelector('.hBack').addEventListener('click', function (event) {
    event.preventDefault();
    window.history.back();
  });
    </script>
</body>