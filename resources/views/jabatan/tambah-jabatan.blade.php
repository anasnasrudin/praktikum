@extends('layout')

@section('judul-halaman')
    Halaman - Jabatan
@endsection

@section('judul')
    Jabatan
@endsection

@section('konten-utama')
    <div class="card">
        <div class="card-header">
            <h5 class="h5">Tambah Jabatan</h5>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
                    <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan"
                        placeholder="masukkan nama jabatan" value="{{ old('nama_jabatan') }}">
                </div>
                <div class="mb-3">
                    <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
                    <input type="text" inputmode="numeric" class="form-control" id="gaji_pokok" name="gaji_pokok"
                        placeholder="masukkan gaji pokok" value="{{ old('gaji_pokok') }}">
                </div>
                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
