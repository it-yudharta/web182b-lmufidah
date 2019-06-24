@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <form action="/mahasiswas/{{$mahasiswas->id}}/update" method="GET">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input name="nama" type="text" class="form-control" id="nama" value="{{$mahasiswas->name}}">

                        <label for="alamat">Alamat</label>
                        <input name="alamat" type="text" class="form-control" id="alamat" value="{{$mahasiswas->address}}">

                        <label for="umur">Umur</label>
                        <input name="umur" type="text" class="form-control" id="umur" value="{{$mahasiswas->age}}">
                    </div>
                    <button type="submit" class="btn btn-primary float-right">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
