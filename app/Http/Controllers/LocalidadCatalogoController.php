<?php

namespace App\Http\Controllers;

use App\Models\LocalidadCatalogo;
use Illuminate\Http\Request;

class LocalidadCatalogoController extends Controller
{
    public function index(){
        $Localidades = LocalidadCatalogo::all();
        Return view('administracion.localidades',compact('Localidades'));
    }
}
