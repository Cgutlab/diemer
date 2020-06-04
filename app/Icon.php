<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    protected $table = 'icons';
    protected $fillable = [
        'id' , 'imagen', 'titulo','orden', 'familia_id','subfamilia_id', 'seccion'
    ];
}
