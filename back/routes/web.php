<?php

use App\Models\industria;
use App\Models\tipo_documento;
use App\Models\tipo_evaluacion;
use App\Models\categoria;
use App\Models\naturaleza;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard.main');

Route::get('/categorias', function () {
    $categoria = categoria::all();
    return view('categorias',compact('categoria'));
})->name('categorias.main');

Route::get('/naturaleza', function () {
    $naturaleza = naturaleza::all();
    return view('naturaleza',compact('naturaleza'));
})->name('naturaleza.main');


Route::get('/empresas', function () {
    return view('empresas');
})->name('empresas.main');

Route::get('/encuestas', function () {
    return view('encuestas');
})->name('encuestas.main');

Route::get('/industrias', function () {
    $industria = industria::paginate(10);
    return view('industrias',compact('industria'));
})->name('industrias.main');


//s
Route::get('/personas', function () {
    return view('personas');
})->name('personas.main');

Route::get('/roles', function () {
    return view('roles');
})->name('roles.main');

Route::get('/tipo-documento', function () {
    $tipo_documento = tipo_documento::all();
    return view('tipo-documento',compact('tipo_documento'));
})->name('tipo-documento.main');;

Route::get('/tipo-evaluacion', function () {
    $tipo_evaluacion = tipo_evaluacion::all();
    return view('tipo-evaluacion',compact('tipo_evaluacion'));
})->name('tipo-evaluacion.main');

Route::get('/programar-encuesta', function () {
    return view('programar-encuesta');
})->name('programar-encuesta.main');

/*CULTURA*/

Route::get('reporte-generales', function () {
    return view('cultura/reporte-generales');
})->name('reporte-generales.main');

Route::get('/reporte-grandes-areas', function () {
    return view('cultura/reporte-grandes-areas');
})->name('reporte-grandes-areas.main');

Route::get('/reporte-area-encuesta', function () {
    return view('cultura/reporte-area-encuesta');
})->name('reporte-area-encuesta.main');

Route::get('/reporte-preguntas', function () {
    return view('cultura/reporte-preguntas');
})->name('reporte-preguntas.main');

Route::get('/reporte-preguntas-especificas', function () {
    return view('cultura/reporte-preguntas-especificas');
})->name('reporte-preguntas-especificas.main');

Route::get('/reporte-semaforo-area-encuesta', function () {
    return view('cultura/reporte-semaforo-area-encuesta');
})->name('reporte-semaforo-area-encuesta.main');

/*PERSONAS*/

Route::get('/reporte-generales', function () {
    return view('personas/reporte-generales');
})->name('reporte-generales.main');

Route::get('/reporte-equipos', function () {
    return view('personas/reporte-equipos');
})->name('reporte-equipos.main');

Route::get('/reporte-seccion-encuesta', function () {
    return view('personas/reporte-seccion-encuesta');
})->name('reporte-seccion-encuesta.main');

Route::get('/reporte-rangos', function () {
    return view('personas/reporte-rangos');
})->name('reporte-rangos.main');

Route::get('/reporte-top-bottom', function () {
    return view('personas/reporte-top-bottom');
})->name('reporte-top-bottom.main');

Route::get('/reporte-seccion-dinamica', function () {
    return view('personas/reporte-seccion-dinamica');
})->name('reporte-seccion-dinamica.main');

Route::get('reporte-seguimiento', function () {
    return view('personas/reporte-seguimiento');
})->name('reporte-seguimiento.main');

Route::get('reporte-desagregado', function () {
    return view('personas/reporte-desagregado');
})->name('reporte-desagregado.main');

Route::get('/reporte-desagregado-consultor', function () {
    return view('personas/reporte-desagregado-consultor');
})->name('reporte-desagregado-consultor.main');

Route::get('/reporte-tipo-personas', function () {
    return view('personas/reporte-tipo-personas');
})->name('reporte-tipo-personas.main');

Route::get('/reporte-personas-rango', function () {
    return view('personas/reporte-personas-rango');
})->name('reporte-personas-rango.main');

Route::get('/reporte-competencia-general', function () {
    return view('personas/reporte-competencia-general');
})->name('reporte-competencia-general.main');

Route::get('/reporte-cruzado-personas', function () {
    return view('personas/reporte-cruzado-personas');
})->name('reporte-cruzado-personas.main');

Route::get('/reporte-cruzado-preguntas', function () {
    return view('personas/reporte-cruzado-preguntas');
})->name('reporte-cruzado-preguntas.main');

Route::get('/reporte-benckmarking-externo', function () {
    return view('personas/reporte-benckmarking-externo');
})->name('reporte-benckmarking-externo.main');

Route::get('/reporte-cultura-liderazgo', function () {
    return view('personas/reporte-cultura-liderazgo');
})->name('reporte-cultura-liderazgo.main');



Route::get('/categorias-nuevo', function () {
    return view('categorias-nuevo');
})->name('categorias-nuevo.main');

Route::get('/encuestas-nuevo', function () {
    return view('encuestas-nuevo');
})->name('encuestas-nuevo.main');

Route::get('/empresas-nuevo', function () {
    return view('empresas-nuevo');
})->name('empresas-nuevo.main');


Route::get('/industrias-nuevo', function () {
    return view('industrias-nuevo');
})->name('industrias-nuevo.main');

Route::get('/naturaleza-nuevo', function () {
    return view('naturaleza-nuevo');
})->name('naturaleza-nuevo.main');

Route::get('/personas-nuevo', function () {
    return view('personas-nuevo');
})->name('personas-nuevo.main');

Route::get('/roles-nuevo', function () {
    return view('roles-nuevo');
})->name('roles-nuevo.main');

Route::get('/tipo-documento-nuevo', function () {
    return view('tipo-documento-nuevo');
})->name('tipo-documento-nuevo.main');

Route::get('/tipo-evaluacion-nuevo', function () {
    return view('tipo-evaluacion-nuevo');
})->name('tipo-evaluacion-nuevo.main');

Route::get('/programar-encuesta-nuevo', function () {
    return view('programar-encuesta-nuevo');
})->name('programar-encuesta-nuevo.main');

Route::get('/categorias-editar', function () {
    return view('categorias-editar')->name('categorias.edit');
});

Route::get('/naturaleza-editar', function () {
    return view('naturaleza-editar')->name('naturaleza.edit');
});

/*
Route::resource('categoria', \App\Http\Controllers\CategoriaController::class);
Route::resource('naturaleza', \App\Http\Controllers\NaturalezaController::class);*/

