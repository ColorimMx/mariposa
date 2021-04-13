<?php

namespace App\Http\Controllers;

use App\Models\ContratoTipoCatalogo;
use Illuminate\Http\Request;

class ContratoTipoCatalogoController extends Controller
{
    public function index(){

        $ContratosTipos = ContratoTipoCatalogo::all();
        return view('administracion.contratostipos',compact('ContratosTipos'));

    }
}
