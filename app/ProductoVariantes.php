<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoVariantes extends Model
{
    protected $table = 'product_variants';
    protected $fillable = [
        'id',
        'codigo', 
        'interior_mm', 
        'interior_pulg', 
        'exterior_mm', 
        'presion_bar', 
        'presion_libras', 
        'product_id',
        'numero_tabla', 
        'titulo_tabla'
    ];
}
