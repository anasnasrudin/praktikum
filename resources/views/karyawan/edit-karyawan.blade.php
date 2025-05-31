@extends('layout')

@section('judul-halaman')
    Halaman - Edit Karyawan
@endsection

@section('judul')
    Edit Karyawan
@endsection

@section('konten-utama')
    <div class="card">
        <div class="card-header">
            <h5 class="h5">Edit Karyawan</h5>
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
                    <label for="nama" class="form-label">Nama Karyawan</label>
                    <input type="text" class="form-control" id="nama" name="nama"
                        value="{{ $edit_karyawan->nama }}">
                </div>
                <div class="mb-3">
                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir"
                        value="{{ $edit_karyawan->tanggal_lahir }}">
                </div>
                <div class="mb-3">
                    <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                        <option value="">-- Pilih Jenis Kelamin --</option>
                        <option value="L" {{ $edit_karyawan->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki
                        </option>
                        <option value="P" {{ $edit_karyawan->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan
                        </option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="id_jabatan" class="form-label">Jabatan</label>
                    <select class="form-control" id="id_jabatan" name="id_jabatan">
                        <option value="">-- Pilih Jabatan --</option>
                        @foreach ($data_jabatan as $jabatan)
                            <option value="{{ $jabatan->id_jabatan }}"
                                {{ $edit_karyawan->id_jabatan == $jabatan->id_jabatan ? 'selected' : '' }}>
                                {{ $jabatan->nama_jabatan }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
