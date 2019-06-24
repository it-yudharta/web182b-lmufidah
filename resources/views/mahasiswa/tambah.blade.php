@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <form action="/mahasiswas/store" method="GET">

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama" placeholder="Masukan nama">

                        <label for="alamat">Alamat</label>
                        <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukan Alamat">

                        <label for="umur">Umur</label>
                        <input name="umur" type="text" class="form-control" id="umur" placeholder="Masukan Umur">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
