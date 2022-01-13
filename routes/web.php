<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaCatalogoController;
use App\Http\Controllers\DepartamentoCatalogoController;
Use App\Http\Controllers\PuestoCatalogoController;
Use App\Http\Controllers\PuestoTipoCatalogoController;
use App\Http\Controllers\EstadoCivilCatalogoController;
use App\Http\Controllers\NivelEstudioCatalogoController;
use App\Http\Controllers\ContratoTipoCatalogoController;
Use App\Http\Controllers\PersonalTipoCatalogoController;
use App\Http\Controllers\JornadaTipoCatalogoController;
use App\Http\Controllers\NominaTipoCatalogoController;
use App\Http\Controllers\LocalidadCatalogoController;
use App\Http\Controllers\EmpresaCatalogoController;
use App\Http\Controllers\EstatusEstudioCatalogoController;
use App\Http\Controllers\SatPaisCatalogoController;
use App\Http\Controllers\SatEstadoCatalogoController;
use App\Http\Controllers\SatMunicipioCatalogoController;
use App\Http\Controllers\SatLocalidadCatalogoController;
use App\Http\Controllers\EmpleadoCatalogoController;
use App\Http\Controllers\ClienteCatalogoController;
use App\Models\Mba3ClienteZonaCatalogo;
Use App\Models\Mba3ClienteTipoCatalogo;
Use App\Models\Mba3ClienteGiroCatalogo;
Use App\Models\Mba3ClienteVendedorCatalogo;
use \App\Http\Controllers\Mba3ClienteCatalogoController;
use App\Http\Controllers\Mba3FacturaPrincipalController;
use App\Http\Controllers\Mba3FacturaDetalleController;
use \App\Http\Controllers\DatatableController;
use App\Http\Controllers\MenuCatalogoController;
use App\Http\Controllers\GuiaReferenciaI;
use App\Http\Controllers\GuiaReferenciaII;
use App\Models\Mba3ContabilidadCuentasCatalogo;
use App\Models\Mba3ProductoGrupoCatalogo;
use App\Models\Mba3ProductoCatalogo;
use \App\Http\Controllers\ProductoGrupoCatalogoController;
use App\Http\Controllers\Mba3CartaPortePrincipalController;
use App\Http\Controllers\Mba3CartaPorteDetalleController;
use App\Http\Controllers\CartaPorteController;
use App\Http\Controllers\SeguroAutotransporteController;
use App\Http\Controllers\PermisoAutotransporteController;
use App\Http\Controllers\AutotransporteController;
use App\Http\Controllers\TrasladoController;
use App\Http\Controllers\TrasladoComplementoController;
use App\Http\Controllers\TrasladoClienteController;
use App\Http\Controllers\TrasladoComplementoClienteController;
use App\Http\Controllers\XmlTrasladoController;
use App\Http\Controllers\CfdiTrasladoController;

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
    return view('inicio');
});

Route::get('credencial', function () {
    return view('pdf.credencialCIMSA');
});

Route::get('norma35', function () {
    return view('empleados.norma35');
})->name('norma35');

Route::get('norma35gr1', function () {
    return view('empleados.nom35gI');
})->name('norma35gr1');

Route::get('norma35gr2', function () {
    return view('empleados.nom35gII');
})->name('norma35gr2');

Route::get('norma35gr3', function () {
    return view('empleados.nom35gIII');
})->name('norma35gr3');

Route::get('norma35gr4', function () {
    return view('empleados.nom35gIV');
})->name('norma35gr4');

Route::get('norma35gr5', function () {
    return view('empleados.nom35gV');
})->name('norma35gr5');

Route::resource('cuestionarioGI',GuiaReferenciaI::class);
Route::resource('cuestionarioGII',GuiaReferenciaII::class);

Route::get('menu',[MenuCatalogoController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Areas
Route::get('areas',[AreaCatalogoController::class, 'index'])->name('areas');
Route::get('area/create',[AreaCatalogoController::class, 'create']);
Route::get('area/{area}',[AreaCatalogoController::class,'show']);

//Departamentos
Route::get('departamentos',[DepartamentoCatalogoController::class, 'index'])->name('departamentos');

//Puestos
Route::get('puestos',[PuestoCatalogoController::class, 'index'])->name('puestos');

//PuestosTipos
Route::get('puestostipos',[PuestoTipoCatalogoController::class, 'index'])->name('puestostipos');

//EstadosCiviles
Route::get('estadosciviles',[EstadoCivilCatalogoController::class, 'index'])->name('estadosciviles');

//NivelesEstudios
Route::get('nivelesestudios',[NivelEstudioCatalogoController::class, 'index'])->name('nivelesestudios');

//TiposContratos
Route::get('contratostipos',[ContratoTipoCatalogoController::class, 'index'])->name('contratostipos');

//TiposPersonal
Route::get('personaltipos',[PersonalTipoCatalogoController::class, 'index'])->name('personaltipos');

//TiposJornadas
Route::get('jornadastipos',[JornadaTipoCatalogoController::class, 'index'])->name('jornadastipos');

//NominasJornadas
Route::get('nominastipos',[NominaTipoCatalogoController::class, 'index'])->name('nominastipos');

//Localidades
Route::get('localidades',[LocalidadCatalogoController::class, 'index'])->name('localidades');

//Empresas
Route::get('empresas',[EmpresaCatalogoController::class, 'index'])->name('empresas');

//Estatus Estudios
Route::get('estatusestudios',[EstatusEstudioCatalogoController::class, 'index'])->name('estatusestudios');

//SAT Paises
Route::get('satpaises',[SatPaisCatalogoController::class, 'index'])->name('satpaises');

//SAT Estados
Route::get('satestados',[SatEstadoCatalogoController::class,'index'])->name('satestados');

//SAT Municipios
Route::get('satmunicipios',[SatMunicipioCatalogoController::class,'index'])->name('satmunicipios');

//SAT Localidades
Route::get('satlocalidades',[SatLocalidadCatalogoController::class,'index'])->name('satlocalidades');

//Empleados
Route::get('empleados',[EmpleadoCatalogoController::class,'index'])->name('empleados');

//Productos MBA3
Route::get('mbagrupos',[\App\Models\Mba3ProductoGrupoCatalogo::class,'get_grupos'])->name('mbagrupos');
Route::get('mbasubgrupos',[\App\Models\Mba3ProductoSubgrupoCatalogo::class,'get_subgrupos'])->name('mbasubgrupos');
Route::get('mbamarcas',[\App\Models\Mba3ProductoMarcaCatalogo::class,'get_marcas'])->name('mbamarcas');
Route::get('mbamodelos',[\App\Models\Mba3ProductoModeloCatalogo::class,'get_modelos'])->name('mbamodelos');
Route::get('mbasubmodelos',[\App\Models\Mba3ProductoSubmodeloCatalogo::class,'get_submodelos'])->name('mbasubmodelos');
Route::get('mbaproductos',[\App\Models\Mba3ProductoCatalogo::class,'get_productos'])->name('mbaproductos');

//Clientes MBA3
Route::get('mbazonas',[Mba3ClienteZonaCatalogo::class,'get_zonas'])->name('mbazonas');
Route::get('mbaclientetipos',[Mba3ClienteTipoCatalogo::class,'get_cliente_tipo'])->name('mbaclientetipos');
Route::get('mbagiros',[Mba3ClienteGiroCatalogo::class,'get_giro'])->name('mbagiros');
Route::get('mbavendedores',[Mba3ClienteVendedorCatalogo::class,'get_vendedor'])->name('mbavendedores');
Route::get('mbaclientes',[Mba3ClienteCatalogoController::class,'get_cliente'])->name('mbaclientes');

//Clientes MBA 3 DataTable

Route::get('datatable/clientesmba3',[DatatableController::class,'cliente'])->name('datatable.clientemba3');

//Facturas MBA3
Route::get('mbafacturas',[Mba3FacturaPrincipalController::class,'index'])->name('facturas');
Route::get('datatable/mbafacturas',[Mba3FacturaPrincipalController::class,'facturas'])->name('datatable.facturasmba3');

//Cuentas MBA3
Route::get('mbacuentas',[\App\Models\Mba3ContabilidadCuentasCatalogo::class,'get_cuentas'])->name('mbacuentas');

//Carta Porte MBA3

Route::get('mbacartaporte', [Mba3CartaPortePrincipalController::class,'index'])->name('mbacartaporte');
Route::get('mbacartaportedetalle',[Mba3CartaPorteDetalleController::class,'index'])->name('mbacartaportedetalle');

Route::get('cartaporte', [CartaPorteController::class,'index'])->name('cartas');

Route::resource('seguroautotransporte',SeguroAutotransporteController::class);
Route::resource('permisoautotransporte', PermisoAutotransporteController::class);
Route::resource('autotransporte',AutotransporteController::class);

Route::resource('trasladotransfer',TrasladoController::class);
Route::resource('trasladotrasnfercomp', TrasladoComplementoClienteController::class);
Route::resource('trasladocliente', TrasladoClienteController::class);
Route::resource('trasladoclientecomp', TrasladoComplementoClienteController::class);
Route::resource('xmltraslado',XmlTrasladoController::class);
