<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoGenerales extends Model
{
    protected $table = 'general_products';
    protected $fillable = [
        'id','nombre', 'imagen', 'texto', 'seccion', 'orden', 'family_id'
    ];

    public function familia() {
        return $this->belongsTo('App\Familias', 'family_id');
    }
    public function productos() {
        return $this->hasMany('App\Producto', 'general_product_id');
    }
}
