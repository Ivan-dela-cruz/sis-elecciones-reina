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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// vistas para las calificaciones
Route::get('/home', 'CandidataController@index')->name('home');

Route::get('/gala', 'CandidataController@gala')->name('gala');

Route::get('/pregunta', 'CandidataController@pregunta')->name('pregunta');

Route::get('/secretario', 'HomeController@vistaResultado')->name('secretario');

//vistas calificaciones individual

Route::get('candidata-inicial/{id}', 'CandidataController@calificarInicial')->name('candidata-inicial');

Route::get('candidata-gala/{id}', 'CandidataController@calificarGala')->name('candidata-gala');

Route::get('candidata-pregunta/{id}', 'CandidataController@calificarPregunta')->name('candidata-pregunta');

//metodos de califacion

Route::post('calificar-inicial', 'CalificacionController@calificarInicial')->name('calificar-inicial');

Route::post('calificar-gala', 'CalificacionController@calificarGala')->name('calificar-gala');

Route::post('calificar-pregunta', 'CalificacionController@calificarPregunta')->name('calificar-pregunta');

//calificar promedio

Route::get('calcular', 'CalificacionController@calculoResultado')->name('calcular');

Route::get('posiciones', 'CalificacionController@listarGanadora')->name('posiciones');

/*
Route::get('/entrega', 'EntradaController@index');
Route::post('/entrega/registrar', 'EntradaController@store');
Route::put('/entrega/actualizar', 'EntradaController@update');
Route::get('/entrega/listarPdf', 'EntradaController@listarPdf')->name('entrada_pdf');
Route::put('/entrega/desactivar', 'EntradaController@desactivar');
Route::put('/entrega/activar', 'EntradaController@activar');
*/