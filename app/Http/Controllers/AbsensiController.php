<?php

namespace App\Http\Controllers;

use App\Models\absensi;
use App\Models\karyawan;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function absensi() {
        $a = new absensi();

        return view('absensi.table-absensi', [
            'data_absensi'=>$a->all()
        ]);
    }

    public function tambah(){
        $k = new karyawan();
        $data_karyawan = $k->all();
    
        return view('absensi.tambah-absensi', compact('data_karyawan'));
    }

    public function simpan(Request $request) {
        // validasi
        $request->validate([
            "id_karyawan" => "required|exists:karyawans,id_karyawan",
            "tanggal" => "required|date_format:Y-m-d",
            "jam_masuk" => "required|date_format:H:i",
            "jam_keluar" => "required|date_format:H:i"
        ], [
            "id_karyawan.required" => "karyawan harus dipilih",
            "id_karyawan.exists" => "jabatan tidak valid",
            "tanggal.required" => "tanggal tidak boleh kosong",
            "tanggal.date_format" => "format tanggal harus YYYY-MM-DD",
            "jam_masuk.required" => "jam masuk tidak boleh kosong",
            "jam_masuk.date_format" => "format jam harus HH:MM, contoh: 08:00 atau 13:45",
            "jam_keluar.required" => "jam keluar tidak boleh kosong",
            "jam_keluar.date_format" => "format jam harus HH:MM, contoh: 08:00 atau 13:45"
        ]);

        // proses simpan
        $a = new absensi();

        $a->create($request->all());
        return redirect('/absensi')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id) {
        $a = new absensi();
        $k = new karyawan();

        $edit_absensi = $a::find($id);
        $data_karyawan = $k->all();

        return view('absensi.edit-absensi', compact('edit_absensi', 'data_karyawan'));
    }

    public function update(Request $request, $id) {
        // validasi
        $request->validate([
            "id_karyawan" => "required|exists:karyawans,id_karyawan",
            "tanggal" => "required|date_format:Y-m-d",
            "jam_masuk" => "required|date_format:H:i",
            "jam_keluar" => "required|date_format:H:i"
        ], [
            "id_karyawan.required" => "karyawan harus dipilih",
            "id_karyawan.exists" => "jabatan tidak valid",
            "tanggal.required" => "tanggal tidak boleh kosong",
            "tanggal.date_format" => "format tanggal harus YYYY-MM-DD",
            "jam_masuk.required" => "jam masuk tidak boleh kosong",
            "jam_masuk.date_format" => "format jam harus HH:MM, contoh: 08:00 atau 13:45",
            "jam_keluar.required" => "jam keluar tidak boleh kosong",
            "jam_keluar.date_format" => "format jam harus HH:MM, contoh: 08:00 atau 13:45"
        ]);

        // proses simpan
        $a = new absensi();

        $a->find($id)->update($request->all());
        return redirect('/absensi')->with('pesan','Data berhasil diperbaharui');
    }

    public function hapus($id) {
        $a = new absensi();

        $a->find($id)->delete();
        return redirect('/absensi')->with('pesan','Data berhasil dihapus');
    }
}
