<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class templatesuratModel extends Model
{
    use HasFactory;
    protected $table = "templatesurat";
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'tanggal',
        'nama_surat',
        'surat',
        
    ];
    
}
