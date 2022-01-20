<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Inventario\ProductoGrupoCatalogoController;
use App\Http\Controllers\Inventario\ProductoSubgrupoCatalogoController;
use App\Http\Controllers\Inventario\ProductoMarcaCatalogoController;
use App\Http\Controllers\Inventario\ProductoModeloCatalogoController;
use App\Http\Controllers\Inventario\ProductoSubmodeloCatalogoController;
use App\Http\Controllers\Inventario\ProductoCatalogoController;

route::resource('impGrupos',ProductoGrupoCatalogoController::class,array('except'  => 'show'));
route::resource('impSubgrupos',ProductoSubgrupoCatalogoController::class);
route::resource('impMarcas',ProductoMarcaCatalogoController::class);
route::resource('impModelos',ProductoModeloCatalogoController::class);
route::resource('impSubmodelos',ProductoSubmodeloCatalogoController::class);
route::resource('impProductos',ProductoCatalogoController::class);
