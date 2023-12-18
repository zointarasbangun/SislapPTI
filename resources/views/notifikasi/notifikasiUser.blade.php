@extends('layouts.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <div class="row p-2" style="background-color: #12ACED;">


            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h5>Notifikasi</h5>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">

        </div>
        <div>
            <section class="content-header mb-5">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h5>Pemberitahuan</h5>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
                <!-- Table -->
                <div class="container-fluid mt-4">
                    <table class="table table-striped text-center" id="tablepemberitahuan">
                        <tr>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Alamat Awal</th>
                            <th scope="col">Alamat Akhir</th>
                            <th scope="col">Total KM</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        @foreach ($perjalanans as $perjalanan)
                            @if (
                                $perjalanan->status_perjalanan == 'menunggu' ||
                                    // $perjalanan->status_perjalanan == 'disetujui' ||
                                    // $perjalanan->status_perjalanan == 'disetujui'
                                    $perjalanan->status_perjalanan == 'selesai')
                                <tr>
                                    {{-- <th scope="row">{{ $perjalanan->user->name }}</th> --}}
                                    <td>{{ $perjalanan->tgl_perjalanan }}</td>
                                    <td>{{ $perjalanan->alamat_awal }}</td>
                                    <td>{{ $perjalanan->alamat_tujuan }}</td>
                                    <td>{{ $perjalanan->km_akhir - $perjalanan->km_awal }}</td>
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

                                    @if ($perjalanan->status_perjalanan == 'selesai')
                                        <td>
                                            <form action="{{ route('send.whatsapp') }}" method="post" target="_blank">
                                                @csrf
                                                <button type="submit" class="btn btn-link" style="padding: 0;">
                                                    <i class="fa-brands fa-square-whatsapp"
                                                        style="color: #2ee421; font-size: 30px;"></i>
                                                </button>
                                            </form>
                                        </td>
                                    @endif

                                    {{-- <td style="width: 12rem;">

                                @if ($perjalanan->status_perjalanan == 'menunggu')
                                    <a href="{{ route('statusPerjalananUser.edit', $perjalanan->id) }}"><button
                                            class="btn btn-primary ml-1" type="button"><i class="iconify"
                                                data-icon="material-symbols:edit"></i></button></a>
                                @endif
                                {{-- <button type="button" class="btn" style="background-color: #12ACED; color :#ffff"><i class="iconify" data-icon="bxs:detail"></i></button> --}}
                                    {{-- </td>  --}}
                                </tr>
                            @endif
                        @endforeach
                        {{-- <tr>
                <td>2023-09-20</td>
                <td>Palembang</td>
                <td>Bandar Lampung</td>
                <td>81</td>
                <td>
                    <form action="{{ route('send.whatsapp') }}" method="post" target="_blank">
                        @csrf

                        <button type="submit"><i class="fa-brands fa-square-whatsapp" style="color: #2ee421; font-size: 30px;"></i></button>
                    </form>
                </td>
            </tr>

            <tr>
                <td>2023-10-10</td>
                <td>Palembang</td>
                <td>Jakarta</td>
                <td>100</td>
                <td><i class="fa-brands fa-square-whatsapp" style="color: #2ee421; font-size: 30px;"></i></td>
            </tr>
            <tr>
                <td>2023-09-27</td>
                <td>Lampung Timur</td>
                <td>Bandar Lampung</td>
                <td>50</td>
                <td><i class="fa-brands fa-square-whatsapp" style="color: #2ee421; font-size: 30px;"></i></td>
            </tr> --}}
        </table>
        </div>
    </div>
            </section>

        @endsection
