<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use config\Mba3;
use PDO;

class Mba3ProductoGrupoCatalogo
{
    public function get_grupos(){
        try {

            $database = new Mba3();
            $db = $database->openMba3();

            $sql = $db->prepare("SELECT `GROUP CODE` AS ID,DESCRIPTION AS NOMBRE, '1' AS ACTIVO"
                ." FROM INVT_Grupo_Subgrupo_Lista WHERE CORP = 'CIMSA' AND `SUB GROUP` = FALSE AND TYPE = 'PRODU'");

            $sql->execute();

            $productos=$sql->fetchAll(PDO::FETCH_CLASS);

            return $productos;

        }
        catch (PDOException $e)
        {
            echo "Hay algún problema en la conexión: ".$e->getMessage();
        }
    }
}
