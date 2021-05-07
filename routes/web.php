<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaCatalogoController;
use App\Http\Controllers\DepartamentoCatalogoController;
Use App\Http\Controllers\PuestoCatalogoController;
Use App\Http\Controllers\PuestoTipoCatalogoController;
use App\Http\Controllers\EstadoCivilCatalogoController;
use App\Http\Controllers\NivelEstudioCatalogoController;
use App\Http\Controllers\ContratoTipoCatalogoController;
Use App\Http\Controllers\PersonalTipoCatalogoController;
use App\Http\Controllers\JornadaTipoCatalogoController;
use App\Http\Controllers\NominaTipoCatalogoController;
use App\Http\Controllers\LocalidadCatalogoController;
use App\Http\Controllers\EmpresaCatalogoController;
use App\Http\Controllers\EstatusEstudioCatalogoController;
use App\Http\Controllers\SatPaisCatalogoController;
use App\Http\Controllers\SatEstadoCatalogoController;
use App\Http\Controllers\SatMunicipioCatalogoController;
use App\Http\Controllers\SatLocalidadCatalogoController;
use App\Http\Controllers\EmpleadoCatalogoController;
use App\Http\Controllers\MenuCatalogoController;
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

Route::get('norma35', function () {
    return view('empleados.norma35');
});

Route::get('norma35gr1', function () {
    return view('empleados.nom35gI');
});

Route::get('menu',[MenuCatalogoController::class, 'index']);

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

//TiposPersonal
Route::get('personaltipos',[PersonalTipoCatalogoController::class, 'index']);

//TiposJornadas
Route::get('jornadastipos',[JornadaTipoCatalogoController::class, 'index']);

//NominasJornadas
Route::get('nominastipos',[NominaTipoCatalogoController::class, 'index']);

//Localidades
Route::get('localidades',[LocalidadCatalogoController::class, 'index']);

//Empresas
Route::get('empresas',[EmpresaCatalogoController::class, 'index']);

//Estatus Estudios
Route::get('estatusestudios',[EstatusEstudioCatalogoController::class, 'index']);

//SAT Paises
Route::get('satpaises',[SatPaisCatalogoController::class, 'index']);

//SAT Estados
Route::get('satestados',[SatEstadoCatalogoController::class,'index']);

//SAT Municipios
Route::get('satmunicipios',[SatMunicipioCatalogoController::class,'index']);

//SAT Localidades
Route::get('satlocalidades',[SatLocalidadCatalogoController::class,'index']);

//Empleados
Route::get('empleados',[EmpleadoCatalogoController::class,'index']);
