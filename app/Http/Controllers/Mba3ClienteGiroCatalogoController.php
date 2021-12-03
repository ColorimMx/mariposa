<?php

namespace App\Http\Controllers;

use App\Models\Mba3ClienteGiroCatalogo;
use Illuminate\Http\Request;

class Mba3ClienteGiroCatalogoController extends Controller
{
    public function giro(){

        $mbagiros = new Mba3ClienteGiroCatalogo();
        $giros = $mbagiros->get_marcas();

        //return datatables()->of($giros)->toJson();

        dd($giros);
        //return view ($giros);
    }
}
