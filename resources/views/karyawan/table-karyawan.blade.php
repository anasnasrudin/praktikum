@extends('layout')

@section('judul-halaman')
    Halaman - Data Karyawan
@endsection

@section('judul')
    Data Karyawan
@endsection

@section('konten-utama')
    @if (session('pesan'))
    <div class="alert alert-success" role="alert">
      {{ session('pesan') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="h5">Data Karyawan</h5>
                <a href="/karyawan/tambah" class="btn btn-success">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="text-center" style="width: 50px">ID</th>
                        <th scope="col">Nama Karyawan</th>
                        <th scope="col">Tanggal Lahir</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">ID Jabatan</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_karyawan as $index => $dk)
                        <tr>
                            <th scope="row" class="text-center align-middle">{{ $dk['id_karyawan'] }}</th>
                            <td>{{ $dk['nama'] }}</td>
                            <td>{{ $dk['tanggal_lahir'] }}</td>
                            <td>{{ $dk['jenis_kelamin'] }}</td>
                            <td>{{ $dk['id_jabatan'] }}</td>
                            <td>
                              <a href="/karyawan/edit/{{$dk['id_karyawan']}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-edit"></i></a>
                              <a href="/karyawan/hapus/{{$dk['id_karyawan']}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
