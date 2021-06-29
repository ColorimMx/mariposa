<?php

namespace App\Http\Controllers;

use App\Models\NivelEstudioCatalogo;
use Illuminate\Http\Request;

class NivelEstudioCatalogoController extends Controller
{
    public function index(){
        $NivelesEstudios = NivelEstudioCatalogo::all();
        return view ('administracion.nivelesestudios',compact('NivelesEstudios'));
    }
}
