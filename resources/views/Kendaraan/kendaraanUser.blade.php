@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid p-5">
        <div class="row">
            <!-- search -->
            <div class="col-lg-4 col-sm-6">
                <input type="text" class="form-control" id="cariDataKendaraan" placeholder="Cari Data Kendaraan...">
            </div>
            <div class="col-lg-5 col-sm-6">
                <button class="btn btn-primary ml-1" type="button"><i class="iconify"
                        data-icon="material-symbols:search"></i></i></button>
                <button class="btn btn-danger ml-1" type="button"><i class="iconify"
                        data-icon="solar:refresh-linear"></i></button>
            </div>
            <!-- /search -->

            <!-- table -->
            <div class="container-fluid mt-5">
                <table class="table table-striped text-center" id="tableusercar">
                    <tr>
                        <th scope="col">Tanggal</th>
                        <th scope="col">No. Polisi</th>
                        <th scope="col">Tipe Mobil</th>
                        <th scope="col">Action</th>
                    </tr>
                    <tr>
                        <td>20/09/2023</td>
                        <td>BE-XXXX-XX</td>
                        <td>Toyota Avanza</td>
                        <td>
                            <!-- trigger modal -->
                            <div class="text-center">
                                <a href="" class="btn btn-success btn-rounded mb-4" data-toggle="modal"
                                    data-target="#modalCarForm1"><i class="iconify nav-icon mr-3"
                                        data-icon="bxs:detail"></i>Detail</a>
                            </div>
                            <!-- /trigger modal -->

                        </td>
                    </tr>
                </table>
                <!-- modal -->
                <div class="modal fade" id="modalCarForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                        <div class="modal-content">
                            <div class="modal-header text-start">
                                <h4 class="modal-title w-100 font-weight-bold">Detail Kendaraan</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body mx-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Tipe Mobil : Toyota Avanza</li>
                                    <li class="list-group-item">No. Polisi : BE-XXXX-XX</li>
                                    <li class="list-group-item">Lampu Depan : Berfungsi</li>
                                    <li class="list-group-item">Lampu Sen Depan : Berfungsi</li>
                                    <li class="list-group-item">Lampu Sen Belakang : Berfungsi</li>
                                    <li class="list-group-item">Lampu Rem : Berfungsi</li>
                                    <li class="list-group-item">Lampu Mundur : Berfungsi</li>
                                    <li class="list-group-item">Body : Baik</li>
                                    <li class="list-group-item">Ban : Baik</li>
                                    <li class="list-group-item">Klakson : Baik</li>
                                    <li class="list-group-item">Pedal Gas : Berfungsi</li>
                                    <li class="list-group-item">Pedal Kopling : Berfungsi</li>
                                    <li class="list-group-item">Pedal Rem : Berfungsi</li>
                                    <li class="list-group-item">Weaper : Berfungsi</li>
                                    <li class="list-group-item">Air Weaper : Terisi</li>
                                    <li class="list-group-item">Air Radiator : Terisi</li>
                                    <li class="list-group-item">Oli Mesin : Terisi</li>
                                    <li class="list-group-item">Notes : -</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modal -->
            </div>
        </div>
        <!-- /table -->
    </div>
</div>

@endsection