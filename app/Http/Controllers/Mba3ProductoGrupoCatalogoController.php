<?php

namespace App\Http\Controllers;

use App\Models\Mba3ProductoGrupoCatalogo;
use Illuminate\Http\Request;

class Mba3ProductoGrupoCatalogoController extends Controller
{
    public function grupo(){

        $mbagrupos = new Mba3ProductoGrupoCatalogo();
        $grupos = $mbagrupos->get_grupos();

        //return datatables()->of($grupos)->toJson();

        dd($grupos);
        //return view ($grupos);
    }
}
