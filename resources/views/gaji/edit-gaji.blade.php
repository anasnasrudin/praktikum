@extends('layout')

@section('judul-halaman')
    Halaman - Edit Gaji
@endsection

@section('judul')
    Edit Gaji
@endsection

@section('konten-utama')
    <div class="card">
        <div class="card-header">
            <h5 class="h5">Edit Gaji</h5>
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
                    <label for="id_karyawan" class="form-label">Karyawan</label>
                    <select class="form-control" id="id_karyawan" name="id_karyawan">
                        <option value="">-- Pilih Karyawan --</option>
                        @foreach($data_karyawan as $karyawan)
                            <option value="{{ $karyawan->id_karyawan }}" {{ $edit_gaji->id_karyawan == $karyawan->id_karyawan ? 'selected' : '' }}>
                                {{ $karyawan->nama }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="bulan" class="form-label">Bulan</label>
                    <input type="text" inputmode="numeric" class="form-control" id="bulan" name="bulan"
                        value="{{ $edit_gaji->bulan }}">
                </div>
                <div class="mb-3">
                    <label for="tahun" class="form-label">Tahun</label>
                    <input type="text" inputmode="numeric" class="form-control" id="tahun" name="tahun"
                        value="{{ $edit_gaji->tahun }}">
                </div>
                <div class="mb-3">
                    <label for="jumlah_absensi" class="form-label">Jumlah Absensi</label>
                    <input type="text" inputmode="numeric" class="form-control" id="jumlah_absensi" name="jumlah_absensi"
                        value="{{ $edit_gaji->jumlah_absensi }}">
                </div>
                <div class="mb-3">
                    <label for="tunjangan" class="form-label">Tunjangan</label>
                    <input type="text" inputmode="numeric" class="form-control" id="tunjangan" name="tunjangan"
                        value="{{ $edit_gaji->tunjangan }}">
                </div>
                <div class="mb-3">
                    <label for="total_gaji" class="form-label">Total Gaji</label>
                    <input type="text" inputmode="numeric" class="form-control" id="total_gaji" name="total_gaji"
                        value="{{ $edit_gaji->total_gaji }}">
                </div>
                <button class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>
@endsection
