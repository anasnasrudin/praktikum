@extends('layout')

@section('judul-halaman')
    Halaman - List Gaji
@endsection

@section('judul')
    List Gaji
@endsection

@section('konten-utama')
    @if (session('pesan'))
    <div class="alert alert-success" role="alert">
      {{ session('pesan') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="h5">List Gaji</h5>
                <a href="/gaji/tambah" class="btn btn-success">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="text-center" style="width: 50px">ID</th>
                        <th scope="col" class="text-center" style="width: 100px">ID Karyawan</th>
                        <th scope="col">Bulan</th>
                        <th scope="col">Tahun</th>
                        <th scope="col">Jumlah Absensi</th>
                        <th scope="col">Tunjangan</th>
                        <th scope="col">Total Gaji</th>
                        <th scope="col">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_gaji as $index => $dg)
                        <tr>
                            <th scope="row" class="text-center align-middle">{{ $index + 1 }}</th>
                            <td class="text-center align-middle">{{ $dg['id_karyawan'] }}</td>
                            <td>{{ $dg['bulan'] }}</td>
                            <td>{{ $dg['tahun'] }}</td>
                            <td>{{ $dg['jumlah_absensi'] }}</td>
                            <td>{{ 'Rp ' . number_format($dg['tunjangan'], 0, ',', '.') }}</td>
                            <td>{{ 'Rp ' . number_format($dg['total_gaji'], 0, ',', '.') }}</td>
                            <td>
                              <a href="/gaji/edit/{{$dg['id_gaji']}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-edit"></i></a>
                              <a href="/gaji/hapus/{{$dg['id_gaji']}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
