@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
            <form action="" method="GET">
                <input type="text" name="keyword"  placeholder="Cari kendaraan...">
                {{-- <input type="text" name="keyword" value="{{ $keyword }}" placeholder="Cari kendaraan..."> --}}
                <button type="submit">Cari</button>
            </form>

            <div class="mb-3">
                <a href="{{ route('kendaraan.create') }}" class="btn btn-success">Tambah Kendaraan</a>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>NoPolisi</th>
                        <th>Photo</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($kendaraans as $kendaraan)
                    <tr>
                        <td>{{ $kendaraan->type }}</td>
                        <td>{{ $kendaraan->no_polisi }}</td>
                        <td><img src="{{ asset('storage/' . $kendaraan->photo) }}" alt="Foto Kendaraan"></td>
                        <td>
                            <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

                {{-- {{ $kendaraans->links() }} --}}
    </div>
</div>

@endsection
