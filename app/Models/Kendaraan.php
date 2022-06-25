<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    use HasFactory;
    protected $table = 'kendaraan';
    protected $fillable = [
       'no_plat',
        'merk',
        'tipe'
    ];
    public $timestamps =false;
    protected $hidden;
}
