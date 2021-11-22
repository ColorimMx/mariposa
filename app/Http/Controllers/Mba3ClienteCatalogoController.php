<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mba3ClienteCatalogo;

class Mba3ClienteCatalogoController extends Controller
{
    public function index(){

        //$mbaclientes = new Mba3ClienteCatalogo();
        //$clientes = $mbaclientes->get_clientes();

        return view('MbaClientes.ver');

        //dd($clientes);
        //return view ($clientes);
    }
}
