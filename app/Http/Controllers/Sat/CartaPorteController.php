<?php

namespace App\Http\Controllers;

use App\Models\CartaPortePrincipal;
use App\Models\CartaPorteDetalle;
use Illuminate\Http\Request;

class CartaPorteController extends Controller
{
    public function index(){
        $cartas = CartaPortePrincipal::all();

        //dd($cartaporte);

        return view('sat.cartaporte', compact('cartas'));
    }
}
