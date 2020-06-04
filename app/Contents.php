<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    protected $table = 'contents';
    protected $fillable = [
        'seccion','id','titulo', 'texto','orden', 'imagen'
    ];
    public function meta() {
        return $this->hasMany('App\ContentMetasModel', 'content_id');
    }

}
