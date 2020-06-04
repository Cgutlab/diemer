<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contentMetasModel extends Model
{
    protected $table = 'content_metas';
    protected $fillable = [
        'meta_key',
        'meta_value',
        'content_id',
    ];
}
