@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-lg-3 col-sm-12 mb-sm-3">
                    <label for="cariData">Cari :</label>
                    <input type="text" class="form-control" id="cariData" placeholder="Cari Data...">
                </div>
                <div class="col-lg-3 col-sm-6">
                    <label for="cariAlamatAwal">Tanggal  :</label>
                    <input type="date" class="form-control" id="cariAlamatAwal" placeholder="">
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

        <div class="container-fluid mt-5">
            <table class="table table-striped text-center" id="tableakun">
                <tr>
                    <th scope="col">User</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Alamat awal</th>
                    <th scope="col">Alamat akhir</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
                <tr>
                    <th scope="row">Admin</th>
                    <td> 2023-09-10</td>
                    <td>pgncom lampung</td>
                    <td>terbanggi besar</td>
                    <td><span class="badge badge-success">Perjalanan Selesai</span></td>
                    <td>
                        <a href="/map" class="btn" style="background-color: #12ACED; color: #ffff;">
                            <i class="iconify" data-icon="bi:eye" style="margin-right: 5px;"></i> Lihat Lokasi
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Zointa</th>
                    <td>2023-09-11</td>
                    <td>palembang</td>
                    <td>pgncom lampung</td>
                    <td><span class="badge badge-success">Perjalanan Selesai</span></td>
                    <td>
                        <a href="/map" class="btn" style="background-color: #12ACED; color: #ffff;">
                            <i class="iconify" data-icon="bi:eye" style="margin-right: 5px;"></i> Lihat Lokasi
                        </button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">Jacky</th>
                    <td>2023-09-12</td>
                    <td>Panjang</td>
                    <td>bakauheni</td>
                    <td><span class="badge badge-danger">Menunggu perjalanan</span></td>
                    <td>
                        <a href="/map" class="btn" style="background-color: #12ACED; color: #ffff;">
                            <i class="iconify" data-icon="bi:eye" style="margin-right: 5px;"></i> Lihat Lokasi
                        </a>


                    </td>
                </tr>

            </table>
        </div>
    </div>
@endsection
