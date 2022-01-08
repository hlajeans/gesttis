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
        'inicioIteracion',
       'finIteracion',
      'documento',

    ] ;

    public function getPathFileAttribute(){
        if ($this->documento) {
            if (substr($this->documento, 0, 4) === "http")
                return $this->documento;
            return asset('Archivos').'/' . $this->documento;
        }
        
    }
}
