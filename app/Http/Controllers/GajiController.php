<?php

namespace App\Http\Controllers;

use App\Models\gaji;
use App\Models\karyawan;
use Illuminate\Http\Request;

class GajiController extends Controller
{
    public function gaji() {
        $g = new gaji();

        return view('gaji.table-gaji', [
            'data_gaji'=>$g->all()
        ]);
    }

    public function tambah(){
        $k = new karyawan();
        $data_karyawan = $k->all();
    
        return view('gaji.tambah-gaji', compact('data_karyawan'));
    }

    public function simpan(Request $request) {
        // validasi
        $request->validate([
            "id_karyawan" => "required|exists:karyawans,id_karyawan",
            "bulan" => "required",
            "tahun" => "required",
            "jumlah_absensi" => "required|",
            "tunjangan" => "required|numeric|min:0",
            "total_gaji" => "required"
        ], [
            "id_karyawan.required" => "karyawan harus dipilih",
            "id_karyawan.exists" => "jabatan tidak valid",
            "bulan.required" => "bulan tidak boleh kosong",
            "tahun.required" => "tahun tidak boleh kosong",
            "jumlah_absensi.required" => "jumlah absensi tidak boleh kosong",
            "tunjangan.required" => "tunjangan tidak boleh kosong",
            "tunjangan.min" => "minimal 0 karakter",
            "total_gaji.required" => "toal gaji tidak boleh kosong",
        ]);

        // proses simpan
        $g = new gaji();

        $g->create($request->all());
        return redirect('/gaji')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id) {
        $g = new gaji();
        $k = new karyawan();

        $edit_gaji = $g::find($id);
        $data_karyawan = $k->all();

        return view('gaji.edit-gaji', compact('edit_gaji', 'data_karyawan'));
    }

    public function update(Request $request, $id) {
        // validasi
        $request->validate([
            "id_karyawan" => "required|exists:karyawans,id_karyawan",
            "bulan" => "required",
            "tahun" => "required",
            "jumlah_absensi" => "required|",
            "tunjangan" => "required|numeric|min:0",
            "total_gaji" => "required"
        ], [
            "id_karyawan.required" => "karyawan harus dipilih",
            "id_karyawan.exists" => "jabatan tidak valid",
            "bulan.required" => "bulan tidak boleh kosong",
            "tahun.required" => "tahun tidak boleh kosong",
            "jumlah_absensi.required" => "jumlah absensi tidak boleh kosong",
            "tunjangan.required" => "tunjangan tidak boleh kosong",
            "tunjangan.min" => "minimal 0 karakter",
            "total_gaji.required" => "toal gaji tidak boleh kosong",
        ]);

        // proses simpan
        $g = new gaji();

        $g->find($id)->update($request->all());
        return redirect('/absensi')->with('pesan','Data berhasil diperbaharui');
    }

    public function hapus($id) {
        $g = new gaji();

        $g->find($id)->delete();
        return redirect('/gaji')->with('pesan','Data berhasil dihapus');
    }
}
