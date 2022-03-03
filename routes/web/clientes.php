<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Clientes\ClienteCatalogoController;
use App\Http\Controllers\Clientes\TrasladoClienteController;
use App\Http\Controllers\Clientes\ClienteFacturaController;
Use App\Http\Controllers\Clientes\ClienteFacturaDetalleController;

Route::resource('impClientes',ClienteCatalogoController::class);
Route::get('datatable/mbaclientes',[ClienteCatalogoController::class, 'mbaclientes'])->name('datatable.ClienteCatalogoController');
Route::resource('trasladosClientes', TrasladoClienteController::class);
Route::get('datatable/mbafacturas',[ClienteFacturaController::class,'mbafacturas'])->name('datatable.ClienteFacturaController');
Route::get('datatable/mbafacturadetalles',[ClienteFacturaDetalleController::class,'mbafacturadetalles'])->name('datatable.ClienteFacturaDetalleController');

