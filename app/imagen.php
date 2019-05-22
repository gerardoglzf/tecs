<?php

namespace TecStore;

use Illuminate\Database\Eloquent\Model;

class imagen extends Model
{
    protected $fillable = [
        'id_producto','url', 'alt'
    ];
    public $timestamps = false;
}
