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
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 connectedSortable" style="height: 220px; background-color: #12ACED; color: #fff;">
                        <h3 style="margin-top: 100px;font-weight: bold;">Administratoresgfse  </h3>
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
        </section>
    @endsection
