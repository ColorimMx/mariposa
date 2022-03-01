<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use config\Mba3;
use PDO;

class Mba3ProductoModeloCatalogo extends Model
{
    use HasFactory;

    public function get_modelos(){
        try {

            $database = new Mba3();
            $db = $database->openMba3();

            $sql = $db->prepare("SELECT `GROUP CODE` AS ID,DESCRIPTION AS NOMBRE, '1' AS ACTIVO"
                ." FROM INVT_Grupo_Subgrupo_Lista WHERE CORP = 'CIMSA' AND `SUB GROUP` = FALSE AND TYPE = 'MODEL'");

            $sql->execute();

            $modelos=$sql->fetchAll(PDO::FETCH_CLASS);

            return $modelos;

        }
        catch (PDOException $e)
        {
            echo "Hay algún problema en la conexión: ".$e->getMessage();
        }
    }
}
