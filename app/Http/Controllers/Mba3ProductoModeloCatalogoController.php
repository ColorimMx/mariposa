<?php

namespace App\Http\Controllers;

use App\Models\Mba3ProductoModeloCatalogo;
use Illuminate\Http\Request;

class Mba3ProductoModeloCatalogoController extends Controller
{
    public function modelo(){

        $mbamodelos = new Mba3ProductoModeloCatalogo();
        $modelos = $mbamodelos->get_modelos();

        //return datatables()->of($modelos)->toJson();

        dd($modelos);
        //return view ($modelos);
    }
}
