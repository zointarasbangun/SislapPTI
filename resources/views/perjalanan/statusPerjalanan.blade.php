@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Cari -->
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-lg-3 col-sm-12 mb-sm-3">
                    <label for="cariData">Cari :</label>
                    <input type="text" class="form-control" id="cariData" placeholder="Cari Data...">
                </div>
                <div class="col-lg-3 col-sm-6">
                    <label for="cariAlamatAwal">Tanggal Awal :</label>
                    <input type="date" class="form-control" id="cariAlamatAwal" placeholder="">
                </div>
                <div class="col-lg-3 col-sm-6">
                    <label for="cariAlamatAkhir">Tanggal Akhir :</label>
                    <input type="date" class="form-control" id="cariAlamatAkhir" placeholder="">
                </div>
                <div class="col-lg-3 col-sm-12">
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
        <!-- /cari -->

        <!-- Table -->
        <div class="container-fluid mt-5">
            <table class="table table-striped text-center" id="tableakun">
                <tr>
                    <th scope="col">User</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Alamat Awal</th>
                    <th scope="col">Alamat Akhir</th>
                    <th scope="col">Action</th>
                </tr>
                @foreach ($perjalanans as $perjalanan)
                    <tr>
                        <th scope="row">{{ $perjalanan->user->name }}</th>
                        <td>{{ $perjalanan->tgl_perjalanan }}</td>
                        <td>{{ $perjalanan->alamat_awal }}</td>
                        <td>{{ $perjalanan->alamat_tujuan }}</td>
                        <td>
                            <form id="statusForm{{ $perjalanan->id }}"
                                action="{{ route('admin.update_status', $perjalanan->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="btn-group" role="group" aria-label="Pilihan Status">
                                    <button type="button" class="btn btn-outline-success mr-2"
                                        onclick="updateStatus('{{ $perjalanan->id }}', 'disetujui')">
                                        <i class="fas fa-check fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-warning mr-2"
                                        onclick="updateStatus('{{ $perjalanan->id }}', 'pending')">
                                        <i class="fas fa-question fa-fw"></i>
                                    </button>
                                    <button type="button" class="btn btn-outline-danger"
                                        onclick="updateStatus('{{ $perjalanan->id }}', 'ditolak')">
                                        <i class="fas fa-times fa-fw"></i>
                                    </button>
                                </div>
                            </form>
                        </td>

                    </tr>
                @endforeach
            </table>
        </div>

        <script>
            function updateStatus(id, status) {
                // Menetapkan nilai status ke elemen input pada formulir
                document.querySelector(`#statusForm${id} select[name="status"]`).value = status;

                // Mengirim formulir secara otomatis
                document.querySelector(`#statusForm${id}`).submit();
            }
        </script>
    </div>
@endsection
