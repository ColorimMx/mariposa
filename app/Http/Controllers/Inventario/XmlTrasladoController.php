<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;
use App\Models\TrasladoDetalle;
use App\Models\TrasladoPrincipal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use DOMDocument;

class XmlTrasladoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $traslados = TrasladoPrincipal::where('trasnferencia_empresa_id','=',$id)->get();

        //return view('sat.trasladocreate',compact('traslados'));

        foreach ($traslados as $principal)
        {
            $xml = new DomDocument('1.0', 'UTF-8');

            $comprobante = $xml->createElement('cfdi:Comprobante');
            $comprobante->setAttribute('xmlns:cfdi', 'http://www.sat.gob.mx/cfd/3');
            $comprobante->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');

            //$comprobante->setAttribute('xmlns:cartaporte20', 'http://www.sat.gob.mx/CartaPorte20');


            date_default_timezone_set('America/Mexico_City');
            $fecha = \Carbon\Carbon::parse($principal->created_at)->format('Y-m-d');
            $comprobante->setAttribute('xsi:schemaLocation', 'http://www.sat.gob.mx/cfd/3 http://www.sat.gob.mx/sitio_internet/cfd/3/cfdv33.xsd http://www.sat.gob.mx/CartaPorte20 http://www.sat.gob.mx/sitio_internet/cfd/CartaPorte/CartaPorte20.xsd');
            $comprobante->setAttribute('Version', '3.3');
            $comprobante->setAttribute('Serie', 'TP');
            $comprobante->setAttribute('Folio', $principal->id);
            $comprobante->setAttribute('Fecha', $fecha.'T'.date("H:i:s"));
            $comprobante->setAttribute('Sello', '');
            $comprobante->setAttribute('NoCertificado', '00001000000409491341');
            $comprobante->setAttribute('Certificado', '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');
            $comprobante->setAttribute('SubTotal', '0');
            $comprobante->setAttribute('Moneda', 'XXX');
            $comprobante->setAttribute('Total', '0');
            $comprobante->setAttribute('TipoDeComprobante', 'T');
            $comprobante->setAttribute('LugarExpedicion', '01180');


            $comprobante = $xml->appendChild($comprobante);

            $emisor = $xml->createElement('cfdi:Emisor');
            $emisor = $comprobante->appendChild($emisor);
            $emisor->setAttribute('Rfc','CIM581206CI9');
            $emisor->setAttribute('Nombre','COLORANTES IMPORTADOS SA DE CV');
            $emisor->setAttribute('RegimenFiscal','601');


            $receptor = $xml->createElement('cfdi:Receptor');
            $receptor = $comprobante->appendChild($receptor);
            $receptor->setAttribute('Rfc','CIM581206CI9');
            $receptor->setAttribute('Nombre','COLORANTES IMPORTADOS SA DE CV');
            $receptor->setAttribute('UsoCFDI','P01');

            $conceptos = $xml->createElement('cfdi:Conceptos');
            $conceptos = $comprobante->appendChild($conceptos);
            $detalles = TrasladoDetalle::where('traslado_id','=',$principal->id)->get();
            foreach ($detalles as $detalle) {
                $concepto = $xml->createElement('cfdi:Concepto');

                $concepto = $conceptos->appendChild($concepto);

                $importe = $detalle->cantidad * $detalle->producto->precio_minimo;
                $concepto->setAttribute('ClaveProdServ', $detalle->producto->sat_producto_servicio_id);
                $concepto->setAttribute('NoIdentificacion', $detalle->producto_id);
                $concepto->setAttribute('Cantidad', $detalle->cantidad);
                $concepto->setAttribute('ClaveUnidad', $detalle->producto->unidad->sat_unidad_id);
                $concepto->setAttribute('Unidad', $detalle->producto->unidad->nombre);
                $concepto->setAttribute('Descripcion', $detalle->producto->descripcion);
                $concepto->setAttribute('ValorUnitario', number_format( $detalle->producto->precio_minimo,6));
                $concepto->setAttribute('Importe', $importe);
            }


            $xml->formatOutput = true;
            //$el_xml = $xml->saveXML();
            //$xml->save('traslado.xml');
            $xml_string =$xml->saveXML();

            //Y se guarda en el nombre del archivo 'achivo.xml', y el obejto nstanciado
            //Storage::disk('local')->put($principal->id.'.xml', $xml_string);
            //Storage::disk('local')->put('TRASLADO.xml', $xml_string);
            Storage::disk('local')->put('xml/'.$principal->trasnferencia_empresa_id.'.xml', $xml_string);

            //Mostramos el XML puro
            return Storage::download('xml/'.$principal->trasnferencia_empresa_id.'.xml');
            echo "<p><b>El XML ha sido creado.... Mostrando en texto plano:</b></p>".
                htmlentities($xml_string)."

<hr>";
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
