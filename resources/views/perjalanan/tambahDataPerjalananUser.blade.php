@extends('layouts.app')

@section('content')
    <section class="content-wrapper">
        <!-- Data Perjalanan -->
        <form method="POST" action="{{ route('tambahPerjalananUser.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="container">
                <div class="card mt-3 mb-4">
                    <div class="card-header py-3">
                        <h5 class="mb-0">Tambah Laporan Perjalanan</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12 col-sm-12 mb-4">
                                <label class="form-label" for="tanggal">Tanggal</label>
                                <input type="date" name="tgl_perjalanan" id="tanggal" class="form-control" />
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-4">
                                <label class="form-label" for="alamatawal">Alamat Awal</label>
                                <input type="text" name="alamat_awal" id="alamatawal" class="form-control"
                                    placeholder="Lokasi Saya Saat Ini" />
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-4">
                                <label class="form-label" for="alamatujuan">Alamat Tujuan</label>
                                <input type="text" name="alamat_tujuan" id="alamatujuan" class="form-control" />
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-4">
                                <label class="form-label" for="kmawal">KM Awal</label>
                                <input type="number" name="km_awal" id="kmawal" class="form-control" />
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-4">
                                <label class="form-label" for="kmakhir">KM Akhir</label>
                                <input type="number" name="km_akhir" id="kmakhir" class="form-control" />
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-4">
                                <label class="form-label" for="tipemobil">Tipe Mobil</label>
                                <select id="tmobilSelect" name="tipe_kendaraan" class="form-control select"
                                    style="display: inline;">
                                    <option value="x" selected disabled>Tipe Mobil</option>
                                    @foreach ($kendaraan as $type)
                                        <option value="{{ $type->type }}">{{ $type->type }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-6 col-sm-12 mb-4">
                                <label class="form-label" for="nopolisi">No Polisi</label>
                                <select id="npolisiSelect" name="no_polisi" class="form-control select" style="display: inline;">
                                    <option value="x" selected disabled>No Polisi</option>
                                    @foreach ($kendaraan as $k)
                                        <option value="{{ $k->no_polisi }}">{{ $k->no_polisi }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="col-lg-12 col-sm-12 mb-4 dropdown">
                                <div id="jenisperjalanan">
                                    <label class="form-label select-label">Jenis Perjalanan</label>
                                    <select id="jperjalananSelect" name="jenis_perjalanan" class="form-control select"
                                        style="display: inline;">
                                        <option value="x" selected disabled>Pilih Perjalanan</option>
                                        <option value="perjalanan luar">Perjalanan Luar</option>
                                        <option value="perjalanan dalam">Perjalanan Dalam</option>
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
                                <input type="radio" class="btn-check" name="lampu_depan" value="berfungsi" id="ld"
                                    autocomplete="off" />
                                <label class="btn btn-outline-success" for="ld">Berfungsi</label>

                                <input type="radio" class="btn-check" name="lampu_depan" value="tidak berfungsi"
                                    id="ld0" autocomplete="off" />
                                <label class="btn btn-outline-danger" for="ld0">Tidak Berfungsi</label>
                            </div>
                        </div>
                        <hr class="hr" />

                        <div class="row p-2 mt-4">
                            <div class="col-lg-4 col-sm-2">
                                <p>Lampu Sen Depan</p>
                            </div>

                            <div class="col-lg-8 col-sm-10 btn-group">
                                <input type="radio" class="btn-check" name="lampusen_depan" value="berfungsi"
                                    id="lsd" autocomplete="off" />
                                <label class="btn btn-outline-success" for="lsd">Berfungsi</label>

                                <input type="radio" class="btn-check" name="lampusen_depan" value="tidak berfungsi"
                                    id="lsd0" autocomplete="off" />
                                <label class="btn btn-outline-danger" for="lsd0">Tidak Berfungsi</label>
                            </div>
                        </div>
                        <hr class="hr" />

                        <div class="row p-2 mt-4">
                            <div class="col-lg-4 col-sm-2">
                                <p>Lampu Sen Belakang</p>
                            </div>

                            <div class="col-lg-8 col-sm-10 btn-group">
                                <input type="radio" class="btn-check" name="lampusen_belakang" value="berfungsi"
                                    id="lsb" autocomplete="off" />
                                <label class="btn btn-outline-success" for="lsb">Berfungsi</label>

                                <input type="radio" class="btn-check" name="lampusen_belakang" value="tidak berfungsi"
                                    id="lsb0" autocomplete="off" />
                                <label class="btn btn-outline-danger" for="lsb0">Tidak Berfungsi</label>
                            </div>
                        </div>
                        <hr class="hr" />

                        <div class="row p-2 mt-4">
                            <div class="col-lg-4 col-sm-2">
                                <p>Lampu Rem</p>
                            </div>

                            <div class="col-lg-8 col-sm-10 btn-group">
                                <input type="radio" class="btn-check" name="lampu_rem" value="berfungsi"
                                    id="lr" autocomplete="off" />
                                <label class="btn btn-outline-success" for="lr">Berfungsi</label>

                                <input type="radio" class="btn-check" name="lampu_rem" value="tidak berfungsi"
                                    id="lr0" autocomplete="off" />
                                <label class="btn btn-outline-danger" for="lr0">Tidak Berfungsi</label>
                            </div>
                        </div>
                        <hr class="hr" />

                        <div class="row p-2 mt-4">
                            <div class="col-lg-4 col-sm-2">
                                <p>Lampu Mundur</p>
                            </div>

                            <div class="col-lg-8 col-sm-10 btn-group">
                                <input type="radio" class="btn-check" name="lampu_mundur" value="berfungsi"
                                    id="lm" autocomplete="off" />
                                <label class="btn btn-outline-success" for="lm">Berfungsi</label>

                                <input type="radio" class="btn-check" name="lampu_mundur" value="tidak berfungsi"
                                    id="lm0" autocomplete="off" />
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
                                <input type="radio" class="btn-check" name="body" value="baik" id="bdy"
                                    autocomplete="off" />
                                <label class="btn btn-outline-success" for="bdy">Baik</label>

                                <input type="radio" class="btn-check" name="body" value="rusak" id="bdy0"
                                    autocomplete="off" />
                                <label class="btn btn-outline-danger" for="bdy0">Rusak</label>
                            </div>
                        </div>
                        <hr class="hr" />

                        <div class="row p-2 mt-4">
                            <div class="col-lg-4 col-sm-2">
                                <p>Ban</p>
                            </div>

                            <div class="col-lg-8 col-sm-10 btn-group">
                                <input type="radio" class="btn-check" name="ban" value="baik" id="ban"
                                    autocomplete="off" />
                                <label class="btn btn-outline-success" for="ban">Baik</label>

                                <input type="radio" class="btn-check" name="ban" value="rusak" id="ban0"
                                    autocomplete="off" />
                                <label class="btn btn-outline-danger" for="ban0">Rusak</label>
                            </div>
                        </div>
                        <hr class="hr" />

                        <div class="row p-2 mt-4">
                            <div class="col-lg-4 col-sm-2">
                                <p>Klakson</p>
                            </div>

                            <div class="col-lg-8 col-sm-10 btn-group">
                                <input type="radio" class="btn-check" name="klakson" value="baik" id="klak"
                                    autocomplete="off" />
                                <label class="btn btn-outline-success" for="klak">Baik</label>

                                <input type="radio" class="btn-check" name="klakson" value="rusak" id="klak0"
                                    autocomplete="off" />
                                <label class="btn btn-outline-danger" for="klak0">Rusak</label>
                            </div>
                        </div>
                        <hr class="hr" />

                        <div class="row p-2 mt-4">
                            <div class="col-lg-4 col-sm-2">
                                <p>Pedal Gas</p>
                            </div>

                            <div class="col-lg-8 col-sm-10 btn-group">
                                <input type="radio" class="btn-check" name="pedal_gas" value="berfungsi"
                                    id="pgas" autocomplete="off" />
                                <label class="btn btn-outline-success" for="pgas">Berfungsi</label>

                                <input type="radio" class="btn-check" name="pedal_gas" value="rusak" id="pgas0"
                                    autocomplete="off" />
                                <label class="btn btn-outline-danger" for="pgas0">Rusak</label>
                            </div>
                        </div>
                        <hr class="hr" />

                        <div class="row p-2 mt-4">
                            <div class="col-lg-4 col-sm-2">
                                <p>Pedal Kopling</p>
                            </div>

                            <div class="col-lg-8 col-sm-10 btn-group">
                                <input type="radio" class="btn-check" name="pedal_kopling" value="berfungsi"
                                    id="pkop" autocomplete="off" />
                                <label class="btn btn-outline-success" for="pkop">Berfungsi</label>

                                <input type="radio" class="btn-check" name="pedal_kopling" value="rusak"
                                    id="pkop0" autocomplete="off" />
                                <label class="btn btn-outline-danger" for="pkop0">Rusak</label>
                            </div>
                        </div>
                        <hr class="hr" />

                        <div class="row p-2 mt-4">
                            <div class="col-lg-4 col-sm-2">
                                <p>Pedal Rem</p>
                            </div>

                            <div class="col-lg-8 col-sm-10 btn-group">
                                <input type="radio" class="btn-check" name="pedal_rem" value="berfungsi"
                                    id="prem" autocomplete="off" />
                                <label class="btn btn-outline-success" for="prem">Berfungsi</label>

                                <input type="radio" class="btn-check" name="pedal_rem" value="rusak" id="prem0"
                                    autocomplete="off" />
                                <label class="btn btn-outline-danger" for="prem0">Rusak</label>
                            </div>
                        </div>
                        <hr class="hr" />

                        <div class="row p-2 mt-4">
                            <div class="col-lg-4 col-sm-2">
                                <p>Weaper</p>
                            </div>

                            <div class="col-lg-8 col-sm-10 btn-group">
                                <input type="radio" class="btn-check" name="weaper" value="berfungsi" id="weap"
                                    autocomplete="off" />
                                <label class="btn btn-outline-success" for="weap">Berfungsi</label>

                                <input type="radio" class="btn-check" name="weaper" value="rusak" id="weap0"
                                    autocomplete="off" />
                                <label class="btn btn-outline-danger" for="weap0">Rusak</label>
                            </div>
                        </div>
                        <hr class="hr" />

                        <div class="row p-2 mt-4">
                            <div class="col-lg-4 col-sm-2">
                                <p>Air Weaper</p>
                            </div>

                            <div class="col-lg-8 col-sm-10 btn-group">
                                <input type="radio" class="btn-check" name="air_weaper" value="terisi" id="airw"
                                    autocomplete="off" />
                                <label class="btn btn-outline-success" for="airw">Terisi</label>

                                <input type="radio" class="btn-check" name="air_weaper" value="tidak terisi"
                                    id="airw0" autocomplete="off" />
                                <label class="btn btn-outline-danger" for="airw0">Tidak Terisi</label>
                            </div>
                        </div>
                        <hr class="hr" />

                        <div class="row p-2 mt-4">
                            <div class="col-lg-4 col-sm-2">
                                <p>Air Radiator</p>
                            </div>

                            <div class="col-lg-8 col-sm-10 btn-group">
                                <input type="radio" class="btn-check" name="air_radiator" value="terisi"
                                    id="airr" autocomplete="off" />
                                <label class="btn btn-outline-success" for="airr">Terisi</label>

                                <input type="radio" class="btn-check" name="air_radiator" value="tidak terisi"
                                    id="airr0" autocomplete="off" />
                                <label class="btn btn-outline-danger" for="airr0">Tidak Terisi</label>
                            </div>
                        </div>
                        <hr class="hr" />

                        <div class="row p-2 mt-4">
                            <div class="col-lg-4 col-sm-2">
                                <p>Oli Mesin</p>
                            </div>

                            <div class="col-lg-8 col-sm-10 btn-group">
                                <input type="radio" class="btn-check" name="oli_mesin" value="terisi" id="oli"
                                    autocomplete="off" />
                                <label class="btn btn-outline-success" for="oli">Terisi</label>

                                <input type="radio" class="btn-check" name="oli_mesin" value="tidak terisi"
                                    id="oli0" autocomplete="off" />
                                <label class="btn btn-outline-danger" for="oli0">Tidak Terisi</label>
                            </div>
                        </div>
                        <hr class="hr" />
                        <!-- /Bagian Mobil -->

                        <!-- Foto -->
                        <h3 class="text-primary ml-3 mt-5">Foto KM Awal</h3>
                        <hr class="hr" />
                        <div class="input-group custom-file-button">
                            <label class="input-group-text" for="dokmobil1_awal">Dokumentasi Mobil</label>
                            <input type="file" name="photo_km_awal" class="form-control" id="dokmobil1_awal">
                        </div>

                        <!-- Foto KM Akhir -->
                        <h3 class="text-primary ml-3 mt-5">Foto KM Akhir</h3>
                        <hr class="hr" />
                        <div class="input-group custom-file-button">
                            <label class="input-group-text" for="dokmobil1_akhir">Dokumentasi Mobil</label>
                            <input type="file" name="photo_km_akhir" class="form-control" id="dokmobil1_akhir">
                        </div>
                        <!-- /Foto -->

                        <!-- notes -->
                        <h3 class="text-primary ml-3 mt-5">Notes</h3>
                        <hr class="hr" />
                        <textarea class="form-control" name="catatan" rows="5" id="notes" placeholder="Catatan"></textarea>
                        <!-- notes -->
                    </div>
                </div>
                <!-- /Kondisi Kendaraan -->

                <!-- button -->
                {{-- <button type="submit" class="btn btn-primary ml-3 px-5">Save</button>
            <button class="btn btn-danger ml-2 px-5">Cancel</button> --}}
                <!-- button -->
                <div class="row justify-content-end mt-5">
                    <div class="col-lg-2 col-sm-12">
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                    <div class="col-lg-2 col-sm-12 mt-3 mt-lg-0">
                        <button type="button" class="btn btn-secondary btn-block"
                            onclick="window.history.back();">Cancel</button>
                    </div>
                </div>


        </form>

    </section>
@endsection
