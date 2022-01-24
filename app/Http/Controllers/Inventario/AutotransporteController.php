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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validated = $request->validate([
            'marca' => 'bail|required',
            'modelo' => 'bail|required',
            'anio_modelo_vm' => 'bail|required',
            'placa' => 'bail|required',
            'permiso_autotransporte_id' => 'bail|required',
            'config_vehicular_id' => 'bail|required',
            'asegura_resp_civil_id' => 'bail|required'
        ]);

        $autotransporte = new AutotransporteCatalogo();

        $autotransporte->marca = $validated['marca'];
        $autotransporte->modelo = $validated['modelo'];
        $autotransporte->anio_modelo_vm = $validated['anio_modelo_vm'];
        $autotransporte->placa = $validated['placa'];
        $autotransporte->permiso_autotransporte_id = $validated['permiso_autotransporte_id'];
        $autotransporte->config_vehicular_id = $validated['config_vehicular_id'];
        $autotransporte->asegura_resp_civil_id = $validated['asegura_resp_civil_id'];

        $autotransporte->save();

        $id_seguro = $request->asegura_resp_civil_id;
        $seguro = SeguroAutotransporteCatalogo::find($id_seguro);
        $seguro->update(['asignado' => true]);
        $seguro->save();

        $id_permiso = $request->permiso_autotransporte_id;
        $permiso = PermisoAutotransporteCatalogo::find($id_permiso);
        $permiso->update(['asignado' => true]);
        $permiso->save();

        return $request->all();
    }

    /**
     * Display the specified resource.
     *año
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }
}
