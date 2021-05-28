<?php

namespace App\Http\Controllers;

use App\Mail\GuiaIReceived;
use Illuminate\Http\Request;
use App\Models\EmpleadoCatalogo;
Use App\Models\GuiaItemCatalogo;
use Illuminate\Support\Facades\Mail;

class GuiaReferenciaI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$empleados = Empleado::all()->sortBy('A_PATERNO');
        $empleados = EmpleadoCatalogo::all()->sortBy('a_paterno');
        //$sec1 = Preguntas_Guia::where('ID_SECCION_GUIA','=','GRIS1')->orderBy('NUMERO_PREGUNTA')->get();
        $custionarioI = GuiaItemCatalogo::where('id_guia', '=', '1')->orderBy('numero_pregunta')->get();

        return view('empleados.CuestionarioGI',compact('empleados','custionarioI'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*
        request()->validate([
            'empleado' => 'required'
        ]);

        Mail :: to('pablo.amador@colorim.com.mx')->send(new GuiaIReceived());
        return 'Procesar el formulario';

*/
        $msg = request([
            'empleado',
            '1',
            '2',
            '3',
            '4',
            '5',
            '6',
            '7',
            '8',
            '9',
            '10',
            '11',
            '12',
            '13',
            '14',
            '15',
            '16',
            '17',
            '18',
            '19',
            '20',
        ]);

        //Mail :: to('pablo.amador@colorim.com.mx')->send(new GuiaIReceived($msg));

        return new GuiaIReceived($msg);
        //return $msg;
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
