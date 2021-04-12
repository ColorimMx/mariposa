<?php

namespace App\Http\Controllers;

use App\Models\AreaCatalogo;
use Illuminate\Http\Request;

class AreaCatalogoController extends Controller
{
    public function index(){

        $areas = AreaCatalogo::all();
        return view('administracion.areas', compact('areas'));
    }
}
