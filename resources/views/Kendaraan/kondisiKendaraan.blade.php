@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <!-- Cari -->
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-lg-4 col-sm-12 mb-sm-3">
                <label for="cariData">Cari :</label>
                <input type="text" class="form-control" id="cariData" placeholder="Cari Data...">
            </div>
            <div class="col-lg-4 col-sm-6">
                <label for="cariAlamatAwal">Tanggal :</label>
                <input type="date" class="form-control" id="cariAlamatAwal" placeholder="">
            </div>
            <div class="col-lg-4 col-sm-6">
                <label for="actionCari" class="disable">.</label>
                <div id="actionCari">
                    <button class="btn btn-primary ml-1" type="button"><i class="iconify" data-icon="material-symbols:search"></i></i></button>
                    <button class="btn btn-danger ml-1" type="button"><i class="iconify" data-icon="solar:refresh-linear"></i></button>
                    <div class="float-right">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid border  p-2 align-middle">
        <div class="row">
            <div class="col-lg-2 float-lg-right col-sm-12">
                <p class="text-secondary">Persentase Indikator :</p>
            </div>
            <div class="col-lg-2 col-sm-6">
                <p>
                    <span class="badge badge-primary">Sangat Baik</span>
                    : 80% - 100%
                </p>
            </div>
            <div class="col-lg-2 col-sm-6">
                <p>
                    <span class="badge badge-success">Baik</span>
                    : 50% - 79%
                </p>
            </div>
            <div class="col-lg-2 col-sm-6">
                <p>
                    <span class="badge badge-warning">Buruk</span>
                    : 25% - 49%
                </p>
            </div>
            <div class="col-lg-2 col-sm-6">
                <p>
                    <span class="badge badge-danger">Sangat Buruk</span>
                    : 0% - 25%
                </p>
            </div>
            <div class="col-lg-2 col-sm-6">
                <p>
                    <span class="badge badge-secondary">null</span>
                    : Tidak Terdefinisi
                </p>
            </div>
        </div>
    </div>

    <!-- Table -->
    <div class="container-fluid">
        <div class="container-fluid mt-5">
            <table class="table table-striped text-center" id="tableakun">
                <tr>
                    <th scope="col">User</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">No Polisi</th>
                    <th scope="col">Tipe Mobil</th>
                    <th scope="col">Indikator Status Kendaraan</th>
                    <th scope="col">Action</th>
                </tr>
                <tr>
                    <th scope="row">Donquixote Doflamingo</th>
                    <td>2023-09-10</td>
                    <td>BE-XXXX-XX</td>
                    <td>Avanza</td>
                    <td><span class="badge badge-primary">Sangat Baik</span></td>
                    <td>
                        <!-- modal detail -->
                        <div class="modal fade" id="modalKondisiForm">
                            <div class="modal-dialog  modal-lg
                        modal-dialog-scrollable ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalKondisiLabel">
                                            Detail Kondisi Kendaraan
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            detail 1
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal detail -->

                        <!-- button detail modal -->
                        <button class="btn btn-success mb-1" type="button" data-toggle="modal" data-target="#modalKondisiForm">
                            <i class="iconify" data-icon="mdi:car-info"></i>Detail</i>
                        </button>
                        <!-- button detail modal -->

                        <!-- edit modal -->
                        <div class="modal fade" id="modalEditForm">
                            <div class="modal-dialog  modal-lg
                        modal-dialog-scrollable ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalEditLabel">
                                            Edit Kondisi Kendaraan
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            edit
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /edit modal -->

                        <!-- button edit modal -->
                        <button class="btn btn-primary mb-1" type="button" data-toggle="modal" data-target="#modalEditForm">
                            <i class="iconify" data-icon="material-symbols:edit"></i>
                        </button>
                        <!-- button edit modal -->
                    </td>
                </tr>
                <tr>
                    <th scope="row">Donquixote Doflamingo</th>
                    <td>2023-09-10</td>
                    <td>BE-XXXX-XX</td>
                    <td>Avanza</td>
                    <td><span class="badge badge-success">Baik</span></td>
                    <td>
                        <!-- modal detail -->
                        <div class="modal fade" id="modalKondisiForm2">
                            <div class="modal-dialog  modal-lg
                        modal-dialog-scrollable ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalKondisiLabel2">
                                            Detail Kondisi Kendaraan
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            detail2
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal detail -->

                        <!-- button detail modal -->
                        <button class="btn btn-success mb-1" type="button" data-toggle="modal" data-target="#modalKondisiForm2">
                            <i class="iconify" data-icon="mdi:car-info"></i>Detail</i>
                        </button>
                        <!-- button detail modal -->

                        <!-- edit modal -->
                        <div class="modal fade" id="modalEditForm2">
                            <div class="modal-dialog  modal-lg
                        modal-dialog-scrollable ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalEditLabel2">
                                            Edit Kondisi Kendaraan
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            edit2
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /edit modal -->

                        <!-- button edit modal -->
                        <button class="btn btn-primary mb-1" type="button" data-toggle="modal" data-target="#modalEditForm">
                            <i class="iconify" data-icon="material-symbols:edit"></i>
                        </button>
                        <!-- button edit modal -->
                    </td>
                </tr>
                <tr>
                    <th scope="row">Donquixote Doflamingo</th>
                    <td>2023-09-10</td>
                    <td>BE-XXXX-XX</td>
                    <td>Avanza</td>
                    <td><span class="badge badge-warning">Buruk</span></td>
                    <td>
                        <!-- modal detail -->
                        <div class="modal fade" id="modalKondisiForm3">
                            <div class="modal-dialog  modal-lg
                        modal-dialog-scrollable ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalKondisiLabel3">
                                            Detail Kondisi Kendaraan
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            detail3
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal detail -->

                        <!-- button detail modal -->
                        <button class="btn btn-success mb-1" type="button" data-toggle="modal" data-target="#modalKondisiForm3">
                            <i class="iconify" data-icon="mdi:car-info"></i>Detail</i>
                        </button>
                        <!-- button detail modal -->

                        <!-- edit modal -->
                        <div class="modal fade" id="modalEditForm3">
                            <div class="modal-dialog  modal-lg
                        modal-dialog-scrollable ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalEditLabel3">
                                            Edit Kondisi Kendaraan
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>
                                            edit3
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /edit modal -->

                        <!-- button edit modal -->
                        <button class="btn btn-primary mb-1" type="button" data-toggle="modal" data-target="#modalEditForm3">
                            <i class="iconify" data-icon="material-symbols:edit"></i>
                        </button>
                        <!-- button edit modal -->
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection
