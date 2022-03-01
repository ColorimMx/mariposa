<?php

namespace App\Http\Controllers\Sat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SatCartaPorteConfigVehicularCatalogo;

class SatCartaPorteConfigVehicularCatalogoController extends Controller
{
    public function configuracion(){

        $configVehicularSat = SatCartaPorteConfigVehicularCatalogo::select('id', 'nombre');
        return datatables()->of($configVehicularSat)->addIndexColumn()->toJson();

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('sat.cartaporte.confvehicular');
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
        $configVehicularSat = SatCartaPorteConfigVehicularCatalogo::UpdateOrCreate(
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
        $configVehicularSat = SatCartaPorteConfigVehicularCatalogo::find($id);

        if($configVehicularSat !== null){
            return response()->json([
               'status' => "200",
                'id' => $configVehicularSat->id
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
        $configVehicularSat = SatCartaPorteConfigVehicularCatalogo::find($id);

        return response()->json($configVehicularSat);
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
        $configVehicularSat = SatCartaPorteConfigVehicularCatalogo::find($id);
        $configVehicularSat->delete();

        return response()->json(['success' => 'success']);
    }
}
