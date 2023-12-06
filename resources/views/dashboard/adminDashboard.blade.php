@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <style>
            .small-box {
                border-radius: 10px;
            }

            .carousel-item img {
                max-width: 100%;
                margin: 0 auto;
            }

            /* Tambahkan gaya berikut untuk mengatur lebar gambar pada tampilan kecil */
            @media (max-width: 767px) {
                .carousel-item img {
                    width: 100%;
                }
            }
        </style>
        <!-- Main content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 connectedSortable" style="background-color: #12ACED; color: #fff;">
                    <h3 style="margin-top: 100px;font-weight: bold;">Administrator</h3>
                    <div class="container fluid ">
                        <div class="row d-flex justify-content-around">
                            <div class="col-lg-3 col-md-6">
                                <div class="small-box bg-white text-center d-flex flex-column "
                                    style="font-weight: bold; padding: 20px;">
                                    <div class="d-flex align-items-center justify-content-end mb-3">
                                        <h4 style="margin-bottom: 0;">Perjalanan Aktif</h4>
                                        <i class="nav-icon fa-sharp fa-solid fa-car ml-auto"
                                            style="font-size: 36px; color: #12ACED;"></i>
                                    </div>
                                    <p style="font-size: 36px">
                                        {{ \App\Models\Perjalanan::totalMenungguSelesai() }}</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="small-box bg-white text-center d-flex flex-column "
                                    style="font-weight: bold; padding: 20px;">
                                    <div class="d-flex align-items-center justify-content-end mb-3">
                                        <h4 style="margin-bottom: 0;">Jumlah Perjalanan</h4>
                                        <i class="nav-icon fa-sharp fa-solid fa-car ml-auto"
                                            style="font-size: 36px; color: #12ACED;"></i>
                                    </div>
                                    <p style="font-size: 36px">
                                        {{ \App\Models\Perjalanan::totalPerjalanan() }}</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="small-box bg-white text-center d-flex flex-column "
                                    style="font-weight: bold; padding: 20px;">
                                    <div class="d-flex align-items-center justify-content-end mb-3">
                                        <h4 style="margin-bottom: 0;">Driver</h4>
                                        <i class="nav-icon fa-sharp fa-solid fa-car ml-auto"
                                            style="font-size: 36px; color: #12ACED;"></i>
                                    </div>
                                    <p style="font-size: 36px">{{ \App\Models\User::totalDriver() }}</p>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6">
                                <div class="small-box bg-white text-center d-flex flex-column "
                                    style="font-weight: bold; padding: 20px;">
                                    <div class="d-flex align-items-center justify-content-end mb-3">
                                        <h4 style="margin-bottom: 0;">Total Kendaraan</h4>
                                        <i class="nav-icon fa-sharp fa-solid fa-car ml-auto"
                                            style="font-size: 36px; color: #12ACED;"></i>
                                    </div>
                                    <p style="font-size: 36px">{{ \App\Models\Kendaraan::totalKendaraan() }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="margin-top: 100px;">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{ URL('img/ImageSlider-1.jpg') }}" class="d-block w-100 img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL('img/ImageSlider-2.jpeg') }}" class="d-block w-100 img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL('img/ImageSlider-3.jpeg') }}" class="d-block w-100 img-fluid" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ URL('img/ImageSlider-4.jpeg') }}" class="d-block w-100 img-fluid" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </button>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="margin-top: 20px;">
            <div class="table-responsive" style="overflow-x:auto;">
                <table class="table table-striped text-center" id="tableakun">
                    <thead>
                        <tr>
                            <th scope="col">User</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Alamat Awal</th>
                            <th scope="col">Alamat Akhir</th>
                            <th scope="col">KM Awal</th>
                            <th scope="col">KM Akhir</th>
                            <th scope="col">Total KM</th>
                            <th scope="col">Jenis Perjalanan</th>
                            <th scope="col">Perkiraan BBM</th>
                            <th scope="col">Foto KM Awal</th>
                            <th scope="col">Foto KM Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($perjalanans as $perjalanan)
                            <tr>
                                <th scope="row">{{ $perjalanan->user->name }}</th>
                                <td>{{ $perjalanan->tgl_perjalanan }}</td>
                                <td>{{ $perjalanan->alamat_awal }}</td>
                                <td>{{ $perjalanan->alamat_tujuan }}</td>
                                <td>{{ $perjalanan->km_awal }}</td>
                                <td>{{ $perjalanan->km_akhir }}</td>
                                <td>{{ $perjalanan->km_akhir - $perjalanan->km_awal }}</td>
                                <td>{{ $perjalanan->jenis_perjalanan }}</td>
                                <td>{{ ($perjalanan->km_akhir - $perjalanan->km_awal) / 10 }}</td>

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
                                                        <h4 class="modal-title w-100 font-weight-bold">Lihat Foto
                                                            Kendaraan</h4>
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
                                            <a href="#" class="btn btn-primary btn-rounded mb-4"
                                                data-toggle="modal" data-target="#modalLihatAwal{{ $perjalanan->id }}"><i
                                                    class="iconify nav-icon mr-3" data-icon="mdi:eye"></i></a>
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
                                                        <h4 class="modal-title w-100 font-weight-bold">Lihat Foto
                                                            Kendaraan</h4>
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
                                            <a href="#" class="btn btn-primary btn-rounded mb-4"
                                                data-toggle="modal"
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
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
