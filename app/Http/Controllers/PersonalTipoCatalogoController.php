<?php

namespace App\Http\Controllers;

use App\Models\PersonalTipoCatalogo;
use Illuminate\Http\Request;

class PersonalTipoCatalogoController extends Controller
{
    public function index (){

        $PersonalTipos = PersonalTipoCatalogo::all();
        return view('administracion.personaltipos',compact('PersonalTipos'));
    }
}
