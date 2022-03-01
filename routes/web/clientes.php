<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Clientes\ClienteCatalogoController;

Route::resource('impClientes',ClienteCatalogoController::class);
