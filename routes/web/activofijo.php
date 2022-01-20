<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ActivoFijo\ActivoFijoCatalogoController;

Route::resource('impActivoFijo', ActivoFijoCatalogoController::class);
