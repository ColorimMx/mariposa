<?php

namespace App\Http\Controllers;


use App\Models\EmpresaCatalogo;
use Illuminate\Http\Request;

class EmpresaCatalogoController extends Controller
{
    public function index(){

        $Empresas = EmpresaCatalogo::all();

        return view ('administracion.empresas',compact('Empresas'));

}
}
