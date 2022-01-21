<?php

namespace App\Http\Controllers;

use App\Models\Mba3ClienteCatalogo;
use Illuminate\Http\Request;

class DatatableController extends Controller
{
    public function cliente(){

        $mbaclientes = new Mba3ClienteCatalogo();
        $clientes = $mbaclientes->get_clientes();

        //return datatables()->of($clientes)->toJson();

        //dd($clientes);
        return view ($clientes);
    }
}
