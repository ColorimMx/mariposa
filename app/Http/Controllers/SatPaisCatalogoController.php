<?php

namespace App\Http\Controllers;

use App\Models\SatPaisCatalogo;
use Illuminate\Http\Request;

class SatPaisCatalogoController extends Controller
{
    public function index(){

        $Satpaises = SatPaisCatalogo::all();
        return view('administracion.satpaises',compact('Satpaises'));

    }
}
