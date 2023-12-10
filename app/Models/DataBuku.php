<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
    protected $hidden;
}

