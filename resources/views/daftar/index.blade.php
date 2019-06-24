@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat Datang
                    <a class="btn btn-primary btn-sm float-right" href="/mhs/tambah">Tambah Data</a>
                </div>
                <div class="card-body">
                   
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Umur</th>
                        </tr>
                    </thead>
                        @foreach ($daftars as $mhs)
                    <tbody>
                        <tr>
                        <td>{{$mhs->id}}</td>
                        <td>{{$mhs->nama}}</td>
                        <td>{{$mhs->address}}</td>
                        <td>{{$mhs->age}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
