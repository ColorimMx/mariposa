<?php

namespace App\Http\Controllers\Sat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\SatLocalidadCatalogo;
use App\Models\SatEstadoCatalogo;

class SatLocalidadCatalogoController extends Controller
{
    public function localidades(){

        $localidades = SatLocalidadCatalogo::select('id', 'nombre', 'estado_id');

        return datatables()->of($localidades)->addColumn('estado_nombre', function (SatLocalidadCatalogo  $satLocalidadCatalogo){
            return $satLocalidadCatalogo->estado->nombre;
        })->addIndexColumn()->toJson();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$SatLocalidades = SatLocalidadCatalogo::all();

        $satEstados = SatEstadoCatalogo::orderBy('nombre')->get();
        return view('sat.cfdi.localidades',compact('satEstados'));
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

        $localidad = SatLocalidadCatalogo::UpdateOrCreate(
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

        $localidad = SatLocalidadCatalogo::find($id);

        if($localidad !== null){
            return response()->json([
                'status' => "200",
                'id' => $localidad->id
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

        $localidad = SatLocalidadCatalogo::find($id);

        return response()->json($localidad);
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

        $localidad = SatLocalidadCatalogo::find($id);
        $localidad->delete();

        return response()->json(['success' => 'success']);
    }
}
