<?php

namespace App\Http\Controllers;

use App\Models\Mba3ProductoMarcaCatalogo;
use Illuminate\Http\Request;

class Mba3ProductoMarcaCatalogoController extends Controller
{
    public function marca(){

        $mbamarcas = new Mba3ProductoMarcaCatalogo();
        $marcas = $mbamarcas->get_marcas();

        //return datatables()->of($marcas)->toJson();

        dd($marcas);
        //return view ($marcas);
    }
}
