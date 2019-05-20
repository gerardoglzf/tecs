<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/registros',function(){
    return view('registros.usuarios');
});

Route::get('/perfil_Usuario',function(){
    return view('perfil_Usuario.perfil');
});

Route::get('/show_Producto',function(){
   return view('show_Producto.show'); 
});

Route::resource('usuarios','usuariosController');

Route::resource('log','LogController');