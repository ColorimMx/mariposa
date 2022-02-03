<?php

namespace App\Http\Controllers\Sat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SatRegimenFiscalCatalogo;

class SatRegimenFiscalCatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function regimenes(){

        $regimen = SatRegimenFiscalCatalogo::select('id','nombre');

        return datatables()->of($regimen)->toJson();

        //return view ($regimen);
    }

    public function index()
    {
        return view('sat.cfdi.regimen');
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
        //dd($request->all());


            $regimen   =   SatRegimenFiscalCatalogo::UpdateOrCreate(
                [
                    'id' => $request->id
                ],
                [
                    'nombre' => $request->nombre,
                    'activo' => $request->activo,
                ]);

            return response()->json(['success' => 'success']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     *
     */
    public function show($id)
    {

        $regimen = SatRegimenFiscalCatalogo::find($id);

        if ($regimen !== null) {
            return response()->json([
                'status' =>  "200",
                'id' =>  $regimen->id,
            ]);
        }else{
            return response()->json([
                'status' => '400',
                'id' =>  $id,
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
        $regimen = SatRegimenFiscalCatalogo::find($id);
        return response()->json($regimen);
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
        $reg = SatRegimenFiscalCatalogo::where('id', '=', $id)->first();
        $reg->delete();

        return response()->json(['success' => true]);

    }
}
