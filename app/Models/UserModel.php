<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class UserModel extends Model implements AuthenticatableContract
{
   
    use HasFactory,Authenticatable;
    
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
      public function UserName()
      {
          // Assuming you're fetching the currently authenticated user
          $user = auth()->user();
          
          // Retrieve the user's name
          $userName = $user->nama; // Assuming the user's name field in UserModel is 'nama'
          
          // Pass the user's name to the Blade view
          return view('sidebar.blade.php', ['userName' => $userName]);
      }
 
}