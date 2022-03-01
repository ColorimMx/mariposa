<?php
use DHF\Sifei\Ws\Soap\utils\CFDIUtils;
use Illuminate\Support\Facades\Storage;

include_once 'vendor/autoload.php';

function println($str){
    echo $str."\n";
}

$dom= new DOMDocument();

$dom->load(__DIR__."/xml/A-0000228481-CIMSA.xml");
$utils= new CFDIUtils();
$utils->setComprobante($dom);


println("-----Cadena original:");
println($utils->getCadenaOriginal());

$sello = $utils->getSello(
    file_get_contents(__DIR__."/KeyCert/Colorim/CSD_SELLODIGITAL2022_CIM581206CI9_20220203_125100.key"), #llave en formato DER
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

$dom->save(__DIR__."/xml/A-0000228481-CIMSA_Sello.xml");
