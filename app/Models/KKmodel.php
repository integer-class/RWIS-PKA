<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class KKmodel extends Model 
{
   
    use HasFactory;

    protected $table = "kartu_keluarga";

    public $timestamps = false;
    protected $primaryKey = 'no_kk';
    protected $fillable = [
        'alamat',
        'kecamatan',
        'kabupaten',
        'rt',
        'rw',
    ];

    
      // Implement methods from AuthenticatableContract
 
 
}