<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    protected $table = 'metadatas';
    protected $fillable = [
        'id','palabras_clave','descripcion', 'seccion'
    ];
}
