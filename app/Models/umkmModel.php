<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class umkmModel extends Model
{
    use HasFactory;
    protected $table = "umkm";
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama_pemilik',
        'nama_umkm',
        'alamat',
        'deskripsi',
        'no_telpon',
        'gambar',
    ];
    
}
