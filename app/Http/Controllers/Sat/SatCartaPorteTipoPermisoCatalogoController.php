<?php

namespace App\Http\Controllers\Sat;

use App\Models\SatCartaPorteTipoPermisoCatalogo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SatCartaPorteTipoPermisoCatalogoController extends Controller
{
    public function permisos(){

        $permisosSat = SatCartaPorteTipoPermisoCatalogo::select('id', 'nombre');
        return datatables()->of($permisosSat)->addIndexColumn()->toJson();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sat.cartaporte.permisos');
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
        $permisosSat = SatCartaPorteTipoPermisoCatalogo::UpdateOrCreate([
            'id' => $request->id
           ],
           [
               'nombre' => $request->nombre,
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
        $permisosSat = SatCartaPorteTipoPermisoCatalogo::find($id);

        if($permisosSat !== null){
            return response()->json([
               'status' => "200",
               'id' => $permisosSat->id
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
        $permisosSat = SatCartaPorteTipoPermisoCatalogo::find($id);

        return response()->json($permisosSat);
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
        $permisosSat = SatCartaPorteTipoPermisoCatalogo::find($id);
        $permisosSat->delete();

        return response()->json(['success' => 'success']);

    }
}
