<?php

namespace App\Http\Controllers;

use App\Models\SatLocalidadCatalogo;
use Illuminate\Http\Request;

class SatLocalidadCatalogoController extends Controller
{
    public function index(){
        $SatLocalidades = SatLocalidadCatalogo::all();
        return view('administracion.satlocalidades',compact('SatLocalidades'));
    }
}
