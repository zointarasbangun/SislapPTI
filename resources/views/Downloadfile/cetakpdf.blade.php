<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Perjalanan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        @page {
            size: landscape;
        }

        #header {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }

        #header .img-container {
            display: flex;
            align-items: center;
        }

        #header img {
            max-width: 100px;
            max-height: 100px;
            margin-right: 20px;
        }

        #header h2 {
            margin: 0;
        }

        #tableakun {
            width: 100%;
            border-collapse: collapse;
            margin: 10px;
            /* Sesuaikan nilai sesuai kebutuhan */
        }

        #tableakun th,
        #tableakun td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        #tableakun th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body style="margin-right: 10px; margin-left: 10px;">

    <div id="header" style="display: flex; align-items: center; justify-content: center; padding: 10px; ">

        <div class="img-container" style="display: flex; align-items: center; text-align: center;">
            <img src="{{ public_path('img/akhlak.png') }}" alt="Gambar 1"
                style="max-width: 100px; max-height: 100px; margin-right: 20px;">
            <img src="{{ public_path('img/pgncom.png') }}" alt="Gambar 2"
                style="max-width: 100px; max-height: 100px; margin-right: 15px; margin-left: auto; ">
            <img src="{{ public_path('img/pertamina.png') }}" alt="Gambar 3"
                style="max-width: 200px; max-height: 100px; margin-bottom : 10px;">
        </div>

    </div>

    <div class="laporan" style=" border-radius: 10px; padding: 10px; text-align: center;">
        <h2>Laporan Perjalanan Driver PGNCOM</h2>
        <p>{{ \Carbon\Carbon::now()->locale('id')->isoFormat('dddd, D MMMM YYYY') }}</p>
    </div>

    <div class="container-fluid mt-3">
        <table class="table table-striped text-center " id="tableakun">
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
                <th scope="col">Status</th>
                <th scope="col">Foto KM Awal</th>
                <th scope="col">Foto KM Akhir</th>
                <!-- Tambahkan kolom Action jika perlu -->
            </tr>
            @foreach ($perjalanans as $perjalanan)
                <tr>
                    <td>{{ $perjalanan->user->name }}</td>
                    <td>{{ $perjalanan->tgl_perjalanan }}</td>
                    <td>{{ $perjalanan->alamat_awal }}</td>
                    <td>{{ $perjalanan->alamat_tujuan }}</td>
                    <td>{{ $perjalanan->km_awal }}</td>
                    <td>{{ $perjalanan->km_akhir }}</td>
                    <td>{{ $perjalanan->km_akhir - $perjalanan->km_awal }}</td>
                    <td>{{ $perjalanan->jenis_perjalanan }}</td>
                    <td>{{ ($perjalanan->km_akhir - $perjalanan->km_awal) / 10 }}</td>
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
                    <td>
                        @if ($perjalanan->photo_km_awal)
                            <img src="{{ public_path('storage/' . $perjalanan->photo_km_awal) }}" width="100"
                                height="100" alt="Foto KM Awal" />
                        @else
                            Gambar tidak tersedia
                        @endif
                    </td>
                    <td>
                        @if ($perjalanan->photo_km_akhir)
                            <img src="{{ public_path('storage/' . $perjalanan->photo_km_akhir) }}" width="100"
                                height="100" alt="Foto KM Akhir" />
                        @else
                            Gambar tidak tersedia
                        @endif
                    </td>
                    <!-- Tambahkan kolom Action jika perlu -->
                </tr>
            @endforeach
        </table>
    </div>

</body>

</html>
