@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid p-5">
            <div class="row">
                <form action="/riwayatperjalananuser/search" class="form-inline" method="GET">
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
                            <a href="{{ route('riwayatPerjalananUser') }}" class="btn btn-danger ml-1"><i class="iconify"
                                    data-icon="solar:refresh-linear"></i> </a>

                            <div class="float-right">
                                <a href="{{ route('cetakpdfuser', ['search' => request('search'), 'cariTanggalAwal' => request('cariTanggalAwal'), 'cariTanggalAkhir' => request('cariTanggalAkhir')]) }}"
                                    class="btn btn-success ml-1" type="button">
                                    <i class="iconify" data-icon="teenyicons:pdf-solid"></i> PDF
                                </a>
                                <button class="btn btn-success ml-1" type="button"><i class="iconify"
                                        data-icon="icon-park-solid:excel"></i> Excel</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <div class="container-fluid">
            <div class="row mt-2">
                <div class="col-sm-6">
                    <h5>Riwayat Perjalanan Saya</h5>
                </div>
            </div>
        </div>

        <div class="container-fluid mt-3">
            <table class="table table-striped text-center" id="tableakun">
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Alamat <br>Awal</th>
                    <th scope="col">Alamat <br>Akhir</th>
                    <th scope="col">KM Awal</th>
                    <th scope="col">KM Akhir</th>
                    <th scope="col">Total KM</th>
                    <th scope="col">Jenis<br>Perjalanan</th>
                    <th scope="col">Perkiraan<br>BBM</th>
                    <th scope="col">Status</th>
                    <th scope="col">Foto KM Awal</th>
                    <th scope="col">Foto KM Akhir</th>
                </tr>
                @foreach ($perjalanans as $perjalanan)
                    <tr>
                        {{-- <th scope="row">{{ $perjalanan->user->name }}</th> --}}
                        <td>{{ $perjalanan->tgl_perjalanan }}</td>
                        <td>{{ $perjalanan->alamat_awal }}</td>
                        <td>{{ $perjalanan->alamat_tujuan }}</td>
                        <td>{{ $perjalanan->km_awal }}</td>
                        <td>{{ $perjalanan->km_akhir }}</td>
                        <td>{{ $perjalanan->km_akhir - $perjalanan->km_awal }}</td>
                        <td>{{ $perjalanan->jenis_perjalanan }}</td>
                        <td>{{ ($perjalanan->km_akhir - $perjalanan->km_awal) / 10 }}</td>
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

                        {{-- <td><img src="{{ asset('storage/' . $perjalanan->photo_km_awal) }}" class="img-fluid" alt="Foto Kendaraan"/></td>
                <td><img src="{{ asset('storage/' . $perjalanan->photo_km_akhir) }}" class="img-fluid" alt="Foto Kendaraan"/></td> --}}
                        <td>
                            @if ($perjalanan->photo_km_awal)
                                <!-- Modal -->
                                <div class="modal fade" id="modalLihatAwal{{ $perjalanan->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-start">
                                                <h4 class="modal-title w-100 font-weight-bold">Lihat Foto Kendaraan</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body mx-3">
                                                <div class="mb-0">
                                                    <img src="{{ asset('storage/' . $perjalanan->photo_km_awal) }}"
                                                        class="img-fluid" alt="Foto Kendaraan" />
                                                </div>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-right">
                                                <button class="btn btn-success" data-dismiss="modal"
                                                    aria-label="Close">Oke</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /modal -->

                                <!-- Button Modal -->
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary btn-rounded mb-4" data-toggle="modal"
                                        data-target="#modalLihatAwal{{ $perjalanan->id }}"><i class="iconify nav-icon mr-3"
                                            data-icon="mdi:eye"></i></a>
                                </div>
                                <!-- /button modal -->
                            @else
                                Gambar tidak tersedia
                            @endif
                        </td>
                        <td>
                            @if ($perjalanan->photo_km_akhir)
                                <!-- Modal -->
                                <div class="modal fade" id="modalLihatAkhir{{ $perjalanan->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header text-start">
                                                <h4 class="modal-title w-100 font-weight-bold">Lihat Foto Kendaraan</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body mx-3">
                                                <div class="mb-0">
                                                    <img src="{{ asset('storage/' . $perjalanan->photo_km_akhir) }}"
                                                        class="img-fluid" alt="Foto Kendaraan" />
                                                </div>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-right">
                                                <button class="btn btn-success" data-dismiss="modal"
                                                    aria-label="Close">Oke</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /modal -->

                                <!-- Button Modal -->
                                <div class="text-center">
                                    <a href="#" class="btn btn-primary btn-rounded mb-4" data-toggle="modal"
                                        data-target="#modalLihatAkhir{{ $perjalanan->id }}"><i
                                            class="iconify nav-icon mr-3" data-icon="mdi:eye"></i></a>
                                </div>
                                <!-- /button modal -->
                            @else
                                Gambar tidak tersedia
                            @endif
                        </td>

                    </tr>
                @endforeach

            </table>
        </div>
    </div>
@endsection
