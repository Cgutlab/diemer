<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoEspecificos extends Model
{
    protected $table = 'especific_products';
    protected $fillable = [
        'id','nombre', 'imagen', 'texto', 'seccion', 'general_product_id'
    ];

    public function general_product() {
        return $this->belongsTo('App\ProductoGenerales', 'general_product_id');
    }
    
    public function productos() {
        return $this->hasMany('App\Producto', 'especific_products_id');
    }
}
