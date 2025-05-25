<?php

namespace App\Http\Controllers;

use App\Models\karyawan;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index() {
        return karyawan::all();
    }

    public function create(){
        return view('karyawan');
    }

    public function simpan(Request $request) {
        $validated = $request->validate([
            'nama' => 'required|string|max:100',
            'tanggal_lahir' => 'required|date|min:0',
            'jenis_kelamin' => 'required|enum|min:0',
            'id_jabatan' => 'required|integer|min:0'
        ]);
    
        karyawan::create($validated);
    
        return redirect('/karyawan')->with('success', 'Produk berhasil ditambahkan');
    }

}
