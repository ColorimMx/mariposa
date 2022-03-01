<?php

namespace App\Http\Controllers\Sat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DOMDocument;
Use DOMXPath;
use ZipArchive;
use Redirect;
use DHF\Sifei\Ws\Soap\utils\CFDIUtils;
use DHF\Sifei\Ws\Soap\Timbrado\getCFDI;
use DHF\Sifei\Ws\Soap\SifeiTimbradoService;
use Illuminate\Support\Facades\Storage;



class SifeiController extends Controller
{

    public function sellado(Request $request)
    {
        include_once 'vendor/autoload.php';

        function println($str){
            echo $str."\n";
        }

        //$contents = Storage::disk('local')->get('/xml/A-0000228481-CIMSA.xml');
        $pathXml = Storage::path("/xml/".$request->transferencia.".xml");
        //$pathXml = $request->xml;

        //dd($pathXml);
        if (file_exists($pathXml)) {

            $dom= new DOMDocument();
            $dom->load($pathXml);
            //$xml = simplexml_load_file($path);
            //dd($dom);

            $utils= new CFDIUtils();
            $utils->setComprobante($dom);
            println("-----Cadena original:");
            println($utils->getCadenaOriginal());

            $pathKey = Storage::path('/KeyCert/Colorim/CSD_SELLODIGITAL2022_CIM581206CI9_20220203_125100.key');

            $sello = $utils->getSello(
                file_get_contents($pathKey), #llave en formato DER
                "COLIMP2022",
                'DER' );

            $cadena = $utils->getCadenaOriginal();

            $xpath = new DOMXPath($dom);
            $elements = $xpath->query('//cfdi:Comprobante[@Sello=""]');
            if ($elements->length >= 1) {
                $element = $elements->item(0);
                $element->setAttribute('Sello', "$sello");
            }

            $el_xml = $dom->saveXML();

            $patSellados = Storage::path("/sellados/".$request->transferencia.".xml");

            $dom->save($patSellados);

            return '<script type="text/javascript">alert("El XML Se Ha Sellado Correctamente!!!"); window.location.href = "sifeiTimbrado";</script>';

        } else {
            exit("Error abriendo ".$request->transferencia.".xml");
        }
    }



    public function timbrado(Request $request)
    {
        include_once 'vendor/autoload.php';

        $fileXml = "A-0000228481-CIMSA";

        $cfdiSelladoPath=Storage::path("/sellados/".$request->transferencia.".xml");
        $originalName=basename($cfdiSelladoPath);
#Se lee el contenido del XML
        $xml = file_get_contents($cfdiSelladoPath);
        $pathTmp = Storage::path('/tmp');
        $pathTimbrados= Storage::path('/timbrados');
        $pathConfig = Storage::path('/config');
        $array_ini =parse_ini_file($pathConfig."/sifei.ini");

//accesos
        $usuario=$array_ini['UsuarioSIFEI'];
        $password=$array_ini['PasswordSIFEI'];
        $idEquipo=$array_ini['IdEquipoGenerado'];

        $serie='';



#clase que incluye todos las invocaciones a nuestros servicios de Sifei
        $sifeiService =new SifeiTimbradoService(
            SifeiTimbradoService::DEV_ENV,
            ['trace'=>true]    #Para recuperar el request y response
        );
#clase con los parametros de timbrado:
        $timbradoParams= new getCFDI();
        $timbradoParams->setUsuario($usuario);
        $timbradoParams->setPassword($password);
        $timbradoParams->setIdEquipo($idEquipo);

        $timbradoParams->setSerie($serie);

        $timbradoParams->setArchivoXMLZip($xml);#arhivo xml


        try {
            $res = $sifeiService->getCFDI($timbradoParams);
            $fileTmpZip = ($pathTmp."/{$fileXml}.zip");
            //$fileTmpZip = "timbrado.zip";  //nombre del zip
            //mandamos en un zip el xml timbrado en caso de exito
            file_put_contents( $fileTmpZip, $res->getReturn());
            $zipXml = new ZipArchive();//En caso de not found ZipArchive, asegurate de tener instalada la extension

            if ($zipXml->open($fileTmpZip) === TRUE) {
                $zipXml->extractTo( $pathTimbrados );
                $zipXml->close();
            }


        } catch (SoapFault $e) {
            #En caso de un error inspeccionar la excepcion:
            var_dump( $e->faultcode, $e->faultstring, $e->detail );
        } finally{
            $time=time();
            #En ambiente de pruebas mandamos el requets y response  a un archivo respecticamente para inspeccionarlos en caso de error, se asigna un timestamp para identificarlos:
            //mandamos en un XML el mensaje soap del request


            $doc=new DOMDocument();
            $doc->loadXML($sifeiService->__getLastRequest());
            $doc->formatOutput=true;
            $pathWorkfiles = Storage::path('/workfiles');
            $doc->save($pathWorkfiles."/timbrado_getCFDI_request_{$time}.xml");

            //mandamos en un XML el response del xml timbrado

            $doc=new DOMDocument();
            $doc->loadXML($sifeiService->__getLastResponse());
            $doc->formatOutput=true;
            $doc->save($pathWorkfiles."/timbrado_getCFDI_response_{$time}.xml");
        }
        return '<script type="text/javascript">alert("El XML Se Ha Timbrado Correctamente!!!"); window.location.href = "traslados";</script>';
    }

}
