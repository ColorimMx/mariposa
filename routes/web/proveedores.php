<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Proveedores\ProveedorCatalogoController;

Route::resource('impProveedores',ProveedorCatalogoController::class);
