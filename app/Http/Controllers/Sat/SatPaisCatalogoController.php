<?php

namespace App\Http\Controllers\Sat;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\SatPaisCatalogo;


class SatPaisCatalogoController extends Controller
{
    public function paises()
    {
        $paises = SatPaisCatalogo::select('id','nombre');
        return datatables()->of($paises)->addIndexColumn()->toJson();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$Satpaises = SatPaisCatalogo::all();
        return view('sat.cfdi.paises');
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

        $pais = SatPaisCatalogo::UpdateOrCreate(
            [
               'id' => $request->id
            ],
            [
                'nombre' => $request->nombre,
                'activo' => $request->activo
            ]);

        return response()->json(['sucess' => 'success']);
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

        $pais = SatPaisCatalogo::find($id);

        if($pais !== null){
            return response()->json([
               'status' => "200",
               'id' => $pais->id,
            ]);
        }else{
            return response()->json([
               'status' => "400",
               'id'  => $id,
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

        $pais = SatPaisCatalogo::find($id);
        return response()->json($pais);
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

        $pais = SatPaisCatalogo::find($id);
        $pais->delete();

        return response()->json(['sucess' => true]);
    }
}
