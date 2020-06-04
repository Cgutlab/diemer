<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoImagenes extends Model
{
    protected $table = 'product_images';
    protected $fillable = [
       'imagen'
    ];
}
