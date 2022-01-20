<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Contabilidad\ContabilidadPlanCuentaController;

Route::resource('impCuentas',ContabilidadPlanCuentaController::class);
