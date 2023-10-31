@extends('layout.main')
@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 mt-3 ml-3">
                <p>Cari </p>
            </div>
                <div class="mb-3">
                    <div class="container input-group p-1 ml-3">
                        <input type="text" class="border border-primary form-control" placeholder="Cari Akun" aria-label="Cari Akun">
                            <button class="btn btn-primary ml-1" type="button"><i class="fa fa-search"></i></button>
                            <button class="btn btn-danger ml-1" type="button"><i class="fas fa-sync-alt"></i></i></button>
                    </div>
                </div>
            </div>
        </div>
    <div class="container-fluid mt-5">
        <table class="table table-striped text-center" id="tableakun">
            <tr>
                <th scope="col">User</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Alamat awal</th>
                <th scope="col">Alamat akhir</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
            </tr>
            <tr>
                <th scope="row">Admin</th>
                <td> 2023-09-10</td>
                <td>pgncom lampung</td>
                <td>terbanggi besar</td>
                <td><span class="badge badge-success">Perjalanan Selesai</span></td>
                <td>
                    <button type="button" class="btn " style="background-color: #12ACED; color :#ffff">
                        <i class="iconify" data-icon="bi:eye" style="margin-right: 5px;"></i> Lihat Lokasi
                      </button>
                </td>
            </tr>
            <tr>
                <th scope="row">Zointa</th>
                <td>2023-09-11</td>
                <td>palembang</td>
                <td>pgncom lampung</td>
                <td><span class="badge badge-success">Perjalanan Selesai</span></td>
                <td>
                    <button type="button" class="btn " style="background-color: #12ACED; color:#ffff">
                        <i class="iconify" data-icon="bi:eye" style="margin-right: 5px;"></i> Lihat Lokasi
                      </button>
                </td>
            </tr>
            <tr>
                <th scope="row">Jacky</th>
                <td>2023-09-12</td>
                <td>Panjang</td>
                <td>bakauheni</td>
                <td><span class="badge badge-danger">Menunggu perjalanan</span></td>
                <td>
                    <button type="button" class="btn " style="background-color: #12ACED; color :#ffff">
                        <i class="iconify" data-icon="bi:eye" style="margin-right: 5px;"></i> Lihat Lokasi
                      </button>

                </td>
            </tr>

        </table>
    </div>
</div>

@endsection

