@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-lg-3 col-sm-12">
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
                        <button class="btn btn-success ml-1" type="button"><i class="iconify" data-icon="teenyicons:pdf-solid"></i></button>
                        <button class="btn btn-success ml-1" type="button"><i class="iconify" data-icon="icon-park-solid:excel"></i></button>
                    </div>
                </div>
            </div>
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
                <th scope="col">Foto KM Awal</th>
                <th scope="col">Foto KM Akhir</th>
            </tr>
            <tr>
                <td>2023-11-05</td>
                <td>Lampung Timur</td>
                <td>Bandar Lampung</td>
                <td>50</td>
                <td>85</td>
                <td>35</td>
                <td>Luar</td>
                <td>5</td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>2023-11-07</td>
                <td>Bandar Lampung</td>
                <td>Bandar Lampung</td>
                <td>55</td>
                <td>90</td>
                <td>35</td>
                <td>Dalam</td>
                <td>3</td>
                <td></td>
                <td></td>
            </tr>
        </table>
    </div>
</div>

@endsection
