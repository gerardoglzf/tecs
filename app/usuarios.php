<?php

namespace TecStore;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'avatar', 'correo', 'facebook', 'num_cel','nom_usuario','password'
    ];

    protected $primaryKey = 'id_usuario';
    public $timestamps = false;
}
