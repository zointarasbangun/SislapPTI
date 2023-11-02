{{-- @extends('layouts.app')
@section('content')
<div class="container">
    <h1>Create User</h1>
    <form method="POST" action="{{ route('addAcount') }}">
        @csrf

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="role">Role</label>
            <select id="role" name="role" class="form-control" required>
                <option value="user">User</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create User</button>
    </form>
</div>
@endsection --}}

@extends('layouts.app')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- COLOR PALETTE -->
                <div class="card card-default color-palette-box">
                    <div class="tambah-akun" style="margin-left: 20px;">
                        <form class="card-body" method="POST" action="{{ route('addAcount') }}">
                            @csrf
                            <div class="form-grup row">
                                <label for="email" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="">
                                </div>
                            </div><br>
                            <div class="form-grup row">
                                <label for="name" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="name" name="name" class="form-control" id="name" placeholder="">
                                </div>
                            </div><br>
                            <div class="form-grup row">
                                <label for="password" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" class="form-control" id="password" placeholder="">
                                </div>
                            </div><br>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select id="role" name="role" class="form-control" required>
                                    <option value="user">User</option>
                                    <option value="admin">admin</option>
                                </select>
                            </div>
                            <div style="text-align: center; margin-top: 20px;">
                                <button type="submit" class="btn " style="color: white; background: #1265A8"><i class="nav-icon fa-solid fa-user-plus"></i>
                                    Tambah Akun</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div>

                </div>

            </div>
            <!-- /.card -->
            
        @endsection
