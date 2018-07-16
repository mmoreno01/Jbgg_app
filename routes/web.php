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

// Route::get('/', function () {
//     return view('.slider.slider');
// });

Route::get('home', 'UserController@index');

// rutas de  la seccion de servicios
Route::get('contabilidad', function () {
    return view('servicios.contabilidad');
});
Route::get('fiscal', function () {
    return view('servicios.fiscal');
});
Route::get('payroll', function () {
    return view('servicios.payroll');
});
Route::get('division', function () {
    return view('servicios.division');
});
Route::get('capitalHumano', function () {
    return view('servicios.capitalHumano');
});
Route::get('bancaInversion', function () {
    return view('servicios.bancaInversion');
});
Route::get('estacionServicio', function () {
    return view('servicios.estacionServicio');
});
Route::get('sofom', function () {
    return view('servicios.sofom');
});

// rutas de la seccion de ubicacion

Route::get ('contacto', function(){
    return view('contacto.contacto');
});
Route::get ('cotizacion', function(){
    return view('contacto.cotizacion');
});
Route::get ('ubicacion', function(){
    return view('contacto.ubicacion');
});