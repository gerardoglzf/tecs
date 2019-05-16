<?php

namespace TecStore;

use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    protected $fillable = [
        'nombre_producto', 'descripcion', 'cantidad', 'precio', 'status', 'idusuario'
    ];

    protected $primaryKey = 'id_productos';
    public $timestamps = false;
}

