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

            $sql = $db->prepare("SELECT CODIGO_FACTURA AS id,NUMERO_FACTURA as numero,SerieDocumento AS serie,Prefijo_Documento AS prefijo,NumeroSecuencialDocumento AS folio, "
                ."TIPO_DOCUMENTO_FACT_DEV AS tipo,CODIGO_CLIENTE AS cliente_id, FECHA_FACTURA as fecha, FECHA_VENCIMIENTO as fecha_vencimiento, "
                ."COTIZACION AS divisa_valor, CODIGO_MONEDA AS moneda_id, "
                ."SUBTOTAL_CON_IVA AS subtotal,VALOR_TOTAL_DESCUENTO AS descuento, TOTAL_IMPUESTOS AS impuesto, VALOR_FACTURA as total, VALOR_TOTAL_PAGADO AS pago, "
                ."VALOR_TOTAL_SALDO_A_COBRAR AS saldo, TERMINOS_PAGO_TEXTO AS condiciones_pago, "
                ."DIA as dia ,MES as mes, ANIO as anio, "
                ."INFO_CREACION as info_creacion, INFO_CONFIRMADO as info_confirmado, INFO_ANULADO as info_anulado, "
                ."NUMERO_PEDIDO_SISTEMA AS pedido_id,ORIGEN AS sucursal_id, "
                ."CASE WHEN CONFIRMADO = false THEN true ELSE false END as confirmado, "
                ."CASE WHEN ANULADA = false THEN true ELSE false END AS anulado "
                ."FROM CLNT_Factura_Principal "
                ."WHERE TIPO_DOCUMENTO = 'FACT' "
                ."AND EMPRESA = 'CIMSA' "
                ."AND ANIO >=2021"
                ."AND CODIGO_FACTURA = 'CFDF-10000050212-CIMSA'");

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
