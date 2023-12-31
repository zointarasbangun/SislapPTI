@extends('layouts.app')

@section('content')
    {{-- <div class="content-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="input-group">
                    <div class="form-outline">
                        <input type="search" id="form1" class="form-control" />
                        <label class="form-label" for="form1">Cari Akun Pengguna</label>
                    </div>
                    <button type="button" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                    </button>
                    </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>Data Pengguna</h1>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('acount.edit', $user->id) }}">Edit</a>
                            <form action="{{ route('acount.destroy', $user->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> --}}

    <div class="content-wrapper">
        <style>
            @media (max-width: 767px) {
                .col-lg-3 {
                    width: 100% !important;
                    /* Kolom penuh lebar di layar kecil */
                    margin-bottom: 10px;
                    /* Spasi antar elemen */
                }

                .col-lg-9 {
                    width: 100% !important;
                    /* Kolom penuh lebar di layar kecil */
                    margin-bottom: 10px;
                    /* Spasi antar elemen */
                }
            }
        </style>

        <div class="container-fluid p-5">
            <div class="row">
                {{-- <div class="col-lg-4 col-sm-6">
                    <input type="text" class="form-control" id="cariData" placeholder="Cari Data...">
                </div>
                <div class="col-lg-5 col-sm-6">
                    <button class="btn btn-primary ml-1" type="button"><i class="iconify"
                            data-icon="material-symbols:search"></i></i></button>
                    <button class="btn btn-danger ml-1" type="button"><i class="iconify"
                            data-icon="solar:refresh-linear"></i></button>
                </div> --}}
                <div class="col-lg-3 col-sm-12">
                    <div class="float-right">
                        <!-- Modal -->
                        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-start">
                                        <h4 class="modal-title w-100 font-weight-bold">Tambah Akun User</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form class="" method="POST" action="{{ route('addAcount') }}">
                                        @csrf
                                        <div class="modal-body mx-3">
                                            <div class="mb-5">
                                                <i class="iconify nav-icon mr-3" data-icon="ic:outline-email"></i>
                                                <label data-error="wrong" data-success="right"
                                                    for="defaultForm-email">Email</label>
                                                <input type="email" name="email" id="defaultForm-email"
                                                    class="form-control validate" placeholder="Input email">
                                            </div>

                                            <div class="mb-5">
                                                <i class="mr-3 fa-regular fa-user"></i>
                                                <label data-error="wrong" data-success="right"
                                                    for="defaultForm-Username">Username</label>
                                                <input type="text" name="name" id="defaultForm-username"
                                                    class="form-control validate" placeholder="Input nama">
                                            </div>

                                            <div class="mb-5">
                                                <i class="iconify nav-icon mr-3"
                                                    data-icon="teenyicons:password-outline"></i>
                                                <label data-error="wrong" data-success="right"
                                                    for="defaultForm-pass">Password</label>
                                                <input type="password" name="password" id="defaultForm-pass"
                                                    class="form-control validate" placeholder="Input password">
                                            </div>

                                            {{-- <div class="mb-5">
                                                <div class="d-flex align-items-center">
                                                    <i class="iconify" data-icon="carbon:user-role"></i>
                                                    <select class="form-select border-0 w-50 ml-3"
                                                        aria-label="Default select example">
                                                        <option >Role</option>
                                                        <option selected disabled value="user">User</option>
                                                    </select>
                                                </div>
                                            </div> --}}


                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button type="submit" class="btn btn-success">Buat Akun</button>
                                        </div>
                                    </form>
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
            <div class="container-fluid">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                <table class="table table-striped text-center" id="tableakun">
                    <tr>
                        <th scope="col">Username</th>
                        <th scope="col">Password</th>
                        <th scope="col">Role</th>
                        <th scope="col">Total KM</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    @foreach ($users as $user)
                        @if ($user->role == 'user')
                            <tr>
                                <th scope="row">{{ $user->name }}</th>
                                <td>password</td>
                                <td>{{ $user->role }}</td>
                                <td>-</td>
                                <td><span class="badge badge-success">Aktif</span></td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a href="{{ route('acount.edit', $user->id) }}" class="btn btn-primary mr-2">
                                            <i class="iconify" data-icon="material-symbols:edit"></i>
                                        </a>
                                        <form id="deleteForm{{ $user->id }}"
                                            action="{{ route('acount.destroy', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="btn btn-danger mr-2" onclick="confirmDelete()">
                                                <i class="iconify" data-icon="material-symbols:delete"></i>
                                            </button>
                                        </form>


                                    </div>
                                </td>


                            </tr>
                        @endif
                    @endforeach



                </table>
            </div>
        </div>

        <script>
            function confirmDelete() {
                if (confirm("Apakah Anda yakin ingin menghapus akun? {{ $user->name }}")) {
                    document.getElementById("deleteForm{{ $user->id }}").submit();
                }
            }
        </script>
    @endsection
