<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mba3ProductoSubgrupoCatalogoController extends Controller
{
    public function subgrupo(){

        $mbasubgrupos = new Mba3ProductoSubgrupoCatalogo();
        $subgrupos = $mbasubgrupos->get_subgrupos();

        //return datatables()->of($subgrupos)->toJson();

        dd($subgrupos);
        //return view ($subgrupos);
    }
}
