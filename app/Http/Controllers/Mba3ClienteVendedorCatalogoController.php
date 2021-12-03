<?php

namespace App\Http\Controllers;

Use App\Models\Mba3ClienteVendedorCatalogo;
use Illuminate\Http\Request;

class Mba3ClienteVendedorCatalogoController extends Controller
{
    public function vendedor(){

        $mbavendedores = new Mba3ClienteVendedorCatalogo();
        $vendedores = $mbavendedores->get_marcas();

        //return datatables()->of($vendedores)->toJson();

        dd($vendedores);
        //return view ($vendedores);
    }
}
