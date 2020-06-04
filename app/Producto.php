<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'id','nombre', 'aplicacion', 'construccion', 'imagen', 'archivo', 'certificado', 'seccion', 'orden', 'general_products_id', 
    ];

    public function general_product() {
        return $this->belongsTo('App\ProductoGenerales', 'general_products_id');
    }
    
    public function imagenes() {
        return $this->hasMany('App\ProductoImagenes', 'product_id');
    }

    public function variantes() {
        return $this->hasMany('App\ProductoVariantes', 'product_id');
    }
}
