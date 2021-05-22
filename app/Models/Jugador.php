<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $fillable = [
    'idClub',
    'idPais',
    'nombre',
    'posicion'
    ];

    protected $hidden = [
    'idJugador'
    ];

    protected $casts = [
    'fecha'
    ];
}
