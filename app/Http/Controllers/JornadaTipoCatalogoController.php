<?php

namespace App\Http\Controllers;

use App\Models\JornadaTipoCatalogo;
use Illuminate\Http\Request;

class JornadaTipoCatalogoController extends Controller
{
    public function index(){

        $JornadasTipos = JornadaTipoCatalogo::all();
        Return view ('administracion.jornadastipos',compact('JornadasTipos'));
    }
}
