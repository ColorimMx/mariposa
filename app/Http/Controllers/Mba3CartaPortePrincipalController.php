<?php

namespace App\Http\Controllers;

use App\Models\Mba3CartaPortePrincipal;
use Illuminate\Http\Request;

class Mba3CartaPortePrincipalController extends Controller
{
    public function index(){
        $mbacartaporte = new Mba3CartaPortePrincipal();
        $cartaporte = $mbacartaporte->get_cartaporte();

        dd($cartaporte);
    }
}
