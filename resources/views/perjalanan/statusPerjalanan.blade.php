@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Cari -->
        <div class="container-fluid p-5">
            <form action="/statusperjalanan/search" class="form-inline" method="GET">
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
                            <a href="{{ route('statusPerjalanan') }}" class="btn btn-danger ml-1"><i class="iconify"
                                    data-icon="solar:refresh-linear"></i> </a>
                        @else
                            <a href="{{ route('statusPerjalananUser.index') }}" class="btn btn-danger ml-1"><i class="iconify"
                                    data-icon="solar:refresh-linear"></i> </a>
                        @endif
                    </div>
                </div>
            </form>
            {{-- <div class="row">
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
            </div> --}}
        </div>
        <!-- /cari -->

        <!-- Table -->
        <div class="container-fluid mt-5">
            <table class="table table-striped text-center" id="tableakun">
                <tr>
                    <th scope="col">Nama Driver</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Alamat Awal</th>
                    <th scope="col">Alamat Akhir</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                @foreach ($perjalanans as $perjalanan)
                    @if ($perjalanan->status_perjalanan == 'menunggu'  ||
                    $perjalanan->status_perjalanan == 'selesai')
                        <tr>
                            <th scope="row">{{ $perjalanan->user->name }}</th>
                            <td>{{ $perjalanan->tgl_perjalanan }}</td>
                            <td>{{ $perjalanan->alamat_awal }}</td>
                            <td>{{ $perjalanan->alamat_tujuan }}</td>
                            <td>
                                @if ($perjalanan->status_perjalanan == 'menunggu')
                                <span class="badge bg-warning">Menunggu dilengkapi</span>
                            @elseif($perjalanan->status_perjalanan == 'disetujui')
                                <span class="badge bg-success">disetujui</span>
                            @elseif($perjalanan->status_perjalanan == 'selesai')
                                <span class="badge bg-success">menunggu persetujuan</span>
                            @elseif($perjalanan->status_perjalanan == 'ditolak')
                                <span class="badge bg-danger">Ditolak</span>
                            @endif
                            </td>
                            <td>
                                @if ($perjalanan->status_perjalanan == 'selesai')
                                    <button class="btn btn-success ml-1" onclick="confirmApproval({{ $perjalanan->id }})">
                                        Setuju
                                    </button>
                                    <button class="btn btn-danger ml-1" onclick="confirmRejection({{ $perjalanan->id }})">
                                        Tolak
                                    </button>
                                @else
                                    {{-- <button class="btn btn-info ml-1" disabled>
                                        Info
                                    </button> --}}
                                @endif
                            </td>
                        </tr>
                    @endif
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

@section('js')
    <script>
        function confirmApproval(perjalananId) {
            if (confirm("Anda yakin ingin menyetujui perjalanan ini?")) {
                approvePerjalanan(perjalananId);
            } else {
                alert("Persetujuan dibatalkan.");
            }
        }

        function confirmRejection(perjalananId) {
            if (confirm("Anda yakin ingin menolak perjalanan ini?")) {
                rejectPerjalanan(perjalananId);
            } else {
                alert("Penolakan dibatalkan.");
            }
        }

        function approvePerjalanan(perjalananId) {
            $.ajax({
                type: "POST",
                url: '/approve-perjalanan/' + perjalananId,
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function(data) {
                    alert(data.message);
                    // Setelah berhasil, Anda dapat memperbarui tampilan atau memberikan notifikasi kepada pengguna
                    // ...

                    // Contoh: Reload halaman
                    window.location.reload();
                },
                error: function(error) {
                    console.log(error);
                    alert("Terjadi kesalahan saat menyetujui perjalanan.");
                }
            });
        }

        function rejectPerjalanan(perjalananId) {
            $.ajax({
                type: "POST",
                url: '/reject-perjalanan/' + perjalananId,
                data: {
                    "_token": "{{ csrf_token() }}",
                },
                success: function(data) {
                    alert(data.message);
                    // Setelah berhasil, Anda dapat memperbarui tampilan atau memberikan notifikasi kepada pengguna
                    // ...

                    // Contoh: Reload halaman
                    window.location.reload();
                },
                error: function(error) {
                    console.log(error);
                    alert("Terjadi kesalahan saat menolak perjalanan.");
                }
            });
        }
    </script>
@endsection













{{-- function approvePerjalanan(perjalananId) {
    $.ajax({
        type: "POST",
        url: '/approve-perjalanan/' + perjalananId,
        data: {
            "_token": "{{ csrf_token() }}",
        },
        success: function (data) {
            toastr.success(data.message, 'Perjalanan Disetujui');
            // Tambahkan kode lainnya sesuai kebutuhan
        },
        error: function (error) {
            console.log(error);
            toastr.error('Terjadi kesalahan saat menyetujui perjalanan.', 'Error');
        }
    });
}

function rejectPerjalanan(perjalananId) {
    $.ajax({
        type: "POST",
        url: '/reject-perjalanan/' + perjalananId,
        data: {
            "_token": "{{ csrf_token() }}",
        },
        success: function (data) {
            toastr.success(data.message, 'Perjalanan Ditolak');
            // Tambahkan kode lainnya sesuai kebutuhan
        },
        error: function (error) {
            console.log(error);
            toastr.error('Terjadi kesalahan saat menolak perjalanan.', 'Error');
        }
    });
} --}}


{{-- <td><span class="badge badge-warning">{{ $perjalanan->status_perjalanan }}</span></td>
                    <td>
                        @if ($perjalanan->status_perjalanan == 'menunggu')
                            <button class="btn btn-success ml-1" type="button" onclick="confirmApproval({{ $perjalanan->id }})">
                                <i class="iconify" data-icon="fa-solid:check" style="color: #ffff"></i><p>Setuju</p>
                            </button>
                            <button class="btn btn-danger ml-1" type="button" onclick="confirmRejection({{ $perjalanan->id }})">
                                <i class="iconify" data-icon="mingcute:close-fill" ></i> <p>Tolak</p>
                            </button>
                        @else
                            <!-- Tampilkan tombol lainnya atau pesan sesuai kebutuhan -->
                            <!-- Contoh: -->
                            <button class="btn btn-info ml-1" type="button" disabled>
                                <i class="iconify" data-icon="fa-solid:info" style="color: #ffff"></i><p>Info</p>
                            </button>
                        @endif --}}
{{-- <td>{{ $perjalanan->id }}</td> --}}
