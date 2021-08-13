<?php

use App\Http\Controllers\IndustriaController;
use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\TipoEvaluacionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\Datatable;
use App\Http\Controllers\NaturalezaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('user', UserController::class);



Route::apiresource('usuario', UsuarioController::class);
Route::post('authenticate', [UsuarioController::class, 'authenticate'])->name('authenticate.auth');


//Rutas de industria

Route::get('industrias', [IndustriaController::class,'index'])->name('industria.index');
Route::post('industrias/store', [IndustriaController::class,'store'])->name('industria.store');
Route::get('industrias/{id}', [IndustriaController::class,'show'])->name('industria.show');
Route::put('industrias/update/{id}', [IndustriaController::class,'update'])->name('industria.update');
Route::delete('industrias/delete/{id}', [IndustriaController::class,'destroy'])->name('industria.destroy');
Route::get('industrias/{id}/edit', [IndustriaController::class,'edit'])->name('industria.edit');
Route::delete('industria_borrar', [IndustriaController::class,'destroyMultiple'])->name('industria.destroyMultiple');



Route::get('industria-paginate/{request}', [IndustriaController::class,'paginate'])->name('industria.paginate');

Route::post('industrias/search', [IndustriaController::class,'search'])->name('industria.search');

//Rutas tipo_documento
Route::resource('tipo_documento', TipoDocumentoController::class);
Route::delete('tipo_documento_borrar', [TipoDocumentoController::class,'destroyMultiple'])->name('tipo_documento.destroyMultiple');

//Rutas tipo_evaluacion
Route::resource('tipo_evaluacion', TipoEvaluacionController::class);
Route::delete('tipo_evaluacion_borrar', [TipoEvaluacionController::class,'destroyMultiple'])->name('tipo_evaluacion.destroyMultiple');

// Rutas Categoria
Route::resource('categoria', CategoriaController::class);
Route::delete('categoria_borrar', [CategoriaController::class,'destroyMultiple'])->name('categoria.destroyMultiple');

// Rutas Naturaleza
Route::resource('naturaleza', NaturalezaController::class);
Route::delete('naturaleza_borrar', [NaturalezaController::class,'destroyMultiple'])->name('naturaleza.destroyMultiple');

//Datatable

Route::get('tipo_documento_dt', [Datatable::class,'tipo_documento']);
Route::get('tipo_evaluacion_dt', [Datatable::class,'tipo_evaluacion']);
Route::get('naturalezas_dt', [Datatable::class,'naturaleza']);
Route::get('categorias_dt', [Datatable::class,'categoria']);
Route::get('industrias_dt', [Datatable::class,'industria']);

Route::get('industrias_dt2', [Datatable::class,'industria2']);

