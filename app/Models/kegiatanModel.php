<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kegiatanModel extends Model
{
    use HasFactory;
    protected $table = "kegiatan";
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'tanggal',
        'nama_kegiatan',
        'deskripsi',
        'gambar',
        
    ];
    
}
