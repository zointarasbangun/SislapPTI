@extends('layouts.app')
@section('content')

<div class="content-wrapper">
    <!-- header content -->
    <div class="container-fluid p-5">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <input type="text" class="form-control" id="cariDataKendaraan" placeholder="Cari Data Kendaraan...">
            </div>
            <div class="col-lg-5 col-sm-6">
                <button class="btn btn-primary ml-1" type="button"><i class="iconify" data-icon="material-symbols:search"></i></i></button>
                <button class="btn btn-danger ml-1" type="button"><i class="iconify" data-icon="solar:refresh-linear"></i></button>
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="float-right">
                
                </div>
            </div>
        </div>
    </div>
    <!-- /header content -->
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-sm-6">
                <h5>Tipe Kendaraan</h5>
            </div>
        </div>
    </div>
    <!-- table -->
    <div class="container-fluid mt-4">
        <table class="table table-striped text-center" id="tablecar">
            <tr>
                <th scope="col">Tipe Mobil</th>
                <th scope="col">No. Polisi</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Foto Kendaraan</th>
            </tr>
            @foreach ($kendaraans as $kendaraan)
            <tr>
                <th scope="row">{{ $kendaraan->type }}</th>
                <td>{{ $kendaraan->no_polisi }}</td>
                <td>{{ $kendaraan->tgl_masuk }}</td>
                <td>
                    <!-- Modal -->
                    <div class="modal fade" id="modalLihat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                    <img src="{{ URL('lte/dist/img/nissanGTR.webp') }}" class="img-fluid"/>
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
                        <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalLihat"><i class="iconify nav-icon mr-3" data-icon="mdi:eye"></i>Lihat Foto</a>
                    </div>
                    <!-- /button modal -->
                </td>
                <td>
                    <button type="button" class="btn btn-primary"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                </td>
            </tr>
            @endforeach


        </table>
    </div>
    <!-- /table -->
</div>

@endsection
