<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Empleados\AreaCatalogoController;
use App\Http\Controllers\Empleados\DepartamentoCatalogoController;
use App\Http\Controllers\Empleados\PuestoTipoCatalogoController;
use App\Http\Controllers\Empleados\PuestoCatalogoController;
use App\Http\Controllers\Empleados\EstadoCivilCatalogoController;
use App\Http\Controllers\Empleados\NivelEstudioCatalogoController;
use App\Http\Controllers\Empleados\ContratoTipoCatalogoController;
use App\Http\Controllers\Empleados\PersonalTipoCatalogoController;
use App\Http\Controllers\Empleados\JornadaTipoCatalogoController;
use App\Http\Controllers\Empleados\NominaTipoCatalogoController;
use App\Http\Controllers\Empleados\LocalidadCatalogoController;
use App\Http\Controllers\Empleados\EstatusEstudioCatalogoController;
use App\Http\Controllers\Empleados\EmpleadoCatalogoController;

Route::resource('areas',AreaCatalogoController::class);
Route::get('datatable/areas',[AreaCatalogoController::class,'areas'])->name('datatable.AreaCatalogoController');
Route::resource('departamentos',DepartamentoCatalogoController::class);
Route::get('datatable/departamentos',[DepartamentoCatalogoController::class,'departamentos'])->name('datatable.DepartamentoCatalogoController');
Route::resource('puestosTipo',PuestoTipoCatalogoController::class);
Route::resource('puestos',PuestoCatalogoController::class);
Route::get('datatable/puestos',[PuestoCatalogoController::class,'puestos'])->name('datatable.PuestoCatalogoController');
Route::resource('estadoCivil',EstadoCivilCatalogoController::class);
Route::resource('nivelEstudios',NivelEstudioCatalogoController::class);
Route::resource('contratosTipo',ContratoTipoCatalogoController::class);
Route::resource('personalTipo',PersonalTipoCatalogoController::class);
Route::resource('jornadasTipo',JornadaTipoCatalogoController::class);
Route::resource('nominasTipos',NominaTipoCatalogoController::class);
Route::resource('localidades',LocalidadCatalogoController::class);
Route::resource('estatusEstudios',EstatusEstudioCatalogoController::class);
Route::resource('empleados',EmpleadoCatalogoController::class);
