<?php

namespace App\Http\Controllers;

use App\Models\SatCartaPorteTipoPermisoCatalogo;
use Illuminate\Http\Request;
use App\Models\PermisoAutotransporteCatalogo;

class PermisoAutotransporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permisos = SatCartaPorteTipoPermisoCatalogo::all();
        return view('transportes.premisocreate',compact('permisos'));
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
            'permiso' => 'bail|required',
            'folio' => 'bail|required',
            'vigencia' => 'required|date_format:d/m/Y'
        ]);

        $PermisoAutotransporte = new PermisoAutotransporteCatalogo();

        $PermisoAutotransporte->id = $validated['folio'];
        $PermisoAutotransporte->sat_carta_porte_tipo_permiso_catalogos_id = $validated['permiso'];
        $PermisoAutotransporte->vigencia = $validated['vigencia'];

        $PermisoAutotransporte->save();

        return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
