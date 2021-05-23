<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $table = 'jugador';

    protected $primaryKey = 'idJugador';

    protected $fillable = [
    'idClub',
    'idPais',
    'nombre',
    'posicion'
    ];

    protected $casts = [
    'fecha'
    ];

    protected $hidden = [
        'created_at','updated_at'
        ];
}
