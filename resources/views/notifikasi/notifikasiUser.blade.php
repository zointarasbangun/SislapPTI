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
            <div class="container-fluid" style="">
                <!-- COLOR PALETTE -->
                
                    <div class="notifikasi"
                        style="background-color: #12ACED; display: flex; justify-content: space-between; align-items: center; margin-bottom: 5px;">
                        <div style="background-color: #12ACED;">
                            <p style="margin: 0;">30 September 2023, 11:23</p>
                        </div>
                        <div style="background-color: #ffff; border-radius: 5px; padding: 10px; margin-bottom: 10px;">
                            <img src="" alt="">
                            <a>"Pemberitahuan: [Nama Driver/Teknisi] telah menyelesaikan perjalanan mereka dengan sukses.
                                Laporan perjalanan telah diterima."</a>
                        </div>

                    </div>

                    <div class="notifikasi"
                        style="background-color: #12ACED; display: flex; justify-content: space-between; align-items: center;">
                        <div style="background-color: #12ACED;">
                            <p style="margin: 0;">30 September 2023, 11:23</p>
                        </div>
                        <div style="background-color: #ffff; border-radius: 5px; padding: 10px;">
                            <img src="" alt="">
                            <a>"Pemberitahuan: [Nama Driver/Teknisi] telah menyelesaikan perjalanan mereka dengan sukses.
                                Laporan perjalanan telah diterima."</a>
                        </div>

                    </div>
                
            </div>
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
                <th scope="col">Action</th>
            </tr>
            <tr>
                <th>2023-09-20</th>
                <td>Palembang</td>
                <td>Bandar Lampung</td>
                <td>81</td>
                <td><i class="fa-brands fa-square-whatsapp" style="color: #2ee421; font-size: 30px;"></i></td>
            </tr>
            
            <tr>
                <th>2023-10-10</th>
                <td>Palembang</td>
                <td>Jakarta</td>
                <td>100</td>
                <td><i class="fa-brands fa-square-whatsapp" style="color: #2ee421; font-size: 30px;"></i></td>
            </tr>
            <tr>
                <th>2023-09-27</th>
                <td>Lampung Timur</td>
                <td>Bandar Lampung</td>
                <td>50</td>
                <td><i class="fa-brands fa-square-whatsapp" style="color: #2ee421; font-size: 30px;"></i></td>
            </tr>
        </table>
        </div>
    </div>
            </section>
            
        @endsection
