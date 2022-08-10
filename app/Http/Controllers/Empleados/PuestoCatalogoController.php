<?php

namespace App\Http\Controllers\Empleados;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PuestoCatalogo;

class PuestoCatalogoController extends Controller
{
    public function puestos(){
        $puestos = PuestoCatalogo::select('id','nombre');
        return datatables()->of($puestos)->addIndexColumn()->toJson();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('empleados.puestos');
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
        $puesto = PuestoCatalogo::UpdateOrCreate(
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
        $puesto = PuestoCatalogo::find($id);

        if($puesto !== null){
            return response()->json([
                'status' => "200",
                'id' => $puesto->id,
            ]);
        }else{
            return response()->json([
                'status' => "400",
                'id' => $id,
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
        $puesto = PuestoCatalogo::find($id);
        return response()->json($puesto);
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
        $puesto = PuestoCatalogo::find($id);
        $puesto->delete();

        return response()->json(['sucess' => true]);
    }
}
