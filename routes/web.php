<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBukuController;
use App\Http\Controllers\DataAnggotaController;
use App\Http\Controllers\DataTransaksiController;
use App\Http\Controllers\DataLoginController;

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

// Route::get('/perpus', function () {
//     return view('dashboard');
// });

Route::get('/', function () {
    return view('login');
});
//login
Route::get('/login', [DataLoginController::class, 'index'])->name('login');
Route::post('/postlogin', [DataLoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [DataLoginController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    //dashboard
    Route::get('/perpus', function () {
        return view('dashboard');
    });

    // Data Buku
    Route::get('/data-buku', [DataBukuController::class, 'index'])->name('data-buku');
    Route::get('/tambah-data-buku', [DataBukuController::class, 'add'])->name('tambah-data-buku');
    Route::post('/simpan-data-buku', [DataBukuController::class, 'simpan'])->name('simpan-data-buku');
    Route::get('/edit-data-buku/{id}', [DataBukuController::class, 'edit'])->name('edit-data-buku');
    Route::post('/update-data-buku/{id}', [DataBukuController::class, 'update'])->name('update-data-buku');
    Route::get('/delete-data-buku/{id}', [DataBukuController::class, 'destroy'])->name('delete-data-buku');

    // Data anggota
    Route::get('/data-anggota', [DataAnggotaController::class, 'index'])->name('data-anggota');
    Route::get('/tambah-data-anggota', [DataAnggotaController::class, 'add'])->name('tambah-data-anggota');
    Route::post('/simpan-data-anggota', [DataAnggotaController::class, 'simpan'])->name('simpan-data-anggota');
    Route::get('/edit-data-anggota/{id}', [DataAnggotaController::class, 'edit'])->name('edit-data-anggota');
    Route::post('/update-data-anggota/{id}', [DataAnggotaController::class, 'update'])->name('update-data-anggota');
    Route::get('/delete-data-anggota/{id}', [DataAnggotaController::class, 'destroy'])->name('delete-data-anggota');

    // Data transaksi
    Route::get('/data-pinjam', [DataTransaksiController::class, 'index'])->name('data-transaksi');
    Route::get('/tambah-data-transaksi', [DataTransaksiController::class, 'add'])->name('tambah-data-transaksi');
    Route::post('/simpan-data-transaksi', [DataTransaksiController::class, 'simpan'])->name('simpan-data-transaksi');
    Route::get('/edit-data-transaksi/{id}', [DataTransaksiController::class, 'edit'])->name('edit-data-transaksi');
    Route::post('/update-data-transaksi/{id}', [DataTransaksiController::class, 'update'])->name('update-data-transaksi');
    Route::get('/delete-data-transaksi/{id}', [DataTransaksiController::class, 'destroy'])->name('delete-data-transaksi');
});
