<?php

namespace App\Http\Controllers\Sat;

use Illuminate\Http\Request;
use Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\SatEstadoCatalogo;
use App\Models\SatPaisCatalogo;

class SatEstadoCatalogoController extends Controller
{
    public function estados(){
        $estados = SatEstadoCatalogo::select('id', 'nombre','pais_id');


        //return datatables()->of($estados)->addIndexColumn()->toJson();

        return datatables()->of($estados)->addColumn('pais_nombre', function (SatEstadoCatalogo $satEstadoCatalogo) {
            return $satEstadoCatalogo->pais->nombre;
        })->addIndexColumn()->toJson();
}
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$satPaises = SatPaisCatalogo::all();


        $satPaises = SatPaisCatalogo::orderBy('nombre')->get();
        return view('sat.cfdi.estados',compact('satPaises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

        $estado = SatEstadoCatalogo::UpdateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'nombre' => $request->nombre,
                'pais_id' => $request->pais_id,
                'activo' => $request->activo
            ]
        );

        return response()->json(['success' => 'success']);

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

        $estado = SatEstadoCatalogo::find($id);

        if($estado !== null){
            return response()->json([
               'status' => "200",
                'id' => $estado->id
            ]);
        }else{
            return response()->json([
               'status' => "400",
               'id' => $id
            ]);
        }
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

        $estado = SatEstadoCatalogo::find($id);
        //$estado = SatEstadoCatalogo::find($id)->with('pais')->get();

        //$estado = SatEstadoCatalogo::find($id)->pais()->get();
        //$estado = SatEstadoCatalogo::find($id)->pais()->select('id')->get();

        //$estado = SatEstadoCatalogo::with('pais')->where('id','=',$id)->get();

        //$estado = SatEstadoCatalogo::find($id);
        //$estados = $estado->pais()->get();


        /*$estado = DB::table('sat_estado_catalogos')
            ->join('sat_pais_catalogos','sat_estado_catalogos.pais_id', '=', 'sat_pais_catalogos.id')
            ->select('sat_estado_catalogos.id', 'sat_estado_catalogos.nombre', 'sat_estado_catalogos.pais_id', 'sat_pais_catalogos.nombre AS pais_nombre')
            ->where('sat_estado_catalogos.id', '=', $id)
            ->get();*/

        Return response()->json($estado);

        //return Response::json($estado);

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

        $estado = SatEstadoCatalogo::find($id);
        $estado->delete();

        return response()->json(['succes' => 'success']);
    }
}
