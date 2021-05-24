<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;

    protected $table = 'club';

    protected $primaryKey = 
        'idClub'
        ;

    protected $fillable = [
    'ciudad',
    'nombre'
    ];

    protected $hidden = [
    'created_at','updated_at'
    ];
}
