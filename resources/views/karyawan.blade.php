@extends('layout')

@section('judul-halaman')
    Halaman - Dashboard
@endsection

@section('judul')
    Dashboard
@endsection

@section('konten-utama')
    <div class="card">
        <div class="card-header">
            <h5 class="h5">Karyawan</h5>
        </div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="masukkan nama">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="harga" name="tanggal_lahir" placeholder="masukkan tanggal lahir">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Jenis Kelamin</label>
                    <input type="text" inputmode="numeric" class="jenis_kelamin" id="harga" name="stok" placeholder="masukkan jenis kelamin">
                </div>
                <div class="mb-3">
                    <label for="stok" class="form-label">Id jabatan</label>
                    <input type="text" inputmode="numeric" class="id_jabatan" id="harga" name="stok" placeholder="masukkan id jabatan">
                </div>
                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
