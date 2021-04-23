<?php

namespace App\Http\Controllers;

use App\Models\EmpleadoCatalogo;
use Illuminate\Http\Request;

class EmpleadoCatalogoController extends Controller
{

    public function index(){
        $Empleados = EmpleadoCatalogo::all();
        return view('administracion.empleados',compact('Empleados'));
    }
}
