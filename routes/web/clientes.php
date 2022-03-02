<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Clientes\ClienteCatalogoController;
use App\Http\Controllers\Clientes\TrasladoClienteController;

Route::resource('impClientes',ClienteCatalogoController::class);
Route::resource('trasladosClientes', TrasladoClienteController::class);
