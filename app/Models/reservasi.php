<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservasi extends Model
{
    public $timestamps = false;
    use HasFactory;

  
    protected $table = 'reservasis';
    protected $fillable = [
        'nama', 
        'alamat',
        'notlp',
        'nominal_booking',
    ];

    // protected $guarded = [];
}
