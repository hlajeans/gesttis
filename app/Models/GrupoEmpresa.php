<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrupoEmpresa extends Model
{
    use HasFactory;

    /**
     * Modelo Grupo Empresa
     * 
     * Relacion uno a muchos (con user)
     */
    public function user(){
        return $this->hasMany('App\Models\User');
    }
}
