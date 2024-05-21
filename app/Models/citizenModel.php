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
        'no_kk',
        'nama',
        'alamat',
        'domisili',
        'tanggal_lahir',
        'golongan_darah',
        'jenis_kelamin',
        'pekerjaan',
        'rt',
        'agama',
        
    ];

   
      // Implement methods from AuthenticatableContract
 
 
}