@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    {{-- <form action="{{ route('search') }}" method="GET"> --}}
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-lg-3 col-sm-12">
                    <label for="cariData">Cari :</label>
                    <input type="text" class="form-control" id="cariData" placeholder="Cari Data...">
                </div>
                <div class="col-lg-3 col-sm-6">
                    <label for="cariTanggalAwal">Tanggal Awal :</label>
                    <input type="date" class="form-control" id="cariAlamatAwal" placeholder="">
                </div>
                <div class="col-lg-3 col-sm-6">
                    <label for="cariTanggalAkhir">Tanggal Akhir :</label>
                    <input type="date" class="form-control" id="cariAlamatAkhir" placeholder="">
                </div>
                <div class="col-lg-3 col-sm-12">
                    <label for="actionCari" class="disable">.</label>
                    <div id="actionCari">
                        <button class="btn btn-primary ml-1"  type="button"><i class="iconify" data-icon="material-symbols:search"></i></button>
                        <button class="btn btn-danger ml-1" type="button"><i class="iconify" data-icon="solar:refresh-linear"></i></button>
                        <div class="float-right">
                            <button class="btn btn-success ml-1"  type="button"><i class="iconify" data-icon="teenyicons:pdf-solid"></i></button>
                            <button class="btn btn-success ml-1" type="button"><i class="iconify" data-icon="icon-park-solid:excel"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-3">
            <table class="table table-striped text-center" id="tableakun">
                <tr>
                    <th scope="col">User</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Alamat Awal</th>
                    <th scope="col">Alamat Akhir</th>
                    <th scope="col">KM Awal</th>
                    <th scope="col">KM Akhir</th>
                    <th scope="col">Total KM</th>
                    <th scope="col">Jenis<br>Perjalanan</th>
                    <th scope="col">Perkiraan<br>BBM</th>
                    <th scope="col">Foto KM Awal</th>
                    <th scope="col">Foto KM Akhir</th>
                    @if (Auth::user()->role == 'admin')
                    <th scope="col">Action</th>
                    @endif
                </tr>
                @foreach ($perjalanans as $perjalanan)
                <tr>
                    <th scope="row">{{ $perjalanan->user->name }}</th>
                    <td>{{ $perjalanan->tgl_perjalanan }}</td>
                    <td>{{ $perjalanan->alamat_awal }}</td>
                    <td>{{ $perjalanan->alamat_tujuan }}</td>
                    <td>{{ $perjalanan->km_awal }}</td>
                    <td>{{ $perjalanan->km_akhir }}</td>
                    <td>{{ ($perjalanan->km_akhir)-($perjalanan->km_awal) }}</td>
                    <td>{{ $perjalanan->jenis_perjalanan }}</td>
                    <td>{{ (($perjalanan->km_akhir)-($perjalanan->km_awal))/10 }}</td>
                    {{-- <td><img src="{{ asset('storage/' . $perjalanan->photo_km_awal) }}" class="img-fluid" alt="Foto Kendaraan"/></td>
                    <td><img src="{{ asset('storage/' . $perjalanan->photo_km_akhir) }}" class="img-fluid" alt="Foto Kendaraan"/></td> --}}
                    <td>
                        @if ($perjalanan->photo_km_awal)
                        <!-- Modal -->
                        <div class="modal fade" id="modalLihatAwal{{ $perjalanan->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-start">
                                        <h4 class="modal-title w-100 font-weight-bold">Lihat Foto Kendaraan</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3">
                                        <div class="mb-0">
                                            <img src="{{ asset('storage/' . $perjalanan->photo_km_awal) }}" class="img-fluid" alt="Foto Kendaraan"/>
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-right">
                                        <button class="btn btn-success" data-dismiss="modal" aria-label="Close">Oke</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /modal -->

                        <!-- Button Modal -->
                        <div class="text-center">
                            <a href="#" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalLihatAwal{{ $perjalanan->id }}"><i class="iconify nav-icon mr-3" data-icon="mdi:eye"></i></a>
                        </div>
                        <!-- /button modal -->
                        @else
                        Gambar tidak tersedia
                        @endif
                    </td>
                    <td>
                        @if ($perjalanan->photo_km_akhir)
                        <!-- Modal -->
                        <div class="modal fade" id="modalLihatAkhir{{ $perjalanan->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-start">
                                        <h4 class="modal-title w-100 font-weight-bold">Lihat Foto Kendaraan</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body mx-3">
                                        <div class="mb-0">
                                            <img src="{{ asset('storage/' . $perjalanan->photo_km_akhir) }}" class="img-fluid" alt="Foto Kendaraan"/>
                                        </div>
                                    </div>
                                    <div class="modal-footer d-flex justify-content-right">
                                        <button class="btn btn-success" data-dismiss="modal" aria-label="Close">Oke</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /modal -->

                        <!-- Button Modal -->
                        <div class="text-center">
                            <a href="#" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalLihatAkhir{{ $perjalanan->id }}"><i class="iconify nav-icon mr-3" data-icon="mdi:eye"></i></a>
                        </div>
                        <!-- /button modal -->
                        @else
                        Gambar tidak tersedia
                        @endif
                    </td>
                    @if (Auth::user()->role == 'admin')
                    <td>
                        <button class="btn btn-primary ml-1" type="button"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                        <button class="btn btn-danger ml-1" type="button"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                        <button class="btn btn-success ml-1" type="button"><i class="iconify" data-icon="material-symbols:download"></i></button>
                    </td>
                    @endif

                </tr>
                @endforeach
            </table>
        </div>
    {{-- </form> --}}

</div>

@endsection


@section('js')
<script>
    function searchData() {
        var cariData = document.getElementById('cariData').value;
        var cariTanggalAwal = document.getElementById('cariTanggalAwal').value;
        var cariTanggalAkhir = document.getElementById('cariTanggalAkhir').value;

        // Kirim request AJAX
        $.ajax({
            url: '{{ route('search') }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                cariData: cariData,
                cariTanggalAwal: cariTanggalAwal,
                cariTanggalAkhir: cariTanggalAkhir
            },
            success: function (data) {
                // Manipulasi hasil pencarian, contoh: tampilkan di console
                console.log(data);
            }
        });
    }
</script>

@endsection
