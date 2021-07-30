<?php

use Illuminate\Support\Facades\Route;

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
/*MANTENIMIENTOS*/
Route::get('/', function () {
    return view('index');
});

Route::get('/categorias', function () {
    return view('categorias');
});

Route::get('/empresas', function () {
    return view('empresas');
});

Route::get('/encuestas', function () {
    return view('encuestas');
});

Route::get('/industrias', function () {
    return view('industrias');
});

Route::get('/naturaleza', function () {
    return view('naturaleza');
});

Route::get('/personas', function () {
    return view('personas');
});

Route::get('/roles', function () {
    return view('roles');
});

Route::get('/tipo-documento', function () {
    return view('tipo-documento');
});

Route::get('/tipo-evaluacion', function () {
    return view('tipo-evaluacion');
});

Route::get('/programar-encuesta', function () {
    return view('programar-encuesta');
});

/*CULTURA*/

Route::get('reporte-generales', function () {
    return view('cultura/reporte-generales');
});

Route::get('/reporte-grandes-areas', function () {
    return view('cultura/reporte-grandes-areas');
});

Route::get('/reporte-area-encuesta', function () {
    return view('cultura/reporte-area-encuesta');
});

Route::get('/reporte-preguntas', function () {
    return view('cultura/reporte-preguntas');
});

Route::get('/reporte-preguntas-especificas', function () {
    return view('cultura/reporte-preguntas-especificas');
});

Route::get('/reporte-semaforo-area-encuesta', function () {
    return view('cultura/reporte-semaforo-area-encuesta');
});

/*PERSONAS*/

Route::get('/reporte-generales', function () {
    return view('personas/reporte-generales');
});

Route::get('/reporte-equipos', function () {
    return view('personas/reporte-equipos');
});

Route::get('/reporte-seccion-encuesta', function () {
    return view('personas/reporte-seccion-encuesta');
});

Route::get('/reporte-rangos', function () {
    return view('personas/reporte-rangos');
});

Route::get('/reporte-top-bottom', function () {
    return view('personas/reporte-top-bottom');
});

Route::get('/reporte-seccion-dinamica', function () {
    return view('personas/reporte-seccion-dinamica');
});

Route::get('reporte-seguimiento', function () {
    return view('personas/reporte-seguimiento');
});

Route::get('reporte-desagregado', function () {
    return view('personas/reporte-desagregado');
});

Route::get('/reporte-desagregado-consultor', function () {
    return view('personas/reporte-desagregado-consultor');
});

Route::get('/reporte-tipo-personas', function () {
    return view('personas/reporte-tipo-personas');
});

Route::get('/reporte-personas-rango', function () {
    return view('personas/reporte-personas-rango');
});

Route::get('/reporte-competencia-general', function () {
    return view('personas/reporte-competencia-general');
});

Route::get('/reporte-cruzado-preguntas', function () {
    return view('personas/reporte-cruzado-preguntas');
});

Route::get('/reporte-benckmarking-externo', function () {
    return view('personas/reporte-benckmarking-externo');
});

Route::get('/reporte-cultura-liderazgo', function () {
    return view('personas/reporte-cultura-liderazgo');
});



Route::get('/categorias-nuevo', function () {
    return view('categorias-nuevo');
});

Route::get('/encuestas-nuevo', function () {
    return view('encuestas-nuevo');
});

Route::get('/empresas-nuevo', function () {
    return view('empresas-nuevo');
});


Route::get('/industrias-nuevo', function () {
    return view('industrias-nuevo');
});

Route::get('/naturaleza-nuevo', function () {
    return view('naturaleza-nuevo');
});

Route::get('/personas-nuevo', function () {
    return view('personas-nuevo');
});

Route::get('/roles-nuevo', function () {
    return view('roles-nuevo');
});

Route::get('/tipo-documento-nuevo', function () {
    return view('tipo-documento-nuevo');
});

Route::get('/tipo-evaluacion-nuevo', function () {
    return view('tipo-evaluacion-nuevo');
});

Route::get('/programar-encuesta-nuevo', function () {
    return view('programar-encuesta-nuevo');
});
