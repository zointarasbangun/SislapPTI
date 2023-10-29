@extends('layout.main')
@section('content')

<div class="content-wrapper">
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
        <p>Data Akun</p>
        <table>
            <tr>
                <th></th>
                <th></th>
            </tr>
        </table>
    </div>
</div>

@endsection