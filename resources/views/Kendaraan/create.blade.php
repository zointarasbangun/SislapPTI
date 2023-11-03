@extends('layouts.app')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        <form action="{{ route('kendaraan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="type">Type:</label>
                <input type="text" name="type" class="form-control">
            </div>
            <div class="form-group">
                <label for="no_polisi">No. Polisi:</label>
                <input type="text" name="no_polisi" class="form-control">
            </div>
            <div class="form-group">
                <label for="tgl_masuk">Tgl. Masuk:</label>
                <input type="date" name="tgl_masuk" class="form-control">
            </div>
            <div class="form-group">
                <label for="photo">Photo:</label>
                <input type="file" name="photo" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>

    </div>
</div>
@endsection
