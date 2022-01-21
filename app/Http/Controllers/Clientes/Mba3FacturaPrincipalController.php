<?php

namespace App\Http\Controllers\Clientes;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mba3FacturaPrincipal;

class Mba3FacturaPrincipalController extends Controller
{
    public function facturas(){

        $mbafacturas = new Mba3FacturaPrincipal();
        $facturas = $mbafacturas->get_facturas();


        return datatables()->of($facturas)->toJson();

        //dd($clientes);
        //return view ($clientes);
    }
    public function index(){

        return view('MbaClientes.facturas');
    }
}
