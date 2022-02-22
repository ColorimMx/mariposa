<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Inventario\ProductoGrupoCatalogoController;
use App\Http\Controllers\Inventario\ProductoSubgrupoCatalogoController;
use App\Http\Controllers\Inventario\ProductoMarcaCatalogoController;
use App\Http\Controllers\Inventario\ProductoModeloCatalogoController;
use App\Http\Controllers\Inventario\ProductoSubmodeloCatalogoController;
use App\Http\Controllers\Inventario\ProductoCatalogoController;
use App\Http\Controllers\Inventario\PermisoAutotransporteController;
use App\Http\Controllers\Inventario\SeguroAutotransporteController;
use App\Http\Controllers\Inventario\AutotransporteController;
use App\Http\Controllers\Inventario\TrasladoController;

Route::resource('impGrupos',ProductoGrupoCatalogoController::class,array('except'  => 'show'));
Route::resource('impSubgrupos',ProductoSubgrupoCatalogoController::class);
Route::resource('impMarcas',ProductoMarcaCatalogoController::class);
Route::resource('impModelos',ProductoModeloCatalogoController::class);
Route::resource('impSubmodelos',ProductoSubmodeloCatalogoController::class);
Route::resource('impProductos',ProductoCatalogoController::class);

Route::resource('permisoAutotrasnporte',PermisoAutotransporteController::class);

Route::resource('seguroAutotrasnporte',SeguroAutotransporteController::class);
Route::resource('autotrasnporte',AutotransporteController::class);
Route::get('datatable/autotransporte',[AutotransporteController::class, 'autotransportes'])->name('datatable.AutotransporteController');
Route::resource('traslados', TrasladoController::class);
