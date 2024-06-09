<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class citizenModel extends Model 
{
   
    use HasFactory;
    protected $table = "citizen";
    public $timestamps = false;
    protected $primaryKey = 'nik';
    protected $fillable = [
        'nik',
        'nama',
        'no_kk',
        'alamat',
        'status_kependudukan',
        'domisili',
        'rt',
        'agama',
        'golongan_darah',
        'jenis_kelamin',
        'pekerjaan',
        'skorbansos',

        'status',
        'tanggal_lahir',
        'pendidikan',
        'luas_rumah',
        'gaji'
        
    ];


      // Implement methods from AuthenticatableContract
 
 
}