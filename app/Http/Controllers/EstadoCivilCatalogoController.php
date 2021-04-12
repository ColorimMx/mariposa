<?php

namespace App\Http\Controllers;

use App\Models\EstadoCivilCatalogo;
use Illuminate\Http\Request;

class EstadoCivilCatalogoController extends Controller
{
    public function index(){

        $EstadosCiviles = EstadoCivilCatalogo::all();
        return view('administracion.estadosciviles', compact('EstadosCiviles'));
    }
}
