<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PermisoAutotransporteCatalogo;
use App\Models\SatCartaPorteTipoPermisoCatalogo;

class PermisoAutotransporteController extends Controller
{
    public function permisos(){

        $permisoauto = PermisoAutotransporteCatalogo::select('id', 'sat_carta_porte_tipo_permiso_catalogos_id',
            'vigencia', 'asignado');

        return datatables()->of($permisoauto)->addColumn('permiso_nombre', function (PermisoAutotransporteCatalogo $permisoAutotransporte) {
            return $permisoAutotransporte->satPermisos->nombre;

        })->addIndexColumn()->toJson();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $satPermisos = SatCartaPorteTipoPermisoCatalogo::orderBy('nombre')->get();
        return view('inventario.opciones.permisoauto',compact('satPermisos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$permisos = SatCartaPorteTipoPermisoCatalogo::all();
        return view('transportes.premisocreate',compact('permisos'));*/
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
            'permiso' => 'bail|required',
            'folio' => 'bail|required',
            'vigencia' => 'required|date_format:d/m/Y'
        ]);

        $PermisoAutotransporte = new PermisoAutotransporteCatalogo();

        $PermisoAutotransporte->id = $validated['folio'];
        $PermisoAutotransporte->sat_carta_porte_tipo_permiso_catalogos_id = $validated['permiso'];
        $PermisoAutotransporte->asignado = false;
        $PermisoAutotransporte->activo = true;
        $PermisoAutotransporte->vigencia = $validated['vigencia'];

        $PermisoAutotransporte->save();

        return $request->all();
        */

        $permiso = PermisoAutotransporteCatalogo::UpdateOrCreate(
            [
                'id' => $request->id
            ],
            [
                'sat_carta_porte_tipo_permiso_catalogos_id' => $request->sat_carta_porte_tipo_permiso_catalogos_id,
                'vigencia' => $request->vigencia,
                'asignado' => $request->asignado,
                'activo' => $request->activo

            ]);

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
        $permiso = PermisoAutotransporteCatalogo::find($id);

        if($permiso !== null){
            return response()->json([
               'status' => "200",
               'id' => $permiso->id
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
        $permiso = PermisoAutotransporteCatalogo::find($id);

        return response()->json($permiso);

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
        $permiso = PermisoAutotransporteCatalogo::find($id);
        $permiso->delete();

        return response()->json(['sucess' => 'success']);

    }
}
