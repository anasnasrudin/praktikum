<?php

use App\Http\Controllers\DataController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

Route::get('/', function () {
    return view('layout');
});

Route::get('/karyawan', [DataController::class,'index']);
Route::get('/karyawan/create', [DataController::class,'create']);
Route::get('/karyawan', [DataController::class,'simpan']);