@extends('layout')

@section('judul-halaman')
    Halaman - List Jabatan
@endsection

@section('judul')
    List Jabatan
@endsection

@section('konten-utama')
    @if (session('pesan'))
    <div class="alert alert-success" role="alert">
      {{ session('pesan') }}
    </div>
    @endif
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="h5">List Jabatan</h5>
                <a href="/jabatan/tambah" class="btn btn-success">Tambah</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="text-center" style="width: 50px">ID</th>
                        <th scope="col">Nama Jabatan</th>
                        <th scope="col">Gaji Pokok</th>
                        <th scope="col">edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data_jabatan as $index => $dj)
                        <tr>
                            <th scope="row" class="text-center align-middle">{{ $index + 1 }}</th>
                            <td>{{ $dj['nama_jabatan'] }}</td>
                            <td>{{ 'Rp ' . number_format($dj['gaji_pokok'], 0, ',', '.') }}</td>
                            <td>
                              <a href="/jabatan/edit/{{$dj['id_jabatan']}}" class="btn btn-warning btn-sm"><i class="fa-solid fa-edit"></i></a>
                              <a href="/jabatan/hapus/{{$dj['id_jabatan']}}" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
