<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    
    protected $table = 'pais';

    protected $primaryKey = 'idPais';

    protected $fillable = 'nombre';

    protected $hidden = [
        'created_at','updated_at'
    ];
}
