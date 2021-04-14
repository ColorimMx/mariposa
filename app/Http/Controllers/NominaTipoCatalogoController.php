<?php

namespace App\Http\Controllers;

use App\Models\NominaTipoCatalogo;
use Illuminate\Http\Request;

class NominaTipoCatalogoController extends Controller
{
    public function index(){

        $NominasTipos = NominaTipoCatalogo::all();
        Return view('administracion.nominastipos',compact('NominasTipos'));
    }
}
