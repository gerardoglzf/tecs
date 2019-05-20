<?php

namespace TecStore;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;  
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class usuarios extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $fillable = [
        'nombre', 'apellido', 'avatar', 'correo', 'facebook', 'num_cel','nom_usuario','password'
    ];

    protected $primaryKey = 'id';
    public $timestamps = false;
}
