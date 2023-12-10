<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class DataTransaksi extends Model
{
    use HasFactory;
    protected $table ='data_transaksi';
    protected $primaryKey = 'id';
    protected $fillable = [
       
        'id' ,
        'ID_Anggota' ,
        'buku' ,
        'tgl_pinjam' ,
        'tgl_kembali' ,
    ];
    // public function anggota(){
    //     return $this->hasMany(DataAnggota::class, 'id');
    // }

    public function anggota()
    {
        return $this->hasOne(DataAnggota::class, 'id');
    }

    public function buku()
    {
        return $this->hasOne(DataBuku::class, 'id');
    }

    public function getByIdPerusahaan()
    {
        return $this->where('id', Auth::user()->id)->get();
    }
}
