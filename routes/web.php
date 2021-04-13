<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaCatalogoController;
use App\Http\Controllers\DepartamentoCatalogoController;
Use App\Http\Controllers\PuestoCatalogoController;
Use App\Http\Controllers\PuestoTipoCatalogoController;
use App\Http\Controllers\EstadoCivilCatalogoController;
use App\Http\Controllers\NivelEstudioCatalogoController;
use App\Http\Controllers\ContratoTipoCatalogoController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Areas
Route::get('areas',[\App\Http\Controllers\AreaCatalogoController::class, 'index']);
Route::get('area/create',[AreaCatalogoController::class, 'create']);
Route::get('area/{area}',[AreaCatalogoController::class,'show']);

//Departamentos
Route::get('departamentos',[DepartamentoCatalogoController::class, 'index']);

//Puestos
Route::get('puestos',[PuestoCatalogoController::class, 'index']);

//PuestosTipos
Route::get('puestostipos',[PuestoTipoCatalogoController::class, 'index']);

//EstadosCiviles
Route::get('estadosciviles',[EstadoCivilCatalogoController::class, 'index']);

//NivelesEstudios
Route::get('nivelesestudios',[NivelEstudioCatalogoController::class, 'index']);

//TiposContratos
Route::get('contratostipos',[ContratoTipoCatalogoController::class, 'index']);
