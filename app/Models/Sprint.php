<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sprint extends Model
{
    use HasFactory;
    protected $fillable=[

        'nombreGrupo',
       'numeroIteracion',
        'inicioSprint',
       'finSprint',
      'nota',

    ] ;
}
