<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class UserModel extends Model
{
   
    use HasFactory;
    protected $table = "users";
    public $timestamps = false;
    protected $primaryKey = 'id_user';
    protected $fillable = [
        'nik',
        'role',
        'password',
    ];

    public function level(): Belongsto 
    {
        return $this->belongsTo(citizenModel::class, 'Role', 'role');
    }
      // Implement methods from AuthenticatableContract
 
 
}