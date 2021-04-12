<?php

namespace App\Http\Controllers;

use App\Models\PuestoTipoCatalogo;
use Illuminate\Http\Request;

class PuestoTipoCatalogoController extends Controller
{
    public function index(){

        $puestostipos = PuestoTipoCatalogo::all();
        return view('administracion.puestostipos', compact('puestostipos'));
    }
}
