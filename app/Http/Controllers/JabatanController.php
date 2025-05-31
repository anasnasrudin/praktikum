<?php

namespace App\Http\Controllers;

use App\Models\jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function jabatan() {
        $j = new jabatan();

        return view('jabatan.table-jabatan', [
            'data_jabatan'=>$j->all()
        ]);
    }

    public function tambah(){
        return view('jabatan.tambah-jabatan');
    }

    public function simpan(Request $request) {
        // validasi
        $request->validate([
             "nama_jabatan" => "required|max:50",
             "gaji_pokok" => "required|numeric|min:1000000"
         ], [
             "nama_jabatan.required" => "nama tidak boleh kosong",
             "nama_jabatan.max" => "maksimal 10 karakter",
             "gaji_pokok.required" => "tanggal lahir tidak boleh kosong",
             "gaji_pokok.min" => "minimal Rp. 1.000.000"
        ]);

        // proses simpan
        $j = new jabatan();

        $j->create($request->all());
        return redirect('/jabatan')->with('pesan', 'Data berhasil ditambahkan');
    }

    public function edit($id) {
        $j = new jabatan();

        return view('jabatan.edit-jabatan', [
            'edit_jabatan'=>$j::find($id)
        ]);
    }

    public function update(Request $request, $id) {
        // validasi
        $request->validate([
            "nama_jabatan" => "required|max:50",
            "gaji_pokok" => "required|numeric|min:1000000"
        ], [
            "nama_jabatan.required" => "nama tidak boleh kosong",
            "nama_jabatan.max" => "maksimal 10 karakter",
            "gaji_pokok.required" => "tanggal lahir tidak boleh kosong",
            "gaji_pokok.min" => "minimal Rp. 1.000.000"
       ]);

        // proses simpan
        $j = new jabatan();

        $j->find($id)->update($request->all());
        return redirect('/jabatan')->with('pesan','Data berhasil diperbaharui');
    }

    public function hapus($id) {
        $j = new jabatan();

        $j->find($id)->delete();
        return redirect('/jabatan')->with('pesan','Data berhasil dihapus');
    }
}
