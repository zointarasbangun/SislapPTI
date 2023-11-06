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
                    <button class="btn btn-primary ml-1" type="button"><i class="iconify"
                            data-icon="material-symbols:search"></i></i></button>
                    <button class="btn btn-danger ml-1" type="button"><i class="iconify"
                            data-icon="solar:refresh-linear"></i></button>
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

    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-sm-6">
                <h5>Data Kondisi Kendaraan</h5>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    <!-- Table -->
    <div class="container-fluid">
        <div class="container-fluid mt-3">
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
                        <!-- button detail modal -->
                        <button class="btn btn-success mb-1" type="button" data-toggle="modal"
                            data-target="#modalKondisiForm">
                            <i class="iconify" data-icon="mdi:car-info"></i>Detail</i>
                        </button>
                        <!-- button detail modal -->

                        <!-- button edit modal -->
                        {{-- <button class="btn btn-primary mb-1" type="button" data-toggle="modal"
                            data-target="#modalEditForm">
                            <i class="iconify" data-icon="material-symbols:edit"></i>
                        </button> --}}
                        <!-- button edit modal -->
                    </td>
                </tr>
            </table>
            <!-- modal detail -->
            <div class="modal fade" id="modalKondisiForm">
                <div class="modal-dialog
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
            <!-- modal detail -->

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
                            <!-- Navigasi -->
                            <h3 class="text-primary ml-3 mt-4">Navigasi</h3>
                            <hr class="hr" />

                            <div class="row p-2 mt-4">
                                <div class="col-lg-4 col-sm-2">
                                    <p>Lampu Depan</p>
                                </div>

                                <div class="col-lg-8 col-sm-10 btn-group">
                                    <input type="radio" class="btn-check" name="ld" id="ld" autocomplete="off" />
                                    <label class="btn btn-outline-success" for="ld">Berfungsi</label>

                                    <input type="radio" class="btn-check" name="ld" id="ld0" autocomplete="off" />
                                    <label class="btn btn-outline-danger" for="ld0">Tidak
                                        Berfungsi</label>
                                </div>
                            </div>
                            <hr class="hr" />

                            <div class="row p-2 mt-4">
                                <div class="col-lg-4 col-sm-2">
                                    <p>Lampu Sen Depan</p>
                                </div>

                                <div class="col-lg-8 col-sm-10 btn-group">
                                    <input type="radio" class="btn-check" name="lsd" id="lsd" autocomplete="off" />
                                    <label class="btn btn-outline-success" for="lsd">Berfungsi</label>

                                    <input type="radio" class="btn-check" name="lsd" id="lsd0" autocomplete="off" />
                                    <label class="btn btn-outline-danger" for="lsd0">Tidak
                                        Berfungsi</label>
                                </div>
                            </div>
                            <hr class="hr" />

                            <div class="row p-2 mt-4">
                                <div class="col-lg-4 col-sm-2">
                                    <p>Lampu Sen Belakang</p>
                                </div>

                                <div class="col-lg-8 col-sm-10 btn-group">
                                    <input type="radio" class="btn-check" name="lsb" id="lsb" autocomplete="off" />
                                    <label class="btn btn-outline-success" for="lsb">Berfungsi</label>

                                    <input type="radio" class="btn-check" name="lsb" id="lsb0" autocomplete="off" />
                                    <label class="btn btn-outline-danger" for="lsb0">Tidak
                                        Berfungsi</label>
                                </div>
                            </div>
                            <hr class="hr" />

                            <div class="row p-2 mt-4">
                                <div class="col-lg-4 col-sm-2">
                                    <p>Lampu Rem</p>
                                </div>

                                <div class="col-lg-8 col-sm-10 btn-group">
                                    <input type="radio" class="btn-check" name="lr" id="lr" autocomplete="off" />
                                    <label class="btn btn-outline-success" for="lr">Berfungsi</label>

                                    <input type="radio" class="btn-check" name="lr" id="lr0" autocomplete="off" />
                                    <label class="btn btn-outline-danger" for="lr0">Tidak
                                        Berfungsi</label>
                                </div>
                            </div>
                            <hr class="hr" />

                            <div class="row p-2 mt-4">
                                <div class="col-lg-4 col-sm-2">
                                    <p>Lampu Mundur</p>
                                </div>

                                <div class="col-lg-8 col-sm-10 btn-group">
                                    <input type="radio" class="btn-check" name="lm" id="lm" autocomplete="off" />
                                    <label class="btn btn-outline-success" for="lm">Berfungsi</label>

                                    <input type="radio" class="btn-check" name="lm" id="lm0" autocomplete="off" />
                                    <label class="btn btn-outline-danger" for="lm0">Tidak
                                        Berfungsi</label>
                                </div>
                            </div>
                            <!-- /Navigasi -->

                            <!-- Bagian Mobil -->
                            <h3 class="text-primary ml-3 mt-5">Bagian Mobil</h3>
                            <hr class="hr" />

                            <div class="row p-2 mt-4">
                                <div class="col-lg-4 col-sm-2">
                                    <p>Body</p>
                                </div>

                                <div class="col-lg-8 col-sm-10 btn-group">
                                    <input type="radio" class="btn-check" name="bdy" id="bdy" autocomplete="off" />
                                    <label class="btn btn-outline-success" for="bdy">Baik</label>

                                    <input type="radio" class="btn-check" name="bdy" id="bdy0" autocomplete="off" />
                                    <label class="btn btn-outline-danger" for="bdy0">Rusak</label>
                                </div>
                            </div>
                            <hr class="hr" />

                            <div class="row p-2 mt-4">
                                <div class="col-lg-4 col-sm-2">
                                    <p>Ban</p>
                                </div>

                                <div class="col-lg-8 col-sm-10 btn-group">
                                    <input type="radio" class="btn-check" name="ban" id="ban" autocomplete="off" />
                                    <label class="btn btn-outline-success" for="ban">Baik</label>

                                    <input type="radio" class="btn-check" name="ban" id="ban0" autocomplete="off" />
                                    <label class="btn btn-outline-danger" for="ban0">Rusak</label>
                                </div>
                            </div>
                            <hr class="hr" />

                            <div class="row p-2 mt-4">
                                <div class="col-lg-4 col-sm-2">
                                    <p>Klakson</p>
                                </div>

                                <div class="col-lg-8 col-sm-10 btn-group">
                                    <input type="radio" class="btn-check" name="klak" id="klak" autocomplete="off" />
                                    <label class="btn btn-outline-success" for="klak">Baik</label>

                                    <input type="radio" class="btn-check" name="klak" id="klak0" autocomplete="off" />
                                    <label class="btn btn-outline-danger" for="klak0">Rusak</label>
                                </div>
                            </div>
                            <hr class="hr" />

                            <div class="row p-2 mt-4">
                                <div class="col-lg-4 col-sm-2">
                                    <p>Pedal Gas</p>
                                </div>

                                <div class="col-lg-8 col-sm-10 btn-group">
                                    <input type="radio" class="btn-check" name="pgas" id="pgas" autocomplete="off" />
                                    <label class="btn btn-outline-success" for="pgas">Berfungsi</label>

                                    <input type="radio" class="btn-check" name="pgas" id="pgas0" autocomplete="off" />
                                    <label class="btn btn-outline-danger" for="pgas0">Rusak</label>
                                </div>
                            </div>
                            <hr class="hr" />

                            <div class="row p-2 mt-4">
                                <div class="col-lg-4 col-sm-2">
                                    <p>Pedal Kopling</p>
                                </div>

                                <div class="col-lg-8 col-sm-10 btn-group">
                                    <input type="radio" class="btn-check" name="pkop" id="pkop" autocomplete="off" />
                                    <label class="btn btn-outline-success" for="pkop">Berfungsi</label>

                                    <input type="radio" class="btn-check" name="pkop" id="pkop0" autocomplete="off" />
                                    <label class="btn btn-outline-danger" for="pkop0">Rusak</label>
                                </div>
                            </div>
                            <hr class="hr" />

                            <div class="row p-2 mt-4">
                                <div class="col-lg-4 col-sm-2">
                                    <p>Pedal Rem</p>
                                </div>

                                <div class="col-lg-8 col-sm-10 btn-group">
                                    <input type="radio" class="btn-check" name="prem" id="prem" autocomplete="off" />
                                    <label class="btn btn-outline-success" for="prem">Berfungsi</label>

                                    <input type="radio" class="btn-check" name="prem" id="prem0" autocomplete="off" />
                                    <label class="btn btn-outline-danger" for="prem0">Rusak</label>
                                </div>
                            </div>
                            <hr class="hr" />

                            <div class="row p-2 mt-4">
                                <div class="col-lg-4 col-sm-2">
                                    <p>Weaper</p>
                                </div>

                                <div class="col-lg-8 col-sm-10 btn-group">
                                    <input type="radio" class="btn-check" name="weap" id="weap" autocomplete="off" />
                                    <label class="btn btn-outline-success" for="weap">Berfungsi</label>

                                    <input type="radio" class="btn-check" name="weap" id="weap0" autocomplete="off" />
                                    <label class="btn btn-outline-danger" for="weap0">Rusak</label>
                                </div>
                            </div>
                            <hr class="hr" />

                            <div class="row p-2 mt-4">
                                <div class="col-lg-4 col-sm-2">
                                    <p>Air Weaper</p>
                                </div>

                                <div class="col-lg-8 col-sm-10 btn-group">
                                    <input type="radio" class="btn-check" name="airw" id="airw" autocomplete="off" />
                                    <label class="btn btn-outline-success" for="airw">Terisi</label>

                                    <input type="radio" class="btn-check" name="airw" id="airw0" autocomplete="off" />
                                    <label class="btn btn-outline-danger" for="airw0">Tidak
                                        Terisi</label>
                                </div>
                            </div>
                            <hr class="hr" />

                            <div class="row p-2 mt-4">
                                <div class="col-lg-4 col-sm-2">
                                    <p>Air Radiator</p>
                                </div>

                                <div class="col-lg-8 col-sm-10 btn-group">
                                    <input type="radio" class="btn-check" name="airr" id="airr" autocomplete="off" />
                                    <label class="btn btn-outline-success" for="airr">Terisi</label>

                                    <input type="radio" class="btn-check" name="airr" id="airr0" autocomplete="off" />
                                    <label class="btn btn-outline-danger" for="airr0">Tidak
                                        Terisi</label>
                                </div>
                            </div>
                            <hr class="hr" />

                            <div class="row p-2 mt-4">
                                <div class="col-lg-4 col-sm-2">
                                    <p>Oli Mesin</p>
                                </div>

                                <div class="col-lg-8 col-sm-10 btn-group">
                                    <input type="radio" class="btn-check" name="oli" id="oli" autocomplete="off" />
                                    <label class="btn btn-outline-success" for="oli">Terisi</label>

                                    <input type="radio" class="btn-check" name="oli" id="oli0" autocomplete="off" />
                                    <label class="btn btn-outline-danger" for="oli0">Tidak
                                        Terisi</label>
                                </div>
                            </div>
                            <hr class="hr" />
                            <!-- /Bagian Mobil -->

                            <!-- Foto -->
                            <h3 class="text-primary ml-3 mt-5">Foto</h3>
                            <hr class="hr" />

                            <div class="input-group custom-file-button">
                                <label class="input-group-text" for="dokmobil1">Dokumentasi
                                    Mobil</label>
                                <input type="file" class="form-control" id="dokmobil1">
                            </div>
                            <!-- /Foto -->

                            <!-- notes -->
                            <h3 class="text-primary ml-3 mt-5">Notes</h3>
                            <hr class="hr" />
                            <textarea class="form-control" rows="5" id="notes" placeholder="Catatan"></textarea>
                            <!-- notes -->
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-primary ml-3 px-5">Save</button>
                            <button class="btn btn-danger ml-2 px-5">Cancel</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /edit modal -->
        </div>
    </div>
</div>

@endsection
