<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Sat\SatRegimenFiscalCatalogoController;
use App\Http\Controllers\Sat\SatPaisCatalogoController;
use App\Http\Controllers\Sat\SatEstadoCatalogoController;
use App\Http\Controllers\Sat\SatMunicipioCatalogoController;
use App\Http\Controllers\Sat\SatLocalidadCatalogoController;
use App\Http\Controllers\Sat\SatImpuestoCatalogoController;
use App\Http\Controllers\Sat\SatTipoComprobanteCatalogoController;
use App\Http\Controllers\Sat\SatTipoRelacionCatalogoController;
use App\Http\Controllers\Sat\SatUsoCfdiCatalogoController;
use App\Http\Controllers\Sat\SatMetodoPagoCatalogoController;
use App\Http\Controllers\Sat\SatFormaPagoCatalogoController;
use App\Http\Controllers\Sat\SatUnidadCatalogoController;
use App\Http\Controllers\Sat\SatProductoServicioCatalogoController;
use App\Http\Controllers\Sat\SatComercioExteriorUnidadAduanaCatalogoController;
use App\Http\Controllers\Sat\SatComercioExteriorFraccionArancelariaCatalogoController;
use App\Http\Controllers\Sat\SatComercioExteriorIncotermCatalogoController;
use App\Http\Controllers\Sat\SatComercioExteriorTipoOperacionCatalogoController;
use App\Http\Controllers\Sat\SatComercioExteriorPedimentoCatalogoController;
use App\Http\Controllers\Sat\SatCartaPorteTipoPermisoCatalogoController;
use App\Http\Controllers\Sat\SatCartaPorteConfigVehicularCatalogoController;
use App\Http\Controllers\Sat\SatCartaPorteSubTipoRemCatalogoController;
use App\Http\Controllers\Sat\SifeiController;

use App\Http\Controllers\Clientes\DatatableController;
use App\Http\Controllers\Clientes\Mba3FacturaPrincipalController;


Route::resource('regimenFiscalSat',SatRegimenFiscalCatalogoController::class);
Route::get('datatable/regimenFiscalSat',[SatRegimenFiscalCatalogoController::class,'regimenes'])->name('datatable.SatRegimenFiscalCatalogoController');
Route::resource('paisesSat',SatPaisCatalogoController::class);
Route::get('datatable/paises',[SatPaisCatalogoController::class,'paises'])->name('datatable.SatPaisCatalogoController');
Route::resource('estadosSat',SatEstadoCatalogoController::class);
Route::get('datatable/estados',[SatEstadoCatalogoController::class,'estados'])->name('datatable.SatEstadoCatalogoController');
Route::resource('municipiosSat',SatMunicipioCatalogoController::class);
Route::get('datatable/municipios',[SatMunicipioCatalogoController::class,'municipios'])->name('datatable.SatMunicipioCatalogoController');
Route::resource('localidadesSat',SatLocalidadCatalogoController::class);
Route::resource('impuestosSat',SatImpuestoCatalogoController::class);
Route::resource('comprobantesSat',SatTipoComprobanteCatalogoController::class);
Route::resource('relacionSat',SatTipoRelacionCatalogoController::class);
Route::resource('usosCfdiSat',SatUsoCfdiCatalogoController::class);
Route::resource('metodosPagoSat',SatMetodoPagoCatalogoController::class);
Route::resource('formasPagoSat',SatFormaPagoCatalogoController::class);
Route::resource('unidadesSat',SatUnidadCatalogoController::class);
Route::resource('productosSat',SatProductoServicioCatalogoController::class);
Route::resource('unidadesAduanaSat',SatComercioExteriorUnidadAduanaCatalogoController::class);
Route::resource('fraccionesSat',SatComercioExteriorFraccionArancelariaCatalogoController::class);
Route::resource('incotermSat',SatComercioExteriorIncotermCatalogoController::class);
Route::resource('operacionesSat',SatComercioExteriorTipoOperacionCatalogoController::class);
Route::resource('pedimentosSat',SatComercioExteriorPedimentoCatalogoController::class);
Route::resource('permisosSat',SatCartaPorteTipoPermisoCatalogoController::class);
Route::resource('configVehicularSat',SatCartaPorteConfigVehicularCatalogoController::class);
Route::resource('remolqueSat',SatCartaPorteSubTipoRemCatalogoController::class);
Route::get('selladoSifei', [SifeiController::class,'sellado'])->name('selladoSifei');
Route::get('timbradoSifei', [SifeiController::class,'timbrado'])->name('timbradoSifei');

Route::get('mbafacturas',[Mba3FacturaPrincipalController::class,'index'])->name('facturas');
Route::get('datatable/mbafacturas',[Mba3FacturaPrincipalController::class,'facturas'])->name('datatable.facturasmba3');
Route::get('datatable/clientesmba3',[DatatableController::class,'cliente'])->name('datatable.clientemba3');
