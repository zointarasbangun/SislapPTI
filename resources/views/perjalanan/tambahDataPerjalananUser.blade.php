@extends('layouts.app')

@section('content')

<section class="content-wrapper">
    <!-- Data Perjalanan -->
    <div class="container">
        <div class="card mt-3 mb-4">
            <div class="card-header py-3">
                <h5 class="mb-0">Tambah Laporan Perjalanan</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 col-sm-12 mb-4">
                        <label class="form-label" for="tanggal">Tanggal</label>
                        <input type="date" id="tanggal" class="form-control" />
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <label class="form-label" for="alamatawal">Alamat Awal</label>
                        <input type="text" id="alamatawal" class="form-control" disabled
                            placeholder="Lokasi Saya Saat Ini" />
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <label class="form-label" for="alamatujuan">Alamat Tujuan</label>
                        <input type="text" id="alamatujuan" class="form-control" />
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <label class="form-label" for="kmawal">KM Awal</label>
                        <input type="number" id="kmawal" class="form-control" />
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <label class="form-label" for="kmakhir">KM Akhir</label>
                        <input type="number" id="kmakhir" class="form-control" />
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <label class="form-label" for="tipemobil">Tipe Mobil</label>
                        <select id="tmobilSelect" class="form-control select" style="display: inline;">
                            <option value="x" selected disabled>Tipe Mobil</option>
                            <option value="1">Mobil 1</option>
                            <option value="2">Mobil 2</option>
                        </select>
                    </div>
                    <div class="col-lg-6 col-sm-12 mb-4">
                        <label class="form-label" for="nopol">No Polisi</label>
                        <input type="text" id="nopol" class="form-control" placeholder="BE-XXXX-XX" />
                    </div>
                    <div class="col-lg-12 col-sm-12 mb-4 dropdown">
                        <div id="jenisperjalanan">
                            <label class="form-label select-label">Jenis Perjalanan</label>
                            <select id="jperjalananSelect" class="form-control select" style="display: inline;">
                                <option value="x" selected disabled>Pilih Perjalanan</option>
                                <option value="1">Perjalanan Luar</option>
                                <option value="2">Perjalanan Dalam</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Data Perjalanan -->

    <div class="container mb-5">
        <!-- Kondisi Kendaraan -->
        <div class="card">
            <div class="card-header py-3">
                <h5 class="mb-0">Kondisi Kendaraan</h5>
            </div>
            <div class="card-body">
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
                        <label class="btn btn-outline-danger" for="ld0">Tidak Berfungsi</label>
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
                        <label class="btn btn-outline-danger" for="lsd0">Tidak Berfungsi</label>
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
                        <label class="btn btn-outline-danger" for="lsb0">Tidak Berfungsi</label>
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
                        <label class="btn btn-outline-danger" for="lr0">Tidak Berfungsi</label>
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
                        <label class="btn btn-outline-danger" for="lm0">Tidak Berfungsi</label>
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
                        <label class="btn btn-outline-danger" for="airw0">Tidak Terisi</label>
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
                        <label class="btn btn-outline-danger" for="airr0">Tidak Terisi</label>
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
                        <label class="btn btn-outline-danger" for="oli0">Tidak Terisi</label>
                    </div>
                </div>
                <hr class="hr" />
                <!-- /Bagian Mobil -->

                <!-- Foto -->
                <h3 class="text-primary ml-3 mt-5">Foto</h3>
                <hr class="hr" />

                <div class="input-group custom-file-button">
                    <label class="input-group-text" for="dokmobil1">Dokumentasi Mobil</label>
                    <input type="file" class="form-control" id="dokmobil1">
                </div>
                <!-- /Foto -->

                <!-- notes -->
                <h3 class="text-primary ml-3 mt-5">Notes</h3>
                <hr class="hr" />
                <textarea class="form-control" rows="5" id="notes" placeholder="Catatan"></textarea>
                <!-- notes -->
            </div>
        </div>
        <!-- /Kondisi Kendaraan -->

        <!-- button -->
        <button class="btn btn-primary ml-3 px-5">Save</button>
        <button class="btn btn-danger ml-2 px-5">Cancel</button>
        <!-- button -->
    </div>

</section>

@endsection