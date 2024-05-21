<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kartukeluargaModel extends Model
{
    use HasFactory;
    protected $table = "kepalakeluarga";
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
$table->string('kecamatan');
$table->string('kabupaten');
$table->string('provinsi');
$table->string('rt');
$table->string('rw');
$table->string('kepala_keluarga');