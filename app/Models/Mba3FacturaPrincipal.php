<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use  config\Mba3;
use PDO;


class Mba3FacturaPrincipal extends Model
{
    public function get_facturas(){
        try {

            $database = new Mba3();
            $db = $database->openMba3();

            $sql = $db->prepare("SELECT CODIGO_FACTURA AS ID_FACTURA,NUMERO_FACTURA,SerieDocumento AS SERIE,Prefijo_Documento AS PREFIJO,NumeroSecuencialDocumento AS FOLIO, "
                ."TIPO_DOCUMENTO_FACT_DEV AS TIPO,CODIGO_CLIENTE AS ID_CLIENTE,FECHA_FACTURA,FECHA_VENCIMIENTO, "
                ."VALOR_FACTURA,SUBTOTAL_CON_IVA AS SUBTOTAL,TOTAL_IMPUESTOS AS IMPUESTO,VALOR_TOTAL_DESCUENTO AS DESCUENTO,VALOR_TOTAL_PAGADO AS PAGO, "
                ."VALOR_TOTAL_SALDO_A_COBRAR AS SALDO,DIA,MES,ANIO, "
                ."CODIGO_MONEDA AS ID_MONEDA, INFO_CREACION,INFO_CONFIRMADO,INFO_ANULADO, "
                ."NUMERO_PEDIDO_SISTEMA AS ID_PEDIDO,ORIGEN AS ID_SUCURSAL, "
                ."CONFIRMADO,ANULADA AS ANULADO "
                ."FROM CLNT_Factura_Principal "
                ."WHERE TIPO_DOCUMENTO = 'FACT' "
                ."AND EMPRESA = 'CIMSA' "
                ."AND ANIO >=2021"
                ."AND CODIGO_FACTURA = 'CFDF-10000047460-CIMSA'");

            $sql->execute();

            $facturas=$sql->fetchAll(PDO::FETCH_CLASS);

            return $facturas;

        }
        catch (PDOException $e)
        {
            echo "Hay algún problema en la conexión: ".$e->getMessage();
        }
    }
}
