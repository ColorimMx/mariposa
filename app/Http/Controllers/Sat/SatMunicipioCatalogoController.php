<?php

namespace App\Http\Controllers\Sat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\SatMunicipioCatalogo;
use App\Models\SatEstadoCatalogo;

class SatMunicipioCatalogoController extends Controller
{
    public function municipios(){
        $municipios = SatMunicipioCatalogo::select('id','nombre', 'estado_id');

        return datatables()->of($municipios)->addColumn('estado_nombre', function(SatMunicipioCatalogo $satMunicipioCatalogo){
            return $satMunicipioCatalogo->estado->nombre;
        })->addIndexColumn()->toJson();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$SatMunicipios = SatMunicipioCatalogo::all();

        $satEstados = SatEstadoCatalogo::orderBy('nombre')->get();
        return view('sat.cfdi.municipios',compact('satEstados'));
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

        $municipio = SatMunicipioCatalogo::UpdateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'nombre' => $request->nombre,
                'estado_id' => $request->estado_id,
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

        $municipio = SatMunicipioCatalogo::find($id);

        if($municipio !== null){
            return response()->json([
               'status' => "200",
               'id' => $municipio->id
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

        $municipio = SatMunicipioCatalogo::find($id);

        return response()->json($municipio);
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

        $muncipio = SatMunicipioCatalogo::find($id);
        $muncipio->delete();

        return response()->json(['success' => 'success']);

    }
}
