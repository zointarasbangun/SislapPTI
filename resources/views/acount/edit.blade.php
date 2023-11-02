@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
    <h1>Edit Data Pengguna</h1>
    <form action="{{ route('acount.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" value="{{ $user->name }}">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="{{ $user->email }}">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="{{ $user->password }}">
        </div>
        <button type="submit">Simpan Perubahan</button>
    </form>
    </div>
</div>
@endsection
