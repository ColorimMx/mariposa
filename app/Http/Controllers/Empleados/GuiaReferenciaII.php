<?php

namespace App\Http\Controllers;

use App\Models\EmpleadoCatalogo;
use App\Models\GuiaItemCatalogo;
use Illuminate\Http\Request;

class GuiaReferenciaII extends Controller
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
        //
        //$empleados = Empleado::all()->sortBy('A_PATERNO');
        $empleados = EmpleadoCatalogo::where('guia_II','=',false)->where('empresa_id', '=', 'CIMSA')->where('activo', '=', true)->orderBy('a_paterno')->get();
        //$sec1 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIS1')->orderBy('NUMERO_PREGUNTA')->get();
        $custionarioII = GuiaItemCatalogo::where('guia_id', '=', '2')->orderBy('numero_pregunta')->get();

        return view('empleados.cuestionarioGII',compact('empleados','custionarioII'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
