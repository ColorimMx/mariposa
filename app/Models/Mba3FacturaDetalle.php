<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use config\Mba3;
use PDO;

class Mba3FacturaDetalle extends Model
{
    public function get_facturas_detalle(){
        try{

            $database = new Mba3();
            $db = $database->openMba3();



            $sql = $db->prepare("SELECT    CONCAT(CONCAT(INV.DOC_ID_CORP2,'-'), INV.Posicion) AS id, "
                ."INV.DOC_ID_CORP2 AS factura_id, INV.Posicion AS linea, "
                ."INV.PRODUCT_ID AS producto_id, INV.QUANTITY AS cantidad, "
                ."CASE  WHEN INV.QUANTITY = 0 THEN 0 ELSE INV.NET_LINE_TOTAL/INV.QUANTITY END AS precio, "
                ."INV.NET_LINE_TOTAL AS subtotal, CASE WHEN CLN.PORCENTAJE_IMPUESTO <> 0 THEN INV.NET_LINE_TOTAL * (CLN.PORCENTAJE_IMPUESTO/100) "
                ."ELSE 0 END AS iva, "
                ."INV.Cotizacion_Movimiento AS divisa_valor, "
                ."CASE WHEN INV.CURRENCY_TYPE = 'US' THEN INV.NET_LINE_TOTAL * INV.COTIZACION_MOVIMIENTO ELSE INV.NET_LINE_TOTAL END AS subtotal_mn, "
                ."CASE WHEN  INV.CURRENCY_TYPE = 'US' AND INV.COTIZACION_MOVIMIENTO <> 0 THEN ( (CLN.PORCENTAJE_IMPUESTO/100) * INV.COTIZACION_MOVIMIENTO) "
                ."ELSE INV.NET_LINE_TOTAL * (CLN.PORCENTAJE_IMPUESTO/100)  END AS iva_mn "
                ."FROM CLNT_Factura_Principal CLN, INVT_Producto_Movimientos INV "
                ."WHERE    CLN.CODIGO_FACTURA=INV.DOC_ID_CORP2 "
                ."AND CLN.TIPO_DOCUMENTO = 'FACT' "
                ."AND CLN.EMPRESA = 'CIMSA' "
                ."AND CLN.ANIO >= 2017 "
                ."AND INV.DOC_ID_CORP2 = 'CFDF-10000050212-CIMSA' "
                ."ORDER BY INV.DOC_ID_CORP2, INV.Posicion;");

            $sql->execute();

            $facturadetalles=$sql->fetchAll(PDO::FETCH_CLASS);

            return $facturadetalles;

        }
        catch (\PDOException $e)
        {
            echo "Hay algún en la conexión: ".$e->getMessage();
        }
    }
}
