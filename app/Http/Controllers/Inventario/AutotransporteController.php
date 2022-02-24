<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
Use App\Models\AutotransporteCatalogo;
Use App\Models\PermisoAutotransporteCatalogo;
Use App\Models\SatCartaPorteConfigVehicularCatalogo;
Use App\Models\SeguroAutotransporteCatalogo;

class AutotransporteController extends Controller
{
    public function autotransportes(){

        $autotransportes = AutotransporteCatalogo::select('id', 'marca', 'modelo', 'anio_modelo_vm', 'placa',
            'permiso_autotransporte_id', 'config_vehicular_id', 'asegura_resp_civil_id');
        return datatables()->of($autotransportes)->addIndexColumn()->toJson();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisos = PermisoAutotransporteCatalogo::where('asignado','=',false)->orderBy('id')->get();
        $config = SatCartaPorteConfigVehicularCatalogo::orderBy('nombre')->get();
        $seguros = SeguroAutotransporteCatalogo::where('asignado','=',false)->orderBy('id')->get();
        return view('inventario.opciones.autotransporte',compact('permisos','config','seguros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permisos = PermisoAutotransporteCatalogo::where('asignado','=',false)->orderBy('id')->get();
        $congiguracions = SatCartaPorteConfigVehicularCatalogo::all();
        $aseguradoras = SeguroAutotransporteCatalogo::where('asignado','=',false)->orderBy('id')->get();

        return view('transportes.autotransporte', compact('permisos','congiguracions','aseguradoras'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $autotransporte = AutotransporteCatalogo::UpdateOrCreate(
            [
                'marca' => $request->marca,
                'modelo' => $request->modelo,
                'anio_modelo_vm' => $request->anio_modelo_vm,
                'placa' => $request->placa,
                'permiso_autotransporte_id' => $request->permiso_autotransporte_id,
                'config_vehicular_id' => $request->config_vehicular_id,
                'asegura_resp_civil_id' => $request->asegura_resp_civil_id
            ]
        );

        $id_seguro = $request->asegura_resp_civil_id;
        $seguro = SeguroAutotransporteCatalogo::find($id_seguro);
        $seguro->update(['asignado' => true]);
        $seguro->save();

        $id_permiso = $request->permiso_autotransporte_id;
        $permiso = PermisoAutotransporteCatalogo::find($id_permiso);
        $permiso->update(['asignado' => true]);
        $permiso->save();

        return response()->json(['success' => 'success']);
    }

    /**
     * Display the specified resource.
     *año
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $autotransporte = AutotransporteCatalogo::find($id);

        if($autotransporte !== null){
            return response()->json([
                'status' => "200",
                'id' => $autotransporte->id
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
        $autotransporte = AutotransporteCatalogo::find($id);

        return response()->json($autotransporte);
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
        $autotransporte = AutotransporteCatalogo::find($id);
        $autotransporte->delete();

        return response()->json(['success' => 'success']);

    }
}
