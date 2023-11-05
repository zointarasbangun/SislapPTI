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
                            <h5>Notifikasi dan Pemberitahuan</h5>
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
    @endsection
