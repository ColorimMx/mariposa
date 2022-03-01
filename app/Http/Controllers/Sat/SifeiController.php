<?php

namespace App\Http\Controllers\Sat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DOMDocument;
Use DOMXPath;
use Redirect;
use DHF\Sifei\Ws\Soap\utils\CFDIUtils;
use Illuminate\Support\Facades\Storage;


class SifeiController extends Controller
{

    public function sellado(Request $request)
    {
        include_once 'vendor/autoload.php';

        function println($str){
            echo $str."\n";
        }

        $contents = Storage::disk('local')->get('/xml/A-0000228481-CIMSA.xml');

        $pathXml = Storage::path('/xml/A-0000228481-CIMSA.xml');


        if (file_exists($pathXml)) {

            $dom= new DOMDocument();
            $dom->load($pathXml);
            //$xml = simplexml_load_file($path);
            //dd($dom);

            $utils= new CFDIUtils();
            $utils->setComprobante($dom);
#todo desde un solo metodo: genera la cadena original, sella y codifica en base64 lista para agregar en el atributo Sello del CFDI


#AHORA se establece la llave, la llave puede ser en Formato PEM o formato DER(generalmente cuando tiene extension .key):

#Metodos:
#(1) PEM
            /*println("-----Sello mediante KEY en formato PEM:");
            println($utils->getSello(
                file_get_contents(__DIR__."/KeyCert/CSD01_AAA010101AAA_KEY.PEM"), #llave en formato PEM
                "12345678a")                    #contraseña
            );
            #O bien:
            */
            /*
            println("-----Sello mediante KEY en formato DER:");
            #(2)DER. Usando .key directamente (DER)
            println($utils->getSello(
                file_get_contents(__DIR__."/KeyCert/CSD01_AAA010101AAA.key"), #llave en formato DER
                "12345678a",
                'DER'                    #contraseña
                )
            );
            */

            println("-----Cadena original:");
#si deseas ver la cadena original.
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
//echo '<pre>' . htmlspecialchars($dom->saveXML()) . '</pre>';

            $el_xml = $dom->saveXML();

            $patSellados = Storage::path('/sellados/A-0000228481-CIMSA.xml');

            $dom->save($patSellados);
        } else {
            exit('Error abriendo test.xml.');
        }
    }

    public function timbrado()
    {
        //echo 'Timbrado Sifei';
        return Redirect::to('http://mariposa.mx/ejemploTimbrado.php');
    }

}
