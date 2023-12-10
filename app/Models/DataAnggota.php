<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class DataAnggota extends Model
{
    use HasFactory;
    protected $table ='data_anggota';
    protected $primaryKey = 'id';
    protected $fillable = [
       
        'id' ,
        'nim' ,
        'nama' ,
        'prodi'
    ];

    // public function transaksi(){
    //     return $this->belongsTo(DataTransaksi::class, 'ID_Anggota');
    // }

    public function getByIdPerusahaan()
    {
        return $this->where('id', Auth::user()->id)->get();
    }

    public function transaksi()
    {
        return $this->hasOne(DataTransaksi::class, 'ID_Anggota', 'id');
    }
}

