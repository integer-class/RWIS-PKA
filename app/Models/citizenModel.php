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
        'no_kk',
        'nama',
        'alamat',
        'golongan_darah',
        'jenis_kelamin',
        'pekerjaan',
        'rt',
        'agama',
        
    ];

    public function no_KK(): Belongsto 
    {
        return $this->belongsTo(KKmodel::class);
    }
      // Implement methods from AuthenticatableContract
 
 
}