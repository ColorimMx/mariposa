<?php

namespace App\Http\Controllers\Empleados;

use App\Models\EmpleadoCatalogo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmpleadoCatalogoController extends Controller
{

    public function index(){
        $Empleados = EmpleadoCatalogo::all();
        return view('administracion.empleados',compact('Empleados'));
    }
}
