<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
        'seccion','id','titulo', 'texto','orden', 'imagen'
    ];
}
