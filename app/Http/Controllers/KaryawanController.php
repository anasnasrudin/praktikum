<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use App\Models\karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function karyawan() {
        $k = new karyawan();

        return view('karyawan.table-karyawan', [
            'data_karyawan'=>$k->all()
        ]);
    }

    public function tambah(){
        $j = new jabatan();
        $data_jabatan = $j->all();
    
        return view('karyawan.tambah-karyawan', compact('data_jabatan'));
    }

    public function simpan(Request $request) {
        // validasi
        $request->validate([
            "nama" => "required|max:100",
            "tanggal_lahir" => "required|date_format:Y-m-d",
            "jenis_kelamin" => "required|in:L,P",
            "id_jabatan" => "required|exists:jabatans,id_jabatan"
        ], [
            "nama.required" => "nama tidak boleh kosong",
            "nama.max" => "maksimal 100 karakter",
            "tanggal_lahir.required" => "tanggal lahir tidak boleh kosong",
            "tanggal_lahir.date_format" => "format tanggal harus YYYY-MM-DD",
            "jenis_kelamin.required" => "jenis kelamin harus dipilih",
            "jenis_kelamin.in" => "jenis kelamin harus dipilih antara L (Laki-laki) atau P (Perempuan)",
            "id_jabatan.required" => "jabatan harus dipilih",
            "id_jabatan.exists" => "jabatan tidak valid"
        ]);

        // proses simpan
        $k = new karyawan();

        $k->create($request->all());
        return redirect('/karyawan')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id) {
        $k = new karyawan();
        $j = new jabatan();

        $edit_karyawan = $k::find($id);
        $data_jabatan = $j->all();

        return view('karyawan.edit-karyawan', compact('edit_karyawan', 'data_jabatan'));
    }

    public function update(Request $request, $id) {
        // validasi
        $request->validate([
            "nama" => "required|max:100",
            "tanggal_lahir" => "required|date_format:Y-m-d",
            "jenis_kelamin" => "required|in:L,P",
            "id_jabatan" => "required|exists:jabatans,id_jabatan"
        ], [
            "nama.required" => "nama tidak boleh kosong",
            "nama.max" => "maksimal 100 karakter",
            "tanggal_lahir.required" => "tanggal lahir tidak boleh kosong",
            "tanggal_lahir.date_format" => "format tanggal harus YYYY-MM-DD",
            "jenis_kelamin.required" => "jenis kelamin harus dipilih",
            "jenis_kelamin.in" => "jenis kelamin harus dipilih antara L (Laki-laki) atau P (Perempuan)",
            "id_jabatan.required" => "jabatan harus dipilih",
            "id_jabatan.exists" => "jabatan tidak valid"
        ]);

        // proses simpan
        $k = new karyawan();

        $k->find($id)->update($request->all());
        return redirect('/karyawan')->with('pesan','Data berhasil diperbaharui');
    }

    public function hapus($id) {
        $k = new karyawan();

        $k->find($id)->delete();
        return redirect('/karyawan')->with('pesan','Data berhasil dihapus');
    }
}
