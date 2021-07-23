<?php

use App\Http\Controllers\IndustriaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('user', UserController::class);


//Rutas de industria

Route::get('industrias', [IndustriaController::class,'index'])->name('industria.index');

Route::post('industrias/store', [IndustriaController::class,'store'])->name('industria.store');

Route::get('industrias/{id}', [IndustriaController::class,'show'])->name('industria.show');

Route::put('industrias/update', [IndustriaController::class,'update'])->name('industria.update');

Route::delete('industrias/delete/{id}', [IndustriaController::class,'destroy'])->name('industria.destroy');


Route::get('industria-paginate/{request}', [IndustriaController::class,'paginate'])->name('industria.paginate');