@extends('layout')

@section('judul-halaman')
    Halaman - Data Absensi
@endsection

@section('judul')
    Data Absensi
@endsection

@section('konten-utama')
    @if (session('pesan'))
    <div class="alert alert-success" role="alert">
      {{ session('pesan') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="h5">Data Absensi</h5>
                <a href="/absensi/tambah" class="btn btn-success">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="text-center" style="width: 50px">ID</th>
                        <th scope="col" class="text-center" style="width: 100px">ID Karyawan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Jam Masuk</th>
                        <th scope="col">Jam Keluar</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_absensi as $index => $da)
                        <tr>
                            <th scope="row" class="text-center align-middle">{{ $index + 1 }}</th>
                            <td class="text-center align-middle">{{ $da['id_karyawan'] }}</td>
                            <td>{{ $da['tanggal'] }}</td>
                            <td>{{ $da['jam_masuk'] }}</td>
                            <td>{{ $da['jam_keluar'] }}</td>
                            <td>
                              <a href="/absensi/edit/{{$da['id_absensi']}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-edit"></i></a>
                              <a href="/absensi/hapus/{{$da['id_absensi']}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
