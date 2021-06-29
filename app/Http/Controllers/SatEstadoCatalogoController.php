<?php

namespace App\Http\Controllers;

use App\Models\SatEstadoCatalogo;
use Illuminate\Http\Request;

class SatEstadoCatalogoController extends Controller
{
    public function index(){
        $SatEstados = SatEstadoCatalogo::all();
        return view('administracion.satestados',compact('SatEstados'));
    }
}
