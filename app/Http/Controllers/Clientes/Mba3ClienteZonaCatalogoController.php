<?php

namespace App\Http\Controllers;

use App\Models\Mba3ClienteZonaCatalogo;
use Illuminate\Http\Request;

class Mba3ClienteZonaCatalogoController extends Controller
{
    public function zona(){

        $mbazonas = new Mba3ClienteZonaCatalogo();
        $zonas = $mbazonas->get_marcas();

        //return datatables()->of($zonas)->toJson();

        dd($zonas);
        //return view ($zonas);
    }
}
