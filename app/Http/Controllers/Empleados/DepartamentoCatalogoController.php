<?php

namespace App\Http\Controllers\Empleados;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\DepartamentoCatalogo;

class DepartamentoCatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function departamentos(){

        $departamentos = DepartamentoCatalogo::select('id','nombre');
        return datatables()->of($departamentos)->addIndexColumn()->toJson();

    }

    public function index()
    {
        return view('empleados.departamentos');
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
        $departamento = DepartamentoCatalogo::UpdateOrCreate(
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
        $departamento = DepartamentoCatalogo::find($id);

        if($departamento !== null){
            return response()->json([
                'status' => "200",
                'id' => $departamento->id,
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
        $departamento = DepartamentoCatalogo::find($id);
        return response()->json($departamento);
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
        $departamento = DepartamentoCatalogo::find($id);
        $departamento->delete();

        return response()->json(['sucess' => true]);
    }
}
