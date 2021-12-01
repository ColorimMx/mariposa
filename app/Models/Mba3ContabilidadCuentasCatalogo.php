<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use  config\Mba3;
use PDO;

class Mba3ContabilidadCuentasCatalogo
{
    public function get_cuentas(){
        try {

            $database = new Mba3();
            $db = $database->openMba3();

            $sql = $db->prepare("SELECT `ACCOUNT CODE` AS id,`ACCOUNT NAME` AS nombre, `ACCOUNT TYPE` AS cuenta_tipo_id,"
                ." CuentaDeAgrupacion AS cuenta_de_agrupacion, `SETUP TYPE` AS tipo_configuracion,"
                ." CodigoAgrupacionExterna AS agrupacion_id,CODIGO_DE_CLASIFICACION AS clasificacion_id, '1' AS activo"
                ." FROM CONT_PlanCuentas WHERE CORP = 'CIMSA'");

            $sql->execute();

            $cuentas=$sql->fetchAll(PDO::FETCH_CLASS);

            return $cuentas;

        }
        catch (PDOException $e)
        {
            echo "Hay algún problema en la conexión: ".$e->getMessage();
        }
    }
}
