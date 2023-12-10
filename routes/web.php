<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBukuController;

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
