@extends('layout.main')
@section('content')
    <div class="content-wrapper">
            <div class="container-fluid p-5">
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <input type="text" class="form-control" id="cariData" placeholder="Cari Data...">
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <button class="btn btn-primary ml-1" type="button"><i class="iconify"
                                data-icon="material-symbols:search"></i></i></button>
                        <button class="btn btn-danger ml-1" type="button"><i class="iconify"
                                data-icon="solar:refresh-linear"></i></button>
                    </div>
                    <div class="col-lg-3 col-sm-12">
                        <div class="float-right">
                            <!-- Modal -->
                            <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header text-start">
                                            <h4 class="modal-title w-100 font-weight-bold">Buat Akun Baru</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body mx-3">
                                            <div class="mb-5">
                                                <i class="iconify nav-icon mr-3" data-icon="ic:outline-email"></i>
                                                <label data-error="wrong" data-success="right"
                                                    for="defaultForm-email">Email</label>
                                                <input type="email" id="defaultForm-email" class="form-control validate"
                                                    placeholder="example@gmail.com">
                                            </div>

                                            <div class="mb-5">
                                                <i class="mr-3 fa-regular fa-user"></i>
                                                <label data-error="wrong" data-success="right"
                                                    for="defaultForm-Username">Username</label>
                                                <input type="email" id="defaultForm-email" class="form-control validate"
                                                    placeholder="example@gmail.com">
                                            </div>

                                            <div class="mb-5">
                                                <i class="iconify nav-icon mr-3"
                                                    data-icon="teenyicons:password-outline"></i>
                                                <label data-error="wrong" data-success="right"
                                                    for="defaultForm-pass">Password</label>
                                                <input type="password" id="defaultForm-pass" class="form-control validate"
                                                    placeholder="password">
                                            </div>

                                            <div class="mb-5">
                                                <div class="d-flex align-items-center">
                                                    <i class="iconify" data-icon="carbon:user-role"></i>
                                                    <select class="form-select border-0 w-50 ml-3" aria-label="Default select example">
                                                        <option selected disabled>Role</option>
                                                        <option value="2">User</option>
                                                    </select>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button class="btn btn-success">Buat Akun</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /modal -->

                            <!-- Button Modal -->
                            <div class="text-center">
                                <a href="" class="btn btn-primary btn-rounded mb-4" data-toggle="modal"
                                    data-target="#modalLoginForm"><i class="iconify nav-icon mr-3"
                                        data-icon="line-md:account-add"></i>Tambahkan Akun</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid mt-5">
                    <table class="table table-striped text-center" id="tableakun">
                        <tr>
                            <th scope="col">Username</th>
                            <th scope="col">Password</th>
                            <th scope="col">Role</th>
                            <th scope="col">Total KM</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                        <tr>
                            <th scope="row">Admin</th>
                            <td>admin123</td>
                            <td>Admin</td>
                            <td>-</td>
                            <td><span class="badge badge-success">Aktif</span></td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="iconify"
                                        data-icon="material-symbols:edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="iconify"
                                        data-icon="material-symbols:delete"></i></button>
                                <button type="button" class="btn" style="background-color: #12ACED; color :#ffff"><i
                                        class="iconify" data-icon="bxs:detail"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Zointa</th>
                            <td>12345</td>
                            <td>User</td>
                            <td>34</td>
                            <td><span class="badge badge-success">Aktif</span></td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="iconify"
                                        data-icon="material-symbols:edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="iconify"
                                        data-icon="material-symbols:delete"></i></button>
                                <button type="button" class="btn" style="background-color: #12ACED; color :#ffff"><i
                                        class="iconify" data-icon="bxs:detail"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Jacky</th>
                            <td>2345</td>
                            <td>User</td>
                            <td>50</td>
                            <td><span class="badge badge-danger">Tidak Aktif</span></td>
                            <td>
                                <button type="button" class="btn btn-primary"><i class="iconify"
                                        data-icon="material-symbols:edit"></i></button>
                                <button type="button" class="btn btn-danger"><i class="iconify"
                                        data-icon="material-symbols:delete"></i></button>
                                <button type="button" class="btn" style="background-color: #12ACED; color :#ffff"><i
                                        class="iconify" data-icon="bxs:detail"></i></button>
                            </td>
                        </tr>


                    </table>
                </div>
            </div>
        @endsection
