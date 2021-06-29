<?php

namespace App\Http\Controllers;

use App\Models\SatMunicipioCatalogo;
use Illuminate\Http\Request;

class SatMunicipioCatalogoController extends Controller
{
    public function index(){
        $SatMunicipios = SatMunicipioCatalogo::all();
        return view('administracion.satmunicipios',compact('SatMunicipios'));
    }
}
