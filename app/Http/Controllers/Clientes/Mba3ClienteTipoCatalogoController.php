<?php

namespace App\Http\Controllers;

use App\Models\Mba3ClienteTipoCatalogo;
use Illuminate\Http\Request;

class Mba3ClienteTipoCatalogoController extends Controller
{
    public function clientetipo(){

        $mbaclientetipos = new Mba3ClienteTipoCatalogo();
        $clientetipos = $mbaclientetipos->get_marcas();

        //return datatables()->of($clientetipos)->toJson();

        dd($clientetipos);
        //return view ($clientetipos);
    }
}
