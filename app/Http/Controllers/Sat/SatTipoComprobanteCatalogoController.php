<?php

namespace App\Http\Controllers\Sat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SatTipoComprobanteCatalogo;

class SatTipoComprobanteCatalogoController extends Controller
{
    public function comprobantes(){

        $comprobantes = SatTipoComprobanteCatalogo::select('id', 'nombre');
        return datatables()->of($comprobantes)->addIndexColumn()->toJson();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sat.cfdi.comprobantes');
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
        $comprobante = SatTipoComprobanteCatalogo::UpdateOrCreate([
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
        $comprobante = SatTipoComprobanteCatalogo::find($id);

        if($comprobante !== null){
            return response()->json([
                'status' => "200",
                'id' => $comprobante->id
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

        $comprobante = SatTipoComprobanteCatalogo::find($id);

        return response()->json($comprobante);
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
        $comprobante = SatTipoComprobanteCatalogo::find($id);
        $comprobante->delete();

        return response()->json(['success' => 'success']);

    }
}
