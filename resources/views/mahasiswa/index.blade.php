@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mahasiswa</div>

                <div class="card-body">
                    {{ $mahasiswas->links() }}
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Umur</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mahasiswas as $mahasiswa)
                                <tr>
                                    <td>{{ $mahasiswa->id }}</td>
                                    <td>{{ $mahasiswa->name }}</td>
                                    <td>{{ $mahasiswa->address }}</td>
                                    <td>{{ $mahasiswa->age }}</td>
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
