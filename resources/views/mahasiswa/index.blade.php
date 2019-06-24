@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Selamat Datang di Tabel Mahasiswa
                    <a class="btn btn-primary btn-sm float-right" href="/mahasiswas/tambah">Tambah Data</a>
                </div>

                <div class="card-body">
                    {{ $mahasiswas->links() }}
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Umur</th>
                                <th>Manage Data</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswas as $mahasiswa)
                                <tr>
                                    <td>{{ $mahasiswa->id }}</td>
                                    <td>{{ $mahasiswa->name }}</td>
                                    <td>{{ $mahasiswa->address }}</td>
                                    <td>{{ $mahasiswa->age }}</td>
                                    <td>
                                        <a class="btn btn-warning btn-sm " href="/mahasiswas/{{ $mahasiswa->id }}/edit">Edit</a>
                                        <a class="btn btn-danger btn-sm " href="/mahasiswas/{{ $mahasiswa->id }}/hapus">Hapus</a>
                                    
                                    </td>
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
