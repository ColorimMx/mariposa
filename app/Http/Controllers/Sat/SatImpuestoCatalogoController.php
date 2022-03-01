<?php

namespace App\Http\Controllers\Sat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SatImpuestoCatalogo;

class SatImpuestoCatalogoController extends Controller
{
    public function impuestos(){

        $impuestos = SatImpuestoCatalogo::select('id', 'nombre');
        return datatables()->of($impuestos)->addIndexColumn()->toJson();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('sat.cfdi.impuestos');
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
        $impuesto = SatImpuestoCatalogo::UpdateOrCreate(
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
        $impuesto = SatImpuestoCatalogo::find($id);

        if($impuesto !== null){
            return response()->json([
                'status' => "200",
                'id' => $impuesto->id
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

        $impuesto = SatImpuestoCatalogo::find($id);

        return response()->json($impuesto);
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
        $impuesto = SatImpuestoCatalogo::find($id);
        $impuesto->delete();

        return response()->json(['success' => 'success']);
    }
}
