@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-lg-3 col-sm-12">
                <label for="cariData">Cari :</label>
                <input type="text" class="form-control" id="cariData" placeholder="Cari Data...">
            </div>
            <div class="col-lg-3 col-sm-6">
                <label for="cariAlamatAwal">Alamat Awal :</label>
                <input type="date" class="form-control" id="cariAlamatAwal" placeholder="">
            </div>
            <div class="col-lg-3 col-sm-6">
                <label for="cariAlamatAkhir">Alamat Akhir :</label>
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
                <th scope="col">Action</th>
            </tr>
            <tr>
                <th scope="row">Joe</th>
                <td>2023-09-10</td>
                <td>Surabaya</td>
                <td>Malang</td>
                <td>100</td>
                <td>200</td>
                <td>300</td>
                <td>Perjalanan Dinas</td>
                <td>5</td>
                <td></td>
                <td></td>
                <td>
                    <button class="btn btn-primary ml-1" type="button"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                    <button class="btn btn-danger ml-1" type="button"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                    <button class="btn btn-success ml-1" type="button"><i class="iconify" data-icon="material-symbols:download"></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">Joe</th>
                <td>2023-09-10</td>
                <td>Surabaya</td>
                <td>Malang</td>
                <td>100</td>
                <td>200</td>
                <td>300</td>
                <td>Perjalanan Dinas</td>
                <td>5</td>
                <td></td>
                <td></td>
                <td>
                    <button class="btn btn-primary ml-1" type="button"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                    <button class="btn btn-danger ml-1" type="button"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                    <button class="btn btn-success ml-1" type="button"><i class="iconify" data-icon="material-symbols:download"></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">Joe</th>
                <td>2023-09-10</td>
                <td>Surabaya</td>
                <td>Malang</td>
                <td>100</td>
                <td>200</td>
                <td>300</td>
                <td>Perjalanan Dinas</td>
                <td>5</td>
                <td></td>
                <td></td>
                <td style="width: 12rem;">
                    <button class="btn btn-primary ml-1" type="button"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                    <button class="btn btn-danger ml-1" type="button"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                    <button class="btn btn-success ml-1" type="button"><i class="iconify" data-icon="material-symbols:download"></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">Joe</th>
                <td>2023-09-10</td>
                <td>Surabaya</td>
                <td>Malang</td>
                <td>100</td>
                <td>200</td>
                <td>300</td>
                <td>Perjalanan Dinas</td>
                <td>5</td>
                <td></td>
                <td></td>
                <td style="width: 12rem;">
                    <button class="btn btn-primary ml-1" type="button"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                    <button class="btn btn-danger ml-1" type="button"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                    <button class="btn btn-success ml-1" type="button"><i class="iconify" data-icon="material-symbols:download"></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">Joe</th>
                <td>2023-09-10</td>
                <td>Surabaya</td>
                <td>Malang</td>
                <td>100</td>
                <td>200</td>
                <td>300</td>
                <td>Perjalanan Dinas</td>
                <td>5</td>
                <td></td>
                <td></td>
                <td style="width: 12rem;">
                    <button class="btn btn-primary ml-1" type="button"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                    <button class="btn btn-danger ml-1" type="button"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                    <button class="btn btn-success ml-1" type="button"><i class="iconify" data-icon="material-symbols:download"></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">Joe</th>
                <td>2023-09-10</td>
                <td>Surabaya</td>
                <td>Malang</td>
                <td>100</td>
                <td>200</td>
                <td>300</td>
                <td>Perjalanan Dinas</td>
                <td>5</td>
                <td></td>
                <td></td>
                <td style="width: 12rem;">
                    <button class="btn btn-primary ml-1" type="button"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                    <button class="btn btn-danger ml-1" type="button"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                    <button class="btn btn-success ml-1" type="button"><i class="iconify" data-icon="material-symbols:download"></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">Joe</th>
                <td>2023-09-10</td>
                <td>Surabaya</td>
                <td>Malang</td>
                <td>100</td>
                <td>200</td>
                <td>300</td>
                <td>Perjalanan Dinas</td>
                <td>5</td>
                <td></td>
                <td></td>
                <td style="width: 12rem;">
                    <button class="btn btn-primary ml-1" type="button"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                    <button class="btn btn-danger ml-1" type="button"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                    <button class="btn btn-success ml-1" type="button"><i class="iconify" data-icon="material-symbols:download"></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">Joe</th>
                <td>2023-09-10</td>
                <td>Surabaya</td>
                <td>Malang</td>
                <td>100</td>
                <td>200</td>
                <td>300</td>
                <td>Perjalanan Dinas</td>
                <td>5</td>
                <td></td>
                <td></td>
                <td style="width: 12rem;">
                    <button class="btn btn-primary ml-1" type="button"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                    <button class="btn btn-danger ml-1" type="button"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                    <button class="btn btn-success ml-1" type="button"><i class="iconify" data-icon="material-symbols:download"></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">Joe</th>
                <td>2023-09-10</td>
                <td>Surabaya</td>
                <td>Malang</td>
                <td>100</td>
                <td>200</td>
                <td>300</td>
                <td>Perjalanan Dinas</td>
                <td>5</td>
                <td></td>
                <td></td>
                <td style="width: 12rem;">
                    <button class="btn btn-primary ml-1" type="button"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                    <button class="btn btn-danger ml-1" type="button"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                    <button class="btn btn-success ml-1" type="button"><i class="iconify" data-icon="material-symbols:download"></i></button>
                </td>
            </tr>
        </table>
    </div>
</div>

@endsection