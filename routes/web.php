<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/**
 * Route::get       Consultar
 * Route::post      Guardar
 * Route::delete    Eliminar
 * Route::put       Actualizar
 */

Route::get('/', function () {
    //return view('welcome');
    return 'Ruta home';
});

Route::get('blog', function () {
    return 'Listado de publicaciones';
});

Route::get('blog/{slug}', function ($slug) {
    //consulta a base de datos
    return 'Selección: '.$slug;
});

Route::get('buscar', function (Request $request) {
    return $request->all();
});