<?php

namespace App\Http\Controllers;

use App\Models\EstatusEstudioCatalogo;
use Illuminate\Http\Request;

class EstatusEstudioCatalogoController extends Controller
{
    public function index(){

        $EstatusEstudios = EstatusEstudioCatalogo::all();

        return view('administracion.estatusestudio',compact('EstatusEstudios'));

    }
}
