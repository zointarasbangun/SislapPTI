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
                    <button class="btn btn-primary ml-1" type="button"><i class="iconify" data-icon="material-symbols:search"></i></i></button>
                    <button class="btn btn-danger ml-1" type="button"><i class="iconify" data-icon="solar:refresh-linear"></i></button>
                    <div class="float-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /cari -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <h5>Status Perjalanan</h5>
            </div>
        </div>
    </div>
    <!-- Table -->
    <div class="container-fluid mt-3">
        <table class="table table-striped text-center" id="tableakun">
            <tr>
                <th scope="col">User</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Alamat Awal</th>
                <th scope="col">Alamat Akhir</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            <tr>
                <th scope="row">Budi Lestari</th>
                <td>2023-09-10</td>
                <td>Palembang</td>
                <td>Bandar Lampung</td>
                <td><span class="badge badge-success">Disetujui</span></td>
                <td style="width: 12rem;">
                    <button class="btn btn-primary ml-1" type="button"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                    {{-- <button type="button" class="btn" style="background-color: #12ACED; color :#ffff"><i class="iconify" data-icon="bxs:detail"></i></button> --}}
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection
