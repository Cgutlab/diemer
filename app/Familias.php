<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familias extends Model
{
    protected $table = 'families';
    protected $fillable = [
        'id','nombre', 'imagen', 'orden'
    ];

    public function product_general() {
        return $this->hasMany('App\ProductoGenerales', 'family_id');
    }
    public function products() {
        return $this->hasMany('App\Producto', 'family_id');
    }
}

