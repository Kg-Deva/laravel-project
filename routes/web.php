<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\DataAnggotaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/', function () {
    return view('login');
});

// Data Buku
Route::get('/data-buku', [DataBukuController::class, 'index'])->name('data-buku');
Route::get('/tambah-data-buku', [DataBukuController::class, 'add'])->name('tambah-data-buku');
Route::post('/simpan-data-buku', [DataBukuController::class, 'simpan'])->name('simpan-data-buku');
Route::get('/edit-data-buku/{id}', [DataBukuController::class, 'edit'])->name('edit-data-buku');
Route::post('/update-data-buku/{id}', [DataBukuController::class, 'update'])->name('update-data-buku');
Route::get('/delete-data-buku/{id}', [DataBukuController::class, 'destroy'])->name('delete-data-buku');

// Data Buku
Route::get('/data-anggota', [DataAnggotaController::class, 'index'])->name('data-anggota');
Route::get('/tambah-data-anggota', [DataAnggotaController::class, 'add'])->name('tambah-data-anggota');
Route::post('/simpan-data-anggota', [DataAnggotaController::class, 'simpan'])->name('simpan-data-anggota');
Route::get('/edit-data-anggota/{id}', [DataAnggotaController::class, 'edit'])->name('edit-data-anggota');
Route::post('/update-data-anggota/{id}', [DataAnggotaController::class, 'update'])->name('update-data-anggota');
Route::get('/delete-data-anggota/{id}', [DataAnggotaController::class, 'destroy'])->name('delete-data-anggota');
