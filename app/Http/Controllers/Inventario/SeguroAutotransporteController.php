<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SeguroAutotransporteCatalogo;

class SeguroAutotransporteController extends Controller
{
    public function seguros(){

        $seguros = SeguroAutotransporteCatalogo::select('id', 'asegura_resp_civil', 'vigencia', 'asignado', 'activo');

        return datatables()->of($seguros)->addIndexColumn()->toJson();

    }
    public function index()
    {
        return view('inventario.opciones.seguroauto');
    }

    public function create()
    {
        return view('transportes.segurocreate');
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
        $validated = $request->validate([
            'aseguradora' => 'bail|required',
            'poliza' => 'bail|required',
            'vigencia' => 'required|date_format:d/m/Y'
        ]);

        $SeguroAutotransporte = new SeguroAutotransporteCatalogo();

        $SeguroAutotransporte->id = $validated['poliza'];
        $SeguroAutotransporte->asegura_resp_civil = $validated['aseguradora'];
        $SeguroAutotransporte->asignado = false;
        $SeguroAutotransporte->activo = true;
        $SeguroAutotransporte->vigencia = $validated['vigencia'];

        $SeguroAutotransporte->save();

        return $request->all();
        */

        $seguro = SeguroAutotransporteCatalogo::UpdateOrCreate(
          [
              'id' => $request->id
          ],
          [
              'asegura_resp_civil' => $request->asegura_resp_civil,
              'vigencia' => $request->vigencia,
              'asignado' => $request->asignado,
              'activo' => $request->activo
          ]
        );
        return response()->json(['success' => 'success']);
    }

    public function show($id)
    {
        //

        $seguro = SeguroAutotransporteCatalogo::find($id);

        if($seguro !== null){
            return response()->json([
                'status' => "200",
                'id' => $seguro->id
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

        $seguro = SeguroAutotransporteCatalogo::find($id);

        Return response()->json($seguro);

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

        $seguro = SeguroAutotransporteCatalogo::find($id);
        $seguro->delete();

        return response()->json(['succes' => 'success']);
    }
}
