<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Bancos\BancoCatalogoController;

Route::resource('impBancos',BancoCatalogoController::class);
