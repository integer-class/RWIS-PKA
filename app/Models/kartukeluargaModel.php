<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kartukeluargaModel extends Model
{
    use HasFactory;
    protected $table = "kartukeluarga";
    public $timestamps = false;
    protected $primaryKey = 'no_kk';
    protected $fillable = [
        'no_kk',
        'kelurahan',
        'kecamatan',
        'alamat',
        'kelurahan',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'rt',
        'rw',
        'kepala_keluarga',
        
    ];
}
