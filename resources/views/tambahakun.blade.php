@extends('layout.main')
@section('content')
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- COLOR PALETTE -->
                <div class="card card-default color-palette-box">
                    <div class="tambah-akun" style="margin-left: 20px;">
                        <form class="card-body">
                            <div class="form-grup row">
                                <label for="inputusername3" class="col-sm-2 col-form-label">Username</label>
                                <div class="col-sm-10">
                                    <input type="username" class="form-control" id="inputusername3" placeholder="">
                                </div>
                            </div><br>
                            <div class="form-grup row">
                                <label for="inputpassword3" class="col-sm-2 col-form-label">Password</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" id="inputpassword3" placeholder="">
                                </div>
                            </div><br>
                            <div class="form-group row">
                                <label for="inputrole3" class="col-sm-2 col-form-label">Role</label>
                                <select>
                                    <option>Admin</option>
                                    <option>User</option>
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


                    <!-- /.card -->
                    <!-- START ALERTS AND CALLOUTS -->
                </div>
                {{-- <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tambah Akun</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Username</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
            <!-- /.card-body -->

            <div class="card-footer" style="">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div> --}}
            </div>
            <!-- /.card -->
        @endsection
