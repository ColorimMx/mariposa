<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mba3ProductoSubmodeloCatalogoController extends Controller
{
    public function subgrupo(){

        $mbasubmodelos = new Mba3ProductoSubmodeloCatalogo();
        $submodelos = $mbasubmodelos->get_submodelo();

        //return datatables()->of($submodelos)->toJson();

        dd($submodelos);
        //return view ($submodelos);
    }
}
