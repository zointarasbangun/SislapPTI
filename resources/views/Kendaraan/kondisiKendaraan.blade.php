@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Cari -->
        <div class="container-fluid p-5">
            <div class="row">
                <form action="/kondisikendaraan/search" class="form-inline" method="GET">
                    <div class="col-lg-3 col-sm-12">
                        <label for="cariData">Cari :
                            <input type="text" class="form-control" name="search" id="cariData"
                                placeholder="Cari Data..."></label>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label for="cariTanggalAwal">Tanggal Awal :
                            <input type="date" class="form-control" name="cariTanggalAwal" id="cariAlamatAwal"
                                placeholder=""></label>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <label for="cariTanggalAkhir">Tanggal Akhir :
                            <input type="date" class="form-control" name="cariTanggalAkhir" id="cariAlamatAkhir"
                                placeholder=""></label>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div id="actionCari">
                            <button class="btn btn-primary ml-1" type="submit"><i class="iconify"
                                    data-icon="material-symbols:search"></i></button>
                            @if (Auth::user()->role == 'admin')
                                <a href="{{ route('kendaraan.kondisi') }}" class="btn btn-danger ml-1"><i class="iconify"
                                        data-icon="solar:refresh-linear"></i> </a>
                            @else
                                <a href="{{ route('kendaraanUser.kondisi') }}" class="btn btn-danger ml-1"><i
                                        class="iconify" data-icon="solar:refresh-linear"></i> </a>
                            @endif
                        </div>
                    </div>
                </form>
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
                    @foreach ($perjalanans as $perjalanan)
                        <tr>
                            <th scope="row">{{ $perjalanan->user->name }}</th>
                            <td>{{ $perjalanan->tgl_perjalanan }}</td>
                            <td>{{ $perjalanan->no_polisi }}</td>
                            <td>{{ $perjalanan->tipe_kendaraan }}</td>
                            <td>
                                {{-- <span class="badge badge-primary">Sangat Baik</span> --}}
                                @php
                                    // $totalAttributes = 15; // Jumlah total atribut
                                    $persentaseAkumulatif = 1;
                                    $nilaiPersentase = 0;

                                    // Hitung persentase berdasarkan kriteria
                                    if ($perjalanan->lampu_depan == 'berfungsi') {
                                        $nilaiPersentase += 6.6;
                                    }
                                    if ($perjalanan->lampusen_depan == 'berfungsi') {
                                        $nilaiPersentase += 6.6;
                                    }
                                    if ($perjalanan->lampusen_belakang == 'berfungsi') {
                                        $nilaiPersentase += 6.6;
                                    }
                                    if ($perjalanan->lampu_rem == 'berfungsi') {
                                        $nilaiPersentase += 6.6;
                                    }
                                    if ($perjalanan->lampu_mundur == 'berfungsi') {
                                        $nilaiPersentase += 6.6;
                                    }
                                    if ($perjalanan->body == 'baik') {
                                        $nilaiPersentase += 6.6;
                                    }
                                    if ($perjalanan->ban == 'baik') {
                                        $nilaiPersentase += 6.6;
                                    }
                                    if ($perjalanan->klakson == 'baik') {
                                        $nilaiPersentase += 6.6;
                                    }
                                    if ($perjalanan->pedal_gas == 'berfungsi') {
                                        $nilaiPersentase += 6.6;
                                    }
                                    if ($perjalanan->pedal_kopling == 'berfungsi') {
                                        $nilaiPersentase += 6.6;
                                    }
                                    if ($perjalanan->pedal_rem == 'berfungsi') {
                                        $nilaiPersentase += 6.6;
                                    }
                                    if ($perjalanan->weaper == 'berfungsi') {
                                        $nilaiPersentase += 6.6;
                                    }
                                    if ($perjalanan->air_weaper == 'terisi') {
                                        $nilaiPersentase += 6.6;
                                    }
                                    if ($perjalanan->air_radiator == 'terisi') {
                                        $nilaiPersentase += 6.6;
                                    }
                                    if ($perjalanan->oli_mesin == 'terisi') {
                                        $nilaiPersentase += 6.6;
                                    }

                                    // Tambahkan persentase ke akumulator
                                    $persentaseAkumulatif += $nilaiPersentase;

                                    // Tampilkan nilai persentase
                                    // echo $nilaiPersentase;

                                @endphp

                                {{-- persentase --}}
                                @if ($persentaseAkumulatif >= 80)
                                    <span class="badge badge-primary">Sangat Baik</span>
                                @elseif ($persentaseAkumulatif >= 50)
                                    <span class="badge badge-success">Baik</span>
                                @elseif ($persentaseAkumulatif >= 25)
                                    <span class="badge badge-warning">Buruk</span>
                                @elseif ($persentaseAkumulatif >= 0)
                                    <span class="badge badge-danger">Sangat Buruk</span>
                                @else
                                    <span class="badge badge-secondary">null</span>
                                @endif
                                </span>
                                : {{ $persentaseAkumulatif }}%
                            </td>
                            <td>
                                <!-- button detail modal -->
                                <button class="btn btn-success mb-1" type="button" data-toggle="modal"
                                    data-target="#modalKondisiForm{{ $perjalanan->tipe_kendaraan_id }}">
                                    <i class="iconify" data-icon="mdi:car-info"></i> Detail
                                </button>
                            </td>
                        </tr>
                        <div class="modal fade" id="modalKondisiForm{{ $perjalanan->tipe_kendaraan_id }}">
                            <div class="modal-dialog modal-dialog-scrollable">
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
                                            <li class="list-group-item">Tipe Mobil : {{ $perjalanan->tipe_kendaraan }}</li>
                                            <li class="list-group-item">No. Polisi : {{ $perjalanan->no_polisi }}</li>
                                            <li class="list-group-item">Lampu Depan : {{ $perjalanan->lampu_depan }}</li>
                                            <li class="list-group-item">Lampu Sen Depan : {{ $perjalanan->lampusen_depan }}
                                            </li>
                                            <li class="list-group-item">Lampu Sen Belakang :
                                                {{ $perjalanan->lampusen_belakang }}</li>
                                            <li class="list-group-item">Lampu Rem : {{ $perjalanan->lampu_rem }}</li>
                                            <li class="list-group-item">Lampu Mundur : {{ $perjalanan->lampu_mundur }}</li>
                                            <li class="list-group-item">Body : {{ $perjalanan->body }}</li>
                                            <li class="list-group-item">Ban : {{ $perjalanan->ban }}</li>
                                            <li class="list-group-item">Klakson : {{ $perjalanan->klakson }}</li>
                                            <li class="list-group-item">Pedal Gas : {{ $perjalanan->pedal_gas }}</li>
                                            <li class="list-group-item">Pedal Kopling : {{ $perjalanan->pedal_kopling }}
                                            </li>
                                            <li class="list-group-item">Pedal Rem : {{ $perjalanan->pedal_rem }}</li>
                                            <li class="list-group-item">Weaper : {{ $perjalanan->weaper }}</li>
                                            <li class="list-group-item">Air Weaper : {{ $perjalanan->air_weaper }}</li>
                                            <li class="list-group-item">Air Radiator : {{ $perjalanan->air_radiator }}
                                            </li>
                                            <li class="list-group-item">Oli Mesin : {{ $perjalanan->oli_mesin }}</li>
                                            <li class="list-group-item">Notes : {{ $perjalanan->catatan }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </table>


                <!-- modal detail -->
                {{-- <div class="modal fade" id="modalKondisiForm">
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
            </div> --}}
                <!-- modal detail -->

            </div>
        </div>
        </div>
    @endsection
