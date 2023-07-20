<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Administracion\MenuCatalogoController;
use App\Http\Controllers\Administracion\SubMenuCatalogoController;
use App\Http\Controllers\Administracion\SubItemMenuCatalogoController;
use App\Http\Controllers\Administracion\EmpresaCatalogoController;
use App\Http\Controllers\Administracion\EmpresaSucursalCatalogoController;
use App\Http\Controllers\Administracion\EmpresaAlmacenCatalogoController;
use App\Http\Controllers\Administracion\MonedaCatalogoController;
use App\Http\Controllers\Administracion\DemografiaPaisCatalogoController;
use App\Http\Controllers\Administracion\DemografiaEstadoCatalogoController;
use App\Http\Controllers\Administracion\DemografiaCiudadCatalogoController;

//Route::resource('menuPrincipal',menuPrincipal::class);
Route::resource('subMenu',SubMenuCatalogoController::class);
Route::resource('itemSubmenu',SubItemMenuCatalogoController::class);

Route::resource('menus',MenuCatalogoController::class);
Route::get('datatable/menus',[MenuCatalogoController::class,'menus'])->name('datatable.MenuCatalogoController');



