<?php

namespace App\Http\Controllers\Sat;

use App\Models\SatCartaPorteSubTipoRemCatalogo;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SatCartaPorteSubTipoRemCatalogoController extends Controller
{
    public function remolques(){

        $remolqueSat = SatCartaPorteSubTipoRemCatalogo::select('id','nombre');
        return datatables()->of($remolqueSat)->addIndexColumn()->toJson();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('sat.cartaporte.remolque');
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
        $remolque = SatCartaPorteSubTipoRemCatalogo::UpdateOrCreate(
            [
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
        $remolque = SatCartaPorteSubTipoRemCatalogo::find($id);

        if($remolque !== null){
            return response()->json([
               'status' => "200",
               'id' => $remolque->id
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
        $remolque = SatCartaPorteSubTipoRemCatalogo::find($id);

        return response()->json($remolque);
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
        $remolque = SatCartaPorteSubTipoRemCatalogo::find($id);
        $remolque->delete();

        return response()->json(['success' => 'success']);
    }
}
