<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SeguroAutotransporteCatalogo;

class SeguroAutotransporteController extends Controller
{
    public function index()
    {

    }

    public function create()
    {
        return view('transportes.segurocreate');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'aseguradora' => 'bail|required',
            'poliza' => 'bail|required',
            'vigencia' => 'required|date_format:d/m/Y'
        ]);

        $SeguroAutotransporte = new SeguroAutotransporteCatalogo();

        $SeguroAutotransporte->id = $validated['poliza'];
        $SeguroAutotransporte->asegura_resp_civil = $validated['aseguradora'];
        $SeguroAutotransporte->asignado = false;
        $SeguroAutotransporte->activo = true;
        $SeguroAutotransporte->vigencia = $validated['vigencia'];

        $SeguroAutotransporte->save();

        return $request->all();
    }
}
