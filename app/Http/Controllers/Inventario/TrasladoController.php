<?php

namespace App\Http\Controllers\Inventario;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Models\AutotransporteCatalogo;
use App\Models\Mba3TransferenciasPrincipal;
use App\Models\Mba3TransferenciasDetalle;
use App\Models\TrasladoPrincipal;
use App\Models\TrasladoDetalle;


class TrasladoController extends Controller
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
        $mbatransferencia = new Mba3TransferenciasPrincipal();
        $traslados = $mbatransferencia->get_trasladoprincipal_all();

        $autotransportes = AutotransporteCatalogo::all();

        return view('inventario.traslados.importar',compact('traslados','autotransportes'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = $request->transferencia;

        $mbatransferencia = new Mba3TransferenciasPrincipal();
        $transferencias = $mbatransferencia->get_trasladoprincipal($id);

        foreach ($transferencias as $transferencia){

            $traslado = new TrasladoPrincipal();

            $folio = $transferencia->id;
            $traslado->id = $transferencia->id;
            $traslado->trasnferencia_empresa_id = $transferencia->trasnferencia_empresa_id;
            $dataTimeFecha_i = Carbon::createFromFormat('d/m/Y', $transferencia->fecha);
            $traslado->fecha = $dataTimeFecha_i;
            //$traslado->fecha = \Carbon\Carbon::parse($transferencia->fecha)->format('Y-m-d\TH:i:s.v');
            $traslado->moneda_id = $transferencia->moneda_id;
            $traslado->almacen_id = $transferencia->bodega_id;
            $traslado->destino_almacen_id = $transferencia->destino_bodega_id;

            $traslado->save();

        }

        $mbatransferenciadetalles = new Mba3TransferenciasDetalle();
        $transferenciadetalles = $mbatransferenciadetalles->get_trasladodetalle($id);

        foreach ($transferenciadetalles as $transferenciadetalle){

            $trasladodetalle = new TrasladoDetalle();
            $trasladodetalle->traslado_id =  $folio;
            $trasladodetalle->producto_id = $transferenciadetalle->producto_id;
            $trasladodetalle->cantidad = $transferenciadetalle->cantidad;
            $trasladodetalle->um = $transferenciadetalle->um;

            $trasladodetalle->save();

            //return $trasladodetalle;

        }

        $trasladoporteupdate = $mbatransferencia->update_traslado_exportado($id);

        //return $traslado;
        //return redirect('cfditraslado', [$id]);
        //return redirect()->route('cfditraslado', [$id]);
        /*return redirect()->action(
            [XmlTrasladoController::class, 'show'], [$id]
        );*/

        return redirect()->action(
            [XmlTrasladoController::class, 'create'], [$id]
        );

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
