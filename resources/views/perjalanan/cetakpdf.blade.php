<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Perjalanan</title>
</head>

<body>
    <div class="container-fluid mt-3">
        <table class="table table-striped text-center" border="1" cellspacing="2 " cellpadding="2" id="tableakun">
            <thead>
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
                    {{-- <th scope="col">Foto KM Awal</th>
                    <th scope="col">Foto KM Akhir</th> --}}
                    {{-- @if (Auth::user()->role == 'admin')
                        <th scope="col">Action</th>
                    @endif --}}
                </tr>
            </thead>
            <tbody>
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
                        {{-- <td>
                            @if ($perjalanan->photo_km_awal)
                                @include('partials.modal', ['id' => $perjalanan->id, 'photo' => $perjalanan->photo_km_awal])
                            @else
                                Gambar tidak tersedia
                            @endif
                        </td> --}}
                        {{-- <td>
                            @if ($perjalanan->photo_km_akhir)
                                @include('partials.modal', ['id' => $perjalanan->id, 'photo' => $perjalanan->photo_km_akhir])
                            @else
                                Gambar tidak tersedia
                            @endif
                        </td> --}}
                        {{-- @if (Auth::user()->role == 'admin')
                            <td>
                                <a href="{{ route('managePerjalanan.edit', $perjalanan->id) }}">
                                    <button class="btn btn-primary ml-1" type="button"><i class="iconify"
                                            data-icon="material-symbols:edit"></i></button>
                                </a>
                                <form action="{{ route('managePerjalanan.destroy', $perjalanan->id) }}" method="post"
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                    style="display: inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"><i class="iconify"
                                            data-icon="material-symbols:delete"></i></button>
                                </form>
                            </td>
                        @endif --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
