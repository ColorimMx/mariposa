<?php

namespace App\Models;

use config\Mba3;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use PDO;

class Mba3TransferenciasPrincipal extends Model
{
    use HasFactory;

    protected $dateFormat = 'Y-m-d\TH:i:s.v';

    public function get_trasladoprincipal_all(){
        try {

            $database = new Mba3();
            $db = $database->openMba3();

            $sql = $db->prepare("SELECT Doc_Control_Numero as id, Hora_t as hora,DOC_ID_CORP AS trasnferencia_empresa_id, DATE_I AS fecha, "
                ."DOC_ID AS transferencia_id, `CURRENCY CODE` as moneda_id, WARE_CODE as bodega_id, WAR_CODE_DEST as destino_bodega_id "
                ."FROM INVT_Ajustes_Principal WHERE Tipo_OP_Trf = '2.0'AND TRANSFERS = TRUE AND ADJUSTMENT_TYPE = 'TE' AND CONFIRMED = TRUE AND MEMO = '' "
                ."AND VOID = FALSE AND CORP = 'CIMSA' ");

            $sql->execute();

            $cartaporte=$sql->fetchAll(PDO::FETCH_CLASS);

            return $cartaporte;

        }
        catch (PDOException $e)
        {
            echo "Hay algún problema en la conexión: ".$e->getMessage();
        }
    }

    public function get_trasladoprincipal($id){
        try {

            $database = new Mba3();
            $db = $database->openMba3();

            $sql = $db->prepare("SELECT Doc_Control_Numero as id, Hora_t as hora,DOC_ID_CORP AS trasnferencia_empresa_id, DATE_I AS fecha, "
                ."DOC_ID AS transferencia_id, `CURRENCY CODE` as moneda_id, WARE_CODE as bodega_id, WAR_CODE_DEST as destino_bodega_id "
                ."FROM INVT_Ajustes_Principal WHERE Tipo_OP_Trf = '2.0'AND TRANSFERS = TRUE AND ADJUSTMENT_TYPE = 'TE' AND CONFIRMED = TRUE "
                ."AND VOID = FALSE AND CORP = 'CIMSA' AND DOC_ID_CORP = '".$id."' ");

            $sql->execute();

            $cartaporte=$sql->fetchAll(PDO::FETCH_CLASS);

            return $cartaporte;

        }
        catch (PDOException $e)
        {
            echo "Hay algún problema en la conexión: ".$e->getMessage();
        }
    }

    public function update_traslado($id){
        try {

            $database = new Mba3();
            $db = $database->openMba3();

            $sql = $db->prepare("UPDATE INVT_Ajustes_Principal "
                ." SET MEMO = 'EXPORTADO' WHERE DOC_ID_CORP = '".$id."' ");

            $sql->execute();

            $cartaporte=$sql->fetchAll(PDO::FETCH_CLASS);

            return $cartaporte;

        }
        catch (PDOException $e)
        {
            echo "Hay algún problema en la conexión: ".$e->getMessage();
        }
    }
}
