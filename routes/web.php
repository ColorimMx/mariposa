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
use App\Http\Controllers\GuiaReferenciaI;
use App\Http\Controllers\GuiaReferenciaII;
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

Route::get('credencial', function () {
    return view('pdf.credencialCIMSA');
});

Route::get('norma35', function () {
    return view('empleados.norma35');
})->name('norma35');

Route::get('norma35gr1', function () {
    return view('empleados.nom35gI');
})->name('norma35gr1');

Route::get('norma35gr2', function () {
    return view('empleados.nom35gII');
})->name('norma35gr2');

Route::get('norma35gr3', function () {
    return view('empleados.nom35gIII');
})->name('norma35gr3');

Route::get('norma35gr4', function () {
    return view('empleados.nom35gIV');
})->name('norma35gr4');

Route::get('norma35gr5', function () {
    return view('empleados.nom35gV');
})->name('norma35gr5');

Route::resource('cuestionarioGI',GuiaReferenciaI::class);
Route::resource('cuestionarioGII',GuiaReferenciaII::class);

Route::get('menu',[MenuCatalogoController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Areas
Route::get('areas',[AreaCatalogoController::class, 'index'])->name('areas');
Route::get('area/create',[AreaCatalogoController::class, 'create']);
Route::get('area/{area}',[AreaCatalogoController::class,'show']);

//Departamentos
Route::get('departamentos',[DepartamentoCatalogoController::class, 'index'])->name('departamentos');

//Puestos
Route::get('puestos',[PuestoCatalogoController::class, 'index'])->name('puestos');

//PuestosTipos
Route::get('puestostipos',[PuestoTipoCatalogoController::class, 'index'])->name('puestostipos');

//EstadosCiviles
Route::get('estadosciviles',[EstadoCivilCatalogoController::class, 'index'])->name('estadosciviles');

//NivelesEstudios
Route::get('nivelesestudios',[NivelEstudioCatalogoController::class, 'index'])->name('nivelesestudios');

//TiposContratos
Route::get('contratostipos',[ContratoTipoCatalogoController::class, 'index'])->name('contratostipos');

//TiposPersonal
Route::get('personaltipos',[PersonalTipoCatalogoController::class, 'index'])->name('personaltipos');

//TiposJornadas
Route::get('jornadastipos',[JornadaTipoCatalogoController::class, 'index'])->name('jornadastipos');

//NominasJornadas
Route::get('nominastipos',[NominaTipoCatalogoController::class, 'index'])->name('nominastipos');

//Localidades
Route::get('localidades',[LocalidadCatalogoController::class, 'index'])->name('localidades');

//Empresas
Route::get('empresas',[EmpresaCatalogoController::class, 'index'])->name('empresas');

//Estatus Estudios
Route::get('estatusestudios',[EstatusEstudioCatalogoController::class, 'index'])->name('estatusestudios');

//SAT Paises
Route::get('satpaises',[SatPaisCatalogoController::class, 'index'])->name('satpaises');

//SAT Estados
Route::get('satestados',[SatEstadoCatalogoController::class,'index'])->name('satestados');

//SAT Municipios
Route::get('satmunicipios',[SatMunicipioCatalogoController::class,'index'])->name('satmunicipios');

//SAT Localidades
Route::get('satlocalidades',[SatLocalidadCatalogoController::class,'index'])->name('satlocalidades');

//Empleados
Route::get('empleados',[EmpleadoCatalogoController::class,'index'])->name('empleados');
