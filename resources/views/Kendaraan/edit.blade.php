@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">

        <form action="{{ route('kendaraan.update', $kendaraan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') {{-- Menggunakan metode HTTP PUT untuk pembaruan --}}
            <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" name="type" class="form-control" value="{{ $kendaraan->type }}">
            </div>
            <div class="form-group">
                <label for="no_polisi">No. Polisi:</label>
                <input type="text" name="no_polisi" class="form-control" value="{{ $kendaraan->no_polisi }}">
            </div>
            <div class="form-group">
                <label for="tgl_masuk">Tgl. Masuk:</label>
                <input type="date" name="tgl_masuk" class="form-control" value="{{ $kendaraan->tgl_masuk }}">
            </div>
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" name="photo" class="form-control">
                @if ($kendaraan->photo)
                    <img src="{{ asset('storage/' . $kendaraan->photo) }}" alt="Foto Kendaraan" style="max-width: 200px;">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>

</div>
</div>
@endsection
