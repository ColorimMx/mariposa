<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mba3CartaPorteDetalle;

class Mba3CartaPorteDetalleController extends Controller
{
    public function index(){
        $mbacartaportedetalles = new Mba3CartaPorteDetalle();
        $cartaportedetalles = $mbacartaportedetalles->get_cartaportedetalle();

        dd($cartaportedetalles);
    }
}
