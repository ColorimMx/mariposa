<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use config\Mba3;
use PDO;


class Mba3ProductoCatalogo extends Model
{
    use HasFactory;

    public function get_productos(){
        try {

            $database = new Mba3();
            $db = $database->openMba3();

            $sql = $db->prepare("SELECT INV.PRODUCT_ID AS id, INV.PRODUCT_NAME AS nombre, INV.DESCRIPTION AS descripcion,"
                ." INV.CODE_PROV_O_ALT AS codigo_barras, INV.GROUP_CODE AS grupo_id,"
                ." INV.SUB_GROUP_CODE AS subgrupo_id, INV.Codigo_Marca AS marca_id, INV.Codigo_Modelo AS modelo_id,"
                ." INV.Codigo_SubModelo AS submodelo_id, INV.OH AS existencias, INV.AVAILABLE AS disponible, INV.COMMITED AS asignado,"
                ." INV.UM, INV.NET_WEIGHT AS peso_neto, INV.WEIGHT AS peso_bruto, INV.LARGO AS largo, INV.ANCHO AS ancho, INV.ALTURA AS altura,"
                ." INV.AVERAGE_COST AS costo_promedio, INV.Costo_Ultima_Produccion as costo_ultima_produccion,"
                ." INV.TOTAL_INV_COST AS total_costo_inventario, INV.Fecha_Ultimo_costo_promedio AS fecha_ultimo_costo_promedio, INV.Fecha_Ultima_Produccion AS fecha_ultima_produccion,"
                ." `GL INVEN CODE` AS cuenta_inventario_id, `GL COST CODE` AS cuenta_costo_id ,"
                ." `GL INCOME CODE` AS cuenta_ingreso_nacional_id, INV.CodigoCuentaVentasExtranjero AS cuenta_ingreso_extrangero_id,"
                ." INV1.Codigo_Alterno_Fiscal AS sat_producto_servicio_id, INV.PARTIDA_ARANCELARIA AS sat_fraccion_arancelaria, '1' AS activo"
                ." FROM INVT_Ficha_Principal INV, INVT_Ficha_Principal_2 INV1"
                ." WHERE INV.PRODUCT_ID_CORP=INV1.Product_Id_Corp  AND INV.CORP = 'CIMSA' AND INV.TEMP_MODIFY = FALSE");

            $sql->execute();

            $grupos=$sql->fetchAll(PDO::FETCH_CLASS);

            return $grupos;

        }
        catch (PDOException $e)
        {
            echo "Hay algún problema en la conexión: ".$e->getMessage();
        }
    }
}
