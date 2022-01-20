<?php

namespace App\Http\Controllers;

use App\Models\Mba3ProductoMarcaCatalogo;
use App\Models\Mba3ProductoCatalogo;use Illuminate\Http\Request;

class Mba3ProductoCatalogoController extends Controller
{
    public function producto(){

        $mbaproductos = new Mba3ProductoCatalogo();
        $productos = $mbaproductos->get_productos();

        //return datatables()->of($productos)->toJson();

        dd($productos);
        //return view ($productos);
    }
}
