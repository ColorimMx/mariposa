<?php

namespace App\Http\Controllers;

use App\Models\PuestoCatalogo;
use Illuminate\Http\Request;

class PuestoCatalogoController extends Controller
{
    public function index(){

        $puestos = PuestoCatalogo::all();
        return view('administracion.puestos', compact('puestos'));
    }
}
