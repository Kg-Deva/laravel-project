<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class DataBuku extends Model
{
    use HasFactory;
    protected $table ='data_buku';
    protected $primaryKey = 'id';
    protected $fillable = [
       
        'id' ,
        'judul' ,
        'pengarang' ,
        'kategori'
    ];
    public function getByIdPerusahaan()
    {
        return $this->where('id', Auth::user()->id)->get();
    }

    public function transaksi()
    {
        return $this->hasOne(DataTransaksi::class, 'ID_Anggota', 'id');
    }
}

