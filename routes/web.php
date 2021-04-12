<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Areas
Route::get('areas',[\App\Http\Controllers\AreaCatalogoController::class, 'index']);
Route::get('area/create',[AreaCatalogoController::class, 'create']);
Route::get('area/{area}',[AreaCatalogoController::class,'show']);

//Departamentos
Route::get('departamentos',[\App\Http\Controllers\DepartamentoCatalogoController::class, 'index']);
