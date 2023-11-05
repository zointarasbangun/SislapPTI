@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <h3>Edit Data Akun</h3>
            {{-- <form action="{{ route('acount.update', $user->id) }}" method="POST">
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
            </form> --}}

            <div class="modal-body mx-3">
                <form action="{{ route('acount.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-5">
                        <i class="mr-3 fa-regular fa-user"></i>
                        <label data-error="wrong" data-success="right" for="defaultForm-Username">Username</label>
                        <input type="text" id="defaultForm-name" class="form-control validate" placeholder="Input nama"
                            value="{{ $user->name }}">
                    </div>

                    <div class="mb-5">
                        <i class="iconify nav-icon mr-3" data-icon="ic:outline-email"></i>
                        <label data-error="wrong" data-success="right" for="defaultForm-email">Email</label>
                        <input type="email" id="defaultForm-email" class="form-control validate" placeholder="Input email"
                            value="{{ $user->email }}">
                    </div>

                    <div class="mb-5">
                        <i class="iconify nav-icon mr-3" data-icon="teenyicons:password-outline"></i>
                        <label data-error="wrong" data-success="right" for="defaultForm-pass">Password</label>
                        <input type="password" id="defaultForm-pass" class="form-control validate"
                            placeholder="Input password" value="{{ $user->password }}">
                </form>
            </div>


            {{-- <div class="mb-5">
            <div class="d-flex align-items-center">
                <i class="iconify" data-icon="carbon:user-role"></i>
                <select class="form-select border-0 w-50 ml-3"
                    aria-label="Default select example">
                    <option selected disabled>Role</option>
                    <option value="2">User</option>
                </select>
            </div>
        </div> --}}



            <div class="modal-footer d-flex justify-content-center">
                <button class="btn btn-success">Submit</button>
            </div>
        </div>
    </div>
@endsection
