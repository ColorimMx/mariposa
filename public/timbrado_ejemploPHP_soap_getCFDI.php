<?php
/**
 * Ejemplo de timbrado PHP del WS SOAP getCFDI() de SIFEI. *
 *
 * El CFDI(XML) debe estar sellado correctamente
 * Nota: Para simplificar los ejemplos todas las rutas son relativas y los datos se leen de un archivo config.ini, lo cual no debe de hacerse en un ambiente de produccion.
 *
 */
$cfdiSelladoPath=__DIR__."/assets/A-0000228481-CIMSA_Sello.xml";//Ruta del xml sellado
$originalName=basename($cfdiSelladoPath);
#Se lee el contenido del XML
$xml = file_get_contents($cfdiSelladoPath);
$tmpDirName = "tmp"; //nombre del directorio temporal
//Para el atributo archivoXMLZip no es necesario aplicar el base64_encode ya que la misma libreria SoapClient lo hace, por eso la mandamos tal cual.

$array_ini =parse_ini_file(__DIR__."/config.ini");
$parametros=array(
	//accesos
	'Usuario'=>$array_ini['UsuarioSIFEI'],
	'Password'=>$array_ini['PasswordSIFEI'],
	'IdEquipo'=>$array_ini['IdEquipoGenerado'],

	//archivo XML
 	'archivoXMLZip'=>$xml,
 	'Serie'=>''

);

//url de pruebas
$wsdl ="http://devcfdi.sifei.com.mx:8080/SIFEI33/SIFEI?wsdl";
$client = new SoapClient($wsdl,
	array(
		'soap_version' => SOAP_1_1,
		'trace' => true,
	)
);

try {
	$res = $client->__soapCall('getCFDI', array($parametros ));
	$fileTmpZip = "timbrado.zip";  //nombre del zip
	//mandamos en un zip el xml timbrado en caso de exito
	file_put_contents( $fileTmpZip, $res->return);
	$zipXml = new ZipArchive();//En caso de not found ZipArchive, asegurate de tener instalada la extension

	if ($zipXml->open($fileTmpZip) === TRUE) {
  		$zipXml->extractTo( $tmpDirName );
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
	$doc->loadXML($client->__getLastRequest());
	$doc->formatOutput=true;
	$doc->save(__DIR__."/workfiles/timbrado_getCFDI_request_{$time}.xml");

	//mandamos en un XML el response del xml timbrado

	$doc=new DOMDocument();
	$doc->loadXML($client->__getLastResponse());
	$doc->formatOutput=true;
	$doc->save(__DIR__."/workfiles/timbrado_getCFDI_response_{$time}.xml");
}
?>
