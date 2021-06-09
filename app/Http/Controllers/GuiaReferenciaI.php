<?php

namespace App\Http\Controllers;

use App\Mail\GuiaIReceived;
use App\Models\EmpresaCatalogo;
use App\Models\GuiaRegistro;
//use Barryvdh\DomPDF\PDF;
//use Barryvdh\DomPDF\Facade as PDF;
use PDF;
use Illuminate\Http\Request;
use App\Models\EmpleadoCatalogo;
Use App\Models\GuiaItemCatalogo;
use Illuminate\Support\Facades\Mail;
use function PHPUnit\Framework\isFalse;

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
        $empleados = EmpleadoCatalogo::where('guia_I','=',false)->orderBy('a_paterno')->get();
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
        $msg = request()->validate([
        'empleado' => 'required',
        'pregunta1' => 'required|boolean',
        'pregunta2' => 'required|boolean',
        'pregunta3' => 'required|boolean',
        'pregunta4' => 'required|boolean',
        'pregunta5' => 'required|boolean',
        'pregunta6' => 'required|boolean',
        'pregunta7' => 'required|boolean',
        'pregunta8' => 'required|boolean',
        'pregunta9' => 'required|boolean',
        'pregunta10' => 'required|boolean',
        'pregunta11' => 'required|boolean',
        'pregunta12' => 'required|boolean',
        'pregunta13' => 'required|boolean',
        'pregunta14' => 'required|boolean',
        'pregunta15' => 'required|boolean',
        'pregunta16' => 'required|boolean',
        'pregunta17' => 'required|boolean',
        'pregunta18' => 'required|boolean',
        'pregunta19' => 'required|boolean',
        'pregunta20' => 'required|boolean',
        'email' => 'required|email',

    ]);

        $id = $request->empleado;
        $empleado = (EmpleadoCatalogo::find($id));

        $msg['nombres'] = $empleado->nombres;
        $msg['a_paterno'] = $empleado->a_paterno;
        $msg['a_materno'] = $empleado->a_materno;
        $msg['id_empresa'] = $empleado->id_empresa;
        $msg['nom_empresa'] = $empleado->empresa->nombre;
        $msg['rfc'] = $empleado->empresa->RFC;
        $msg['subject'] = 'Guia de referencia I - ' . $msg['a_paterno'] .' '. $msg['a_materno'] .' '. $msg['nombres'];

        for ($x = 1; $x <= 20 ; $x++) {
            $guiaRIP = new GuiaRegistro();
            $guiaRIP->id_guia_item =$x;
            $guiaRIP->id_empleado = $msg['empleado'];
            $guiaRIP->respuesta = $msg['pregunta'.$x];
            $guiaRIP->save();
        }

/*
       $confirm = (EmpleadoCatalogo::find($id))->guia_I;
        $confirm->update([
            'guia_I' => true
        ]);
*/

        $confirm = EmpleadoCatalogo::find($id);
        $confirm->update(['guia_I' => true]);
        $confirm->save();


       $to = $msg['email'];
       $cc = array('pablo.amador@colorim.com','pablo.amador88@gmail.com');
        Mail :: to($to)->cc($cc)->send(new GuiaIReceived($msg));

        //$pdf = PDF::loadView('emails.guiaIReceived',$msg);
        //return $pdf->stream();
        //return new GuiaIReceived($msg);
        return $msg;
        //return redirect('cuestionarioGI/create');
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
