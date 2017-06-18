<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('controlador','testcontroller@index');

Route::get('controlador2/{nombre}','testcontroller@nombre');

Route::resource('movie', 'movieController');


Route::get('/', function () {
    return view('welcome');
});

Route::get('nombre/{nombre}', function ($id) {
    return 'nombre es '.$id;
});

Route::get('nombre2/{nombre?}', function ($id=20) {
    return 'nombre2 es '.$id;
});