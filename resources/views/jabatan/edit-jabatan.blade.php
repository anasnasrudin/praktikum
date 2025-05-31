@extends('layout')

@section('judul-halaman')
    Halaman - Edit Jabatan
@endsection

@section('judul')
    Edit Jabatan
@endsection

@section('konten-utama')
    <div class="card">
        <div class="card-header">
            <h5 class="h5">Edit Jabatan</h5>
        </div>
        <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first()}}
                    </div>
                @endif
            <form action="" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Jabatan</label>
                    <input type="text" class="form-control" id="nama_jabatan" name="nama_jabatan"
                        placeholder="masukkan nama jabatan" value="{{ $edit_jabatan->nama_jabatan }}">
                </div>
                <div class="mb-3">
                    <label for="harga" class="form-label">Gaji Pokok</label>
                    <input type="text" class="form-control" id="gaji_pokok" name="gaji_pokok"
                        placeholder="masukkan gaji pokok" value="{{ $edit_jabatan->gaji_pokok }}">
                </div>
                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
