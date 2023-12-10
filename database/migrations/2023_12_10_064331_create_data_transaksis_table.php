<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('data_transaksi', function (Blueprint $table) {
            $table->id();
            $table->string('ID_Anggota');
            $table->string('buku');
            $table->string('tgl_pinjam');
            $table->string('tgl_kembali');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_transaksi');
    }
};
