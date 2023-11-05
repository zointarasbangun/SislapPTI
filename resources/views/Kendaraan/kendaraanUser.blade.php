@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <!-- Cari -->
    <div class="container-fluid p-3">
        <div class="row">
            <div class="col-lg-4 col-sm-12 mb-sm-3">
                <label for="cariData">Cari :</label>
                <input type="text" class="form-control" id="cariData" placeholder="Cari Data...">
            </div>
            <div class="col-lg-4 col-sm-6">
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

    <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-sm-6">
                <h5>Kendaraan Saya</h5>
            </div>
        </div>
    </div><!-- /.container-fluid -->
    <!-- Table -->
    <div class="container-fluid">
        <div class="container-fluid mt-3">
            <table class="table table-striped text-center" id="tablekendaraansaya">
                <tr>
                    <th scope="col">Tanggal</th>
                    <th scope="col">No Polisi</th>
                    <th scope="col">Tipe Mobil</th>
                    <th scope="col">Action</th>
                </tr>
                <tr>
                    <td>2023-11-05</td>
                    <td>B-XXXX-XX</td>
                    <td>Honda Jazz</td>
                    <td><button type="button" class="btn" style="background-color: #12ACED; color :#ffff"><i
                        class="iconify" data-icon="bxs:detail"></i></button></td>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection
