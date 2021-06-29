<?php

namespace App\Http\Controllers;

use App\Models\DepartamentoCatalogo;
use Illuminate\Http\Request;

class DepartamentoCatalogoController extends Controller
{
    public function index(){

        $departamentos = DepartamentoCatalogo::all();
        return view('administracion.departamentos', compact('departamentos'));
    }
}
