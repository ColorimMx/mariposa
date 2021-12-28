<?php

namespace App\Http\Controllers;

use App\Models\SeguroAutotransporteCatalogo;
use Illuminate\Http\Request;

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
        $SeguroAutotransporte->vigencia = $validated['vigencia'];

        $SeguroAutotransporte->save();

        return $request->all();
    }
}
