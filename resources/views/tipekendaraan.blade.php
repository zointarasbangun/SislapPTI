@extends('layout.main')
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
                    <!-- Modal -->
                    <div class="modal fade" id="modalCarForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header text-start">
                                    <h4 class="modal-title w-100 font-weight-bold">Tambah Data Kendaraan</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body mx-3">
                                    <div class="mb-5">
                                        <i class="iconify nav-icon mr-3" data-icon="mdi:car-select"></i>
                                        <label data-error="wrong" data-success="right" for="defaultForm-tipe">Tipe Mobil :</label>
                                        <input type="text" id="defaultForm-tipe" class="form-control validate" placeholder="contoh : Toyota || Avanza">
                                    </div>

                                    <div class="mb-5">
                                        <i class="iconify nav-icon mr-3" data-icon="iconoir:input-field"></i>
                                        <label data-error="wrong" data-success="right" for="defaultForm-nopol">No. Polisi :</label>
                                        <input type="text" id="defaultForm-nopol" class="form-control validate" placeholder="BE-XXXX-XX">
                                    </div>

                                    <div class="mb-5">
                                        <i class="iconify nav-icon mr-3" data-icon="streamline:interface-calendar-download-arrow-calendar-date-day-down-download-month"></i>
                                        <label data-error="wrong" data-success="right" for="defaultForm-tgl">Tanggal Masuk :</label>
                                        <input type="date" id="defaultForm-tgl" class="form-control validate" placeholder="BE-XXXX-XX">
                                    </div>

                                    <div class="mb-4">
                                        <i class="iconify nav-icon mr-3" data-icon="tabler:photo-plus"></i>
                                        <label data-error="wrong" data-success="right" for="defaultForm-tgl">Foto Kendaraan :</label>
                                        <input type="file" class="form-control-file">
                                    </div>

                                </div>
                                <div class="modal-footer d-flex justify-content-center">
                                    <button class="btn btn-success">Tambah Data</button>
                                    <button class="btn btn-danger" class="close" data-dismiss="modal" aria-label="Close">Batal</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /modal -->

                    <!-- Button Modal -->
                    <div class="text-center">
                        <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalCarForm"><i class="iconify nav-icon mr-3" data-icon="gridicons:add"></i>Tambah Data Kendaraan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /header content -->

    <!-- table -->
    <div class="container-fluid mt-5">
        <table class="table table-striped text-center" id="tablecar">
            <tr>
                <th scope="col">Tipe Mobil</th>
                <th scope="col">No. Polisi</th>
                <th scope="col">Tanggal Masuk</th>
                <th scope="col">Foto Kendaraan</th>
                <th scope="col">Action</th>
            </tr>
            <tr>
                <th scope="row">Nissan || GTR R35</th>
                <td>BE-XXXX-XX</td>
                <td>10/25/2023</td>
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
            <tr>
                <th scope="row">Rolls-Royce Limited || Ghost</th>
                <td>BE-XXXX-XX</td>
                <td>10/25/2023</td>
                <td>
                    <!-- Modal -->
                    <div class="modal fade" id="modalLihat2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                    <img src="{{ URL('lte/dist/img/rrGhost.jpg') }}" class="img-fluid"/>
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
                        <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalLihat2"><i class="iconify nav-icon mr-3" data-icon="mdi:eye"></i>Lihat Foto</a>
                    </div>
                    <!-- /button modal -->
                </td>
                <td>
                    <button type="button" class="btn btn-primary"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                </td>
            </tr>
            <tr>
                <th scope="row">Toyota || Supra mk4</th>
                <td>BE-XXXX-XX</td>
                <td>10/25/2023</td>
                <td>
                    <!-- Modal -->
                    <div class="modal fade" id="modalLihat3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                    <img src="{{ URL('lte/dist/img/supramk4.jpeg') }}" class="img-fluid"/>
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
                        <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal" data-target="#modalLihat3"><i class="iconify nav-icon mr-3" data-icon="mdi:eye"></i>Lihat Foto</a>
                    </div>
                    <!-- /button modal -->
                </td>
                <td>
                    <button type="button" class="btn btn-primary"><i class="iconify" data-icon="material-symbols:edit"></i></button>
                    <button type="button" class="btn btn-danger"><i class="iconify" data-icon="material-symbols:delete"></i></button>
                </td>
            </tr>
        </table>
    </div>
    <!-- /table -->
</div>

@endsection