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
                    @foreach ($perjalanans as $perjalanan)
                <tr>
                    {{-- <th scope="row">{{ $perjalanan->user->name }}</th> --}}
                    <td>{{ $perjalanan->tgl_perjalanan }}</td>
                    <td>{{ $perjalanan->no_polisi }}</td>
                    <td>{{ $perjalanan->tipe_kendaraan }}</td>
                    <td>
                            <!-- trigger modal -->
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
                                    <li class="list-group-item">Lampu Sen Depan : {{ $perjalanan->lampusen_depan }}</li>
                                    <li class="list-group-item">Lampu Sen Belakang : {{ $perjalanan->lampusen_belakang }}</li>
                                    <li class="list-group-item">Lampu Rem : {{ $perjalanan->lampu_rem }}</li>
                                    <li class="list-group-item">Lampu Mundur : {{ $perjalanan->lampu_mundur }}</li>
                                    <li class="list-group-item">Body : {{ $perjalanan->body }}</li>
                                    <li class="list-group-item">Ban : {{ $perjalanan->ban }}</li>
                                    <li class="list-group-item">Klakson : {{ $perjalanan->klakson }}</li>
                                    <li class="list-group-item">Pedal Gas : {{ $perjalanan->pedal_gas }}</li>
                                    <li class="list-group-item">Pedal Kopling : {{ $perjalanan->pedal_kopling }}</li>
                                    <li class="list-group-item">Pedal Rem : {{ $perjalanan->pedal_rem }}</li>
                                    <li class="list-group-item">Weaper : {{ $perjalanan->weaper }}</li>
                                    <li class="list-group-item">Air Weaper : {{ $perjalanan->air_weaper }}</li>
                                    <li class="list-group-item">Air Radiator : {{ $perjalanan->air_radiator }}</li>
                                    <li class="list-group-item">Oli Mesin : {{ $perjalanan->oli_mesin }}</li>
                                    <li class="list-group-item">Notes : {{ $perjalanan->catatan }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- modal -->
            </div>
        </div>
        <!-- /table -->
    </div>
</div>

@endsection
