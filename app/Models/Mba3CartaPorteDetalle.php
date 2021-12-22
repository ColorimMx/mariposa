<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use config\Mba3;
use PDO;

class Mba3CartaPorteDetalle extends Model
{
    use HasFactory;

    public function get_cartaportedetalle(){
        try {

            $database = new Mba3();
            $db = $database->openMba3();

            $sql = $db->prepare("SELECT DOC_ID_CORP as trasnferencia_empresa_id, PRODUCT_ID as producto_id, QUANTITY as cantidad, UM as um "
                ."FROM INVT_Producto_Movimientos WHERE `ORIGIN MEMO` = 'TRANSFERENCIA' AND ADJUSTMENT_TYPE = 'TE' AND No_Considerar_KARDEX = FALSE "
                ."AND CONFIRM = TRUE AND Anulada = FALSE AND CORP = 'CIMSA' AND TipoDocumentoInterno = '' AND TRANS_DATE >= '2021-12-07' ");

            $sql->execute();

            $cartaportedetalles=$sql->fetchAll(PDO::FETCH_CLASS);

            return $cartaportedetalles;

        }
        catch (PDOException $e)
        {
            echo "Hay algún problema en la conexión: ".$e->getMessage();
        }
    }
}
