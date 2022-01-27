<?php

namespace App\Http\Controllers\Clientes;

use App\Http\Controllers\Controller;
use App\Models\Mba3ClienteCatalogo;
use function view;

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
