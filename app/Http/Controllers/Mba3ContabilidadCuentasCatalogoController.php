<?php

namespace App\Http\Controllers;

use App\Models\Mba3ContabilidadCuentasCatalogo;
use Illuminate\Http\Request;

class Mba3ContabilidadCuentasCatalogoController extends Controller
{
    public function cuenta(){

        $mbacuentas = new Mba3ContabilidadCuentasCatalogo();
        $cuentas = $mbacuentas->get_cuentas();

        //return datatables()->of($cuentas)->toJson();

        dd($cuentas);
        //return view ($cuentas);
    }
}
