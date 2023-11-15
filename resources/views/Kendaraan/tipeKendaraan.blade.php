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
                    <button class="btn btn-primary ml-1" type="button"><i class="iconify"
                            data-icon="material-symbols:search"></i></i></button>
                    <button class="btn btn-danger ml-1" type="button"><i class="iconify"
                            data-icon="solar:refresh-linear"></i></button>
                </div>

                <div class="col-lg-3 col-sm-12">
                    <div class="float-right">
                        <!-- Modal -->
                        @if (Auth::user()->role == 'admin')
                            <div class="modal fade" id="modalCarForm" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-header text-start">
                                            <h4 class="modal-title w-100 font-weight-bold">Tambah Data Kendaraan</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <form action="{{ route('kendaraan.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-body mx-3">
                                                <div class="mb-5">
                                                    <i class="iconify nav-icon mr-3" data-icon="mdi:car-select"></i>
                                                    <label data-error="wrong" data-success="right"
                                                        for="defaultForm-tipe">Tipe
                                                        Mobil :</label>
                                                    <input type="text" id="defaultForm-tipe" name="type"
                                                        class="form-control validate"
                                                        placeholder="contoh : Toyota || Avanza">
                                                </div>

                                                <div class="mb-5">
                                                    <i class="iconify nav-icon mr-3" data-icon="iconoir:input-field"></i>
                                                    <label data-error="wrong" data-success="right"
                                                        for="defaultForm-nopol">No.
                                                        Polisi :</label>
                                                    <input type="text" id="defaultForm-nopol" name="no_polisi"
                                                        class="form-control validate" placeholder="BE-XXXX-XX">
                                                </div>

                                                <div class="mb-5">
                                                    <i class="iconify nav-icon mr-3"
                                                        data-icon="streamline:interface-calendar-download-arrow-calendar-date-day-down-download-month"></i>
                                                    <label data-error="wrong" data-success="right"
                                                        for="defaultForm-tgl">Tanggal
                                                        Masuk :</label>
                                                    <input type="date" id="defaultForm-tgl" name="tgl_masuk"
                                                        class="form-control validate">
                                                </div>

                                                <div class="mb-4">
                                                    <i class="iconify nav-icon mr-3" data-icon="tabler:photo-plus"></i>
                                                    <label data-error="wrong" data-success="right"
                                                        for="defaultForm-foto">Foto
                                                        Kendaraan :</label>
                                                    <input type="file" id="defaultForm-foto" name="photo"
                                                        class="form-control-file">
                                                </div>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-center">
                                                <button type="submit" class="btn btn-success">Tambah Data</button>
                                                <button type="button" class="btn btn-danger" data-dismiss="modal"
                                                    aria-label="Close">Batal</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /modal -->

                            <!-- Button Modal -->

                            <div class="text-center">
                                <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal"
                                    data-target="#modalCarForm"><i class="iconify nav-icon mr-3"
                                        data-icon="gridicons:add"></i>Tambah
                                    Data Kendaraan</a>
                            </div>
                        @endif
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
                    @if (Auth::user()->role == 'admin')
                        <th scope="col">Aksi</th>
                    @endif
                </tr>
                @foreach ($kendaraans as $kendaraan)
                    <tr>
                        <th scope="row">{{ $kendaraan->type }}</th>
                        <td>{{ $kendaraan->no_polisi }}</td>
                        <td>{{ $kendaraan->tgl_masuk }}</td>
                        <td>
                            @if ($kendaraan->photo)
                                <!-- Modal -->
                                <div class="modal fade" id="modalLihat{{ $kendaraan->id }}" tabindex="-1"
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
                                                    <img src="{{ asset('storage/' . $kendaraan->photo) }}"
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
                                        data-target="#modalLihat{{ $kendaraan->id }}"><i class="iconify nav-icon mr-3"
                                            data-icon="mdi:eye"></i>Lihat Foto</a>
                                </div>
                                <!-- /button modal -->
                            @else
                                Gambar tidak tersedia
                            @endif
                        </td>
                        @if (Auth::user()->role == 'admin')
                            <td>

                                <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-primary"><i
                                        class="iconify" data-icon="material-symbols:edit"></i></a>
                                <form id="deleteForm{{ $kendaraan->id }}" action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST"
                                    style="display: inline">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger"><i class="iconify"
                                            data-icon="material-symbols:delete"></i></button>
                                </form>
                        @endif
                        </td>
                    </tr>

                @endforeach
            </table>
        </div>

        <!-- /table -->
    </div>
    {{-- <script>
        function confirmDelete(kendaraanId) {
            if (confirm("Apakah Anda yakin ingin menghapus kendaraan dengan ID " + kendaraanId + "?")) {
                return true; // Submit the form
            } else {
                return false; // Cancel the form submission
            }
        }
    </script> --}}
@endsection
