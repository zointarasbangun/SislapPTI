@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <style>
            .small-box {
                border-radius: 10px;
                /* Anda dapat menyesuaikan nilai ini sesuai keinginan Anda */
            }
        </style>
        <!-- Main content -->
        <section>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 connectedSortable" style="height: 220px; background-color: #12ACED; color: #fff;">
<<<<<<< HEAD
                        <h3 style="margin-top: 100px;font-weight: bold;">Administrator</h3>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-white" style="font-weight: bold;">
                                            <div class="inner">
                                                <h4 style="display: inline-block; vertical-align: middle; margin-right: 10px;">
                                                    Perjalanan Aktif</h4>
                                                <i class="nav-icon fa-sharp fa-solid fa-car"
                                                    style="font-size: 36px; vertical-align: middle; float: right; color: #12ACED;"></i>
                                                <p style="font-size: 36px">2</p>
                                                <p style="font-weight: normal; font-size: 16px; color: #918888;">1 completed</p>
                                            </div>
                                        </div>
=======
                        <h3 style="margin-top: 100px;font-weight: bold;">Administrator  </h3>
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <!-- small box -->
                                <div class="small-box bg-white" style="font-weight: bold;">
                                    <div class="inner">
                                        <h4 style="display: inline-block; vertical-align: middle; margin-right: 10px;">
                                            Perjalanan Aktif</h4>
                                        <i class="nav-icon fa-sharp fa-solid fa-car"
                                            style="font-size: 36px; vertical-align: middle; float: right; color: #12ACED;"></i>
                                        <p style="font-size: 36px">2</p>
                                        <p style="font-weight: normal; font-size: 16px; color: #918888;">1 completed</p>
>>>>>>> 433634bbab458b5e5fef267ce1e4f385c877e464
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-white" style="font-weight: bold;">
                                            <div class="inner">
                                                <h4 style="display: inline-block; vertical-align: middle; margin-right: 10px;">
                                                    Jumlah Perjalanan</h4>
                                                <i class="nav-icon fa-sharp fa-solid fa-car"
                                                    style="font-size: 36px; vertical-align: middle; float: right; color: #12ACED;"></i>
                                                <p style="font-size: 36px">2</p>
                                                <p style="font-weight: normal; font-size: 16px; color: #918888;">1 completed</p>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-white" style="font-weight: bold;">
                                            <div class="inner">
                                                <h4 style="display: inline-block; vertical-align: middle; margin-right: 10px;">
                                                    Driver</h4>
                                                <i class="nav-icon fa-sharp fa-solid fa-car"
                                                    style="font-size: 36px; vertical-align: middle; float: right; color: #12ACED;"></i>
                                                <p style="font-size: 36px">2</p>
                                                <p style="font-weight: normal; font-size: 16px; color: #918888;">1 completed</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ./col -->
                                    <div class="col-lg-3 col-6">
                                        <!-- small box -->
                                        <div class="small-box bg-white" style="font-weight: bold;">
                                            <div class="inner">
                                                <h4 style="display: inline-block; vertical-align: middle; margin-right: 10px;">
                                                    Total Kendaraan</h4>
                                                <i class="nav-icon fa-sharp fa-solid fa-car"
                                                    style="font-size: 36px; vertical-align: middle; float: right; color: #12ACED;"></i>
                                                <p style="font-size: 36px">2</p>
                                                <p style="font-weight: normal; font-size: 16px; color: #918888;">1 completed</p>
                                            </div>
                                        </div>
                                    </div>
                            <!-- ./col -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section style="margin-top: 10rem;">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ URL('img/ImageSlider-1.jpg') }}" class="d-block h-50 w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ URL('img/ImageSlider-2.jpeg') }}" class="d-block h-50 w-100" alt="...">
                    </div>
            <div class="carousel-item">
            <img src="{{ URL('img/ImageSlider-3.jpeg') }}" class="d-block h-50 w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="{{ URL('img/ImageSlider-4.jpeg') }}" class="d-block w-100" alt="...">
          </div>
        </div>
                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </button>
            </div>
        </div>
    </div>
        </section>

        <section class="content-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div id="datatable"></div>
                </div>
            </div>
        </div>
        </section>


    @endsection
