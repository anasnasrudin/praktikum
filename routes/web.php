<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\KaryawanController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/jabatan', [JabatanController::class, 'jabatan']);
Route::get('/jabatan/tambah', [JabatanController::class, 'tambah']);
Route::post('/jabatan/tambah', [JabatanController::class, 'simpan']);
Route::get('/jabatan/edit/{id}', [JabatanController::class,'edit']);
Route::post('/jabatan/edit/{id}', [JabatanController::class,'update']);
Route::get('/jabatan/hapus/{id}', [JabatanController::class,'hapus']);

Route::get('/karyawan', [KaryawanController::class, 'karyawan']);
Route::get('/karyawan/tambah', [KaryawanController::class, 'tambah']);
Route::post('/karyawan/tambah', [KaryawanController::class, 'simpan']);
Route::get('/karyawan/edit/{id}', [KaryawanController::class,'edit']);
Route::post('/karyawan/edit/{id}', [KaryawanController::class,'update']);
Route::get('/karyawan/hapus/{id}', [KaryawanController::class,'hapus']);

Route::get('/absensi', [AbsensiController::class, 'absensi']);
Route::get('/absensi/tambah', [AbsensiController::class, 'tambah']);
Route::post('/absensi/tambah', [AbsensiController::class, 'simpan']);
Route::get('/absensi/edit/{id}', [AbsensiController::class,'edit']);
Route::post('/absensi/edit/{id}', [AbsensiController::class,'update']);
Route::get('/absensi/hapus/{id}', [AbsensiController::class,'hapus']);

Route::get('/gaji', [GajiController::class, 'gaji']);
Route::get('/gaji/tambah', [GajiController::class, 'tambah']);
Route::post('/gaji/tambah', [GajiController::class, 'simpan']);
Route::get('/gaji/edit/{id}', [GajiController::class,'edit']);
Route::post('/gaji/edit/{id}', [GajiController::class,'update']);
Route::get('/gaji/hapus/{id}', [GajiController::class,'hapus']);